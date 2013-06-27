<?php

class PostController extends BaseController {

	public function __construct()
	{
		// Login, gangsta
		$this->beforeFilter('auth');
	}


	public function getIndex()
	{
		// TODO: List posts for editing, Allow Creation
	}

	public function postIndex()
	{
		// TODO: Handle new post
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