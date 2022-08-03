<?php

namespace App\Http\Controllers\PageController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function home(Request $request)
    {
        return view('landing.home', [

        ]);
    }
}
