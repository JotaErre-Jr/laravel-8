<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeoLocationController extends Controller
{
    public function indexIp(Request $request)
    {
            $userIp = $request->ip();
            $locationData = \Location::get($userIp);
            dd($locationData);
    }
}
