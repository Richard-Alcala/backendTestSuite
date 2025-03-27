<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            // Validate the request
            $credentials = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string|min:8',
            ]);

            // Attempt to authenticate the user
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $token = $user->createToken('auth_token')->plainTextToken;

                return response()->json([
                    'success' => true,
                    'message' => 'Login successful',
                    'token' => $token,
                    'user' => $user,
                ], 200);
            }

            // Invalid credentials
            return response()->json([
                'success' => false,
                'message' => 'Invalid email or password',
            ], 401);
        } catch (\Exception $e) {
            // Log the error and return a generic error response
            Log::error('Login error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred during login. Please try again later.',
            ], 500);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->tokens->each(function ($token) {
            $token->delete();
        });

        return response()->json(['message' => 'Logged out successfully'], 200);
    }
}
