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
            $table->bigIncrements('id')->index();
            $table->string('title');
            $table->string('author')->nullable();
            $table->string('contents')->nullable();
            $table->integer('points')->unsigned()->nullable();
            $table->string('genre')->nullable();
            $table->boolean('is_done')->default(false); //読み終わったか、読みたい本か
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
