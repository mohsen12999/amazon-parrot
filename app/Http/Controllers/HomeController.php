<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //
        $menu = 'index';
        $title = 'صفحه اصلی';

        return view('home.index');
    }

    public function about()
    {
        //
        $menu = 'about';
        $title = 'درباره ما';

        return view('home.about');
    }

    public function blogs()
    {
        //
        $menu = 'blogs';
        $title = 'مقالات';

        return view('home.blogs');
    }

    public function blog($id)
    {
        //
        $menu = 'blog';
        $title = '';

        return view('home.blog');
    }

    public function gallery()
    {
        //
        $menu = 'gallery';
        $title = 'گالری';

        return view('home.gallery');
    }
}
