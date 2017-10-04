<?php

namespace Nucleus\Deploy;

use Illuminate\Support\ServiceProvider;
use nucleus\Deploy\Commands\DeployCommand;

class BackupServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/deploy.php' => config_path('deploy.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/envoy/Envoy.blade.php' => base_path('Envoy.blade.php'),
        ]);
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
