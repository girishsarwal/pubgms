<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstituencyAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Constituency_Area', function (Blueprint $table) {			
			$table->increments('id');
			$table->String('name');					    
			$table->integer('city_id')->unsigned();;							    
			$table->dateTime('created');
			$table->dateTime('modified');			
		});
		
		Schema::table('Constituency_Area', function($table) {
       $table->foreign('city_id')->references('id')->on('City');
	   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Constituency_Area');
    }
}
