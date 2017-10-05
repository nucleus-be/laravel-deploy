<?php

namespace Nucleus\Deploy\Commands;

use Exception;
use Illuminate\Console\Command;

class DeployCommand extends Command
{
    /** @var string */
    protected $signature = 'deploy';

    /** @var string */
    protected $description = 'Deploy this Laravel application.';

    public function handle()
    {
        // Envoy has been installed as a dependency of this package, we know
        // it's available in the vendor/bin directory.
        $path = base_path('vendor/bin');
        $envoy = $path .'/envoy';
        $configPath = resource_path('deploy/Envoy.blade.php');

        // TODO: further validate the necessary ENV variables here?

        // If deploy file exists, run the deploy
        if (is_file($configPath)) {
            $fullCommand = $envoy .' run deploy --path='. $configPath;
            passthru($fullCommand);
        } else {
            $this->line('Deploy template not found: '. $configPath);
            $this->line('Did you publish the module in Laravel?');
            $this->line('$ php artisan vendor:publish --provider=Nucleus\\Deploy\\DeployServiceProvider
        ');
            $this->error('Halting deploy, template was not found.');
        }
    }
}
