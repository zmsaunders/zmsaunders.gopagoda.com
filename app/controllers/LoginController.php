<?php

class LoginController extends BaseController {

	public function getIndex()
	{
		return View::make('login.form');
	}

	public function postIndex()
	{
		$credentials = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);

		// Did they want to be remembered?
		$remember = (Input::get('remember')) ? true : false;

		if (Auth::attempt($credentials, $remember))
			return Redirect::intended('/'); // Send them to wherever they were headed, or at least back to the homepage

		else
			return Redirect::back()->with('error', true); // Ya done goof'd

	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('login');
	}
}