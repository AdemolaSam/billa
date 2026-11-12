<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscription extends Model
{
    use HasUuids;

    protected $fillable = ["customer_id", "pending_plan_id", "status", "trial_ends_at", "current_period_start", "current_period_end", "failed_attempts", "next_retry_at", "canceled_at", "cancel_at_period_end"];

    protected $casts = [
        "trial_ends_at" => 'datetime',
        "current_period_start" => 'datetime',
        "current_period_end" => 'datetime',
        "next_retry_at" => 'datetime',
        "canceled_at" => 'datetime',
        "cancel_at_period_end" => 'datetime',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function pendlingPlan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
}
