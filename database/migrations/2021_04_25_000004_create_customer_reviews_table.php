<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('customer_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name');
            $table->string('professional');
            $table->string('title');
            $table->longText('description');
            $table->integer('stars');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
