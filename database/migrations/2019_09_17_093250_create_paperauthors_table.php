<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaperauthorsTable extends Migration {

	public function up()
	{
		Schema::create('paperauthors', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('paper_id')->unsigned();
			$table->integer('author_id')->unsigned();
			$table->string('notes', 255)->nullable()->default('NULL');
			$table->smallInteger('authorNum')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('paperauthors');
	}
}