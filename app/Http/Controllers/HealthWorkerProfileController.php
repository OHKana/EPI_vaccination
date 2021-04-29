<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthWorkerProfileController extends Controller
{
    public function      list()
    {
        $user=auth()->user();
        $worker=auth()->user()->WorkerProfile;
        // dd($user->);
        // dd($worker)
        return view('content.healthWorkerProfile',compact('user', 'worker'));
     }
}
