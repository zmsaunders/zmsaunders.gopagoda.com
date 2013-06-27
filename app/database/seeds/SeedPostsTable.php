<?php

class SeedPostsTable extends Seeder {

	public function run()
	{
		DB::table('posts')->delete();

		$post = new Post;
		$post->fill(array(
			'title'	=> 'Sample Post',
			'slug' => 'sample-post',
			'summary' => 'This is a post summary',
			'body'	=> '### This is a post body',
			'post_date' => date('y-m-d'),
		));
		$post->save();

		$post = new Post;
		$post->fill(array(
			'title'	=> 'Sample Post Number 2',
			'slug' => 'sample-post-number-2',
			'summary' => 'This is a second post summary',
			'body'	=> '> Derp derp derp',
			'post_date' => date('y-m-d'),
		));
		$post->save();

	}
}
