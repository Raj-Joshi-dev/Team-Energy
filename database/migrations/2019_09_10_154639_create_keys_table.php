<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeysTable extends Migration
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
            $table->integer('tid');
            $table->float('stabilitaetl');
            $table->float('flexibilitaetl');
            $table->float('selbstverwirklichungl');
            $table->float('gemeinsinnl');
            $table->float('stabilitaetr');
            $table->float('flexibilitaetr');
            $table->float('selbstverwirklichungr');
            $table->float('gemeinsinnr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keys');
    }
}
