<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    use HasFactory;

    protected $fillable = [

        'customer_id',
        'id_conta',
        'id_plano',
        'stripe_subscription_id',
        'price_id',
        'status',
        'current_period_start',
        'current_period_end',

    ];
}
