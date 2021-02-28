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
        Schema::create('people', function (Blueprint $table) {
            // $table->id();
            $table->uuid('id')->primary();
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
            $table->char('maritalStatus', 12)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        Schema::create('contacts', function (Blueprint $table) {
            /*
            $table->id();
            $table->foreignId('person_id')->constrained();
             */
            $table->uuid('id')->primary();
            $table->foreignUuid('person_id')->constrained();
            $table->char('contact_type', 20);
            $table->string('contact_value')->unique();
            $table->char('contact_tags', 20);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        /*
      // Create table for books
        Schema::create('books', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('cover');
            $table->string('title')->unique();
            $table->char('bookCode', 10);
            $table->string('author');
            $table->bigInteger('inStock');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

         // Create table for courses
        Schema::create('courses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->unique();
            $table->char('courseCode', 10);
            $table->integer('creditHours');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        // Create table for book_course
        Schema::create('book_course', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('book_id')->constrained();
            $table->foreignUuid('course_id')->constrained();
        });

        // Create table for programmes
        Schema::create('programmes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->unique();
            $table->char('programmeCode', 10);
            $table->tinyInteger('startLevel')->unsigned();
            $table->tinyInteger('endLevel')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        // Create table for programme_outlines
        Schema::create('programme_outlines', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('programme_id')->nullable(false)->constrained();
            $table->foreignUuid('course_id')->nullable(false)->constrained();
            $table->boolean('elective')->default(false);
            $table->tinyInteger('level')->unsigned();
            $table->tinyInteger('semester')->unsigned(true);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

        });

        // Create table for contacts
        // TODO: Sync columns with GraphQL Types
        Schema::create('contacts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('phone')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('location');
            $table->string('digitalAddress');
            $table->string('postalAddress');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        // Create table for contacts
        // TODO: Create Person

        // Create table for students
        // TODO: Sync columns with GraphQL Types
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('surname')->nullable(false);
            $table->string('otherNames')->nullable(false);
            $table->string('picture');
            $table->dateTime('dob')->nullable(false);
            $table->boolean('gender')->nullable(false);
            $table->foreignUuid('programme_id')->nullable(false)->constrained();
            $table->foreignUuid('contact_id')->nullable(false)->constrained();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

                // Create table for lecturers
        // TODO: Sync columns with GraphQL Types
        Schema::create('lecturers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });


        // Create table for book_records
        Schema::create('book_records', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('book_id')->nullable(false)->constrained();
            $table->foreignUuid('student_id')->nullable(false)->constrained();
            // $table->foreignUuid('user_id')->nullable()->constrained();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        // Create table for fees
        // TODO: Expand this to cater for all incomes & expenses for financial department
        Schema::create('fees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('programme_id')->nullable(false)->constrained();
            $table->tinyInteger('level')->nullable(false);
            $table->float('amountPayable')->nullable(false);
            $table->string('description');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        // Create table for payment_records
        // TODO: Expand this to cater for all payments made corncenring the university
        Schema::create('payment_records', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('transactionDate')->nullable(false);
            $table->string('transactionID')->unique()->nullable(false);
            $table->float('amountPaid')->nullable(false);
            // TODO: Payments should be linked to person not student
            $table->foreignUuid('paidBy')->nullable(false)->constrained('students');
            // $table->foreignUuid('recorded_by')->nullable(false)->constrained('users);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
 */
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
        Schema::dropIfExists('people');
        Schema::dropIfExists('contacts');
        /*    Schema::dropIfExists('book_records');
        Schema::dropIfExists('book_course');
        Schema::dropIfExists('books');
        Schema::dropIfExists('programme_outlines');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('payment_records');
        Schema::dropIfExists('fees');
        Schema::dropIfExists('programmes');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('students');
        Schema::dropIfExists('lecturers'); */
        // Enable foreignKey constraints
        Schema::enableForeignKeyConstraints();
    }
}
