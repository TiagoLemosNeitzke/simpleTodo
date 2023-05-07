<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifySubscriptionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if ($request->user()->subscribed('default')) {
            return redirect()->route('home');
        }

        return redirect()->route('subscribe');
    }
}
