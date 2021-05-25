<?php

namespace App\Http\Controllers;

use App\Models\Patientslist;
use App\Models\Stock;
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
     public function edit($id)
    {

        $teenage=TeenageVaccineSchedule::find($id);

        $t_stock = Stock::where('teenage_v_id',$teenage->tv_id)->first();


        if($teenage){
            $teenage->update([
                'V_rcv_date'=>date("Y-m-d"),
            ]);
        }
        if($t_stock){
            $t_stock->update([
                'stock_out'=> $t_stock->stock_out + 1,
                'available_stock'=> $t_stock->stock_in - ($t_stock->stock_out + 1)
            ]);
        }
        return redirect()->back();
    }
}
