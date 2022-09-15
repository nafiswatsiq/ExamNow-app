<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\QuestionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CreateQuestionController extends Controller
{
    public function createQuestionDetail(Request $request)
    {
        $request->validate([
            'title'             => 'required',
            'class'             => 'required',
            'teacher'           => 'required',
            'duration'          => 'required',
            'time_start'        => 'required',
            'time_finish'       => 'required',
            'date'              => 'required',
            'regulation'        => 'required',
            'code_of_conduct'   => 'required',
        ]);

        $class = $request->class;
        foreach ($class as $data_class){
            $question = new QuestionDetail();
            $question->title            = $request->title;
            $question->classroom_id     = $data_class;
            $question->user_id          = auth()->user()->id;
            $question->teacher          = $request->teacher;
            $question->sort_questions   = $request->sort_questions;
            $question->show_value       = $request->show_value;
            $question->duration         = $request->duration;
            $question->time_start       = $request->time_start;
            $question->time_finish      = $request->time_finish;
            $question->date             = Carbon::parse($request->date)->translatedFormat('Y-m-d');
            $question->regulation       = $request->regulation;
            $question->code_of_conduct  = $request->code_of_conduct;
    
            $question->save();
        }

        return redirect()->route('teacher.create-question');
    }
}
