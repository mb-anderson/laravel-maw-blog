<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function homeView ()
    {
        return view('blogs.home')->with([
            'blogs' => Blog::where('status', Blog::BLOG_STATUS_PUBLISH)
                            ->orderBy('publish_date')
                            ->get(),
        ]);
    }

    public function detailView ($url)
    {
        $blog = Blog::where('url', $url)->first();

        if(!$blog) return redirect()->route('view.home');

        return view('blogs.detail')->with([
            'blog' => $blog
        ]);
    }
}
