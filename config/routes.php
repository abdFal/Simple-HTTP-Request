<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
$routes = new RouteCollection();
$routes->add('hello', new Route('/hello', ['_controller' => 'ModernFramework\Controller\HelloController::hello']));
$routes->add('hai', new Route('/hai'));
$routes->add('greeting', new Route('/greeting/{nama}', ['nama' => 'User', '_controller' => 'ModernFramework\Controller\HelloController::greet']));
$routes->add('landing', new Route('/{nama}', ['nama' => 'User', '_controller' => 'ModernFramework\Controller\HelloController::landing']));