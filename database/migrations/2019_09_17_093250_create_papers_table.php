<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePapersTable extends Migration {

	public function up()
	{
		Schema::create('papers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->smallInteger('volume');
			$table->smallInteger('paperNumber')->unsigned();
			$table->string('title', 255);
			$table->string('authors', 255)->nullable()->default('NULL');
			$table->string('authorEmail', 255)->nullable();
			$table->integer('editor_id')->unsigned()->nullable();
			$table->timestamp('submissionDate')->nullable();
			$table->timestamp('preprintDate')->nullable();
			$table->boolean('preprintPublished')->default(False);
			$table->timestamp('publicationDate')->nullable();
			$table->boolean('paperPublished')->default(False);
			$table->boolean('enableComments')->default(False);
			$table->timestamp('acknowledgedPreprint')->nullable();
			$table->boolean('revisionRequired')->nullable();
			$table->string('preprintURL', 100)->nullable();
			$table->string('paperURL', 100)->nullable();
			$table->string('keywords')->nullable();
			$table->text('revisionMessage')->nullable();
			$table->text('notes')->nullable();
			$table->text('abstract')->nullable();
			$table->text('status')->nullable();
			$table->boolean('admin_attn_rqd')->default(False);
			$table->boolean('ed_attn_rqd')->default(False);
			$table->timestamp('pp_conf_date')->nullable();
			$table->boolean('refs_assigned')->default(False);
			$table->timestamp('revisionReceived')->nullable();
			$table->boolean('paperHTML')->default(False);
			$table->boolean('preprintHTML')->default(True);
			$table->smallInteger('revisionNumber')->unsigned()->default('1');
			$table->integer('correspondingAuthor_id')->unsigned()->nullable();
			$table->enum('state', array('submit_1', 'submit_2', 'paRevise', 'submitted', 'preprintOK', 'revNominated', 'adRevCheck', 'revApproved', 'revOK', 'editorReview', 'published', 'reviseDisplay', 'reviseHidden', 'deleted', 'withdrawn'));
			$table->text('log')->nullable();
			$table->timestamp('state_updated_at')->nullable();
			$table->string('confirmCode', 30)->nullable()->default('NULL');
		});
	}

	public function down()
	{
		Schema::drop('papers');
	}
}