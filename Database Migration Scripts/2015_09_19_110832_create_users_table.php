<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('User', function (Blueprint $table) {				
			$table->increments('id');
			$table->string('username');			
			$table->unique('username');
			$table->string('email');
		    $table->string('password');
			$table->string('name');
			$table->string('department');
			$table->dateTime('created');
			$table->dateTime('modified');
			$table->boolean('enabled')->default(1);
		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('User');
    }
}
