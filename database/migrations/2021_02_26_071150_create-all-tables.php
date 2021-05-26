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
        // Create table for select_options
        Schema::create('select_options', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('fieldName');
            $table->uuid('parentID')->nullable();
            $table->string('name')->nullable();
            $table->string('label')->nullable();
            $table->string('value');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // Create table for profiles
        Schema::create('profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('profileType')->constrained('select_options');
            $table->string('picture')->nullable();
            $table->string('title')->nullable();
            $table->string('fullName');
            $table->string('lastName')->nullable();
            $table->string('firstName')->nullable();
            $table->string('middleName')->nullable();
            $table->string('maidenName')->nullable();
            $table->string('otherNames')->nullable();
            $table->string('nickname')->nullable();
            $table->string('prefix')->nullable();
            $table->string('suffix')->nullable();
            $table->string('dob')->nullable();
            $table->char('gender', 6)->nullable();
            $table->foreignUuid('maritalStatus')->nullable()->constrained('select_options');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // Create table for contacts
        Schema::create('contacts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('profile_id')->constrained();
            $table->foreignUuid('contactType')->constrained('select_options');
            $table->string('contactValue')->unique();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
        // Disable all constraints first
        Schema::disableForeignKeyConstraints();
        // Drop all tables
        Schema::dropIfExists('select_options');
        Schema::dropIfExists('profiles');
        Schema::dropIfExists('contacts');
       // Enable foreignKey constraints
        Schema::enableForeignKeyConstraints();
    }
}
