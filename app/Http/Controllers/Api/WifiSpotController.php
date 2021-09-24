<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\WifiSpot;
use Illuminate\Http\Request;

class WifiSpotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wifispots = WifiSpot::all();
        return $wifispots;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wifispot = new WifiSpot();

        $wifispot->name = $request->name;
        $wifispot->description = $request->description;
        $wifispot->image_url = $request->image_url;
        $wifispot->hp_url = $request->hp_url;

        $wifispot->save();

        return $wifispot;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wifispot = WifiSpot::find($id);
        return $wifispot;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wifispot = WifiSpot::find($id);

        $wifispot->name = $request->name;
        $wifispot->description = $request->description;
        $wifispot->image_url = $request->image_url;
        $wifispot->hp_url = $request->hp_url;

        $wifispot->save();

        return $wifispot;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wifispot = WifiSpot::find($id);
        $wifispot->delete();
        return $wifispot;
    }
}
