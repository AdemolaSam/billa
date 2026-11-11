<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Table(key: 'uuid', keyType:'string', incrementing: false)]
class Plan extends Model
{
    use HasFactory;
    protected $fillable = ["code", "name", "included_units", "overage_unit_amount", "active"];
}
