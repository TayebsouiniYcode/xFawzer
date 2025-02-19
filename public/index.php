<?php 

$loader = require '../vendor/autoload.php';
$loader->add('AppName', __DIR__.'/../src/');

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();


$controller = new App\Controllers\Controller();

$controller->index();