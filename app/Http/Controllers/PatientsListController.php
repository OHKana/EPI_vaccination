<?php

namespace App\Http\Controllers;

use App\Models\ChildVaccineSchedule;
use App\Models\PatientsList;
use App\Models\TeenageVaccineSchedule;
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
        // dd($request-> all());
        Patientslist::create([
            'Registration_No' => $request->Registration_No,
            'patients_Name' => $request->patients_Name,
            'fathers_Name' => $request->fathers_Name,
            'mothers_Namme' => $request->mothers_Namme,
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
