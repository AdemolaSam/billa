<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\InvoiceLineType;

class InvoiceLine extends Model
{
    /** @use HasFactory<\Database\Factories\InvoiceLineFactory> */
    use HasFactory;

    protected $fillable = ["invoice_id", "type", "description", "quantity", "unit_amount", "amount"];

    protected $casts = [
        'type'=>InvoiceLineType::class,
    ];
}
