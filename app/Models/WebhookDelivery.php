<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class WebhookDelivery extends Model
{
    use HasUuids;
    protected $fillable = ["webhook_endpoint_id", "event", "payload", "attempt", "status", "response_code", "next_attempt_at"];

    protected $casts = [
        'next_attempt_at'=>'datetime',
    ];

    public function endpoints(): HasOne
    {
        return $this->hasOne(WebhookEndpoint::class);
    }
}
