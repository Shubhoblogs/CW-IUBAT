<?php

class UserController extends \BaseController {

	protected $validate = [
		"name" => "required|alpha_spaces",
		"username" => "required|alpha_dash",
		"email" => "required|email",
		"password" => "required|min:6|confirmed",
		"mobile" => "digits:11"
	];

	/**
	 * Display a listing of the resource.
	 * GET /user
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /user/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /user
	 *
	 * @return Response
	 */
	public function store()
	{

		$jsonData = Input::json();
		$data = [
			"name" => $jsonData->get('name'),
			"email" => $jsonData->get('email'),
			"password" => $jsonData->get('password'),
			"password_confirmation" => $jsonData->get('password_confirmation'),
			"username" => $jsonData->get('username'),
			"mobile" => $jsonData->get('mobile')
		];

		$valid = Validator::make($data,$this->validate);
		if($valid->fails()) return Response::json($valid->messages(), 400);
		User::create($data);
		return Response::json(["message" => "Registration Successful!"], 200);
	}

	/**
	 * Display the specified resource.
	 * GET /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /user/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}