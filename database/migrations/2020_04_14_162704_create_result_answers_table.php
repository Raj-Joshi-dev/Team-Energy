<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->bigInteger('result_id')->unsigned();
            $table->foreign('result_id')->references('result_id')->on('results');
            $table->integer('answer_id');
            $table->string('points');
            $table->decimal('value_x');
            $table->decimal('value_y');
            $table->string('name');
            $table->integer('quadrant');
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
        Schema::dropIfExists('result_answers');
    }
}
