<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('age');

            $table->integer('animal_class_id')->unsigned();
            $table->foreign('animal_class_id')->references('id')->on('animal_classes');

            $table->integer('cage_id')->unsigned();
            $table->foreign('cage_id')->references('id')->on('cages');


            $table->timestamps();

        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal');
    }
}
