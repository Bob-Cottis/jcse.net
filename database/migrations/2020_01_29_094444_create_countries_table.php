<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	public function up()
	{
		Schema::create('countries', function(Blueprint $table) {
			$table->increments('id');
			$table->string('country');
			$table->char('telCode', 4);
			$table->char('code', 2);
		});
	}

	public function down()
	{
		Schema::drop('countries');
	}
}