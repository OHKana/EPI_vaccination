<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class HealthWorkerNoticeController extends Controller
{
    public function list()
    {
        $notice = Notice::all();
        // error_log('notice data :: ' + $notice);
        return view('content.healthWorkerNotices', compact('notice'));
    }

    // public function createNotice()
    // {

    //     return view('content.healthWorkerNotices');
    // }

    public function createNotice(Request $request)
    {
        // dd($request->all());
        $file_name = '';


        if ($request->hasFile('file')) {
            // file is valid?

            $file = $request->file('file');
            if ($file->isvalid()); {
                // generate unique file name

                $file_name = date('Ymdhms') . '.' . $file->getClientOriginalExtension();

                // store image local directory

                $file->storeAs('photo', $file_name);
            }
        }
        Notice::create([
            'date' => $request->date,
            'title' => $request->title,
            'body' => $request->body,

            'file' => $file_name,

        ]);

        return redirect()->back();
    }
}
