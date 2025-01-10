<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [

        'id_conta',
        'id_site',
        'nome',
        'slug',
        'nivel',
        'categoria_pai',
        'ativo',
        'descricao'
    ];

    protected $casts = [

        'items' => 'array'
    ];

    protected $dates = ['date'];

    protected $guarded = [];
}
