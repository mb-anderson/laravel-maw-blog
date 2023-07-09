<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function homeView()
    {
        $index = 0;
        $count = 0;
        $blogs = Blog::where('status', Blog::BLOG_STATUS_PUBLISH)
            ->orderBy('publish_date', "desc")
            ->take(9)
            ->get();
        $homeBlogArray = [[],[],[]];
        foreach ($blogs as $blog) {
            array_push($homeBlogArray[$index % 3], $blog);
            $count++;
            if($count % 3 == 0){
                $index++;
            }
        }
        return view('home')->with([
            'blogs' => $homeBlogArray
        ]);
    }

    public function contactView()
    {
        return view('contact');
    }
}