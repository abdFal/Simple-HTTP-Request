<?php
require __DIR__.'/vendor/autoload.php';
include  __DIR__ .'/config/routes.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use ModernFramework\Application;
$request = Request::createFromGlobals();
$context = new RequestContext();
$context->fromRequest($request);
$kernel = new Application();
$response = $kernel->handle($request);
$matcher = new UrlMatcher($routes, $context);
$response->send();
