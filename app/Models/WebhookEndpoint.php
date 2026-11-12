<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WebhookEndpoint extends Model
{
    use HasUuids;
    protected $fillable = ["tenant_id", "url", "events", "active"];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}
