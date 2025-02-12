<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'url_imagem',
        'id_produto',
        'id_conta',
        'id'
    ];

    public function site()
    {
        return $this->belongsTo(Site::class, 'id');
    }
}
