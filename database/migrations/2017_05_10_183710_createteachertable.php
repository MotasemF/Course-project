<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createteachertable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          /*  Schema::create('teacher', function (Blueprint $table) {
                $table->increments('id');
                $table->string('username');
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
