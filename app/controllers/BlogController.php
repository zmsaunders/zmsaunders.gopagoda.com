<?php
use dflydev\markdown\MarkdownExtraParser;

class BlogController extends BaseController {

	public function __construct()
	{
		$parser = new MarkdownExtraParser();
		View::share('parser', $parser);
	}

	public function getIndex()
	{

		return View::make('blog.posts')->with('posts', Post::latest()->get());

	}

	public function getPost($slug)
	{
		$post = Post::where('slug', $slug)->firstOrFail();
		return View::make('blog.post')->with('post', $post);
	}
}