<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function      list()
    {
        return view('content.SignIn');
     }

     public function login(Request $request)
    {
//        dd($request->all());
//validate input
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        //authenticate
        $credentials = $request->only('email', 'password');
//        dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('healthWorkerLogedIn');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('content.healthWorkerLogedIn')->with('success','Logout Successful.');

    }
}
