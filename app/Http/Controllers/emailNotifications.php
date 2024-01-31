<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\notificationsMail;

class emailNotifications extends Controller
{
    public function sendEmail(Request $request)
    {
        $compteur = $request->session()->increment('compteur', 1);
        // $request->session()->forget('compteur');

        Mail::to('khadijamjm@gmail.com')->send(new notificationsMail());
        return view('emailSent', compact('compteur'));
    }
    public function sendEmailNotification(Request $request)
    {
       
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $user = \App\Models\User::find($request->input('user_id'));
        Mail::to($user->email)->send(new \App\Mail\EmailNotification());
        return back()->with('success', 'Email notification sent successfully.');
    }
}
