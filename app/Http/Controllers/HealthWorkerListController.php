<?php

namespace App\Http\Controllers;
use App\Models\HealthWorkerLIst;
use Illuminate\Http\Request;

class HealthWorkerListController extends Controller
{
    public function list()
    {
        $worker = HealthWorkerList::all();
        return view('content.healthWorkerList', compact('worker'));
    }


    public function create(Request $request){
        // dd($request-> all());
        HealthWorkerLIst::create([
            'User_Id' => $request -> userId,
            'HealthAssistant_Name' => $request -> HealthAssistant_Name,
            'dob' => $request -> dob,
            'Gender' => $request -> gender,
            'Contact_nbr' => $request -> contactnbr,
            'Email_Address' => $request -> email,
            'address' => $request -> address,
            'Vaccination_Area' => $request -> vaccinationArea,
            'Description' => $request -> description
        ]);

        return redirect()->back();


    }
}
