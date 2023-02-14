<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
$routes = new RouteCollection();
$routes->add('hello', new Route('/hello'));
$routes->add('hai', new Route('/hai'));
$routes->add('greeting', new Route('/greeting/{nama}', ['nama' => 'Surya']));
$routes->add('landing', new Route('/{nama}', ['nama' => 'User']));