<?php

namespace App\Http\Controllers;

use App\Models\child_vaccine;
use App\Models\ChildVaccineSchedule;
use Illuminate\Http\Request;

class ChildVaccineScheduleController extends Controller
{
    // dd($request-> all());
    public function list()
    {
        $doses=child_vaccine::all();
        return view('content.childvaccineschedule', compact('doses'));
     }
     public function create(Request $request)
    {
        // dd($request-> all());
        ChildVaccineSchedule::create([
            'V_Name' => $request->V_Name,
            'Eligible_date' => $request->Eligible_date,
            'fst_d' => $request->fst_d,
            'snd_d' => $request->snd_d,
            'trd_d' => $request->trd_d,
            'fth_d' => $request->fth_d,
            'fifth_d' => $request->fifth_d,

        ]);

        return redirect()->back();
    }
}
