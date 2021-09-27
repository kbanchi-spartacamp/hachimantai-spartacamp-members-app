<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = car::all();
        $data = [
            'cars' => $cars,
        ];
        return view('car.car', $data);
    }
}
