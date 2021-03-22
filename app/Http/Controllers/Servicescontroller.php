<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Servicescontroller extends Controller
{
    public function      list()
    {
        return view('content.services');
     }
}
