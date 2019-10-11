<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKeywordPaperTable extends Migration {

	public function up()
	{
		Schema::create('keyword_paper', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('keyword_id')->unsigned();
			$table->integer('paper_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('keyword_paper');
	}
}