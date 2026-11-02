<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\InvoiceStatus;

class Invoice extends Model
{
    protected $fillable = ["subscription_id", "period_start", "period_end", "status", "subtotal", "total", "number"];

    protected $casts = [
        'status'=>InvoiceStatus::class,
    ];
}
