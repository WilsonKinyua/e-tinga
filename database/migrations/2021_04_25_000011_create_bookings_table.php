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
            $table->text('phone')->nullable();
            $table->string('equipment');
            $table->date('order_start_date');
            $table->date('order_end_date');
            $table->decimal('total_cost', 15, 2);
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
