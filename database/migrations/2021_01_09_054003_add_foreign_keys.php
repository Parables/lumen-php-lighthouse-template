<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('book_course', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained();
            $table->foreignId('course_id')->constrained();
        });

        Schema::table('programme_outlines', function (Blueprint $table) {
            $table->string('programme_id')->nullable(false)->after('id')->constrained();
            $table->foreignId('course_id')->nullable(false)->after('programme_id')->constrained();
        });

        Schema::table('students', function (Blueprint $table) {
            $table->foreignId('programme_id')->nullable(false)->after('gender')->constrained();
            $table->foreignId('contact_id')->nullable(false)->after('programme_id')->constrained();
        });

        Schema::table('fees', function (Blueprint $table) {
            $table->foreignId('programme_id')->nullable(false)->after('id')->constrained();
        });

        Schema::table('payment_records', function (Blueprint $table) {
             $table->foreignId('paidBy')->nullable(false)->constrained('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
