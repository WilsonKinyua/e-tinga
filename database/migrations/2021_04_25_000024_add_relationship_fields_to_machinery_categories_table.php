<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMachineryCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('machinery_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id', 'category_fk_3707561')->references('id')->on('categories');
        });
    }
}
