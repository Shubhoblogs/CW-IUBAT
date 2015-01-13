<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// return the base layout to work with
Route::get('/', function()
{
	return View::make('layout');
});


// application specific routes
Route::group(['prefix' => 'templates'], function()
{
	Route::get('home', 'TemplateController@home');
	
	Route::group(['prefix' => 'user'], function() {
		Route::get('login', 'TemplateController@login');
	});

});





App::singleton('oauth2', function() {
	
	$storage = new OAuth2\Storage\Mongo(DB::getMongoDB());
	$server = new OAuth2\Server($storage);
	
	$server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));
	$server->addGrantType(new OAuth2\GrantType\UserCredentials($storage));
	
	return $server;
});
Route::post('token', 'OAuthController@token');
Route::get('private', 'OAuthController@privateRequest');
