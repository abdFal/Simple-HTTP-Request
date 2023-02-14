<?php
namespace ModernFramework;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
class Application implements HttpKernelInterface
{
public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = true) : Response
{ include __DIR__.'/../config/routes.php';
$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);
try {
$response = new Response();
extract($matcher->match($request->getPathInfo())
);
include sprintf('%s/../%s.php', __DIR__, $_route
);
return $response;
} catch (ResourceNotFoundException $e) {
return new Response('Halaman tidak ditemukan', Response::HTTP_NOT_FOUND);
}}}