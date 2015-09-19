<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Department', function (Blueprint $table) {			
			$table->increments('id');
			$table->string('code');					    
			$table->string('description',1500);						
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
        Schema::dropIfExists('Department');
    }
}
