<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\UniqueId;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Facades\SEOTools;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOTools::setTitle('Dashboard');
        
        $user = Auth::user();
        $data = User::where('id', auth()->user()->id)->first();
        // dd($data->classroom->first()->name);
        return view('dashboard.teacher.home', compact('user', 'data'));
    }

    // Class
    public function coridorClass()
    {
        SEOTools::setTitle('Kelas');

        $data = User::where('id', auth()->user()->id)->first();
        $class = $data->classroom->sortByDesc('id');
        // dd($data->classroom->sortByDesc('id'));
        return view('dashboard.teacher.coridor-class' , compact('data', 'class'));
    }
    public function class($class)
    {
        SEOTools::setTitle( $class );

        $class;
        $data = User::where('id', auth()->user()->id)->first();
        $classroom = Classroom::where('slug', $class)->first();
        // dd($classroom->user->where('role', 'student'));
        return view('dashboard.teacher.class', compact('class', 'classroom'));
    }

    // Teacher
    public function teacher()
    {
        return view('dashboard.teacher.teacher');
    }

    // Exam
    public function exam()
    {
        SEOTools::setTitle( 'Soal' );

        return view('dashboard.teacher.exam');
    }

    public function createQuestion()
    {
        SEOTools::setTitle( 'Buat soal' );

        return view('dashboard.teacher.create-question');
    }

    public function createQuestionDetail()
    {
        SEOTools::setTitle( 'Buat soal' );

        return view('dashboard.teacher.create-question-detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
