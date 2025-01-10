<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fatura extends Model
{
    use HasFactory;

    protected $fillable = [

        'subscription_id',
        'stripe_invoice_id',
        'payment_intent_id',
        'status',
        'amount_due',
        'amount_paid',
        'due_date',
        'payment_method_type',
        'next_payment_attempt',
        'stripe_invoice_id',
    ];
}
