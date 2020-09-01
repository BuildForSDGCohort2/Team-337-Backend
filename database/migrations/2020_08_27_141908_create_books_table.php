<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('title');
            $table->string('author');
            $table->string('number_of_pages');
            $table->enum('type', ['science', 'technology', 'engineering', 'mathematics', 'other']);
            $table->enum('level', ['basic', 'high', 'college', 'advanced']);
            $table->longText('description');
            $table->string('thumbnail');
            $table->string('isbn');
            $table->string('price');
            $table->string('url');
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
