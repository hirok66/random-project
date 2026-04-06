<?php

namespace App\Http\Controllers;

use App\Models\PasswordResed;
use App\Models\User;
use App\Notifications\PasswordResetNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PasswordRestContrller extends Controller
{
    // show reset form
    public function showResetForm(){
        return view('auth.passwords.form');
    }
    // send reset link
    public function sendResetLink(Request $request){

    $validateData = $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    $authUser = User::where('email', $validateData['email'])->first();

    $info= PasswordResed::create([

        'email' => $validateData['email'],
        'token' =>uniqid(60,true),
        'updated_at' => now(),
        'created_at' => now(),
    ]);
    Notification::send($authUser, new PasswordResetNotification($info));

    return back()->with('success', 'Password reset link sent to ' . $validateData['email'] . '.' . ' Please check your email.');
    }
}
