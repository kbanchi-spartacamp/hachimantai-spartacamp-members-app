<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WifiSpotController extends Controller
{
    public function hotspring()
    {
        return view('hot-spring.hotspring');
    }
}
