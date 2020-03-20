<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecipientsTable extends Migration {

	public function up()
	{
		Schema::create('recipients', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('message_id')->unsigned();
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('recipients');
	}
}