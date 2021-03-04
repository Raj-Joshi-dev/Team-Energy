<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIchImTeamPrivatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ich_im_team_privats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('result_id');
            $table->foreign('result_id')->references('id')->on('results')->onDelete('cascade');
            $table->decimal('privat_x1');
            $table->decimal('privat_y1');
            $table->decimal('privat_x2');
            $table->decimal('privat_y2');
            $table->decimal('privat_x3');
            $table->decimal('privat_y3');
            $table->decimal('privat_x4');
            $table->decimal('privat_y4');
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
        Schema::dropIfExists('ich_im_team_privats');
    }
}
