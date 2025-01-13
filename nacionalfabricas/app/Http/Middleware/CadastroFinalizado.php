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

        $user = Auth::user();

        if ($user ) {

            if($user -> current_team_id){

                $usuarioId = $user -> current_team_id;

            }else{

                $usuarioId = $user -> id;
            }

            $cadastro = Cadastro::where('id_conta', $usuarioId) -> first();

            if($cadastro){

                return redirect('/finalizar-cadastro')->with('msg','Vamos finalizar seu cadastro.');
            }

        }

        return $next($request);
    }
}
