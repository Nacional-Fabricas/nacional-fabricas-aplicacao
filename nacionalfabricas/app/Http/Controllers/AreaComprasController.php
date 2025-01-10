<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Assinatura;
use App\Models\Cotacao;
use Illuminate\Http\Request;
use Auth;

class AreaComprasController extends Controller
{
    public function minhasCompras()
    {
        $user = Auth::user();

        $assinatura = Assinatura::where('id_conta', $user->id)->where('status', 'ativo')->first();

        if ($assinatura->nome_plano == "Membro") {
            $userId = $user->current_team_id;
        } else {
            $userId = $user->id;
        }

        $cotacoes = Cotacao::selectRaw('id_receptor, MAX(id) as id, MAX(id_remetente) as id_remetente')
            ->where('id_remetente', $userId)
            ->groupBy('id_receptor')
            ->get();

        return view('pages.areaCompras.minhas-compras', compact('cotacoes'));
    }

}
