<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControl extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login Laravel'
        ]);
    }

    public function postlog(Request $request){
        // dd($request->all());
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]); 

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }
        return redirect('login')->with('LoginError', 'Login Failed');
   
    }

    public function postlogout(Request $request){
        // dd($request->all());
        Auth::logout();
        
        return redirect('login');
        
    }
    
}
