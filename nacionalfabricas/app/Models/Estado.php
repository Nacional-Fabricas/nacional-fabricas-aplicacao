<?php

namespace App\Models;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    use WithoutModelEvents;


    protected $fillable = [

        'sigla',
        'nome',
        'regiao',
    ];

    protected $casts = [

        'items' => 'array'
    ];

    protected $dates = ['date'];

    protected $guarded = [];
}
