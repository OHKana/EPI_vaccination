<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabyTikaChartController extends Controller
{
    public function      list()
    {
        return view('content.babyTikaChart');
     }
}
