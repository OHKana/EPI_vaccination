<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthWorkerProfileController extends Controller
{
    public function      list()
    {
        return view('content.healthWorkerProfile');
     }
}