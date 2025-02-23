<?php
namespace App\Controllers;

class AdminController extends BaseController
{
    public function datakader()
    {
        if (session()->get('role') !== 'superadmin') {
            return redirect()->to('/dashboard'); // Redirect user biasa
        }
        return view('front/admin/kaderadmin/datakader');
    }


    public function dataeventspesial(): string
    {
        return view('front/admin/eventadmin/spesial/dataeventspesial'); // View untuk event spesial
    }

    public function dataeventrutin(): string
    {
        return view('front/admin/eventadmin/rutin/dataeventrutin'); // View untuk event spesial
    }

    public function datanews(): string
    {
        return view('front/admin/kabaradmin/news/datanews'); // View untuk event spesial
    }
    
    public function dataartikel(): string
    {
        return view('front/admin/kabaradmin/artikel/dataartikel'); // View untuk event spesial
    }


}
