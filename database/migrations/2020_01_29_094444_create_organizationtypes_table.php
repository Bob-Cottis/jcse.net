<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganizationtypesTable extends Migration {

	public function up()
	{
		Schema::create('organizationtypes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('organizationType')->unique()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('organizationtypes');
	}
}