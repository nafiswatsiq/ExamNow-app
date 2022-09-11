<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classroom_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('title');
            $table->string('teacher');
            $table->boolean('sort_questions');
            $table->boolean('show_value');
            $table->integer('duration');
            $table->time('time_start');
            $table->time('time_finish');
            $table->date('date');
            $table->text('regulation');
            $table->text('code_of_conduct');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_details');
    }
}
