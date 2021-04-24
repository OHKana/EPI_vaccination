<?php

namespace App\Http\Controllers;

use App\Models\child_vaccine;
use App\Models\ChildVaccineSchedule;
use App\Models\PatientsList;
use App\Models\teenageVaccine;
use App\Models\TeenageVaccineSchedule;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PatientsListController extends Controller
{

    public function      list()
    {
        $patients = Patientslist::all();
             return view('content.patientsList', compact('patients'));
    }

    public function      checkChild($id)
    {
        $patients = Patientslist::find($id);
        $doses= ChildVaccineSchedule::where('patient_id',$id)->get();
        return view('content.childvaccineschedule', compact('patients','doses'));
    }

    public function      checkTeenage($id)
    {
        $patients = Patientslist::find($id);
        $teenage= TeenageVaccineSchedule::where('patient_id',$id)->get();
         return view('content.teenageVaccineSchedule', compact('patients','teenage'));
    }


    public function create(Request $request)
    {

        // $request->validate([
        //     'email'=>'required|email',
        //     'password'=>'required|min:6',
        // ]);
        $password="epi2021";
$users=User::create([

                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt ($password)
            ]);


        // dd($request-> all());
        $p=Patientslist::create([
            'user_id' => $users->id,
            'reg_no'=>$request->reg_no,
            'fathers_Name' => $request->fathers_Name,
            'mothers_Name' => $request->mothers_Name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'Contact_nbr' => $request->contact_Nbr,
            'address' => $request->address,
            'Vaccination_Area' => $request->vaccinationArea,
            'regDate' => $request->regDate,
            'category' => $request->category,


        ]);

        if($request->category=='Child')
        {

            $cv=child_vaccine::all();
            foreach($cv as $item)
            ChildVaccineSchedule::create ([
                'patient_id'=>$p->id,
                'cv_id'=>$item->id,

            ]);
        }


else{
    $tv=teenageVaccine::all();
    foreach($tv as $item)

    TeenageVaccineSchedule::create ([
        'patient_id'=>$p->id,
        'tv_id'=>$item->id,

    ]);
}



        return redirect()->back();
    }
}
