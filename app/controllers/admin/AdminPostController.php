<?php

class AdminPostController extends BaseController {

	public function __construct()
	{
		// Login, gangsta
		$this->beforeFilter('auth');
	}


	public function getIndex()
	{
		$posts = Post::all();

		return View::make('admin.posts')
			->with('posts', $posts)
			->with('action', 'Create');
	}

	public function postIndex()
	{
		$rules = array(
			'title' 	=> 'required',
			'slug' 		=> 'required|unique:posts',
			'summary'	=> 'required',
			'body'		=> 'required',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
			return Redirect::back()
				->withErrors($validator)
				->withInput();

		// Everything looks good, insert the post!
		$post = new Post;

		$post->title 		= Input::get('title');
		$post->slug 		= Input::get('slug');
		$post->summary 		= Input::get('summary');
		$post->body 		= Input::get('body');
		$post->post_date 	= date('Y-m-d');

		$post->save();

		Session::flash('success', 'Created Post: ' . $post->title);

		// Now back to whence you came, foul beast!
		return Redirect::back();

	}

	public function getEdit($id)
	{
		// Get the post
		$post = Post::find($id);

		if ( ! $post)
			App::abort(404, 'Post not found');

		return View::make('admin.posts')
			->with('post', $post)
			->with('posts', Post::all())
			->with('action', 'Update');


	}

	public function postEdit($id)
	{
		$post = Post::find($id);

		if ( ! $post)
			App::abort(404, 'Post not found');

		$rules = array(
			'title' 	=> 'required',
			'slug' 		=> 'required|unique:posts,slug,' . $id,
			'summary'	=> 'required',
			'body'		=> 'required',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
			return Redirect::back()
				->withErrors($validator)
				->withInput();

		$post->title 	= Input::get('title');
		$post->slug 	= Input::get('slug');
		$post->summary 	= Input::get('summary');
		$post->body 	= Input::get('body');

		$post->save();

		Session::flash('success', 'Updated Post: ' . $post->title);

		// Baby got...
		return Redirect::back();
	}

}