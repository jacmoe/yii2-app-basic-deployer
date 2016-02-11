Yii 2 Basic Project Template with Deployer.php support.
==========================================================

Yii 2 Basic Project Template with Deployer.php support is a skeleton [Yii 2](http://www.yiiframework.com/) application for
rapidly creating projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://poser.pugx.org/jacmoe/yii2-app-basic-deployer/v/stable.png)](https://packagist.org/packages/jacmoe/yii2-app-basic-deployer)
[![Total Downloads](https://poser.pugx.org/jacmoe/yii2-app-basic-deployer/downloads.png)](https://packagist.org/packages/jacmoe/yii2-app-basic-deployer)

HOW IS THIS DIFFERENT FROM STANDARD BASIC APP?
----------------------------------------------
* This project can be deployed by Deployer
* `config/db.php` and `yii` is generated automatically
* An `.htaccess` is added to the `web` folder and *FollowSymlinks* is turned on.
* Project can be served directly from source on the development machine, but this requires manual setup - namely creating `yii` and `config/db.php`.

HOW DOES IT WORK?
-----------------
See my blog post [Deploying Yii with Deployer](https://jacmoe.dk/blog/2016/january/deploying-yii-with-deployer)

RELATED
--------
See also [yii2-app-advanced-deployer](https://github.com/jacmoe/yii2-app-advanced-deployer)

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      deployer/recipe     contains Deployer recipes
      deployer/templates  contains templates configured by Deployer
      deployer/stage      contains configuration file for Deployer
      mail/               contains view files for e-mails
      migrations/         contains migrations
      models/             contains model classes
      tests/              contains various tests for the application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources


REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.

## Deployer

* [Download deployer.phar](http://deployer.org/deployer.phar)
~~~
mv deployer.phar /usr/local/bin/dep
chmod +x /usr/local/bin/dep
~~~
For more, see [Deployer - Installation](http://deployer.org/docs/installation)


INSTALLATION
------------
## Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar global require "fxp/composer-asset-plugin:~1.1.1"
php composer.phar create-project --prefer-dist --stability=dev jacmoe/yii2-app-basic-deployer basic
~~~

## Deployment

### servers.yml
First, create a file entitled `servers.yml` in the `deployer/stage` directory.  
You can copy the contents of `servers-sample.yml` to get you started.
### Create db on server
Prior to deployment, make sure that you have created a database on the server you want to deploy to.

### deploy command
When you have created a server configuration file, all you need to do is run this command:

~~~
dep deploy production
~~~
or
~~~
dep deploy local
~~~

**Note** that the server configuration for the local stage needs to have a key called `local` because that will make Deployer create a local server that doesn't use ssh.  
If the active stage does not have local set for the server, you need an ssh server on your local machine (`sudo apt-get install openssh-server`).

#### Configure without deploy
It is very common to serve the project in place when developing, and therefore this project template ships with a function to configure files, set writable directories and install vendors.

Simply run:
~~~
dep inplace local
~~~
This command assumes that you've set the deploy dir in the `servers.yml` configuration file to point to your current source directory (the directory you are in).

CONFIGURATION
-------------
The configuration is handled automatically from the values you wrote in `servers.yml` using the templates in `deployer/templates`.

**NOTES:**
- Refer to the README in the `tests` directory for information specific to basic application tests.
