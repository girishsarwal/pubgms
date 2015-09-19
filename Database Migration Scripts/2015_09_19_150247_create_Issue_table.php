<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Issue', function (Blueprint $table) {			
			$table->increments('id');
			$table->String('source');			
		    $table->string('category');			
			$table->string('type');
            $table->string('raised_by');
			$table->integer('locality_id')->unsigned();;							    
			$table->string('subject',1500);
			$table->dateTime('created');
			$table->dateTime('modified');			
		});
		
		 Schema::table('Issue', function($table) {
       $table->foreign('raised_by')->references('username')->on('User');
	   });
	   
	   Schema::table('Issue', function($table) {
       $table->foreign('locality_id')->references('id')->on('Constituency_Area');
	   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Issue');
    }
}
