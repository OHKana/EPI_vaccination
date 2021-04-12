<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function      list()
    {
        return view('content.schedule');
     }
}
