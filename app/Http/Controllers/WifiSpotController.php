<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WifiSpotController extends Controller
{
    public function index()
    {
        return view('wifi-spot.wifi-spot');
    }
}