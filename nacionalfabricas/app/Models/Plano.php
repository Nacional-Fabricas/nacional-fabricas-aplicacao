<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    protected $fillable = [

        'nome',
        'slug',
        'trial',
        'recorrencia',
        'max_usuarios',
        'max_produtos',
        'id_preco',
        'preco',
        'descricao',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
