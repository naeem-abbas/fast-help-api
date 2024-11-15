<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider;

class ProviderController
{
    //use App\Models\Provider;

    public function getNearbyProviders(Request $request)
    {
        $latitude = $request->latitude;
        $longitude = $request->longitude;
        $radius = 100; // Temporarily setting radius to 100 km to capture nearby locations

        $providers = Provider::select('*')
            ->selectRaw("(
                6371 * acos(
                    cos(radians(?)) * cos(radians(latitude)) * cos(radians(longitude) - radians(?)) +
                    sin(radians(?)) * sin(radians(latitude))
                )
            ) AS distance", [$latitude, $longitude, $latitude])
            ->having('distance', '<=', $radius)
            ->orderBy('distance', 'asc')
            ->get();

        return response()->json(['providers' => $providers]);
    }



}
