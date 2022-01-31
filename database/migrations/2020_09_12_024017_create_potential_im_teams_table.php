<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotentialImTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potential_im_teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->unsignedBigInteger('result_id');
            $table->foreign('result_id')->references('id')->on('results')->onDelete('cascade');
//            $table->decimal('privat_x1');
//            $table->decimal('privat_y1');
//            $table->decimal('privat_x2');
//            $table->decimal('privat_y2');
//            $table->decimal('privat_x3');
//            $table->decimal('privat_y3');
//            $table->decimal('privat_x4');
//            $table->decimal('privat_y4');
//            $table->decimal('beruf_x1');
//            $table->decimal('beruf_y1');
//            $table->decimal('beruf_x2');
//            $table->decimal('beruf_y2');
//            $table->decimal('beruf_x3');
//            $table->decimal('beruf_y3');
//            $table->decimal('beruf_x4');
//            $table->decimal('beruf_y4');
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
        Schema::dropIfExists('potential_im_teams');
    }
}
