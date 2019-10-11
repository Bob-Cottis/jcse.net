<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpecialvolumesTable extends Migration {

	public function up()
	{
		Schema::create('specialvolumes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name')->nullable();
			$table->string('description');
			$table->smallInteger('year');
			$table->smallInteger('number');
		});
	}

	public function down()
	{
		Schema::drop('specialvolumes');
	}
}