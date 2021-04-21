<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientsSignInUpController extends Controller
{
    public function      show()
    {
        return view('content.patientsSignInUp');
     }

     public function login(Request $request)
     {

 //validate input
//   dd($request->all());
        //  $request->validate([
        //      'email'=>'required|email',
        //      'password'=>'required|min:6',
        //  ]);

         //authenticate
        //  dd($credentials);

         $credentials = [
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),


         ];
        //   dd($credentials);


        //  dd($request->all());
         if (Auth::attempt($credentials)) {
            //  $request->session()->regenerate();
             return redirect()->route('patientsProfile')->with('success','LogIn Successful.');
         }
         return back()->withErrors([
             'email' => 'Invalid Credentials.',
         ]);

     }
     public function logout()
    {
        Auth::logout();

        return redirect()->route('home')->with('success','Logout Successful.');

    }
}
