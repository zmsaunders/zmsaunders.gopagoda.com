<?php

class Post extends Eloquent {

	public static function latest()
	{
		return Post::orderby('post_date', 'desc');
	}
}