<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\UniqueId;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Models\QuestionDetail;
use Illuminate\Support\Facades\DB;
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
        $data = User::where('id', auth()->user()->id)->first();
        $classroom = Classroom::where('classroom', $class)->first();
        
        SEOTools::setTitle( $classroom->subjects );
        // dd($classroom->user->where('role', 'student'));
        return view('dashboard.teacher.class', compact('class', 'classroom'));
    }

    // Teacher
    // public function teacher()
    // {
    //     return view('dashboard.teacher.teacher');
    // }

    // Exam
    public function exam()
    {
        SEOTools::setTitle( 'Soal' );

        $list_question = QuestionDetail::where('id', auth()->user()->id)->get();
        // dd($list_question);

        return view('dashboard.teacher.exam', compact('list_question'));
    }

    public function createQuestion()
    {
        SEOTools::setTitle( 'Buat soal' );

        return view('dashboard.teacher.create-question');
    }

    public function createQuestionDetail()
    {
        SEOTools::setTitle( 'Buat soal' );

        $data = User::where('id', auth()->user()->id)->first();
        $class = $data->classroom->sortByDesc('id');

        return view('dashboard.teacher.create-question-detail', compact('class'));
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
    
    public function destroyStudent(Request $request)
    {
        $data = $request->validate([
            'user_id'       => 'required',
        ]);

        DB::table('classroom_user')->where('user_id', $data['user_id'])->delete();

        return redirect()->back();
    }

    public function destroyClassroom(Request $request)
    {
        $data = $request->validate([
            'classroom_id'       => 'required',
        ]);

        DB::table('classrooms')->where('classroom', $data['classroom_id'])->delete();

        return redirect()->route('teacher.coridor-class');
    }

}
