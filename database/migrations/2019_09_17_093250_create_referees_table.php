<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRefereesTable extends Migration {

	public function up()
	{
		Schema::create('referees', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('paper_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->timestamp('dateSent')->nullable();
			$table->timestamp('dateResponded')->nullable();
			$table->enum('source', array('Author', 'Editor', 'Admin'))->nullable();
			$table->text('notes')->nullable();
			$table->timestamp('dateReminded')->nullable();
			$table->smallInteger('reminderCount')->default('0');
			$table->boolean('agreed')->nullable();
			$table->boolean('completed')->nullable();
			$table->timestamp('dateDropped')->nullable();
			$table->timestamp('dateCompleted')->nullable();
			$table->enum('recommendation', array('reject', 'major_revision', 'minor_revision', 'accept'))->nullable();
			$table->text('authorComments')->nullable();
			$table->text('editorComments')->nullable();
			$table->smallInteger('referenced')->nullable()->default('-1');
			$table->smallInteger('method')->nullable()->default('-1');
			$table->smallInteger('errors')->nullable()->default('-1');
			$table->smallInteger('clarity')->nullable()->default('-1');
			$table->smallInteger('correctness')->nullable()->default('-1');
			$table->boolean('deleted')->nullable()->default(NULL);
			$table->binary('file')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('referees');
	}
}