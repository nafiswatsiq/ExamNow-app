<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'link',
    ];

    // public function questionDetail(){
    //     return $this->hasMany(QuestionDetail::class);
    // }
}
