<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\ExamLink;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\QuestionDetail;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\OptionExam;
use App\Models\Questions;
use Symfony\Component\Console\Question\Question;

class CreateQuestionController extends Controller
{
    public function createQuestionDetail(Request $request)
    {
        $randStr = Str::random(15);
        $exam_link = new ExamLink();
        $exam_link->user_id     = auth()->user()->id;
        $exam_link->link        = $randStr;
        $exam_link->save();

        $request->validate([
            'title'             => 'required',
            // 'class'             => 'required',
            'teacher'           => 'required',
            'duration'          => 'required',
            'time_start'        => 'required',
            'time_finish'       => 'required',
            'date'              => 'required',
            'regulation'        => 'required',
            'code_of_conduct'   => 'required',
        ]);

        // $class = $request->class;
        // foreach ($class as $data_class){
            $question = new QuestionDetail();
            // $question->classroom_id     = $data_class;
            $question->user_id          = auth()->user()->id;
            $question->exam_link_id     = ExamLink::where('link', $randStr)->first()->id;
            $question->title            = $request->title;
            $question->teacher          = $request->teacher;
            $question->sort_questions   = $request->sort_questions;
            $question->show_grade       = $request->show_grade;
            $question->duration         = $request->duration;
            $question->time_start       = $request->time_start;
            $question->time_finish      = $request->time_finish;
            $question->date             = Carbon::parse($request->date)->translatedFormat('Y-m-d');
            $question->regulation       = $request->regulation;
            $question->code_of_conduct  = $request->code_of_conduct;
    
            $question->save();
        // }

        return redirect('teacher/create-question/'. $randStr .'/1');
    }

    public function saveQuestion(Request $request)
    {
        $request->validate([
            'question'       => 'required',
            'true_option'    => 'required',
            'option_1'       => 'required',
            'option_2'       => 'required',
            'option_3'       => 'required',
            'option_4'       => 'required',
            'option_5'       => 'required',
            'path'           => 'required',
            'number'         => 'required',
        ]);

        $id_exam_link = ExamLink::where('link', $request->path)->first()->id;
        $unique = Str::random(20);

        $question = new Questions();
        $question->exam_link_id = $id_exam_link;
        $question->no           = $request->number;
        $question->unique       = $unique;
        $question->question     = $request->question;
        $question->true_option  = $request->true_option;
        $question->save();

        $id_question = Questions::where('unique', $unique)->first()->id;
        
        $option = new OptionExam();
        $option->question_id    = $id_question;

        if($request->file('option_1')){
            $file= $request->file('option_1');
            $filename= date('YmdHi'). '_' .uniqid().'.'.$file->extension();
            $file-> move(public_path('storage/option'), $filename);
            $option->option_1 = $filename;
        }else{
            $option->option_1 = $request->option_1;
        }

        if($request->file('option_2')){
            $file= $request->file('option_2');
            $filename= date('YmdHi'). '_' .uniqid().'.'.$file->extension();
            $file-> move(public_path('storage/option'), $filename);
            $option->option_2 = $filename;
        }else{
            $option->option_2 = $request->option_2;
        }

        if($request->file('option_3')){
            $file= $request->file('option_3');
            $filename= date('YmdHi'). '_' .uniqid().'.'.$file->extension();
            $file-> move(public_path('storage/option'), $filename);
            $option->option_3 = $filename;
        }else{
            $option->option_3 = $request->option_3;
        }

        if($request->file('option_4')){
            $file= $request->file('option_4');
            $filename= date('YmdHi'). '_' .uniqid().'.'.$file->extension();
            $file-> move(public_path('storage/option'), $filename);
            $option->option_4 = $filename;
        }else{
            $option->option_4 = $request->option_4;
        }

        if($request->file('option_5')){
            $file= $request->file('option_5');
            $filename= date('YmdHi'). '_' .uniqid().'.'.$file->extension();
            $file-> move(public_path('storage/option'), $filename);
            $option->option_5 = $filename;
        }else{
            $option->option_5 = $request->option_5;
        }
        $option->save();
        
        return redirect('teacher/create-question/'. $request->path .'/'. $request->number + 1);

    }
}
