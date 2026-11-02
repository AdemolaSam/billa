<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ["tenant_id", "email", "name", "provider_customer_code", "authorization_code"];
}
