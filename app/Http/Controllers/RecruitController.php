<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitController extends Controller
{
    public function recruit ()
    {
        return view('message.recruit');
    }
}