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

        return view('pages.assinaturas.planos');
    }

    public function checkout($planoId)
    {

        $plano = Plano::where('id', $planoId)->first();

        $apiKey = '$aact_MzkwODA2MWY2OGM3MWRlMDU2NWM3MzJlNzZmNGZhZGY6OjI1YjBmM2RmLTEwZmItNGZiOC05NmE0LTZlZWZiM2FhNzJmNjo6JGFhY2hfYmM4ZGNjOWYtNThlYy00YjE0LWFlM2UtMjhhMWJiODVkYmY2';
        $apiUrl = 'https://sandbox.asaas.com/api/v3';

        $user = Auth::user();

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $cadastro = Cadastro::where('id_conta', $usuarioId)->first();

        //dd($cadastro);

        try {

            $response = Http::withHeaders([
                'access_token' => $apiKey
            ])->post($apiUrl . '/customers', [
                'name' => $cadastro -> nome_empresa,
                'email' => $cadastro -> email,
                'cpfCnpj' => '50347150829',
                'postalCode' => $cadastro -> cep,
                'address' => $cadastro -> endereco,
                'addressNumber' => $cadastro -> num,
                'phone' => $cadastro -> telefone_contato,
                "mobilePhone" => $cadastro ->celular_contato,
            ]);

            $customer = $response->json();

            $cliente = New Customer();
            $cliente -> cadastro_id = $cadastro -> id;
            $cliente -> asaas_id = $customer -> id;
            $cliente -> nome = $customer -> name;
            $cliente -> email = $customer -> email;
            $cliente -> tipo_pessoa = $customer -> personType;
            $cliente -> cpf_cnpj = $customer -> cpfCnpj;
            $cliente -> telefone = $customer -> phone;
            $cliente -> celular = $customer -> mobilePhone;
            $cliente -> cep = $customer -> postalCode;
            $cliente -> endereco = $customer -> address;
            $cliente -> numero = $customer -> addressNumber;
            $cliente -> complemento = $customer -> complement;
            $cliente -> bairro = $customer -> province;
            $cliente -> cidade = $customer -> cityName;
            $cliente -> estado = $customer -> state;
            $cliente -> pais = $customer -> country;
            $cliente -> save();

            return view('pages.assinaturas.checkout', compact('plano', 'customer'));


        } catch (\Exception $e) {
            // Log do erro
            //\Log::error('Erro ao processar o pagamento: ' . $e->getMessage());

            return back()->withErrors(['message' => 'Erro ao processar o pagamento: ' . $e->getMessage()]);
        }

        //dd($customer);
    }

    public function processarCheckout(Request $request, $planoId)
    {

        $user = Auth::user() ;

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $plano = $planoId;

        $apiKey = '$aact_MzkwODA2MWY2OGM3MWRlMDU2NWM3MzJlNzZmNGZhZGY6OjI1YjBmM2RmLTEwZmItNGZiOC05NmE0LTZlZWZiM2FhNzJmNjo6JGFhY2hfYmM4ZGNjOWYtNThlYy00YjE0LWFlM2UtMjhhMWJiODVkYmY2';
        $apiUrl = 'https://sandbox.asaas.com/api/v3/subscriptions';

        //dd(now()->addYears(1)->toDateString());

        // Prepara os dados do payload
        $payload = [
            'customer' => $request->customer_id,
            'billingType' => $request -> billingType,
            'nextDueDate' => now()->addDays(7)->toDateString(),
            'value' => $plano -> valor,
            'cycle' => 'MONTHLY',
            'description' => $plano['descricao'],
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

            // Salva a assinatura se bem-sucedido
            if ($response->getStatusCode() === 200) {
                Assinatura::create([
                    'id_conta' => $usuarioId,
                    'id_plano' => $plano -> id,
                    'asaas_id' => $responseBody['id'],
                    'customer_id' => $request->customer_id,
                    'billingType' => 'CREDIT_CARD',
                    'valor' => $plano -> valor,
                    'status' => 'Ativo',
                    'nextDueDate' => now()->toDateString(),
                    'inicio' => now()->toDateString(),
                    'fim' => now()->addYears(1)->toDateString(),
                    'recorrencia' => $plano -> recorrencia
                ]);

                return redirect()->route('sucesso');
            }

        } catch (\Exception $e) {
            // Log do erro
            \Log::error('Erro ao processar o pagamento: ' . $e->getMessage());

            return back()->withErrors(['message' => 'Erro ao processar o pagamento: ' . $e->getMessage()]);
        }
    }

    public function sucesso()
    {
        return view('planos.sucesso');
    }

    private function buscarPlano($id)
    {
        $planos = [
            1 => ['id' => 1, 'nome' => 'Plano Básico', 'valor' => 200.00, 'descricao' => 'Plano com funcionalidades básicas'],
            2 => ['id' => 2, 'nome' => 'Plano Avançado', 'valor' => 300.00, 'descricao' => 'Plano com funcionalidades avançadas'],
        ];

        return $planos[$id] ?? abort(404);
    }

}
