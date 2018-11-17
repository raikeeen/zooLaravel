<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('width');
            $table->integer('height');
            $table->integer('number');
            $table->boolean('door_locked');

            //внешний ключ для связи с таблицей locks
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
        Schema::dropIfExists('cages');
    }
}
