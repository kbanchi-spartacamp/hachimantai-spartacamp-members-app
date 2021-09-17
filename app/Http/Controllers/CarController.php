<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function info(){
        return view ('car-info.car');
    }
}
