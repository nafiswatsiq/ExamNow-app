<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\UniqueId;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();
        $data = UniqueId::where('user_id', $user->id)->first();
        // dd($data->user->name);
        return view('dashboard.teacher.home', compact('user', 'data'));
    }

    // Class
    public function coridorClass()
    {
        return view('dashboard.teacher.coridor-class');
    }
    public function class($class)
    {
        $class;
        return view('dashboard.teacher.class', compact('class'));
    }

    // Teacher
    public function teacher()
    {
        return view('dashboard.teacher.teacher');
    }

    // Exam
    public function exam()
    {
        return view('dashboard.teacher.exam');
    }

    public function createQuestion()
    {
        return view('dashboard.teacher.create-question');
    }

    public function createQuestionDetail()
    {
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
