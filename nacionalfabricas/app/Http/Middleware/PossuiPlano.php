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

        $plano = Assinatura::where('id_conta', Auth::id())->where('status', '!=' ,'failed')->first();


        if (!$plano){

            return redirect()->route('planos')->with('msg','Agora escolha um plano.');

        }

        return $next($request);
    }
}
