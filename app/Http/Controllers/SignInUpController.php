<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInUpController extends Controller
{
    public function      show()
    {
        return view('content.healthWorkerSignInUp');
     }

     public function login(Request $request)
     {

 //validate input
//   dd($request->all());
         $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:6',
         ]);

         //authenticate
         // dd($credentials);

         $credentials = [
            'Email_Address'=>$request->input('email'),
            'password'=>$request->input('password'),

         ];
        //  $credentials = $request->only('Email_Address', 'password');
// dd($credentials);

        //  dd($request->all());
         if (Auth::attempt($credentials)) {
            //  $request->session()->regenerate();
             return redirect()->route('patientsList')->with('success','LogIn Successful.');
         }
         return back()->withErrors([
             'Email_Address' => 'Invalid Credentials.',
         ]);

     }
     public function logout()
    {
        Auth::logout();

        return redirect()->route('home')->with('success','Logout Successful.');

    }

}
