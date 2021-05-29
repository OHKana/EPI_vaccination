<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function      list()
    {
        $notice = Notice::all();
        return view('content.notices',compact('notice'));
    }


}

