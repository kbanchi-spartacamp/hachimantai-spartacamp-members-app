<?php

namespace App\Http\Controllers;

use App\Models\Hotspring;
use Illuminate\Http\Request;

class HotSpringController extends Controller
{
    public function hotspring()
    {
        $hotsprings = Hotspring::all();
        $date = [
            'hotsprings' => $hotsprings,
        ];
        return view('hot-spring.hotspring',$date);
    }
}
