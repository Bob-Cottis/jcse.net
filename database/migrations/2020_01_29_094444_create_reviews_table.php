<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration {

	public function up()
	{
		Schema::create('reviews', function(Blueprint $table) {
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
			$table->smallInteger('recommendation')->default('-1');
			$table->text('authorComments')->nullable();
			$table->text('editorComments')->nullable();
			$table->smallInteger('referencingRating')->nullable()->default('-1');
			$table->smallInteger('methodRating')->nullable()->default('-1');
			$table->smallInteger('errorRating')->nullable()->default('-1');
			$table->smallInteger('clarityRating')->nullable()->default('-1');
			$table->smallInteger('correctnessRating')->nullable()->default('-1');
			$table->boolean('deleted')->nullable()->default(NULL);
			$table->binary('file')->nullable();
			$table->text('referencingComment')->nullable();
			$table->text('methodComment')->nullable();
			$table->text('errorComment')->nullable();
			$table->text('correctnessComment')->nullable();
			$table->text('clarityComment')->nullable();
			$table->smallInteger('plagiarismRating')->default('-1');
			$table->smallInteger('legalRating')->default('-1');
			$table->text('plagiarismComment')->nullable();
			$table->text('legalComment')->nullable();
			$table->boolean('saved')->default(False);
			$table->text('log')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('reviews');
	}
}