<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Typhoon;
use App\Models\TyphoonRecord;

class ServicesController extends Controller
{
    public function mapServices()
    {
        $province = Province::get();
        $typhoon = Typhoon::get();
        $typhoonRecord = TyphoonRecord::get();
        // dd($typhoonRecord);
        return view('services.map', array("provinces" => $province, "typhoons" => $typhoon, "typhoonRecords" => $typhoonRecord));
    }
}
