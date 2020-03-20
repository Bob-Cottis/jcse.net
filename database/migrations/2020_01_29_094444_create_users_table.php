<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('email', 255)->nullable()->index();
			$table->string('password')->nullable();
			$table->string('remember_token', 100)->nullable()->default('NULL');
			$table->integer('userprofile_id')->unsigned()->nullable();
			$table->string('plainTextPassword', 100)->nullable();
			$table->integer('title_id')->unsigned();
			$table->string('givenName', 255)->nullable();
			$table->string('familyName', 255)->nullable();
			$table->string('organization', 255)->nullable();
			$table->integer('country_id')->unsigned();
			$table->string('source', 10)->nullable()->default('NULL');
			$table->timestamp('email_verified_at')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}