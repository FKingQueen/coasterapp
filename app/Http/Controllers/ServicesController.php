<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region1;

class ServicesController extends Controller
{
    public function mapServices()
    {
        $region1 = Region1::get();
        // dd($region1);
        return view('services.map', array("region1" => $region1));
    }
}
