<?php

namespace App\Http\Controllers\PageController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;

class LandingController extends Controller
{
    //
    public function home(Request $request)
    {
        SEOTools::setTitle('Home');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl( config('app.url') );
        SEOTools::setCanonical( config('app.url') );
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite( config('app.url') );
        SEOTools::jsonLd()->addImage( asset('image/logo.png') );
        
        return view('landing.home', [

        ]);
    }
}
