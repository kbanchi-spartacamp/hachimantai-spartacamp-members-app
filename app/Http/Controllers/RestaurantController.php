<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RestaurantController extends Controller
{
    public function index()
    {
        $method = 'GET';
        $url = config('admin_api.url') . '/api/restaurants';
        $options = [];

        $client = new Client();
        try {
            $response = $client->request($method, $url, $options);
            $body = $response->getBody();
            $restaurants = json_decode($body, false);
        } catch (\Throwable $th) {
            $restaurants = null;
        }

        $data = [
            'restaurants' => $restaurants,
        ];
        return view('restaurant.restaurant', $data);
    }
}
