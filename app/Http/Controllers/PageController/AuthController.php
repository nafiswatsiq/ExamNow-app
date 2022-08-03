<?php

namespace App\Http\Controllers\PageController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        return view('auth.login', [

        ]);
    }
    public function register(Request $request)
    {
        return view('auth.login', [

        ]);
    }
}
