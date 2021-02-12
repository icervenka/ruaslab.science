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
            $table->string('email');
            $table->string('position');
            $table->string('address_city');
            $table->string('address_state');
            $table->text('bio_text');
            $table->text('quote_text');
            $table->string('quote_source');
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
