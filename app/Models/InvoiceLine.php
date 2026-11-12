<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\InvoiceLineType;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceLine extends Model
{
    /** @use HasFactory<\Database\Factories\InvoiceLineFactory> */
    use HasFactory, HasUuids;

    protected $fillable = ["invoice_id", "type", "description", "quantity", "unit_amount", "amount"];

    protected $casts = [
        'type'=>InvoiceLineType::class,
    ];

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }
}
