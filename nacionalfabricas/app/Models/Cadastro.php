<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_conta',
        'estado',
        'cidade',
        'cep',
        'bairro',
        'endereco',
        'num',
        'cnpj',
        'nome_empresa',
        'fabricante',
        'registro_estadual',
        'isento_re',
        'complemento',
        'email_contato',
        'nome_contato',
        'celular_contato',
        'telefone_contato',
        'ativo',
    ];

}
