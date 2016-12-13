<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('regNo');
            $table->string('category')->nullable();
            $table->integer('seats')->nullable();
            $table->string('model')->nullable();
            $table->string('colour')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('username')->nullable();
            $table->string('image')->default('/assets/img/800x600.png');
            $table->timestamps();

            $table->unique('regNo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('buses');
    }
}
