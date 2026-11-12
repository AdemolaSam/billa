<?php

namespace App\Http\Services;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthService
{
    public function register(array $data): array
    {

        $result = DB::transaction(function () use ($data) {
           // tenant creation
           $tenant = Tenant::create([
               'name' => $data['business_name'],
               'slug' => Str::slug($data['business_name'])
           ]);

           $user = User::create([
               'name' => $data['user_name'],
               'email' => $data['email'],
               'password' => Hash::make($data['password']),
               'role' => 'owner',
               'tenant_id' => $tenant['id'],
           ]);

           return [
               'tenant' => $tenant->only(['id','name','slug']),
               'user' => $user->only(['id', 'email', 'name']),
           ];
        });

        return $result;
    }

    public function login (array $data): User
    {
        $user = User::where('email', $data['email'])->first();

        if(! $user || !Hash::check($data['password'], $user->password)){
            throw ValidationException::withMessages([
                'email' => ['Invalid credentials']
            ]);
        };

        return $user;
    }
}
