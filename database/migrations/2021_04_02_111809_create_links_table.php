<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
  public function up()
  {
      Schema::create('links', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->timestamps();
          $table->string('type');
          $table->string('url');

          $table->unsignedBigInteger('person_id');
          $table->foreign('person_id')->references('id')->on('people');
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::dropIfExists('skills');
  }
}
