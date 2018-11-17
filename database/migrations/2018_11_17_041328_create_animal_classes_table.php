<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
            Schema::create('animal_classes', function (Blueprint $table) {
                $table->increments('id');
                $table->string('titles');


                $table->integer('lock_id')->unsigned();
                $table->foreign('lock_id')->references('id')->on('locks');
                $table->timestamps();

            });    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_classes');
    }
}
