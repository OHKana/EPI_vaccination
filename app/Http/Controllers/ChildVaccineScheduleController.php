<?php

namespace App\Http\Controllers;

use App\Models\child_vaccine;
use App\Models\ChildVaccineSchedule;
use App\Models\Patientslist;
use App\Models\Stock;
use Illuminate\Http\Request;
use Carbon\Carbon;
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

        ChildVaccineSchedule::create([
            'cv_id' => $request->cv_id,
            'dose_count' => $request->dose_count,
            'patient_id' => $request->patient_id,
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
        $c_stock = Stock::where('child_v_id',$doses->cv_id)->first();

        if(!$c_stock){
            return redirect()->back()->with('message','Vaccine stock is not available.');
        }

        $doseCount = $doses->dose_count;
        $dif = $vaccine->Time_difference ;



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

                if (  $doses->fst_d->addWeeks($dif) < Carbon::now()) {
                    @dd($doses->fst_d->addWeeks($dif));
                    return redirect()->back()->with('message','Can not give vaccine, wait for '.$doses->fst_d->addWeeks($dif));

                }
                $doses->update([
                    'snd_d'=>date("Y-m-d"),
                ]);

            }
            dd('stop');
            if($doses->dose_count==2)
            {
                if (  $doses->snd_d->addWeeks($dif) < Carbon::now()) {
                    return redirect()->back()->with('message','Can not give vaccine, wait for '.$doses->snd_d->addWeeks($dif));

                }
                $doses->update([
                    'trd_d'=>date("Y-m-d")
                ]);

            }

            if($doses->dose_count==3)
            {
                if (  $doses->trd_d->addWeeks($dif) < Carbon::now()) {
                    return redirect()->back()->with('message','Can not give vaccine, wait for '.$doses->trd_d->addWeeks($dif));

                }
                $doses->update([
                    'fth_d'=>date("Y-m-d")
                ]);

            }
            if($doses->dose_count==4)
            {
                if (  $doses->fth_d->addWeeks($dif) < Carbon::now()) {
                    return redirect()->back()->with('message','Can not give vaccine, wait for '.$doses->fth_d->addWeeks($dif));

                }
                $doses->update([
                    'fifth_d'=>date("Y-m-d")
                ]);

            }
            $doses->increment('dose_count');

            if($c_stock){
                $c_stock->update([
                    'stock_out'=> $c_stock->stock_out + 1,
                    'available_stock'=> $c_stock->stock_in - ($c_stock->stock_out + 1)
                ]);
            }

        }


        return redirect()->back()->with('message','Vaccinated succecss.');
    }

}
