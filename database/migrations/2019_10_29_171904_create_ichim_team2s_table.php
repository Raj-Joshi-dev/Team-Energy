<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIchimTeam2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ichim_team2s', function (Blueprint $table) {
            $table->increments('answer_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->integer('answerGroup1');
            $table->integer('answerGroup2');
            $table->integer('answerGroup3');
            $table->integer('answerGroup4');
            $table->integer('answerGroup5');
            $table->integer('answerGroup6');
            $table->integer('answerGroup7');
            $table->integer('answerGroup8');
            $table->integer('answerGroup9');
            $table->integer('answerGroup10');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ichim_team2s');
    }
}
