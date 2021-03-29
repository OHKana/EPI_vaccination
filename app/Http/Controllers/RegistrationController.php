<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function list()
    {
        return view('content.registration');
     }
    //  public function create (request $request){
    //     //dd($request->all());
    //     registration::create([
    //        'name'=>$request->name,
    //        'description'=>$request->description

    //     ]

    //     );
    //     return redirect() -> back();
    // }
}
