<?php

namespace Onini\Base\Providers;

use Illuminate\Support\ServiceProvider;
use Onini\Base\Console\Commands\InstallCommand;

class ConsoleServiceProvider extends ServiceProvider
{
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
		$this->commands([
			InstallCommand::class
		]);
	}
}