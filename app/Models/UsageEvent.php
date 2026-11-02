<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsageEvent extends Model
{
    protected $fillable = ['tenant_id','subscription_id', 'quantity', 'occured_at', 'idempotency_key'];

    protected $casts = [
        'occured_at'=>'date',
    ];
}
