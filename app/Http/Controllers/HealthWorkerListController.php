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

$file_name='';
// step:1 check req has file

if($request->hasFile('Image'))
{
    // file is valid?

    $file=$request->file('Image');
    if($file->isvalid());
    {
        // generate unique file name

        $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

        // store image local directory

        $file->storeAs('photo',$file_name);
    }
}
        $password="epi2021";

        // dd($request-> all());
        HealthWorkerList::create([
            'User_Id' => $request -> userId,
            'HealthAssistant_Name' => $request -> HealthAssistant_Name,
            'dob' => $request -> dob,
            'Gender' => $request -> gender,
            'Contact_nbr' => $request -> contactnbr,
            'Email_Address' => $request -> email,
            'address' => $request -> address,
            'Vaccination_Area' => $request -> vaccinationArea,
            'file' => $file_name,
            'password'=>bcrypt($password),
        ]);

        return redirect()->back();


    }

}
