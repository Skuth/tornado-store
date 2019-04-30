<?php
session_start();

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once("vendor/autoload.php");

$config = ['settings' => [
    'displayErrorDetails' => true,
]];

$app = new \Slim\App($config);

require_once("functions.php");
require_once("routes/site.php");

$app->run();
?>