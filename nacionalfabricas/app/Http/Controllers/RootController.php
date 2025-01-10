<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\URL;

class RootController extends Controller
{
    public function root (Request $request ){

        $pagina = $request -> pagina;

        return view ('root.dados', compact('pagina'));
    }

}
