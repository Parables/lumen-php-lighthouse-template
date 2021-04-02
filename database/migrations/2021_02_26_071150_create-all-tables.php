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
            $table->jsonb('programmeOutline')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // Create table for students
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('applicationID')->unique();
            $table->string('examsNumber')->unique();
            $table->foreignUuid('profile_id')->constrained();
            $table->string('academicYear');
            $table->foreignUuid('programme_id')->constrained();
            $table->tinyInteger('startLevel')->default(100);
            $table->tinyInteger('currentLevel')->default(100);
            $table->tinyInteger('endLevel')->default(100);
            $table->string('remarks')->nullable();
            $table->foreignUuid('admissionStatus')->constrained('select_options');
            $table->dateTime('admitted_on');
            $table->dateTime('completed_on');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // Create table for enrollments
        Schema::create('enrollments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('student_id')->constrained();
            $table->foreignUuid('semester')->constrained('select_options');
            $table->tinyInteger('level')->unsigned()->default(100);
            $table->foreignUuid('course_id')->constrained();
            $table->foreignUuid('enrollmentStatus')->constrained('select_options');
            $table->string('remarks');
            $table->dateTime('enrolled_on');
            $table->dateTime('completed_on');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();

        });


        // Create table for fees
        Schema::create('fees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('feeType')->constrained('select_options');
            $table->string('description')->nullable();
            $table->float('amountPayable')->unsigned();
            $table->foreignUuid('paymentCycle')->constrained('select_options');
            $table->foreignUuid('paymentMethod')->constrained('select_options');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // Create table for payment_records
        Schema::create('payment_records', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('transactionDate')->nullable(false);
            $table->string('transactionID')->unique()->nullable(false);
            $table->float('amountPaid')->nullable(false);
            $table->foreignUuid('paidBy')->constrained('students');
            $table->tinyInteger('level');
            $table->foreignUuid('semesterType')->constrained('select_options');
            // $table->foreignUuid('recorded_by')->constrained('users);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // Create table for transaction_records
        Schema::create('transaction_records', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('receiptImageUrl');
            $table->dateTime('transactionDate');
            $table->string('transactionID')->unique()->nullable(false);
            $table->char('transactionType', 8);
            $table->foreignUuid('paymentMethod')->constrained('select_options');
            $table->float('amountPaid');
            $table->foreignUuid('paidBy')->constrained('profiles');
            $table->multiLineString('description')->nullable();
            $table->foreignUuid('tags')->constrained('select_options');
            // $table->foreignUuid('recorded_by')->constrained('users);
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
        Schema::dropIfExists('book_course');
        Schema::dropIfExists('books');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('payment_records');
        Schema::dropIfExists('transaction_records');
        Schema::dropIfExists('fees');
        Schema::dropIfExists('programmes');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('students');
        Schema::dropIfExists('enrollments');
        Schema::dropIfExists('lecturers');
// Enable foreignKey constraints
        Schema::enableForeignKeyConstraints();
    }
}
