<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBccsTable extends Migration {

	public function up()
	{
		Schema::create('bccs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('message_id')->unsigned();
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('bccs');
	}
}