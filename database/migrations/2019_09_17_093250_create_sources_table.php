<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSourcesTable extends Migration {

	public function up()
	{
		Schema::create('sources', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('source', 255)->nullable()->default('NULL');
		});
	}

	public function down()
	{
		Schema::drop('sources');
	}
}