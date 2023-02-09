<?php
use Symfony\Component\HttpFoundation\Response;
$response->setContent(sprintf('Selamat Datang, %s', $request->get('nama')));
