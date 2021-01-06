<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectors', function (Blueprint $table) {
            $table->id();
            $table->string('for')->unique()->nullable(false);
            $table->timestamps();
        });

        Schema::create('select_options', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('label');
            $table->string('value')->nullable(false);
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
        Schema::dropIfExists('select_options');
    }
}
