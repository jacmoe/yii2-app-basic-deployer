Yii 2 Basic Project Template with Deployer.php support.
==========================================================

Yii 2 Basic Project Template with Deployer.php support is a skeleton [Yii 2](http://www.yiiframework.com/) application for
rapidly creating projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://poser.pugx.org/jacmoe/yii2-app-basic-deployer/v/stable.png)](https://packagist.org/packages/jacmoe/yii2-app-basic-deployer)
[![Total Downloads](https://poser.pugx.org/jacmoe/yii2-app-basic-deployer/downloads.png)](https://packagist.org/packages/jacmoe/yii2-app-basic-deployer)

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      deployer/           contains Deployer recipes
      mail/               contains view files for e-mails
      migrations/         contains migrations
      models/             contains model classes
      shared/             contains files shared between releases
      stage/              contains configuration file for Deployer
      tests/              contains various tests for the application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources


REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------
### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar global require "fxp/composer-asset-plugin:~1.1.1"
php composer.phar create-project --prefer-dist --stability=dev jacmoe/yii2-app-basic-deployer basic
~~~

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://localhost/basic/web/
~~~


CONFIGURATION
-------------
The configuration is handled automatically.

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Refer to the README in the `tests` directory for information specific to basic application tests.
