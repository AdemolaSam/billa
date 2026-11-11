<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Table;
use App\Enums\InvoiceStatus;

#[Table(key:'uuid', keyType:'string', incrementing:'false')]
class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ["subscription_id", "period_start", "period_end", "status", "subtotal", "total", "number"];

    protected $casts = [
        'status'=>InvoiceStatus::class,
    ];
}
