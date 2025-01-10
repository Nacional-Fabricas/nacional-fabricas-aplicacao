<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class CotacaoProduto extends Model
{
    use HasFactory;

    protected $fillable = [

        'cotacao_id',
        'id_produto',
        'preco',
        'quantidade',
        'icms_st',
        'icms',
        'ipi',
        'total',
        'total_imp',
    ];

    public function cotacaoProduto(){

        return $this->belongsTo('App\Models\Cotacao', 'id_produto', 'id');
    }

}
