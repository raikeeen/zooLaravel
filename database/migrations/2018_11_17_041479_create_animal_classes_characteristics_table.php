<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalClassesCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_classes_characteristics', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('animal_class_id')->unsigned();
            $table->foreign('animal_class_id')->references('id')->on('animal_classes');

            $table->integer('characteristics_id')->unsigned();
            $table->foreign('characteristics_id')->references('id')->on('characteristics');


            $table->timestamps();

        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_classes_characteristics');

    }
}
