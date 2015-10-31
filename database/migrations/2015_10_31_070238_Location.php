<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Location extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('location', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country',25);
	    $table->string('city',40);
            $table->double('latitude',10,7);
	    $table->float('longitude',10,7);
            $table->float('altitude',5,1);
        });
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
