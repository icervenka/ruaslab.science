<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('current');
            $table->string('photo');
            $table->string('bg_image');
            $table->string('first_name');
            $table->string('surname');
            $table->string('email')->nullable();
            $table->string('position');
            $table->string('address_city')->nullable();
            $table->string('address_state');
            $table->text('bio_text')->nullable();
            $table->text('quote_text')->nullable();
            $table->string('quote_source')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
