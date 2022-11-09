<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'classroom_id',
        'user_id',
        'teacher',
        'sort_questions',
        'show_value',
        'duration',
        'time_start',
        'time_finish',
        'date',
        'regulation',
        'code_of_conduct',
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function classroom(){
        return $this->belongsTo(Classroom::class);
    }

    public function examLink(){
        return $this->belongsTo(ExamLink::class);
    }
}
