<?php

namespace Nucleus\Deploy\Commands;

use Exception;

class DeployCommand extends Command
{
    /** @var string */
    protected $signature = 'deploy';

    /** @var string */
    protected $description = 'Deploy this Laravel application.';

    public function handle()
    {
        exec('envoy run deploy');
    }
}
