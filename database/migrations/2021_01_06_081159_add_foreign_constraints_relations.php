<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignConstraintsRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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

        Schema::table('select_options', function (Blueprint $table) {
            $table->foreignId('selector_id')->after('id')->nullable(false)->constrained();
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->foreignId('group')->after('id')->nullable(false)->constrained('select_options');
        });

        Schema::table('payment_records', function (Blueprint $table) {
            $table->foreignId('paymentMethod')->nullable(false)->after('amountPaid')->constrained('select_options');
            $table->foreignId('bank')->nullable(false)->after('paymentMethod')->constrained('select_options');
            $table->foreignId('bankBranch')->nullable(false)->after('bank')->constrained('select_options');
            $table->foreignId('paidBy')->nullable(false)->after('bankBranch')->constrained('students');
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
