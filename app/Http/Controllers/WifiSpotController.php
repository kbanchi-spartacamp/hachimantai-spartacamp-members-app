<?php

namespace App\Http\Controllers;

use App\Models\WifiSpot;
use Illuminate\Http\Request;

class WifiSpotController extends Controller
{
    public function index()
    {
        $wifispots = WifiSpot::all();
        $data = [
            'wifispots' => $wifispots,
        ];
        return view('wifi-spot.wifi-spot', $data);
    }
}
