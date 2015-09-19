<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('UserRole', function (Blueprint $table) {			
			$table->increments('id');
			$table->integer('user_id')->unsigned();;			
		    $table->string('role_id');			
			$table->dateTime('created');
			$table->dateTime('modified');			
		});
		
	   Schema::table('UserRole', function($table) {
       $table->foreign('user_id')->references('id')->on('User');
   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('UserRole');
    }
}
