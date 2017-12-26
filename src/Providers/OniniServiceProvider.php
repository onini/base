<?php

namespace Onini\Base\Providers;

use Illuminate\Support\ServiceProvider;
use Onini\Base\Support\Helper;

class OniniServiceProvider extends ServiceProvider
{
	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		// Load helpers
		Helper::loadModuleHelpers(__DIR__);

		// Merge configs
		$configs = split_file_with_basename($this->app['files']->glob(__DIR__ . '/../../config/*.php'));

		foreach ($configs as $key => $path) {
			$this->mergeConfigFrom($path, $key);
		}

		// Register base providers
		$this->app->register(ConsoleServiceProvider::class);
		$this->app->register(RouteServiceProvider::class);
	}

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__ . '/../../config' => base_path('config')
		], 'config');
	}
}
