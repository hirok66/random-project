<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an API login request.
     */
    public function store(Request $request)
    {
        try {
            // ১. ভ্যালিডেশন চেক
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'errors' => $validator->errors()
                ], 422);
            }

            // ২. ইউজার খুঁজে বের করা
            $user = User::where('email', $request->email)->first();

            // ৩. ইউজার এবং পাসওয়ার্ড ভেরিফাই করা (Hash Check)
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid credentials (Email or Password mismatch)'
                ], 401);
            }

            // ৪. আগের সব টোকেন ডিলিট করা (ঐচ্ছিক - একই সাথে একাধিক ডিভাইসে লগইন বন্ধ রাখতে চাইলে)
            $user->tokens()->delete();

            // ৫. নতুন Sanctum টোকেন তৈরি
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'status' => true,
                'message' => 'Login successful',
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->role, // আপনার টেবিলে রোল থাকলে এটি আসবে
                ]
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Logout and Revoke Token.
     */
    public function destroy(Request $request)
    {
        // কারেন্ট টোকেনটি ডিলিট করে লগআউট করা
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => true,
            'message' => 'Logged out successfully'
        ], 200);
    }
}
