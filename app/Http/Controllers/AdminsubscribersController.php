<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\SubCategory;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminsubscribersController extends Controller
{
    public function index() {

    $subscribers =Subscriber::latest()->paginate('20');

    return view('admin.subscribers.index',[
        'subscribers'=>$subscribers,
    ]);

    }


// single


public function sendSingleEmail($id)
{
    $subscriber = Subscriber::findOrFail($id);

    Mail::to($subscriber->email)
        ->send(new SubscriberMail($subscriber));

        return back()->with('success', 'Email sent successfully! ' . $subscriber->email);

}
}
