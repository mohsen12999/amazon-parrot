<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Post;
use App\Models\Image;

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

        return view('home.about', compact('menu','title'));
    }

    public function blogs()
    {
        //
        $menu = 'blogs';
        $title = 'مقالات';

        $posts = Post::orderBy('id', 'desc')->get();

        return view('home.blogs', compact('menu','title','posts'));
    }

    public function blog($id)
    {
        //
        $menu = 'blog';

        $post = Post::find($id);
        $title = $post->title;

        return view('home.blog', compact('menu','title','post'));
    }

    public function gallery()
    {
        //
        $menu = 'gallery';
        $title = 'گالری';

        $images = Image::all();

        return view('home.gallery', compact('menu','title','images'));
    }
}
