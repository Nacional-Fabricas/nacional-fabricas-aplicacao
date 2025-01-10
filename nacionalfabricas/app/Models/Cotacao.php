<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotacao extends Model
{
    use HasFactory;

    protected $fillable = [

        'id_remetente',
        'id_receptor',
        'status_remetente',
        'status_receptor'
    ];

    public function cotacao_produtos(){

        return $this -> hasMany('App\Models\CotacaoProduto')
            ->select(\DB::raw('id_produto, count(1) as qnt'

            ))
            ->groupBy('id_produto')
            ->orderBy('id_produto', 'desc');

    }
}
