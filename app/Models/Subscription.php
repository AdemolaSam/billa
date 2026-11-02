<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ["customer_id", "pending_plan_id", "status", "trial_ends_at", "current_period_start", "current_period_end", "failed_attempts", "next_retry_at", "canceled_at", "cancel_at_period_end"];
}
