<?php

namespace Nucleus\Deploy;

use Illuminate\Support\ServiceProvider;
use Nucleus\Deploy\Commands\DeployCommand;

class DeployServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/deploy/Envoy.blade.php' => resource_path('deploy/Envoy.blade.php'),
        ], 'template');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/deploy.php', 'deploy');

        $this->app->bind('command.deploy', DeployCommand::class);

        $this->commands([
            'command.deploy',
        ]);
    }
}
