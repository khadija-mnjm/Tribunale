<?php

namespace App\Http\Controllers;

use App\Models\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
            $request->session()->put('user',Auth::user());
            return redirect()->route('dashboard'); // Replace with your dashboard route
        }

        return redirect()->back()->withErrors(['login' => 'Invalid login credentials'])
            ->withInput($request->only('username'));
    }
    public function dashboard()
    {
        return view('includes.layoute'); // Assuming your dashboard view is in the 'includes' folder
    }
    public function profile()
    {
         return view('includes.profile');
    }
    public function logout(){
        Session::forget('user');
        return redirect()->route('login1');
    }
    
}
