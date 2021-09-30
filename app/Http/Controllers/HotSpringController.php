<?php

namespace App\Http\Controllers;

use App\Models\Hotspring;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HotSpringController extends Controller
{
    public function index()
    {
        $method = 'GET';
        $url = config('admin_api.url') . '/api/hot-springs';
        $options = [];

        $client = new Client();
        try {
            $response = $client->request($method, $url, $options);
            $body = $response->getBody();
            $hotsprings = json_decode($body, false);
        } catch (\Throwable $th) {
            $hotsprings = null;
        }

        $data = [
            'hotsprings' => $hotsprings,
            
        ];
        

        return view('hot-spring.hotspring', $data);
        

        
    }

    public function map($id)
    {
        
        $method = 'GET';
        $url = config('admin_api.url') . '/api/hot-springs/' . $id;
        $options = [];

        $client = new Client();
        
        
        try {
            $response = $client->request($method, $url, $options);
            $body = $response->getBody();
            $hotspring = json_decode($body, false);
            $latitude = $hotspring->latitude;
            $longitude = $hotspring->longitude;
            $zoom = 10;
        } catch (\Throwable $th) {
            $hotspring = null;
            $latitude = null;
            $longitude = null;
            $zoom = null;
        }

        $data = [
            'hotspring' => $hotspring,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'zoom' => $zoom,
            
        ];
        return view('hot-spring.map', $data);
    }
}
