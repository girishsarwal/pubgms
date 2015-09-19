<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IssueHistory', function (Blueprint $table) {			
			$table->increments('id');
			$table->integer('issue_id')->unsigned();;					    
			$table->string('description',1500);
			$table->string('assigned_to');
			$table->integer('status_id')->unsigned();;
			$table->dateTime('created');
			$table->dateTime('modified');	
		});	
			 Schema::table('IssueHistory', function($table) {
       $table->foreign('status_id')->references('id')->on('Status');
	   });
	   
			Schema::table('IssueHistory', function($table) {
       $table->foreign('issue_id')->references('id')->on('Issue');
	   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('IssueHistory');
    }
}
