<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_records', function (Blueprint $table) {
            $table->id();
            $table->string('transactionDate')->nullable(false);
            $table->string('transactionID')->nullable(false);
            $table->float('amountPaid')->nullable(false);
            // $table->foreignId('user_id')->nullable(false)->constrained();
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
        Schema::dropIfExists('payment_records');
    }
}
