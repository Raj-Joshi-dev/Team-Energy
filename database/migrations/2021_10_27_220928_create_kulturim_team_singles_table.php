<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKulturimTeamSinglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kulturim_team_singles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('result_id');
            $table->foreign('result_id')->references('id')->on('results')->onDelete('cascade');
            $table->decimal('kultur_x1');
            $table->decimal('kultur_y1');
            $table->decimal('kultur_x2');
            $table->decimal('kultur_y2');
            $table->decimal('kultur_x3');
            $table->decimal('kultur_y3');
            $table->decimal('kultur_x4');
            $table->decimal('kultur_y4');
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
        Schema::dropIfExists('kulturim_team_singles');
    }
}
