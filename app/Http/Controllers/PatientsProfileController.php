<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsProfileController extends Controller
{
    public function      list()
    {
        return view('content.patientsProfile');
     }
}
