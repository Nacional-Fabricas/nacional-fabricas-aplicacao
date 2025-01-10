<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Assinatura;
use App\Models\Cadastro;
use App\Models\Plano;
use App\Models\Fatura;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\StripeClient;
use Stripe\Webhook;
use Stripe\Stripe;

class AssinaturaControllerOld extends Controller
{
    public function planos()
    {

        return view('pages.gerais.planos');
    }

    public function create($customerId, $priceId)
    {
        $usuario = Auth::user();

        $stripe = new StripeClient(env('STRIPE_SECRET'));

        $chavePublica = env('STRIPE_KEY');

        $customer_id = $customerId;
        $price_id = $priceId;

        $plano = Plano::where('id_preco', $priceId)->first();

        // Criar assinatura no Stripe
        $subscription = $stripe->subscriptions->create([
            'customer' => $customer_id,
            'items' => [[
                'price' => $price_id,
            ]],
            'payment_behavior' => 'default_incomplete',
            'payment_settings' => ['save_default_payment_method' => 'on_subscription'],
            'expand' => ['latest_invoice.payment_intent'],
        ]);

        // ID do PaymentIntent para checkout
        $paymentId = $subscription->latest_invoice->payment_intent->id;

        // Localizar o cliente no banco
        $customer = Customer::where('stripe_customer_id', $customer_id)->first();

        // Verificar e criar a assinatura localmente
        $assinatura = Assinatura::where('customer_id', $customer->id)->first();

        if (!$assinatura) {

            $assinatura = Assinatura::create([
                'customer_id' => $customer->id,
                'id_conta' => $usuario -> id,
                'id_plano' => $plano -> id,
                'stripe_subscription_id' => $subscription->id,
                'price_id' => $price_id,
                'status' => $subscription->status,
                'current_period_start' => date('Y-m-d', $subscription->current_period_start),
                'current_period_end' => date('Y-m-d', $subscription->current_period_end),
            ]);
        }

        // Criar a fatura localmente
        $fatura = Fatura::create([
            'customer_id' => $customer->id,
            'subscription_id' => $assinatura->id,
            'stripe_invoice_id' => $subscription->latest_invoice->id,
            'payment_intent_id' => $subscription->latest_invoice->payment_intent->id,
            'status' => $subscription->latest_invoice->status ?? 'Pendente', // Usar o status do Stripe ou padrão 'Pendente'
            'amount_due' => $subscription->latest_invoice->amount_due / 100, // Valor em moeda local
            'amount_paid' => $subscription->latest_invoice->amount_paid / 100, // Valor pago
            'due_date' => $subscription->latest_invoice->due_date
                ? Carbon::createFromTimestamp($subscription->latest_invoice->due_date)
                : null,
            'payment_method_type' => $subscription->latest_invoice->payment_method_types[0] ?? null,
            'next_payment_attempt' => $subscription->latest_invoice->next_payment_attempt
                ? Carbon::createFromTimestamp($subscription->latest_invoice->next_payment_attempt)
                : null,
        ]);

        // Client Secret para o front-end
        $chaveSecreta = $subscription->latest_invoice->payment_intent->client_secret;

        return view('pages.assinaturas.checkout', compact('subscription', 'chavePublica', 'chaveSecreta', 'paymentId'));
    }
    public function finalizaPagamento(Request $request)
    {
        $chaveSecreta = $request->query('payment_intent_client_secret');

        $stripe = new StripeClient(env('STRIPE_SECRET'));

        // Use o método `retrieve` no `PaymentIntent ID`, não no `client_secret`.
        $paymentIntentId = explode('_secret_', $chaveSecreta)[0]; // Extrai o ID antes de '_secret_' no `client_secret`

        $paymentIntent = $stripe->paymentIntents->retrieve($paymentIntentId); // Aqui usamos o ID corretamente

        $status = $paymentIntent->status;

        if ($status === 'succeeded') {
            $status = 'sucesso';
        } else if ($status === 'requires_payment_method') {
            $status = 'falhou';
        } else {
            $status = 'processando';
        }

        return view('pages.assinaturas.sucesso', compact('status'));
    }

    public function meuPlano()
    {

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Por favor, faça login para ver seu histórico de pagamentos.');
        }

        // Buscar informações do cliente
        $customer = Customer::where('id_usuario', $user->id)->first();

        if (!$customer) {
            return redirect()->route('planos')->with('error', 'Nenhuma assinatura encontrada.');
        }

        // Inicializar o Stripe
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            // Listar faturas no Stripe associadas ao cliente
            $stripeInvoices = \Stripe\Invoice::all(['customer' => $customer->stripe_customer_id]);

            // Atualizar ou criar faturas no banco de dados local
            foreach ($stripeInvoices->data as $invoice) {
                Fatura::updateOrCreate(
                    ['stripe_invoice_id' => $invoice->id],
                    [
                        'subscription_id' => $customer->id,
                        'payment_intent_id' => $invoice->payment_intent,
                        'status' => $invoice->status,
                        'amount_due' => $invoice->amount_due / 100, // Stripe usa centavos
                        'amount_paid' => $invoice->amount_paid / 100,
                        'due_date' => $invoice->due_date ? Carbon::createFromTimestamp($invoice->due_date) : null,
                        'payment_method_type' => $invoice->payment_method_types[0] ?? null,
                    ]
                );
            }

            // Buscar faturas do banco de dados
            $faturas = Fatura::where('subscription_id', $customer->id)
                ->orderBy('created_at', 'desc')
                ->get();

            return view('pages.planos.meuPlano', compact('faturas'));

        } catch (\Exception $e) {
            return redirect()->route('planos')->with('error', 'Erro ao buscar faturas: ' . $e->getMessage());
        }
    }
    public function webhook(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $webhookSecret = env('STRIPE_WEBHOOK_SECRET');
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');

        try {
            $event = \Stripe\Webhook::constructEvent($payload, $sigHeader, $webhookSecret);
        } catch (\UnexpectedValueException $e) {
            \Log::error('Invalid payload received in webhook');
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            \Log::error('Invalid signature received in webhook');
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        \Log::info('Stripe Webhook Received: ', ['type' => $event->type]);

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        if ($event->type === 'invoice.created') {
            $invoice = $event->data->object;

            // Busca assinatura vinculada
            $assinatura = Assinatura::where('stripe_subscription_id', $invoice->subscription)->first();

            if ($assinatura) {
                // Cria uma nova fatura no banco
                Fatura::create([
                    'subscription_id' => $assinatura->id,
                    'stripe_invoice_id' => $invoice->id,
                    'payment_intent_id' => $invoice->payment_intent ?? null,
                    'status' => $invoice->status, // Ex.: 'draft', 'open'
                    'amount_due' => $invoice->amount_due / 100, // Stripe usa centavos
                    'amount_paid' => $invoice->amount_paid / 100,
                    'due_date' => isset($invoice->due_date) ? \Carbon\Carbon::createFromTimestamp($invoice->due_date) : null,
                    'payment_method_type' => null,
                    'next_payment_attempt' => isset($invoice->next_payment_attempt) ? \Carbon\Carbon::createFromTimestamp($invoice->next_payment_attempt) : null,
                ]);
            }
        }

        if ($event->type === 'invoice.payment_succeeded') {
            $invoice = $event->data->object;
            $paymentIntentId = $invoice->payment_intent;

            $paymentIntent = $stripe->paymentIntents->retrieve($paymentIntentId);

            $paymentMethodType = $paymentIntent->payment_method_details->type ?? 'unknown';

            // Atualiza fatura existente
            $invoiceDb = Fatura::where('stripe_invoice_id', $invoice->id)->first();
            if ($invoiceDb) {
                $invoiceDb->update([
                    'payment_method_type' => $paymentMethodType,
                    'status' => 'Pago',
                    'amount_paid' => $invoice->amount_paid / 100,
                    'paid_at' => now(), // Data do pagamento
                ]);
            }
        }

        if ($event->type === 'invoice.payment_failed') {
            $invoice = $event->data->object;

            // Atualiza status de fatura para "Falhou"
            $invoiceDb = Fatura::where('stripe_invoice_id', $invoice->id)->first();
            if ($invoiceDb) {
                $invoiceDb->update([
                    'status' => 'Falhou',
                ]);
            }
        }

        return response()->json(['status' => 'success'], 200);
    }

}
