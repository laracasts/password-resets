<?php

class SessionsController extends BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $creds = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];

        if (Auth::attempt($creds))
        {
            return Redirect::intended('admin');
        }

        return Redirect::back()->withInput();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{
        Auth::logout();

        return Redirect::route('sessions.create');
	}

}
