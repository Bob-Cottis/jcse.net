<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCcsTable extends Migration {

	public function up()
	{
		Schema::create('ccs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('message_id')->unsigned();
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('ccs');
	}
}