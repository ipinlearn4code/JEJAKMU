<?php
namespace App\Controllers;
class FrontController extends BaseController
{

   public function dashboard(): string
    {
        return view('index');
    }

    public function daftarkader(): string
    {
        return view('front/kader/index');
    }

    public function event(string $jenis = 'rutinan'): string
{
    $allowedEvents = ['rutinan', 'spesial'];

    if (!in_array($jenis, $allowedEvents)) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    return view("front/event/{$jenis}");
}

public function jejakkabar(string $jenis = 'news'): string
{
    $allowedEvents = ['news', 'artikel'];

    if (!in_array($jenis, $allowedEvents)) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    return view("front/jejakkabar/{$jenis}");
}





   


}
