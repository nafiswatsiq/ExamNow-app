<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\QuestionDetail;
use Illuminate\Http\Request;

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

        $question = new QuestionDetail();
        $question->title            = $request->title;
        $question->class            = $request->class;
        $question->teacher          = $request->teacher;
        $question->question_type    = $request->question_type;
        $question->show_value       = $request->show_value;
        $question->duration         = $request->duration;
        $question->time_start       = $request->time_start;
        $question->time_finish      = $request->time_finish;
        $question->date             = $request->date;
        $question->regulation       = $request->regulation;
        $question->code_of_conduct  = $request->code_of_conduct;

        dd($question);
    }
}
