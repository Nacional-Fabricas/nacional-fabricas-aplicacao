<?php

namespace App\Models;

use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;



class Produto extends Model
{
    use HasFactory;

    use Rateable;

    protected $fillable = [

        'produto_thumbnail',
        'produto_nome',
        'descricao',
        'quantidade',
        'categorias',
        'ncm',
        'gtin',
        'sku',
        'peso',
        'images',
        'altura',
        'largura',
        'preco_max',
        'preco_min',
        'profundidade',
        'status',
        'destaque',
        'produto_album' => 'array',

    ];

    protected $casts = [

        'items' => 'array'
    ];

    protected $dates = ['date'];

    protected $guarded = [];

    public function rating(){

        return $this->hasMany(Rating::class);
    }


}
