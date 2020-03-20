<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKeywordUserTable extends Migration {

	public function up()
	{
		Schema::create('keyword_user', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('keyword_id')->unsigned();
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('keyword_user');
	}
}