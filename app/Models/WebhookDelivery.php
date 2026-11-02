<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebhookDelivery extends Model
{
    protected $fillable = ["endpoint_id", "event", "payload", "attempt", "status", "response_code", "next_attempt_at"];

    protected $casts = [
        'next_attempt_at'=>'datetime',
    ];
}
