<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanguagesTable extends Migration {

	public function up()
	{
		Schema::create('languages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('language', 20)->nullable();
			$table->char('code', 2)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('languages');
	}
}