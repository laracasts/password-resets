<?php

class PasswordResetsController extends BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('password_resets.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Password::remind(['email' => Input::get('email')], function($message)
		{
			$message->subject('Your Password Reminder');
		});

		$status = Session::has('error') ? 'Could not find user with that email address.' : 'Please check your email!';

		return Redirect::route('password_resets.create')->withStatus($status);
	}

	public function reset($token)
	{
		return View::make('password_resets.reset')->withToken($token);
	}

	public function postReset()
	{
		$creds = [
			'email' => Input::get('email'),
			'password' => Input::get('password'),
			'password_confirmation' => Input::get('password_confirmation')
		];

		return Password::reset($creds, function($user, $password)
		{
			$user->password = Hash::make($password);
			$user->save();

			return Redirect::route('sessions.create');
		});
	}

}
