<?php

namespace App\Http\Controllers;

use App\Models\Patientslist;
use App\Models\teenageVaccine;
use App\Models\TeenageVaccineSchedule;
use Illuminate\Http\Request;

class TeenageVaccineScheduleController extends Controller
{
    public function list()
    {
        $patients = Patientslist::all();
        // dd($patients->patients_Name);
        $teenage = TeenageVaccineSchedule::all();
        return view('content.teenageVaccineSchedule',compact('teenage','patients'));
    }

     public function create(Request $request)
     {
         // dd($request-> all());
         TeenageVaccineSchedule::create([
            'tv_id' => $request->V_id,
            'patient_id' => $request->patient_id,
             'eligible_date' => $request->eligible_date,
             'V_rcv_date' => $request->V_rcv_date,

         ]);

         return redirect()->back();
     }
}
