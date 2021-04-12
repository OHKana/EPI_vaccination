<?php

namespace App\Http\Controllers;
use App\Models\teenageVaccine;
use Illuminate\Http\Request;

class TeenageTikaChartController extends Controller
{
    public function      list()
    {
        $teenage = teenageVaccine::all();
        return view('content.teenageTikaChart',compact('teenage'));
     }
     public function create(Request $request)
     {
         // dd($request-> all());
         teenageVaccine::create([
             'V_d_Name' => $request->V_d_Name,
             'Schedule' => $request->Schedule,
             'category' => $request->category,


         ]);

         return redirect()->back();
     }
}
