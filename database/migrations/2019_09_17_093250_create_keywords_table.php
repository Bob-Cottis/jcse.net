<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKeywordsTable extends Migration {

	public function up()
	{
		Schema::create('keywords', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('keyword', 255)->index();
			$table->text('log');
		});
	}

	public function down()
	{
		Schema::drop('keywords');
	}
}