<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userCode');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('username')->nullable();
            $table->string('Address')->nullable();
            $table->integer('mobile');
            $table->tinyInteger('status')->dfault(0);
            $table->string('role')->default('user');
            $table->rememberToken();
            $table->timestamps();

            $table->unique('userCode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
