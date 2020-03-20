<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKeywordsTable extends Migration {

	public function up()
	{
		Schema::create('keywords', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('keyword', 255)->index()->default('NULL');
			$table->text('log')->nullable();
			$table->boolean('preferred')->default(False);
			$table->mediumInteger('count')->default('1');
			$table->integer('synonym_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('keywords');
	}
}