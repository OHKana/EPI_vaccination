<?php

namespace App\Http\Controllers;
use App\Models\teenageVaccine;
use App\Models\TeenageVaccineSchedule;
use Illuminate\Http\Request;

class TeenageVaccineChartController extends Controller
{
    public function      list()
    {
        $teenage = teenageVaccine::all();
        return view('content.TeenageVaccineChart',compact('teenage'));
     }
     public function create(Request $request)
     {
         // dd($request-> all());
         teenageVaccine::create([
             'V_d_Name' => $request->V_d_Name,
             'Schedule' => $request->Schedule,
             'category' => $request->category,
         ]);
         TeenageVaccineSchedule::create([
            'V_d_Name' => $request->V_d_Name,
            'Schedule' => $request->Schedule

         ]);

         return redirect()->back();
     }
 }
