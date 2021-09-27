<?php

namespace App\Http\Controllers;

use App\Models\WifiSpot;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WifiSpotController extends Controller
{
    public function index()
    {
        $method = 'GET';
        $url = config('admin_api.url') . '/api/wifi-spots';
        $options = [];

        $client = new Client();
        try {
            $response = $client->request($method, $url, $options);
            $body = $response->getBody();
            $wifispots = json_decode($body, false);
        } catch (\Throwable $th) {
            $wifispots = null;
        }

        $data = [
            'wifispots' => $wifispots,
        ];
        return view('wifi-spot.wifi-spot', $data);
    }

    public function map($id)
    {
        $method = 'GET';
        $url = config('admin_api.url') . '/api/wifi-spots/' . $id;
        $options = [];

        $client = new Client();
        try {
            $response = $client->request($method, $url, $options);
            $body = $response->getBody();
            $wifispot = json_decode($body, false);
            $latitude = $wifispot->latitude;
            $longitude = $wifispot->longitude;
            $zoom = 10;
        } catch (\Throwable $th) {
            $wifispot = null;
            $latitude = null;
            $longitude = null;
            $zoom = null;
        }

        $data = [
            'wifispot' => $wifispot,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'zoom' => $zoom,
        ];
        return view('wifi-spot.map', $data);
    }
}
