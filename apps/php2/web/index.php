<?php

require_once __DIR__.'/../vendor/autoload.php';

/* Silex App Boot */

$app = new Silex\Application();

$app->get('/', function () use ($app) {

    $response = new \Symfony\Component\HttpFoundation\JsonResponse(['response' => 'hello']);

    return $response;
});

$app->run();