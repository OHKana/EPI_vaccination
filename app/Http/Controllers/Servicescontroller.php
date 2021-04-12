<?php

namespace App\Http\Controllers;
use App\Models\child_vaccine;
use Illuminate\Http\Request;

class Servicescontroller extends Controller
{
    public function      list()
    {
        $childs=child_vaccine::all();
        return view('content.services',compact('childs'));
     }
}
