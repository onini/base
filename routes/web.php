<?php

use Illuminate\Routing\Router;

$adminRoute = config('onini.admin_route');

Route::group(['prefix' => $adminRoute], function (Router $router) use ($adminRoute) {
	$router->get('/', function () {
		return 'base system dashboard ' . \Constants::VERSION;
	});
});