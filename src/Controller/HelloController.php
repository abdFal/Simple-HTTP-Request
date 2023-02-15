<?php
namespace ModernFramework\Controller;
use Symfony\Component\HttpFoundation\Response;
class HelloController
{
    public function landing($nama)
    {
        # code...
        return new Response("Halo Selamat Datang Di Halaman Utama, $nama");
    }
    public function hello(){
        return new Response('Hello World');
}
    public function greet($nama){
        return new Response(sprintf('Selamat Datang, %s', $nama));
}
}