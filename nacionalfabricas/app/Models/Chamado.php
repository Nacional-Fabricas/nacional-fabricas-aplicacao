<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    protected $fillable = [

        'nome',
        'email',
        'id_conta',
        'status_chamado',
        'nome',
        'motivoChamado',
        'descricao'
    ];
}
