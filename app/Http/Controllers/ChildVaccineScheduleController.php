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
        $cdoses=child_vaccine::all();
        $doses=ChildVaccineSchedule::all();
        return view('content.childvaccineschedule', compact('doses','cdoses'));
     }
     public function create(Request $request)
    {
        // dd($request-> all());
        ChildVaccineSchedule::create([
            'cv_id' => $request->cv_id,
            'dose_count' => $request->dose_count,
            'patient_id' => $request->patient_id,
            'eligible_d' => $request->Eligible_date,
            'fst_d' => $request->fst_d,
            'snd_d' => $request->snd_d,
            'trd_d' => $request->trd_d,
            'fth_d' => $request->fth_d,
            'fifth_d' => $request->fifth_d,

        ]);


        return redirect()->back();
    }
    public function edit($id)
    {

        $doses=ChildVaccineSchedule::find($id);
        $vaccine=child_vaccine::find($doses->cv_id);

        if($vaccine->N_of_dose > $doses->dose_count)
        {

            if($doses->dose_count==0)
            {
                $doses->update([
                    'fst_d'=>date("Y-m-d"),
                ]);

            }
            if($doses->dose_count==1)
            {
                $doses->update([
                    'snd_d'=>date("Y-m-d"),
                ]);

            }
            if($doses->dose_count==2)
            {
                $doses->update([
                    'trd_d'=>date("Y-m-d")
                ]);

            }

            if($doses->dose_count==3)
            {
                $doses->update([
                    'fth_d'=>date("Y-m-d")
                ]);

            }
            if($doses->dose_count==4)
            {
                $doses->update([
                    'fifth_d'=>date("Y-m-d")
                ]);

            }
            $doses->increment('dose_count');
        }
        return redirect()->back()->with('message','Vaccinated succecss.');
    }

}
