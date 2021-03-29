<?php

namespace App\Http\Controllers;
use App\Models\PatientsList;
use Illuminate\Http\Request;

class PatientsListController extends Controller
{

    public function      list()
    {
        $patients = Patientslist::all();
        return view('content.patientsList', compact('patients'));
    }

    public function create(Request $request){
        // dd($request-> all());
        patientslist::create([
            'Registration_No' => $request -> Registration_No,
            'patients_Name' => $request -> patients_Name,
            'fathers_Name' => $request -> fathers_Name,
            'mothers_Namme' => $request -> mothers_Namme,
            'dob' => $request -> dob,
            'gender' => $request -> gender,
            'Contact_nbr' => $request -> contact_Nbr,
            'address' => $request -> address,
            'Vaccination_Area' => $request -> vaccinationArea,
            'regDate' => $request -> regDate
        ]);

        return redirect()->back();

     }
}
