<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;


#[Table(key: 'uuid', keyType: 'string', incrementing: false)]
class Payment extends Model
{
    protected $fillable = ["invoice_id", "provider_reference", "status", "amount", "attempt", "raw_response"];
}
