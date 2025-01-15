<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Assinatura;
use App\Models\Cadastro;
use App\Models\Plano;
use App\Models\Fatura;
use App\Models\Customer;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Stripe\StripeClient;
use Stripe\Webhook;
use Stripe\Stripe;
use Illuminate\Support\Facades\Http;

class AssinaturaController extends Controller
{
    public function planos()
    {

        $usuario = Auth::user();

        // Determina o ID da conta: time atual ou próprio ID do usuário, ou null se o usuário não estiver autenticado
        $usuarioId = $usuario ? ($usuario->current_team_id ?? $usuario->id) : null;

        $cadastro = Cadastro::where('id_conta', $usuarioId)->first();

        if (!$cadastro) {

            return redirect()->route('finalizar_cadastro')->with('msg','Vamos finalizar seu cadastro !');
        }

        return view('pages.assinaturas.planos');
    }

    public function checkout($planoId, $customerId, $cadastroId)
    {

        $plano = Plano::where('id', $planoId)->first();

        $cliente = Customer::where('asaas_id', $customerId)->first();

        $cadastro = Cadastro::where('id', $cadastroId)->first();

        return view('pages.assinaturas.checkout', compact('plano', 'cliente', 'cadastro'));
    }

    public function processarCheckout(Request $request, $planoId)
    {

        // Obtém o usuário autenticado
        $usuario = Auth::user();

        // Determina o ID da conta: time atual ou próprio ID do usuário, ou null se o usuário não estiver autenticado
        $usuarioId = $usuario ? ($usuario->current_team_id ?? $usuario->id) : null;

        $cliente = Customer::where('id', $request -> customer_id)->first();

        $plano =  Plano::where('id', $planoId)->first();

        $apiKey = '$aact_MzkwODA2MWY2OGM3MWRlMDU2NWM3MzJlNzZmNGZhZGY6OjI1YjBmM2RmLTEwZmItNGZiOC05NmE0LTZlZWZiM2FhNzJmNjo6JGFhY2hfYmM4ZGNjOWYtNThlYy00YjE0LWFlM2UtMjhhMWJiODVkYmY2';
        $apiUrl = 'https://sandbox.asaas.com/api/v3/subscriptions';

        //dd(now()->addYears(1)->toDateString());

        // Prepara os dados do payload
        $payload = [
            'customer' => $cliente -> asaas_id,
            'billingType' => $request -> billingType,
            'nextDueDate' => now()->addDays(7)->toDateString(),
            'value' => $plano -> valor,
            'cycle' => 'MONTHLY',
            'description' => $plano -> descricao,
            'creditCard' => $request->creditCard,
            'creditCardHolderInfo' => $request->creditCardHolderInfo,
        ];

        try {

            // Instancia o cliente Guzzle
            $client = new Client();

            // Faz a requisição
            $response = $client->request('POST', $apiUrl, [
                'headers' => [
                    'accept' => 'application/json',
                    'access_token' => $apiKey,
                    'content-type' => 'application/json',
                ],
                'body' => json_encode($payload),
            ]);

            // Decodifica a resposta
            $responseBody = json_decode($response->getBody(), true);

            //dd($cliente -> asaas_id);

            // Salva a assinatura se bem-sucedido
            if ($response->getStatusCode() === 200) {

                $assinatura = new Assinatura();
                $assinatura -> id_conta = $usuarioId;
                $assinatura -> id_plano = $plano -> id;
                $assinatura -> asaas_id = $cliente -> asaas_id;
                $assinatura -> customer_id = $cliente -> id;
                $assinatura -> tipo_cobranca = 'CREDIT_CARD';
                $assinatura -> valor = $plano -> valor;
                //$assinatura -> status = 'Ativo';
                $assinatura -> ciclo = $plano -> recorrencia;
                $assinatura -> vencimento_primeira_cobranca = now()->toDateString();
                $assinatura -> inicio = now()->toDateString();
                $assinatura -> fim = now()->addYears(1)->toDateString();
                //$assinatura -> recorrencia = $plano -> recorrencia;
                $assinatura -> save();

                return redirect()->route('sucesso');
            }

        } catch (\Exception $e) {
            // Log do erro
            \Log::error('Erro ao processar o pagamento: ' . $e->getMessage());

            return back()->withErrors(['message' => 'Erro ao processar o pagamento: ' . $e->getMessage()]);
        }
    }

    public function sucesso(Request $request)
    {

        return view('pages.assinaturas.sucesso');
    }

    public function meuPlano(Request $request){

        // Obtém o usuário autenticado
        $usuario = Auth::user();

        // Determina o ID da conta: time atual ou próprio ID do usuário, ou null se o usuário não estiver autenticado
        $usuarioId = $usuario ? ($usuario->current_team_id ?? $usuario->id) : null;

        $assinatura = Assinatura::where('id_conta', $usuarioId)->first();

        $meuPlano = Plano::where('id', $assinatura -> id_plano)->first();

        $customerId = Customer::where('cadastro_id', $usuarioId)->first()->asaas_id;

        $apiKey = '$aact_MzkwODA2MWY2OGM3MWRlMDU2NWM3MzJlNzZmNGZhZGY6OjI1YjBmM2RmLTEwZmItNGZiOC05NmE0LTZlZWZiM2FhNzJmNjo6JGFhY2hfYmM4ZGNjOWYtNThlYy00YjE0LWFlM2UtMjhhMWJiODVkYmY2';

        $response = Http::withHeaders([
            'access_token' => $apiKey,
        ])->get('https://sandbox.asaas.com/api/v3/payments', [
            'customer' => $customerId,
        ]);

        if ($response->successful()) {

            $pagamentos = $response->json()['data'];

        } else {
            Log::error('Erro ao recuperar os pagamentos', $response->json());
            return null;
        }

        //dd($pagamentos);

        return view('pages.assinaturas.meu-plano', compact('pagamentos', 'meuPlano', 'assinatura'));

    }

}
