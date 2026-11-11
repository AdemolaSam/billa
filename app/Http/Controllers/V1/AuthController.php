<?php

namespace App\Http\Controllers\V1;

use App\Http\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AuthController
{

    public function __construct(
        protected AuthService $authService
    ){}

    public function register(Request $request){
        $validated = $request->validate([
            'business_name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', Password::defaults()],
        ]);

        $result = $this->authService->register($validated);

        return response()->json([
            'message' => 'Tenant Registration Successful.',
            'tenant' => $result['tenant'],
            'user' => $result['user'],
        ], 201);
    }

    public function login(Request $request){

        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ]);

        $user = $this->authService->login($validated);

        return response()->json([
            'user' => $user->only(['id','name', 'email']),
            'token' => $user->createToken('api')->plainTextToken,
        ]);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response()->noContent();
    }
}
