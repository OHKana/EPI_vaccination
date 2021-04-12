<?php

namespace App\Http\Controllers;

use App\Models\teenageVaccine;
use App\Models\TeenageVaccineSchedule;
use Illuminate\Http\Request;

class TeenageVaccineScheduleController extends Controller
{
    public function list()
    {
        $teenage = teenageVaccine::all();
        return view('content.teenageVaccineSchedule',compact('teenage'));
    }

     public function create(Request $request)
     {
         // dd($request-> all());
         teenageVaccine::create([
             'V_d_Name' => $request->V_d_Name,
             'Schedule' => $request->Schedule,
             'eligible_date' => $request->eligible_date,
             'V_rcv_date' => $request->V_rcv_date,

         ]);

         return redirect()->back();
     }
}