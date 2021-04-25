<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachineryCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('machinery_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->decimal('cost_per_hour', 15, 2);
            $table->decimal('cost_per_day', 15, 2);
            $table->decimal('cost_per_week', 15, 2);
            $table->decimal('cost_per_month', 15, 2);
            $table->string('brand');
            $table->string('manufacturer')->nullable();
            $table->string('model')->nullable();
            $table->string('manufacture_year')->nullable();
            $table->string('digging_depth')->nullable();
            $table->string('maximum_digging_force')->nullable();
            $table->string('weight')->nullable();
            $table->string('rated_power')->nullable();
            $table->string('standard_bucket_capacity')->nullable();
            $table->string('standard_bucket_width')->nullable();
            $table->string('operation_hydraulic_pressure')->nullable();
            $table->string('gradeadility')->nullable();
            $table->string('pressure_to_the_ground')->nullable();
            $table->integer('status');
            $table->decimal('two_way_delivery', 15, 2);
            $table->decimal('total_rental_price_incl_taxes_before', 15, 2);
            $table->decimal('total_rental_price_incl_taxes_after', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
