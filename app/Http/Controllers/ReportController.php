<?php

namespace App\Http\Controllers;

use App\Models\HealthWorkerList;
use App\Models\Patientslist;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    
    public function list()
    {
        $this->validate(request(),[
            'from_date' => 'date',
            'to_date' => 'date|after:from_date',
        ]);

        $from_date = Carbon::parse(request()->from_date)->format('Y-m-d');
        $to_date = Carbon::parse(request()->to_date)->addDay()->format('Y-m-d');



        if($from_date && $to_date){
            $patients = Patientslist::whereBetween('regDate',[$from_date,$to_date])->get();


        }else{
            $patients = Patientslist::all();
        }
        // dd($worker);
        return view('content.Report',compact('patients'));
    }


}
