<?php

namespace App\Http\Controllers;

use App\Models\child_vaccine;
use App\Models\HealthWorkerList;
use App\Models\Patientslist;
use App\Models\Stock;
use App\Models\teenageVaccine;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HealthWorkerProfileController extends Controller
{
    public function list()
    {
        $user=auth()->user();

        $healthWorker = HealthWorkerList::all()->count();
        $patients = Patientslist::all()->count();
        $c_v = child_vaccine::all()->count();
        $t_v = teenageVaccine::all()->count();
        $stock = Stock::all()->sum('available_stock');
        $stockShort = Stock::where('available_stock','<',10)->count();

        if ($user->role == 'admin') {
            // dd('ok');

        return view('content.healthWorkerProfile',compact(
            'healthWorker','patients','c_v',
            't_v','stock','stockShort'
        ));

        }
        // dd($user->);
        // dd($worker)
        return view('content.healthWorkerProfile',compact('user'));
     }
     public function changePassword()
    {
        return view('content.changePassword');
    }

     public function updatePassword(Request $request)
    {
        if (!Hash::check($request->input('current_password'), auth()->user()->password)) {
            return redirect()->back()->with('error', 'Current Password does not match.');
        }


        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password'

        ]);


        if (Hash::check($request->input('new_password'), auth()->user()->password)) {
            return redirect()->back()->with('error', 'New password should not match the old one.');
        }



        // $workers = Worker::find($request->id);
        // $users = User::find($workers->user_id);
        $users = User::find(auth()->user()->id);
        // dd($users);
        $users -> update([
            'password' => bcrypt($request->new_password)
        ]);

        // $users->password = $request->bcrypt($request->password);
        // $users->save();
        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}
