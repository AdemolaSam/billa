<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;

#[Table(key: 'uuid', keyType: 'string', incrementing: false)]
class IdempotencyKey extends Model
{
    protected $fillable = ["tenant_id", "key", "request_hash", "response_code", "response_body"];
}
