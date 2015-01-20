<?php

class OAuthController extends \BaseController {

	public function token(){
		$bridgedRequest  = OAuth2\HttpFoundationBridge\Request::createFromRequest(Request::instance());
		$bridgedResponse = new OAuth2\HttpFoundationBridge\Response();
		
		$bridgedResponse = App::make('oauth2')->handleTokenRequest($bridgedRequest, $bridgedResponse);
		
		return $bridgedResponse;
	}

	public function privateRequest(){
		$bridgedRequest  = OAuth2\HttpFoundationBridge\Request::createFromRequest(Request::instance());
		$bridgedResponse = new OAuth2\HttpFoundationBridge\Response();
		
		if (App::make('oauth2')->verifyResourceRequest($bridgedRequest, $bridgedResponse)) {
			
			$token = App::make('oauth2')->getAccessTokenData($bridgedRequest);
			
			return Response::json(array(
				'private' => 'stuff',
				'user_id' => $token['user_id'],
				'client'  => $token['client_id'],
				'expires' => $token['expires'],
				'token' => $token
			));
		}
		else {
			return Response::json(array(
				'error' => 'Unauthorized'
			), $bridgedResponse->getStatusCode());
		}
	}

}
