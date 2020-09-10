<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tid');
            $table->foreign('tid')->references('tid')->on('questions');
            $table->decimal('ja_x1', 3, 2);
            $table->decimal('ja_y1', 3, 2);
            $table->decimal('eherja_x1', 3, 2);
            $table->decimal('eherja_y1', 3, 2);

            $table->decimal('ja_x2', 3, 2);
            $table->decimal('ja_y2', 3, 2);
            $table->decimal('eherja_x2', 3, 2);
            $table->decimal('eherja_y2', 3, 2);
            $table->string('subkat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
