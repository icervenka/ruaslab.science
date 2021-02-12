<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonTriviaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_trivia', function (Blueprint $table) {
          $table->unsignedBigInteger('person_id');
          $table->foreign('person_id')->references('id')->on('people');

          $table->unsignedBigInteger('trivia_id');
          $table->foreign('trivia_id')->references('id')->on('trivia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_trivia');
    }
}
