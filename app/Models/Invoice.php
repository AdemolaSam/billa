<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Table;
use App\Enums\InvoiceStatus;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Table(key:'uuid', keyType:'string', incrementing:'false')]
class Invoice extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ["subscription_id", "period_start", "period_end", "status", "subtotal", "total", "number"];

    protected $casts = [
        'status'=>InvoiceStatus::class,
        'period_start' => 'datetime',
        'period_end' => 'datetime',
    ];

    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }

}
