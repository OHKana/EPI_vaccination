<?php

namespace App\Http\Controllers;
use App\Models\child_vaccine;
use Illuminate\Http\Request;

class ChildVaccineChartController extends Controller
{
    public function      list()
    {
        $childs = child_vaccine::all();
        return view('content.ChildVaccineChart', compact('childs'));     }

     public function create(Request $request)
    {
        // dd($request-> all());
        child_vaccine::create([
            'V_Name' => $request->V_Name,
            'disease' => $request->disease,
            'N_of_dose' => $request->N_of_dose,
            'Time_difference' => $request->Time_difference,
            'category' => $request->category,
            'starting_time' => $request->starting_time,

        ]);

        return redirect()->back();
    }
}
