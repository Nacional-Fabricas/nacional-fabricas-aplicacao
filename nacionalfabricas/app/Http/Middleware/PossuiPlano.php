<?php

namespace App\Http\Middleware;

use App\Models\Subscription;
use App\Models\Assinatura;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use App\Http\Controllers\StripeWebhookController;


class PossuiPlano
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Obtém o usuário autenticado
        $usuario = \Illuminate\Support\Facades\Auth::user();

        // Determina o ID da conta: time atual ou próprio ID do usuário, ou null se o usuário não estiver autenticado
        $usuarioId = $usuario ? ($usuario->current_team_id ?? $usuario->id) : null;

        $plano = Assinatura::where('id_conta', $usuarioId )->first();

        if (!$plano){

            return redirect()->route('planos')->with('msg','Agora escolha um plano.');
        }

        return $next($request);
    }
}
