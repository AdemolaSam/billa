<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


#[Table(key: 'uuid', keyType: 'string', incrementing: false)]
class Payment extends Model
{
    use HasUuids;
    protected $fillable = ["invoice_id", "provider_reference", "status", "amount", "attempt", "raw_response"];

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }
}
