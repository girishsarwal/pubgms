<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserAttributes', function (Blueprint $table) {			
			$table->increments('id');
			$table->integer('user_id')->unsigned();;			
		    $table->string('name');			
			$table->string('phone');
            $table->string('phone_verified');
			$table->string('email');	
			$table->string('email_verification_code');			
			$table->boolean('email_verified')->default(0);
			$table->string('address',1500);
			$table->dateTime('created');
			$table->dateTime('modified');			
		});
		
		 Schema::table('UserAttributes', function($table) {
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
        Schema::dropIfExists('UserAttributes');
    }
}
