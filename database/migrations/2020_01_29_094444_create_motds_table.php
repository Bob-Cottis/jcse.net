<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMotdsTable extends Migration {

	public function up()
	{
		Schema::create('motds', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->timestamp('Start');
			$table->timestamp('finish');
			$table->text('message');
		});
	}

	public function down()
	{
		Schema::drop('motds');
	}
}