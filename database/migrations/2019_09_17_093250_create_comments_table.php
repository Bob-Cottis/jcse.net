<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('commAuthor_id')->unsigned();
			$table->string('subject');
			$table->integer('paper_id')->unsigned();
			$table->smallInteger('paragraph');
			$table->boolean('commAuthReg')->nullable()->default(NULL);
			$table->boolean('authorConfirmed')->default(False);
			$table->boolean('authorRejected')->nullable()->default(NULL);
			$table->integer('editor_id')->unsigned();
			$table->boolean('editorConfirmed')->default(False);
			$table->boolean('editorRejected')->default(False);
			$table->string('editorAttnReqd')->nullable()->default(' ');
			$table->boolean('adminAttnReqd')->default(False);
			$table->timestamp('editorConfDate')->nullable();
			$table->timestamp('authConfDate')->nullable();
			$table->timestamp('PAODate')->nullable();
			$table->string('confirmCode', 20);
			$table->text('authorComment')->nullable();
			$table->text('editorComment')->nullable();
			$table->text('commentText');
			$table->boolean('html')->default(False);
			$table->boolean('paperPublished')->default(0);
			$table->smallInteger('revisionNumber')->default('0');
			$table->enum('state', array('caSubmitted', 'caReminded', 'caConfirmed', 'caTimeout', 'edReminded', 'edTimeout', 'adReminded', 'published', 'rejected'));
			$table->text('log')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}