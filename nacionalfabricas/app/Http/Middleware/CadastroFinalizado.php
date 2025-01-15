<?php

namespace App\Http\Middleware;

use App\Models\Cadastro;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class CadastroFinalizado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Obtém o usuário autenticado
        $usuario = Auth::user();

        if ($usuario ) {

            // Determina o ID da conta: time atual ou próprio ID do usuário, ou null se o usuário não estiver autenticado
            $usuarioId = $usuario ? ($usuario->current_team_id ?? $usuario->id) : null;

            $cadastro = Cadastro::where('id_conta', $usuarioId) -> first();

            if(!$cadastro){

                return redirect('/finalizar-cadastro')->with('msg','Vamos finalizar seu cadastro.');
            }

        }

        return $next($request);
    }
}
