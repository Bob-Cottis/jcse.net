<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	public function up()
	{
		Schema::create('messages', function(Blueprint $table) {
			$table->timestamps();
			$table->increments('id');
			$table->string('msgText', 255);
			$table->json('params')->nullable();
			$table->string('subject');
			$table->integer('source_id')->unsigned();
			$table->integer('sender_id')->unsigned();
			$table->string('toText');
			$table->string('fromText');
		});
	}

	public function down()
	{
		Schema::drop('messages');
	}
}