<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisualizacoesController extends Controller
{
    public function visualizacoes (){

        return view ('pages.site.visualizacoes');
    }
}
