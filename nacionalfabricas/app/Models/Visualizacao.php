<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visualizacao extends Model
{
    use HasFactory;


    protected $fillable = [

    'visualizacoes',
    'id_conta',
    'id_produto'

    ];
}
