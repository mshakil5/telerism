<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('frontend.service');
    }

    public function serviceDetails($id)
    {
        $service = Service::where('id','=',$id)->first();
        return view('frontend.service_details', compact('service'));
    }

   
}
