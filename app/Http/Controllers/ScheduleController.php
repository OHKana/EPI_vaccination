<?php

namespace App\Http\Controllers;

use App\Models\ChildVaccineSchedule;
use App\Models\TeenageVaccineSchedule;
use Illuminate\Http\Request;
use Carbon\carbon;

class ScheduleController extends Controller
{
    public function      list()
    {
        $check_category=(auth()->user()->userProfile->category);
        $cui=(auth()->user()->userProfile->id);
        $info=(auth()->user()->userProfile->reg_no);
        // dd($check_category);
        // dd($info);
        if($check_category=='Child')
        {
            $doses=ChildVaccineSchedule::where('patient_id', $cui )->get();
            return view('content.schedule', compact('check_category', 'doses'));

        }
        elseif ($check_category=='Teenage')
        {
            $teenage = TeenageVaccineSchedule::where('patient_id', $cui )->get();
            return view('content.schedule', compact('check_category','teenage'));

        }


        return view('content.schedule', compact('check_category'));
     }

}
