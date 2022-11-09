<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionExam extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'option_5',
    ];
}
