<?php 

namespace Thinkcreative\Blankpackage;

use Illuminate\Support\ServiceProvider;

class BlankServiceProvider extends ServiceProvider
{
	/**
     * Bootstrap the application services.
     *
     * @return void
     */
	public function boot() 
	{
		$this->publishes([
			__DIR__.'/config/packageName.php' => config_path('packageName.php')
		]);

		// Register any CSS
		// $this->publishes([
		// 	__DIR__.'/resources/css' => public_path('vendor/packagename')
		// ], 'public');

		//  Register and JS. 
		// $this->publishes([
		// 	__DIR__.'/resources/js' => public_path('vendor/packagename')
		// ], 'public');

		//  Register any images
		// $this->publishes([
		// 	__DIR__.'/resources/images' => public_path('vendor/packagename')
		// ], 'public');


		$this->loadRoutesFrom(__DIR__.'/../../routes/');

		// $this->loadMigrationsFrom(__DIR__.'/database/migrations');

		// $this->loadViewsFrom(__DIR__.'../../resources/views');

		// Register any commands for use in the CLI
		// Uncomment for use.
		
		// if($this->app->runningInConsole())
		// {
		// 	$this->commands([
		// 		FooCommand::class,
		// 		BarCommand::class
		// 	]);
		// }

	}

	/**
     * Register the application services.
     *
     * @return void
     */
	public function register()
	{
		$this->app->singleton(PackageName::class, function() {
			return new PackageName();
		});

		$this->app->alias(PackageName::class, 'package-name');
	}

}