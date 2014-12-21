<?php
define('PROJECT_ROOT', dirname(dirname(__FILE__)));

require_once(__DIR__ . '/../src/Autoloader.php');

use Serious\Psr4AutoloaderClass;
use Serious\Serious;

$loader = new Psr4AutoloaderClass();
$loader->register();

$loader->addNamespace('Serious', PROJECT_ROOT . '/src');
$loader->addNamespace('Serious', PROJECT_ROOT . '/tests');

$serious = new Serious();
$serious->init();

