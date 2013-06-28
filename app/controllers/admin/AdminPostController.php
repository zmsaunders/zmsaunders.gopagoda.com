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
			->with('posts', $posts);
	}

	public function postIndex()
	{
		$rules = array(
			'title' 	=> 'required',
			'slug' 	=> 'required|unique:posts',
			'body'	=> 'required',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
			return Redirect::back()
				->withErrors($validator)
				->withInput();


	}

	public function getEdit($id)
	{
		// TODO: Display post ($id) for editing
	}

	public function postEdit($id)
	{
		// TODO: Update post ($id) with supplied data
	}

}