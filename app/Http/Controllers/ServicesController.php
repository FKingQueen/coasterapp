<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function mapServices()
    {
        return view('services.map');
    }
}
