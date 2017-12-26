<?php

namespace Onini\Base\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

	protected $namespace = 'Onini\Base\Http\Controllers';

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{

	}

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app->booted(function () {
			Route::middleware('web')
				->namespace($this->namespace)
				->group(__DIR__ . '/../../routes/web.php');
		});
	}
}