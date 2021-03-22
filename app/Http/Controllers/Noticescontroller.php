<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Noticescontroller extends Controller
{
    public function      list()
    {
        return view('content.notices');
     }
}
