<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotSpringController extends Controller
{
    public function freeword($hot_spring)
    {
        return view('hotspring', [
            'hot_spring' => $hot_spring
        ]);
    }

}
