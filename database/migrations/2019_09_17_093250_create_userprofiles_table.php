<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserprofilesTable extends Migration {

	public function up()
	{
		Schema::create('userprofiles', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('salutation', 100)->nullable();
			$table->string('address1', 100)->nullable();
			$table->string('address2', 100)->nullable();
			$table->string('address3', 255)->nullable();
			$table->string('postCode', 20)->nullable();
			$table->string('telephone', 30)->nullable();
			$table->string('telex', 30)->nullable();
			$table->string('fax', 30)->nullable();
			$table->integer('category_id')->unsigned();
			$table->boolean('willReview')->nullable()->default(True);
			$table->integer('orgType_id')->unsigned()->nullable();
			$table->boolean('admin')->default(False);
			$table->integer('language_id')->unsigned();
			$table->integer('source_id')->unsigned()->nullable();
			$table->boolean('jrnlMail')->nullable()->default(NULL);
		});
	}

	public function down()
	{
		Schema::drop('userprofiles');
	}
}