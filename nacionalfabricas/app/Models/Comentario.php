<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillables = [

        'comentario',
        'id_remetente',
        'id_conta',
        'id_produto'
    ];
}
