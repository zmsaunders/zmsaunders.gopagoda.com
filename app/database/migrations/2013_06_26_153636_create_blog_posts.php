<?php

use Illuminate\Database\Migrations\Migration;

class CreateBlogPosts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table) {
			$table->increments('id');
			$table->string('slug', 255);
			$table->string('title', 255);
			$table->text('summary');
			$table->text('body');
			$table->date('post_date');
			$table->timestamps();
			$table->index('slug');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}