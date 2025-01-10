<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AreaVendasController extends Controller
{
    public function listarCotacoes(){

        return view ('pages.areaVendas.listar-orcamentos');
    }

}
