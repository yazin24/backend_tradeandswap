<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $userCredentials = $request -> only('email', 'password');

        if($token = Auth::guard('api') -> attempt($userCredentials)){

            return $this -> respondWithToken($token);

        }

        return response() -> json(['error' => 'Unauthorized'], 401);
    }

    protected function respondWithToken($token)
    {
        $expiration = JWTAuth::manager() -> getTTL() * 1;
        
        return response() -> json([

            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $expiration,

        ]);
    }
}
