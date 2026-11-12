<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class ProviderEvent extends Model
{

    use HasUuids;

    protected $fillable = ["provider_event_id", "type", "processed_at"];

    protected $casts = [
        'processed_at'=>'date',
    ];
}
