<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //
    public function home(Request $request)
    {
        return view('exam-page.home', [

        ]);
    }
    public function exam(Request $request)
    {
        return view('exam-page.exam', [

        ]);
    }
    public function ujicoba(Request $request)
    {
        return view('exam-page.exam-example', [

        ]);
    }
    public function finish(Request $request)
    {
        return view('exam-page.finish', [

        ]);
    }
}
