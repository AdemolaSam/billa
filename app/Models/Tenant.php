<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{

    protected $fillable = ["name", "slug", "api_key_hash", "webhook_secret"];

}
