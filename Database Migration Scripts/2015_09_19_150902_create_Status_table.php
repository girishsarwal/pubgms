<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Status', function (Blueprint $table) {			
			$table->increments('id');
			$table->String('code');				    			
			$table->string('description',1500);
			$table->dateTime('created');
			$table->dateTime('modified');			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('Status');
    }
}
