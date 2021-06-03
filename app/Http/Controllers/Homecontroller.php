<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function      list()
    {
        return view('content.home');
     }

     
}
