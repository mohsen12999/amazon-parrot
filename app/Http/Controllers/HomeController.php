<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        //
        $menu = 'index';
        $title = 'صفحه اصلی';

        $sliders = Slider::all();
        $posts = Post::orderBy('id', 'desc')->take(4)->get();

        return view('home.index', compact('menu','title','sliders','posts'));
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
