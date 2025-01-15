<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Assinatura;
use App\Models\Cadastro;
use App\Models\Cnae;
use App\Models\CnaeLista;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CadastrosController extends Controller
{
    public function finalizarCadastro(){

        $usuario = Auth::user();

        $usuarioId = $usuario -> current_team_id ?? $usuario -> id;

        $cadastro = Cadastro::where('id_conta', $usuarioId)->first();

        if($cadastro){

            return redirect()->route('home')->with('msg', 'Seja Bem Vindo');

        }else{

            $listaCnaes = CnaeLista::all();

            return view ('pages.cadastro.finalizar-cadastro', compact('usuario', 'cadastro', 'listaCnaes'));

        }
    }
    public function create(Request $request)
    {

        try {

            $user = Auth::user();

            $cnaeIds = $request->cnaeId;

            if ($cnaeIds) {
                foreach ($cnaeIds as $cnaeId) {
                    $cnae = new Cnae();
                    $cnae->id_conta = auth()->id();
                    $cnae->descricao = $cnaeId;
                    $cnae->save();
                }
            }

            $endereco = str_replace(" ", "+", $request->cidade) . '+' . $request->estado . '+' . $request->cep;
            $apiKey = config('services.google_maps.key');

            $response = Http::get("https://maps.googleapis.com/maps/api/geocode/json", [
                'cadastro' => $endereco,
                'key' => $apiKey,
            ]);

            $data = $response->json();
            $cadastro = new Cadastro();

            if (isset($data['results']) && !empty($data['results'])) {
                $location = $data['results'][0]['geometry']['location'];
                $cadastro->latitude = $location['lat'];
                $cadastro->longitude = $location['lng'];
            }

            $cadastro = new Cadastro();
            $cadastro -> id_conta = $user->id;
            $cadastro -> estado = $request->estado;
            $cadastro -> cidade = $request->cidade;
            $cadastro -> cep = $request->cep;
            $cadastro -> bairro = $request->bairro;
            $cadastro -> endereco = $request->endereco;
            $cadastro -> num = $request->numero;
            $cadastro -> cnpj = $request->cnpj;
            $cadastro -> nome_empresa = $request->nomeEmpresa;
            $cadastro -> fabricante = $request->fabricante;
            $cadastro -> registro_estadual = $request->registro_estadual;
            $cadastro -> isento_re = $request->isento_re;
            $cadastro -> complemento = $request->complemento;
            $cadastro -> email_contato = $user->email;
            $cadastro -> nome_contato = $request->nome_contato;
            $cadastro -> celular_contato = $request->celular_contato;
            $cadastro -> telefone_contato = $request->telefone_contato;
            $cadastro -> ativo = 'ativo';

            $cadastro->save();

            //dd($cadastro);

            return redirect()->route('home')->with('sucesso', 'Cadastro finalizado com sucesso');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao finalizar o cadastro: ' . $e->getMessage());
        }
    }
    public function dadosCadastrais (){

        $usuario = Auth::user();

        $usuarioId = $usuario -> current_team_id ?? $usuario -> id;

        $cnaes = Cnae::where('id_conta', $usuarioId)->get();

        $listaCnaes = CnaeLista::all();

        $dado = Cadastro::where('id_conta', $usuarioId)->first();

        return view ('pages.cadastro.dados-cadastrais', compact("dado", "listaCnaes", "cnaes"));
    }
    public function update(Request $request)
    {
        try {

            $usuario = Auth::user();

            $usuarioId = $usuario -> current_team_id ?? $usuario -> id;

            $cnaeIds = $request->cnaeId;
            if ($cnaeIds) {
                foreach ($cnaeIds as $cnaeId) {
                    $cnae = new Cnae();
                    $cnae->id_conta = $usuarioId;
                    $cnae->descricao = $cnaeId;
                    $cnae->save();
                }
            }

            $cadastro = str_replace(" ", "+", $request->cidade) . '+' . $request->estado . '+' . $request->cep;
            $apiKey = config('services.google_maps.key');

            $response = Http::get("https://maps.googleapis.com/maps/api/geocode/json", [
                'cadastro' => $cadastro,
                'key' => $apiKey,
            ]);

            if ($response->successful()) {
                $data = $response->json();

                if (isset($data['results']) && !empty($data['results'])) {
                    $location = $data['results'][0]['geometry']['location'];
                    $cadastro = Cadastro::where('id_conta', $usuarioId)->firstOrFail();

                    $cadastro->fill([
                        'latitude' => $location['lat'],
                        'longitude' => $location['lng'],
                        'id_conta' => $usuarioId,
                        'estado' => $request->estado,
                        'cidade' => $request->cidade,
                        'cep' => $request->cep,
                        'bairro' => $request->bairro,
                        'endereco' => $request->endereco,
                        'num' => $request->numero,
                        'cnpj' => $request->cnpj,
                        'nome_empresa' => $request->nomeEmpresa,
                        'fabricante' => $request->fabricante,
                        'registro_estadual' => $request->registro_estadual,
                        'isento_re' => $request->isento_re,
                        'complemento' => $request->complemento,
                        'email_contato' => $request->email_contato,
                        'nome_contato' => $request->nome_contato,
                        'celular_contato' => $request->celular_contato,
                        'telefone_contato' => $request->telefone_contato,
                        'ativo' => 'ativo',
                    ]);

                    $cadastro->save();
                }
            }


            return redirect()->route('dados_cadastrais')->with('sucesso', 'Cadastro atualizado com sucesso');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao atualizar o cadastro: ' . $e->getMessage());
        }
    }
    public function deleteCnae(Request $request){

        $usuario = Auth::user();

        $usuarioId = $usuario -> current_team_id ?? $usuario -> id;

        $cnae = Cnae::where('id_conta', $usuarioId) -> where('id', $request -> id) -> firstOrFail() -> delete();

        return redirect()->route('dados_cadastrais')->with('sucesso','Cnae removido com sucesso');

    }

}
