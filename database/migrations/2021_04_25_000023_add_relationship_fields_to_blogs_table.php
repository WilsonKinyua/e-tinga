<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBlogsTable extends Migration
{
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by_id');
            $table->foreign('created_by_id', 'created_by_fk_3510282')->references('id')->on('users');
            $table->unsignedBigInteger('blog_category_id');
            $table->foreign('blog_category_id', 'blog_category_fk_3510288')->references('id')->on('blog_categories');
        });
    }
}
