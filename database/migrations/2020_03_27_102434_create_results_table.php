<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('answer_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->unsignedBigInteger('kat_id');
            $table->foreign('kat_id')->references('kat_id')->on('categories');
            //$table->string('group')->unsigned();
            //$table->foreign('group')->references('group')->on('users');
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
            $table->integer('answerGroup11');
            $table->integer('answerGroup12');
            $table->integer('answerGroup13');
            $table->integer('answerGroup14');
            $table->integer('answerGroup15');
            $table->integer('answerGroup16');
            $table->integer('answerGroup17');
            $table->integer('answerGroup18');
            $table->integer('answerGroup19');
            $table->integer('answerGroup20');
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
        Schema::dropIfExists('results');
    }
}
