<?php

namespace App\Http\Controllers;

use App\Models\ChildVaccineSchedule;
use App\Models\PatientsList;
use App\Models\TeenageVaccineSchedule;
use App\Models\User;
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
        $doses= ChildVaccineSchedule::all();
        $patients = Patientslist::find($id);
        return view('content.childvaccineschedule', compact('patients','doses'));
    }

    public function      checkTeenage($id)
    {
        $teenage= TeenageVaccineSchedule::all();
        $patients = Patientslist::find($id);
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
        Patientslist::create([
            'user_id' => $users->id,

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

        return redirect()->back();
    }
}
