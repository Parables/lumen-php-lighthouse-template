<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create your table schema here
    }

    /**
     * Reverse the migrations here...
     *
     * @return void
     */
    public function down()
    {
        // Disable all constraints first
        Schema::disableForeignKeyConstraints();
        // Drop all tables here...

        // Enable foreignKey constraints
        Schema::enableForeignKeyConstraints();
    }
}
