<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIchImTeamBerufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ich_im_team_berufs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('result_id')->unsigned();
            $table->foreign('result_id')->references('result_id')->on('results');
            $table->decimal('beruf_x1');
            $table->decimal('beruf_y1');
            $table->decimal('beruf_x2');
            $table->decimal('beruf_y2');
            $table->decimal('beruf_x3');
            $table->decimal('beruf_y3');
            $table->decimal('beruf_x4');
            $table->decimal('beruf_y4');
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
        Schema::dropIfExists('ich_im_team_berufs');
    }
}
