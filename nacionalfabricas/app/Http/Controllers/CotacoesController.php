<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Assinatura;
use App\Models\Cotacao;
use App\Models\CotacaoProduto;
use App\Models\Cadastro;
use App\Models\Observacao;
use App\Models\Produto;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Auth;

class CotacoesController extends Controller
{
    public function carrinho(){
        $user = Auth::user();

        $itens = \Cart::getContent();

        $itensAgrupados = $itens->groupBy('attributes.id_receptor');

        $sites = Site::all();

        return view('pages.cotacao.gerar-cotacao', compact('itensAgrupados', 'user', 'sites'));
    }
    public function adicionaProdutoCotacao(Request $request){

        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => [
                'image' => $request->image,
                'sku' => $request->sku,
                'id_receptor' => $request->id_receptor,
                'id_produto' => $request->id,
                'ean' => $request->ean,
            ],
        ]);

        return redirect()->route('cotacoes')-> with('sucesso','Produto adicionado a cotação');
    }
    public function removeProdutoCotacao(Request $request){

        \Cart::remove($request -> id);

        return redirect()->route('busca_geral', ['tipo' => 'Produtos'])-> with('sucesso','Produto removido da cotação');
    }
    public function limpaCotacao(){

        \Cart::clear();

        return redirect()->route('busca_geral', ['tipo' => 'Fábricas'])-> with('msg','Sua lista de orçamentos está vazia');
    }

    public function create(Request $request, $id)
    {
        try {
            $user = Auth::user();
            $valorTotal = \Cart::getTotal();
            $itensCarrinho = \Cart::getContent();
            $assinatura = Assinatura::where('id_conta', $user->id)->where('status', 'ativo')->first();

            $userId = ($assinatura->nome_plano == "Membro") ? $user->current_team_id : $user->id;

            foreach ($itensCarrinho as $itemCarrinho) {
                $cotacao = Cotacao::where('id_receptor', $itemCarrinho->attributes->id_receptor)
                    ->where('status_remetente', 'Aguardando')
                    ->where('status_receptor', 'Nova Proposta')
                    ->first();

                if ($itemCarrinho->attributes->id_receptor == $id) {
                    if (!$cotacao) {
                        $cotacao = new Cotacao();
                        $cotacao->id_remetente = $userId;
                        $cotacao->id_receptor = $itemCarrinho->attributes->id_receptor;
                        $cotacao->status_remetente = 'Aguardando';
                        $cotacao->status_receptor = 'Nova Proposta';

                        try {

                            if ($itemCarrinho->attributes->id_receptor) {
                                $usuario = Cadastro::where('id_conta', $cotacao->id_receptor)->first();
                                if ($usuario && !empty($usuario->email_contato)) {
                                    $emailData = [
                                        'subject' => 'Cotação Criada',
                                        'body' => 'Uma nova cotação foi criada, venha conferir.',
                                        'recipient' => $usuario->email_contato,
                                    ];

                                    Mail::send([], [], function ($menssagem) use ($emailData) {
                                        $menssagem->subject($emailData['subject']);
                                        $menssagem->to($emailData['recipient']);
                                        $menssagem->text($emailData['body']);
                                    });
                                } else {
                                    \Log::warning("E-mail do receiver não encontrado ou está vazio. Receiver ID: {$cotacao->id_receptor}");
                                }
                            }

                            if ($userId) {
                                $usuario = Cadastro::where('id_conta', $cotacao->id_remetente)->first();
                                if ($usuario && !empty($usuario->email_contato)) {
                                    $emailData = [
                                        'subject' => 'Cotação Criada',
                                        'body' => 'Uma nova cotação foi criada, venha conferir.',
                                        'recipient' => $usuario->email_contato,
                                    ];

                                    Mail::send([], [], function ($menssagem) use ($emailData) {
                                        $menssagem->subject($emailData['subject']);
                                        $menssagem->to($emailData['recipient']);
                                        $menssagem->text($emailData['body']);
                                    });
                                } else {
                                    \Log::warning("E-mail do sender não encontrado ou está vazio. Sender ID: {$cotacao->id_remetente}");
                                }
                            }
                        } catch (\Exception $e) {
                            \Log::error("Erro ao enviar e-mail: " . $e->getMessage());
                            session()->flash('email_error', 'Não foi possível enviar o e-mail. Erro: ' . $e->getMessage());
                        }

                        $cotacao->save();
                    }

                    if ($request->observacao != null) {
                        $observacao = new Observacao();
                        $observacao->id_remetente = $userId;
                        $observacao->id_receptor = $itemCarrinho->attributes->id_receptor;
                        $observacao->cotacao_id = $cotacao->id;
                        $observacao->observacao = $request->observacao;
                        $observacao->status = 'Pedido Atualizado';
                        $observacao->save();
                    }

                    $cotacaoItem = new CotacaoProduto();
                    $cotacaoItem->cotacao_id = $cotacao->id;
                    $cotacaoItem->id_produto = $itemCarrinho->attributes->id_produto;
                    $cotacaoItem->save();

                    \Cart::remove($itemCarrinho->attributes->id_produto);
                }
            }

            return redirect()->route('minhas_compras')->with('sucesso', 'Orçamento solicitado, agora é só aguardar');

        } catch (\Exception $e) {
            \Log::error("Erro ao finalizar cotação: " . $e->getMessage());
            return redirect()->back()->with('erro', 'Ocorreu um erro ao gerar a cotação, por favor tente novamente.');
        }
    }

    public function cotacao($id){

        $user = \Illuminate\Support\Facades\Auth::user();

        $assinatura = Assinatura::where('id_conta', $user -> id ) -> where('status', 'Ativo') -> first();

        if($assinatura -> nome_plano == "Membro"){

            $userId = $user -> current_team_id;

        }else{

            $userId = $user -> id;
        }

        $cotacao =  Cotacao::findOrFail($id);

        if($cotacao -> id_receptor == $userId && $cotacao -> leitura_receptor == "naolido" ){

            $cotacao -> leitura_receptor = "lido";

        }elseif($cotacao -> id_remetente == $userId && $cotacao -> leitura_remetente == "naolido"){

            $cotacao -> leitura_remetente = "lido";

        }

        $cotacao -> save();

        $site = Site::where('id_conta', $cotacao -> id_receptor) -> first();

        if($userId == $cotacao -> id_receptor){

            $endereco = Cadastro::where('id_conta', $cotacao -> id_remetente ) -> first();

        }else{

            $endereco = Cadastro::where('id_conta', $cotacao -> id_receptor ) -> first();

        }

        $user = User::findOrFail($cotacao -> id_remetente);

        $usuarios = User::all();

        $produtosCotacao = CotacaoProduto::where('cotacao_id' , $cotacao -> id)->get();

        $produtos = Produto::all();

        $obsCotacoes = Observacao::where('cotacao_id' , $cotacao -> id)->get();

        $primeiraObs = Observacao::where('cotacao_id' , $cotacao -> id)->first();

        return view('pages.cotacao.cotacao', compact('cotacao','site', 'user', 'endereco', 'produtosCotacao', 'produtos', 'obsCotacoes', 'usuarios', 'userId', 'primeiraObs') );
    }

    public function cancelar(Request $request)
    {
        $cotacao = Cotacao::findOrFail($request->id);

        // Atualizando status da cotação
        $cotacao->status_receptor = 'Cancelado';
        $cotacao->status_remetente = 'Cancelado';
        $cotacao->leitura_receptor = 'naolido';
        $cotacao->leitura_remetente = 'naolido';

        // Enviando email para receiver
        if ($cotacao->id_receptor) {
            $this->enviarEmailCotacao(
                $cotacao->id_receptor,
                'Orcamento Cancelado',
                '
            <div style="width: 100%; display: flex; justify-content: center;"><br><img src="https://nacionalfabricas.com.br/images/logo.svg" width="350"></div>
            <div style="width: 100%; display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                <h1>Seu Orçamento foi atualizado</h1>
                <a href="https://nacionalfabricas.com.br/" style="text-decoration: none; color: #ffffff; background-color: #2ea853; padding: 10px 10px; border-radius: 2px; width: 20%; text-align: center; font-weight: 700;">Venha conferir</a>
            </div>
            '
            );
        }

        // Enviando email para sender
        if ($cotacao->id_remetente) {
            $this->enviarEmailCotacao(
                $cotacao->id_remetente,
                'Orcamento Cancelado',
                '
            <div style="width: 100%; display: flex; justify-content: center;">
                <img src="https://nacionalfabricas.com.br/images/logo.svg" width="350">
            </div>
            <div style="width: 100%; display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                <h1>Seu Orçamento foi atualizado</h1>
                <a href="https://nacionalfabricas.com.br/" style="text-decoration: none; color: #ffffff; background-color: #2ea853; padding: 10px 10px; border-radius: 2px; width: 20%; text-align: center; font-weight: 700;">Venha conferir</a>
            </div>
            '
            );
        }

        $cotacao->save();

        return redirect()->route('negociacao_cotacao', ['id' => $request->id ])->with('sucesso', 'Cancelamos seu orçamento com sucesso');
    }
    public function aprovar(Request $request)
    {
        $cotacao = Cotacao::findOrFail($request->cotacao_id);

        // Atualizando status da cotação
        $cotacao->status_receptor = 'Aprovado';
        $cotacao->status_remetente = 'Aprovado';
        $cotacao->leitura_receptor = 'naolido';
        $cotacao->leitura_remetente = 'naolido';

        // Enviando email para receiver
        if ($cotacao->id_receptor) {
            $this->enviarEmailCotacao(
                $cotacao->id_receptor,
                'Orcamento Aprovado',
                '
            <div style="width: 100%; display: flex; justify-content: center;"><br><img src="https://nacionalfabricas.com.br/images/logo.svg" width="350"></div>
            <div style="width: 100%; display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                <h1>Seu Orçamento foi Aprovado</h1>
                <a href="https://nacionalfabricas.com.br/" style="text-decoration: none; color: #ffffff; background-color: #2ea853; padding: 10px 10px; border-radius: 2px; width: 20%; text-align: center; font-weight: 700;">Venha conferir</a>
            </div>
            '
            );
        }

        // Enviando email para sender
        if ($cotacao->id_remetente) {
            $this->enviarEmailCotacao(
                $cotacao->id_remetente,
                'Orcamento Aprovado',
                '
            <div style="width: 100%; display: flex; justify-content: center;"><br><img src="https://nacionalfabricas.com.br/images/logo.svg" width="350"></div>
            <div style="width: 100%; display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                <h1>Seu Orçamento foi Aprovado</h1>
                <a href="https://nacionalfabricas.com.br/" style="text-decoration: none; color: #ffffff; background-color: #2ea853; padding: 10px 10px; border-radius: 2px; width: 20%; text-align: center; font-weight: 700;">Venha conferir</a>
            </div>
            '
            );
        }

        $cotacao->save();

        return redirect()->route('negociacao_cotacao', ['id' => $request->id ])->with('sucesso', 'Parabéns, seu orçamento foi aprovado com sucesso.');
    }

    public function finalizar(Request $request)
    {
        $cotacao = Cotacao::findOrFail($request->cotacao_id);

        // Atualizando status da cotação
        $cotacao->status_receptor = 'Finalizado';
        $cotacao->status_remetente = 'Finalizado';
        $cotacao->leitura_receptor = 'naolido';
        $cotacao->leitura_remetente = 'naolido';

        // Enviando email para receiver
        if ($cotacao->id_receptor) {
            $this->enviarEmailCotacao(
                $cotacao->id_receptor,
                'Orcamento Finalizado',
                '
            <div style="width: 100%; display: flex; justify-content: center;"><br><img src="https://nacionalfabricas.com.br/images/logo.svg" width="350"></div>
            <div style="width: 100%; display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                <h1>Seu Orçamento foi Finalizado</h1>
                <a href="https://nacionalfabricas.com.br/" style="text-decoration: none; color: #ffffff; background-color: #2ea853; padding: 10px 10px; border-radius: 2px; width: 20%; text-align: center; font-weight: 700;">Venha conferir</a>
            </div>
            '
            );
        }

        // Enviando email para sender
        if ($cotacao->id_remetente) {
            $this->enviarEmailCotacao(
                $cotacao->id_remetente,
                'Orcamento Finalizado',
                '
            <div style="width: 100%; display: flex; justify-content: center;"><br><img src="https://nacionalfabricas.com.br/images/logo.svg" width="350"></div>
            <div style="width: 100%; display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                <h1>Seu Orçamento foi Finalizado</h1>
                <a href="https://nacionalfabricas.com.br/" style="text-decoration: none; color: #ffffff; background-color: #2ea853; padding: 10px 10px; border-radius: 2px; width: 20%; text-align: center; font-weight: 700;">Venha conferir</a>
            </div>
            '
            );
        }

        $cotacao->save();

        return redirect()->route('negociacao_cotacao', ['id' => $request->id ])->with('sucesso', 'Parabéns, seu orçamento foi aprovado com sucesso.');
    }

    public function update(Request $request)
    {
        $user = \Illuminate\Support\Facades\Auth::user();

        $assinatura = Assinatura::where('id_conta', $user->id)
            ->where('status', 'Ativo')
            ->first();

        if ($assinatura->nome_plano == "Membro") {
            $userId = $user->current_team_id;
        } else {
            $userId = $user->id;
        }

        $data = $request->all();

        $cotacaoProdutoIds = $request->cotacao_id_produtos ?? [];
        $quantidades = $request->quantidade ?? [];
        $precos = $request->preco ?? [];
        $icms_sts = $request->icms_st ?? [];
        $icmss = $request->icms ?? [];
        $ipis = $request->ipi ?? [];
        $totais = $request->total ?? [];
        $total_imps = $request->total_imp ?? [];

        // Atualiza os produtos da cotação
        for ($i = 0; $i < count($cotacaoProdutoIds); $i++) {
            $cotacaoProduto = CotacaoProduto::findOrFail($cotacaoProdutoIds[$i]);

            $cotacaoProduto->quantidade = $quantidades[$i] ?? $cotacaoProduto->quantidade;
            $cotacaoProduto->preco = $precos[$i] ?? $cotacaoProduto->preco;
            $cotacaoProduto->total = $totais[$i] ?? $cotacaoProduto->total;
            $cotacaoProduto->icms_st = $icms_sts[$i] ?? $cotacaoProduto->icms_st;
            $cotacaoProduto->icms = $icmss[$i] ?? $cotacaoProduto->icms;
            $cotacaoProduto->ipi = $ipis[$i] ?? $cotacaoProduto->ipi;
            $cotacaoProduto->total_imp = $total_imps[$i] ?? $cotacaoProduto->total_imp;

            $cotacaoProduto->save();
        }

        $cotacao = Cotacao::findOrFail($request->id);

        // Define status de leitura e status da cotação
        $cotacao->status_receptor = $cotacao->id_remetente == $userId ? 'Atualizado' : 'Aguardando';
        $cotacao->status_remetente = $cotacao->id_remetente == $userId ? 'Aguardando' : 'Atualizado';
        $cotacao->leitura_receptor = $cotacao->id_remetente == $userId ? 'naolido' : 'lido';
        $cotacao->leitura_remetente = $cotacao->id_remetente == $userId ? 'lido' : 'naolido';

        $receiverId = $cotacao->id_remetente == $userId ? $cotacao->id_receptor : $cotacao->id_remetente;

        // Envia o e-mail
        $emailBody = '
        <div style="width: 100%; display: flex; justify-content: center;"><br><img src="https://nacionalfabricas.com.br/images/logo.svg" width="350"></div>
        <div style="width: 100%; display: flex; justify-content: center; flex-direction: column; align-items: center; ">
            <h1>Seu Orçamento foi Atualizado</h1>
            <a href="https://nacionalfabricas.com.br/" style="text-decoration: none; color: #ffffff; background-color: #2ea853; padding: 10px 10px; border-radius: 2px; width: 20%; text-align: center; font-weight: 700;">Venha conferir</a>
        </div>
    ';
        $this->enviarEmailCotacao($receiverId, 'Orcamento Atualizado', $emailBody);

        // Atualiza a cotação com os dados do request
        $cotacao->subtotal = array_sum($request->total_imp ?? []);
        $cotacao->forma_pagamento = $request->forma_pagamento;
        $cotacao->condicoes = $request->condicoes;
        $cotacao->prazo_entrega = $request->prazo_entrega;
        $cotacao->tipo_frete = $request->tipo_frete;
        $cotacao->valor_entrega = $request->valor_entrega;
        $cotacao->desconto = 0;
        $cotacao->valor = $cotacao->subtotal + $cotacao->valor_entrega - $cotacao->desconto;
        $cotacao->save();

        // Salva uma nova observação, se presente
        if ($request->novaObs != null) {
            $observacao = new Observacao();
            $observacao->id_remetente = $user->id;
            $observacao->id_receptor = $receiverId;
            $observacao->cotacao_id = $request->id;
            $observacao->observacao = $request->novaObs;
            $observacao->status = 'Pedido Atualizado';
            $observacao->save();
        }

        return redirect()->route('negociacao_cotacao', ['id' => $request->id ])->with('sucesso', 'Orçamento atualizado com sucesso');
    }
    private function enviarEmailCotacao($accountId, $subject, $body)
    {
        try {
            $usuario = Cadastro::where('id_conta', $accountId)->firstOrFail();
            $usuarioEmail = $usuario->email_contato;

            $emailData = [
                'subject' => $subject,
                'body' => $body,
                'recipient' => $usuarioEmail,
            ];

            Mail::send([], $emailData, function ($menssagem) use ($emailData) {
                $menssagem->subject($emailData['subject']);
                $menssagem->to($emailData['recipient']);
                $menssagem->html($emailData['body']);
            });
        } catch (Swift_SwiftException $e) {
            // Tratamento de erros de envio de email
            return 'Não foi possível enviar o email. Por favor, verifique o endereço de email e tente novamente mais tarde.';
        } catch (\Exception $e) {
            // Tratamento de erros gerais
            return 'Ocorreu um erro ao enviar o email. Por favor, tente novamente mais tarde.';
        }
    }

    public function createMensagem (Request $request){

        $user = \Illuminate\Support\Facades\Auth::user();

        $mensagem = new Mensagen();

        $mensagem -> id_conta = $user -> id;
        $mensagem -> id_remetente = $request -> id_remetente;
        $mensagem -> id_receptor = $request -> id_receptor;
        $mensagem -> cotacao_id = $request -> cotacao_id;
        $mensagem -> texto =  $request -> texto;
        $mensagem -> read =  $user -> id;

        $mensagem -> save();

        return redirect()->route('lista_orcamentos')-> with('sucesso','Mensagem enviada');
    }

}
