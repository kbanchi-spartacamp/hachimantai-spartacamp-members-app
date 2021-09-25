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
}
