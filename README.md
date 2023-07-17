# Multi-Language-Sample-Project-Using-PHP-Codeigniter4
## To run this project need local host like XAMPP Server and MySQL server on XAMPP (Install XAMPP Server)
## Database - MySQL, PHP 8.1.2,XAMPP 8.1.2
## IDE - Visual Studio Code
## [Localization Codeigniter 4 Documentation](https://codeigniter4.github.io/userguide/outgoing/localization.html)
## [You can follow these steps as you want](https://onlinewebtutorblog.com/create-multilingual-website-in-codeigniter-4/#Create_View_Layout_Files)

### Steps :
##### 1) Install XAMPP Server and composer
##### 2) Start Apache server and MySQL server in XAMPP Controler
##### 3) All projects must be created in installed location of XAMPP --> htdocs --> folder name of project (Clone the project to this location)
##### 4) In the folder root (XAMPP --> htdocs --> folder name) you must run ```composer install``` command using CMD in the root folder path
##### 5) To run this project --> In the web browser(Chrome etc) --> localhost/folder_Name/public/ (http://localhost/folderName/public/)
##### 6) Go to chrome and enter URL as → localhost/phpmyadmin (To access MySQL Database) or using MySQL Workbench
##### 7) Create database and tables in MySQL Server you want (todos table used in that project)

# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
