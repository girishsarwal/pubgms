<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('City', function (Blueprint $table) {			
			$table->increments('id');
			$table->String('name');					    
			$table->integer('state_id')->unsigned();;							    
			$table->dateTime('created');
			$table->dateTime('modified');			
		});
		
		Schema::table('City', function($table) {
       $table->foreign('state_id')->references('id')->on('State');
	   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('City');
    }
}
