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
        // Create table for profiles
        Schema::create('profiles', function (Blueprint $table) {
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
            $table->softDeletes();
        });

        // Create table for contacts
        Schema::create('contacts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('profile_id')->constrained();
            $table->char('contact_type', 20);
            $table->string('contact_value')->unique();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // Create table for books
        Schema::create('books', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('cover');
            $table->string('title')->unique();
            $table->char('bookCode', 10)->nullable();
            $table->string('author')->nullable();
            $table->bigInteger('inStock')->unsigned()->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // Create table for courses
        Schema::create('courses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->unique();
            $table->char('courseCode', 10)->nullable();
            $table->tinyInteger('creditHours')->unsigned()->default(3);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // Create table for book_course
        Schema::create('book_course', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('book_id')->constrained();
            $table->foreignUuid('course_id')->constrained();
            $table->softDeletes();
        });


        // Create table for programmes
        Schema::create('programmes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->unique();
            $table->char('programmeCode', 10)->nullable();
            $table->tinyInteger('startLevel')->unsigned()->default(100);
            $table->tinyInteger('endLevel')->unsigned()->default(100);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });


        // Create table for programme_outlines
        Schema::create('outlines', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('programme_id')->constrained();
            $table->tinyInteger('level')->unsigned()->default(100);
            $table->tinyInteger('semester')->unsigned();
            $table->foreignUuid('course_id')->constrained();
            $table->boolean('elective')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // Create table for students
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('profile_id')->constrained();
            $table->foreignUuid('enrollment_id')->constrained();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // Create table for enrollments
        Schema::create('enrollments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('applicationID')->unique();
            $table->string('examsNumber')->unique();
            $table->foreignUuid('student_id')->constrained();
            $table->foreignUuid('programme_id')->constrained();
            $table->string('academicYear');
            $table->tinyInteger('startLevel')->unsigned()->default(100);
            $table->tinyInteger('currentLevel')->unsigned()->default(100);
            $table->tinyInteger('endLevel')->unsigned()->default(100);
            $table->char('status', 20);
            $table->string('description');
            $table->dateTime('enrolled_on');
            $table->dateTime('completed_on');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();

        });


// Create table for fees
        // TODO: Expand this to cater for all incomes & expenses for financial department
        Schema::create('fees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('type');
            $table->string('description')->nullable();
            $table->foreignUuid('programme_id')->constrained();
            $table->tinyInteger('level')->unsigned()->default(100);
            $table->float('amountPayable')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // Create table for payment_records
        // TODO: Expand this to cater for all payments made cornering the university
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
        /*








                // Create table for lecturers
        // TODO: Sync columns with GraphQL Types
        Schema::create('lecturers', function (Blueprint $table) {
            $table->uuid('id')->primary();
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
