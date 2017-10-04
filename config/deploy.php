<?php

return [

    'deploy' => [

        /*
         * The IP or hostname of the server to deploy to.
         */
        'host' => env('DEPLOY_HOST'),

        /*
         * The username on the server that we deploy to.
         */
        'user' => env('DEPLOY_USER'),

        /*
         * If the host is running SSH on a custom port, you can
         * specify that here. By default, 22 is used.
         */
        'ssh_port' => env('DEPLOY_SSH_PORT', 22),

        /*
         * The base directory of the vhost.
         */
        'dir_base' => env('DEPLOY_DIR_BASE'),

        /*
         * Where to keep all releases on the server. This defaults
         * to the releases/ folder in the base directory.
         */
        'dir_releases' => env('DEPLOY_DIR_RELEASES', 'releases'),

        /*
         * Where to store the persistent data (like logs, user uploads)
         * in the app. By default, this points to a persistent/
         * folder in the base directory.
         */
        'dir_persistent' => env('DEPLOY_DIR_PERSISTENT', 'persistent'),

        /*
         * Where the document root of the vhost points to. By default, this
         * will point to current/, but you can overwrite this and point
         * to htdocs/ or your own preference.
         */
        'current' => env('DEPLOY_CURRENT', 'current'),

        /*
         * Which git repository should be deployed?
         */
        'repository' => env('DEPLOY_REPOSITORY'),

        /*
         * Which git branch should be deployed? By default,
         * the master branch is used.
         */
        'branch' => env('DEPLOY_BRANCH', 'master'),
    ],
];
