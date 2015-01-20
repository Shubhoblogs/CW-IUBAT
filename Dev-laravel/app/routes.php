<?php

Route::get('/', function()
{
	return View::make('hello');
});

App::singleton('oauth2', function() {

	$storage = new OAuth2\Storage\Mongo(DB::getMongoDB());
	$server = new OAuth2\Server($storage);

	$server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));
	$server->addGrantType(new OAuth2\GrantType\UserCredentials($storage));
	return $server;
});


Route::group(['prefix' => 'api/v1/'], function(){
	//get token
	Route::post('token', 'OAuthController@token');
	Route::get('private', 'OAuthController@privateRequest');

	Route::resource('user', 'UserController', ['only' => ['store', 'update']]);
});
