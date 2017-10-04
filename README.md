# Deploy your application to any server with ease.

This Laravel package allows you to easily deploy your application to any server you have SSH access to. While it'll work for pretty much any type of server, it's optimized for [Nucleus](https://www.nucleus.be/en/) managed servers. We take care of the hosting & uptime, you can focus on the application.

You can use this package to deploy on your own servers, Forge servers, ... you name it.

## Installation

In your application, install the package as such:

```
composer require nucleus/laravel-deploy
```

Next, publish the package's content.

```
php artisan vendor:publish --provider=Nucleus\\Deploy\\DeployServiceProvider
```

After the install, the package installs a new `artisan` command to allow you to quickly deploy.

```
php artisan deploy
```

It reads your `.env` file for more information about _where_ to deploy to.

## Configuration

Your `.env` will need the following required parameters.

```
DEPLOY_HOST=
DEPLOY_USER=
DEPLOY_DIR_BASE=
DEPLOY_REPOSITORY=
```

These configurations will be provided to you by our support team, but they're pretty easy to complete yourself, too.

On top of the above, there are the following optional parameters that allow you to finetune the deployment to your liking.

```
DEPLOY_SSH_PORT=22
DEPLOY_DIR_RELEASES=releases
DEPLOY_DIR_PERSISTENT=persistent
DEPLOY_CURRENT=current
DEPLOY_BRANCH=master
DEPLOY_SLACK_WEBHOOK=
DEPLOY_HIPCHAT_WEBHOOK=
```

These can be completed to your liking, to finetune the deployment process.
