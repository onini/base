<?php

use Illuminate\Routing\Router;

Route::group(['prefix' => 'admin'], function (Router $router) {
	$router->get('/', function () {
		return 'base system dashboard ' . \Constants::VERSION;
	});
});