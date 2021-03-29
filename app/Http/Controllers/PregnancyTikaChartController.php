<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PregnancyTikaChartController extends Controller
{
    public function      list()
    {
        return view('content.pregnancyTikaChart');
     }
}
