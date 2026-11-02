<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ["code", "name", "included_units", "overage_unit_amount", "active"];
}
