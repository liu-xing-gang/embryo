<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }
    //
    public function auth1(Request $request)
    {
        return view('auth1');
    }

    // Get a JWT via given credentials.
    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    // Get the authenticated User
    public function me(Request $request)
    {
        return response()->json(auth('api')->user());
    }

    // Log the user out (Invalidate the token)
    public function logout(Request $request)
    {
        auth('api')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh(Request $request)
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    // Get the token array structure.
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

}
