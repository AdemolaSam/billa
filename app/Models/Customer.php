<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ["tenant_id", "email", "name", "provider_customer_code", "authorization_code"];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}
