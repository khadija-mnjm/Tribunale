<?php

namespace App\Http\Controllers;

use App\Models\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Attempt to authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'login' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        $userExists = Utilisateur::where('login', $credentials['login'])->exists();

        if (!$userExists) {
            return redirect()->back()->withErrors(['login' => 'Invalid login credentials'])
                ->withInput($request->only('username'));
        }

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->route('dashboard'); // Replace with your dashboard route
        }

        // Authentication failed
        return redirect()->back()->withErrors(['login' => 'Invalid login credentials'])
            ->withInput($request->only('username'));
    }
    public function dashboard()
    {
        // You can add any logic you need here

        return view('includes.layoute'); // Assuming your dashboard view is in the 'includes' folder
    }
    
    
}
