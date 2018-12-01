<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('author')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('publisher')->nullable();
            $table->string('title_orig')->nullable();
            $table->string('translator')->nullable();
            $table->string('country')->nullable();
            $table->string('language')->nullable();
            $table->integer('subject')->nullable();
            $table->date('pub_date')->nullable();
            $table->string('type')->nullable();
            $table->integer('page')->nullable();
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('books');
    }
}
