<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammeOutlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programme_outlines', function (Blueprint $table) {
            $table->id();
            $table->boolean('elective')->default(false);
            $table->tinyInteger('level')->unsigned();
            $table->tinyInteger('semester')->unsigned(true);
            $table->float('fees');
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
        Schema::dropIfExists('programme_outlines');
    }
}
