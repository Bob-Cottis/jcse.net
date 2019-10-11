<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('commAuthor_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('paper_id')->references('id')->on('papers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('editor_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('userprofiles', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('userprofiles', function(Blueprint $table) {
			$table->foreign('orgType_id')->references('id')->on('organizationtypes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('userprofiles', function(Blueprint $table) {
			$table->foreign('language_id')->references('id')->on('languages')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('userprofiles', function(Blueprint $table) {
			$table->foreign('source_id')->references('id')->on('sources')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('userProfile_id')->references('id')->on('userprofiles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('title_id')->references('id')->on('titles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('papers', function(Blueprint $table) {
			$table->foreign('editor_id')->references('id')->on('users')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('papers', function(Blueprint $table) {
			$table->foreign('correspondingAuthor_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('referees', function(Blueprint $table) {
			$table->foreign('paper_id')->references('id')->on('papers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('referees', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('paperauthors', function(Blueprint $table) {
			$table->foreign('paper_id')->references('id')->on('papers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('paperauthors', function(Blueprint $table) {
			$table->foreign('author_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notifies', function(Blueprint $table) {
			$table->foreign('paper_id')->references('id')->on('papers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notifies', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_commAuthor_id_foreign');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_paper_id_foreign');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_editor_id_foreign');
		});
		Schema::table('userprofiles', function(Blueprint $table) {
			$table->dropForeign('userprofiles_category_id_foreign');
		});
		Schema::table('userprofiles', function(Blueprint $table) {
			$table->dropForeign('userprofiles_orgType_id_foreign');
		});
		Schema::table('userprofiles', function(Blueprint $table) {
			$table->dropForeign('userprofiles_language_id_foreign');
		});
		Schema::table('userprofiles', function(Blueprint $table) {
			$table->dropForeign('userprofiles_source_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_userProfile_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_title_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_country_id_foreign');
		});
		Schema::table('papers', function(Blueprint $table) {
			$table->dropForeign('papers_editor_id_foreign');
		});
		Schema::table('papers', function(Blueprint $table) {
			$table->dropForeign('papers_correspondingAuthor_id_foreign');
		});
		Schema::table('referees', function(Blueprint $table) {
			$table->dropForeign('referees_paper_id_foreign');
		});
		Schema::table('referees', function(Blueprint $table) {
			$table->dropForeign('referees_user_id_foreign');
		});
		Schema::table('paperauthors', function(Blueprint $table) {
			$table->dropForeign('paperauthors_paper_id_foreign');
		});
		Schema::table('paperauthors', function(Blueprint $table) {
			$table->dropForeign('paperauthors_author_id_foreign');
		});
		Schema::table('notifies', function(Blueprint $table) {
			$table->dropForeign('notifies_paper_id_foreign');
		});
		Schema::table('notifies', function(Blueprint $table) {
			$table->dropForeign('notifies_user_id_foreign');
		});
	}
}