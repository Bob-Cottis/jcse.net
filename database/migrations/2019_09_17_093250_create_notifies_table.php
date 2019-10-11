<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotifiesTable extends Migration {

	public function up()
	{
		Schema::create('notifies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('paper_id')->unsigned();
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('notifies');
	}
}