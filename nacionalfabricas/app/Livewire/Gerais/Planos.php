<?php

namespace App\Livewire\Gerais;

use App\Models\Assinatura;
use App\Models\Cadastro;
use App\Models\Customer;
use App\Models\Plano;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Stripe\StripeClient;

class Planos extends Component
{
    public $periodo;

    public function mount()
    {
        $this->periodo = false; // Inicialmente desmarcado
    }

    public function render()
    {
        $user = Auth::user();

        if($this -> periodo == false){

            $periodo = "YEARLY";
        }else{

            $periodo = "MONTHLY";
        }

        $planos = Plano::where('recorrencia', $periodo)->get();

        $periodo = $this->periodo;

        $dadosPlano = null;
        $cliente = null;

        if ($user) {

            if($user -> current_team_id){

                $usuarioId = $user -> current_team_id;

            }else{

                $usuarioId = $user -> id;
            }

            $cadastro = Cadastro::where('id_conta', $usuarioId)->first();

            $cliente = Customer::where('cadastro_id', $cadastro -> id)->first();

            if (!$cliente) {

                $apiKey = '$aact_MzkwODA2MWY2OGM3MWRlMDU2NWM3MzJlNzZmNGZhZGY6OjI1YjBmM2RmLTEwZmItNGZiOC05NmE0LTZlZWZiM2FhNzJmNjo6JGFhY2hfYmM4ZGNjOWYtNThlYy00YjE0LWFlM2UtMjhhMWJiODVkYmY2';
                $apiUrl = 'https://sandbox.asaas.com/api/v3';

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


                } catch (\Exception $e) {
                    // Log do erro
                    Log::error('Erro ao processar o pagamento: ' . $e->getMessage());
                }

            } else {

                $cliente = $cliente;
            }

            dd($cliente);

            $assinatura = Assinatura::where('id_plano', $cliente -> plano)->first();

            if($assinatura){

                $dadosPlano = Plano::where('price_id', $assinatura->id_plano)->first();

            }
        }

        return view('livewire.gerais.planos', compact('planos', 'dadosPlano', 'periodo', 'cliente'));
    }
}
