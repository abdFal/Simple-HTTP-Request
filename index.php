<?php

require __DIR__.'/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$response = new Response();
$request = Request::createFromGlobals();
$path = $request->getPathInfo();
$route = ['/hello' => 'hello.php', '/hai' => 'hai.php', '/greet' => 'greeting.php'];
if (isset($route[$path])) {
include $route[$path];
}else{
    $response = new Response();
    // $response -> setContent(sprintf("Not found"));
    $response -> setStatusCode(Response::HTTP_NOT_FOUND);
}

$response -> send();

