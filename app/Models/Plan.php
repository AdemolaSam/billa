<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Table(key: 'uuid', keyType:'string', incrementing: false)]
class Plan extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ["code", "name", "included_units", "tenant_id" ,"overage_unit_amount", "active"];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}
