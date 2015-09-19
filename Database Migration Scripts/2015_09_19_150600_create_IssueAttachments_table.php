<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IssueAttachments', function (Blueprint $table) {			
			$table->increments('id');
			$table->integer('issue_id')->unsigned();;					    
			$table->string('resource');
			$table->string('type');			
			$table->dateTime('created');
			$table->dateTime('modified');	
		});	
		
		Schema::table('IssueAttachments', function($table) {
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
       Schema::dropIfExists('IssueAttachments');
    }
}
