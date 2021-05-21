<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Contracts\HasApiTokens;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AuthController extends Controller
{
    //
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ]);

        $token = $user->createToken('token')->plainTextToken;
        
        $res = [
            'user' => $user,
            'token' => $token,
        ];

        return response($res, 201);
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required'
        ]);

        // check if account exists
        $user = User::where('email', $fields['email'])->first();
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'Message' => "Account not found"
            ], 401);
        }

        
        
        
        $token = $user->createToken('token')->plainTextToken;
        
        $res = [
            "message" => "Login successful",
            'user' => $user,
            'token' => $token,
        ];

        return view('home');
    }
    public function logout(Request $request) {
        auth()->user()->tokens()->delete();
        return [
            "Logged out"
        ];
    }
}