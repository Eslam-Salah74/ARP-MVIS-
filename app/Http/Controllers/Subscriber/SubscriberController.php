<?php

namespace App\Http\Controllers\Subscriber;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        Subscription::create(['email' => $request->email]);

        return back()->with('success', trans('main.You have successfully subscribed... All new updates will be sent to your email... Thank you'));
    }
}
