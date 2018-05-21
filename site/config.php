<?php namespace ProcessWire;

/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire
 *
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them.
 * 
 * SECURITY NOTICE
 * In non-dedicated environments, you should lock down the permissions of this file so
 * that it cannot be seen by other users on the system. For more information, please
 * see the config.php section at: https://processwire.com/docs/security/file-permissions/
 * 
 * This file is licensed under the MIT license
 * https://processwire.com/about/license/mit/
 *
 * ProcessWire 3.x, Copyright 2016 by Ryan Cramer
 * https://processwire.com
 *
 */

if(!defined("PROCESSWIRE")) die();

/*** SITE CONFIG *************************************************************************/

/** @var Config $config */
$dotenv = new \Dotenv\Dotenv($config->paths->root);
$dotenv->load();

$config->debug = true;
$config->app_name        = getenv('APP_NAME');
$config->app_url         = getenv('APP_url');
$config->app_description = getenv('APP_DESCRIPTION');
$config->app_email       = getenv('APP_EMAIL');
$config->app_phone       = getenv('APP_PHONE');
$config->ga_property     = getenv('GA_PROPERTY');
$config->dbHost   = getenv('DB_HOST');
$config->dbName   = getenv('DB_DATABASE');
$config->dbUser   = getenv('DB_USER');
$config->dbPass   = getenv('DB_PASSWORD');
$config->dbPort   = getenv('DB_PORT');
$config->dbEngine = getenv('DB_ENGINE');
