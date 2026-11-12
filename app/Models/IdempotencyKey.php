<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Table(key: 'uuid', keyType: 'string', incrementing: false)]
class IdempotencyKey extends Model
{
    use HasUuids;
    protected $fillable = ["tenant_id", "key", "request_hash", "response_code", "response_body"];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}
