<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueDepartmentsIssueUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IssueDepartments_IssueUsers', function (Blueprint $table) {			
			$table->increments('id');
			$table->integer('issue_id')->unsigned();;					    
			$table->string('description',1500);
			$table->string('assigned_to');			
			$table->dateTime('created');
			$table->dateTime('modified');	
		});				 
	   
			Schema::table('IssueDepartments_IssueUsers', function($table) {
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
        Schema::dropIfExists('IssueDepartments_IssueUsers');
    }
}
