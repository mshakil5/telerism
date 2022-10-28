<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function work()
    {
        return view('frontend.work');
    }

    public function medicaltourism()
    {
        return view('frontend.medical');
    }

    public function student()
    {
        return view('frontend.student');
    }

    public function visitBangladesh()
    {
        return view('frontend.visitbd');
    }

    
}
