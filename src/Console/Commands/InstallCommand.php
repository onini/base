<?php

namespace Onini\Base\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'onini:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Install Onini System';
}