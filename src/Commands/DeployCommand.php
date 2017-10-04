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

        exec($envoy .' run deploy --path='. $configPath);
    }
}
