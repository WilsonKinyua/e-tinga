<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer');
            $table->string('address');
            $table->integer('phone')->nullable();
            $table->string('equipment');
            $table->datetime('order_start_date');
            $table->datetime('order_end_date');
            $table->decimal('total_cost', 15, 2);
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
