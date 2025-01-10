<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [

        'cadastro_id',
        'asaas_id',
        'nome',
        'email',
        'tipo_pessoa',
        'cpf_cnpj',
        'telefone',
        'celular',
        'cep',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado'
    ];
}
