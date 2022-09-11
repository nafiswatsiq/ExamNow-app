<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Classroom;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddClassController extends Controller
{
    //
    public function addClass(Request $request)
    {
        // create classroom
        $classroom = new Classroom();
        $classroom->subjects    = $request->subjects;
        $classroom->slug        = Str::slug($request->subjects);
        $classroom->classroom   = random_int(1000000, 9999999);
        // dd($classroom);
        $classroom->save();

        $user_id = auth()->user()->id;
        $classroom->user()->attach($user_id);

        return back();
    }
}
