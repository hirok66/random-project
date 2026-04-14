<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class SubscriberController extends Controller
{



public function subscriber(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|unique:subscribers,email',
    ]);

    if ($validator->fails()) {
        return redirect()
            ->back()
            ->withErrors($validator)
            ->withFragment('subscribe_section');
    }

    $author = Auth::guard('gest')->user();

    $addressCount = Subscriber::where('author_id', $author?->id)->count();

    if ($addressCount >= 2) {
        return redirect()
            ->back()
            ->with('error', 'You can add a maximum of 2 subscriptions! 👍')
            ->withFragment('subscribe_section');
    }

    Subscriber::create([
        'author_id' => $author ? $author->id : null,
        'email' => $request->email,
    ]);

    return redirect()
        ->back()
        ->with('success', 'Subscribed successfully!')
        ->withFragment('subscribe_section');
}
}
