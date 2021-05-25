<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class HealthWorkerNoticeController extends Controller
{
    public function      list()
    {
        $notice = Notice::all();
        return view('content.healthWorkerNotices',compact('notice'));
    }

    public function createNotice()
    {
        return view('content.healthWorkerNotices');
    }

        public function create(Request $request)
     {
        $file_name='';

        if($request->hasFile('Image'))
        {

            $file=$request->file('Image');
            if($file->isvalid());
            {

                $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

                $file->storeAs('photo',$file_name);
            }
        }
     Notice::create([
        'date' => $request->date,
        'title'=>$request->title,
        'body' => $request ->body,

        'file' => $file_name,

    ]);

        return redirect()->back();
    }
}
