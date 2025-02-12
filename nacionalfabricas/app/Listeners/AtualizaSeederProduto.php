<?php

namespace App\Listeners;

use App\Events\ProdutoCriado;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AtualizaSeederProduto
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProdutoCriado $event): void
    {
        //
    }
}
