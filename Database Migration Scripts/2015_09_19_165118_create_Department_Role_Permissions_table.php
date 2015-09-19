<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentRolePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DepartmentRolePermissions', function (Blueprint $table) {			
			$table->increments('id');
			$table->integer('department_id')->unsigned();;					    
			$table->integer('role_id')->unsigned();;					    ;						
			$table->integer('permission_id')->unsigned();;
			$table->dateTime('created');
			$table->dateTime('modified');				
		});
		
		 Schema::table('DepartmentRolePermissions', function($table) {
       $table->foreign('department_id')->references('id')->on('Department');
	   });
	   
	   Schema::table('DepartmentRolePermissions', function($table) {
       $table->foreign('role_id')->references('id')->on('Role');
	   });
	   
	   Schema::table('DepartmentRolePermissions', function($table) {
       $table->foreign('permission_id')->references('id')->on('Permission');
	   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DepartmentRolePermissions');
    }
}
