<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LedgerEntry extends Model
{
    protected $fillable = ["tenant_id", "invoice_id", "payment_id", "type", "amount", "balance_after"];
}
