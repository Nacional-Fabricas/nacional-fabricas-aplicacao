<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CnaeLista extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnae_id',
        'cnae_description',
    ];
}
