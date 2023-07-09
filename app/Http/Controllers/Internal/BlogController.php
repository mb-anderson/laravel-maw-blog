<?php

namespace App\Http\Controllers\Internal;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Services\BlogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    public function homeView ()
    {
        return view('internal.blogs.home')->with([
            'blogs' => Blog::all(),
            'blogCategories' => BlogCategory::all('id')
        ]);
    }

    public function createView (Request $request)
    {
        return view('internal.blogs.create')->with([
            'blogStatuses' => Blog::BLOG_STATUSES,
            'blogCategories' => BlogCategory::all(),
        ]);
    }

    public function updateView (Blog $blog, Request $request)
    {
        return view('internal.blogs.update')->with([
            'blog' => $blog,
            'blogStatuses' => Blog::BLOG_STATUSES,
            'blogCategories' => BlogCategory::all(),
        ]);
    }

    public function createAction (Request $request)
    {
        $validateData = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'max:5000',
            'status' => ['required', Rule::in([Blog::BLOG_STATUS_PUBLISH, Blog::BLOG_STATUS_PENDING])],
            'image' => 'nullable|image|max:4096|mimes:jpeg,jpg,png',
            'category_id' => 'required',
            'url' => 'required|unique:blogs,url',
        ]);

        if($validateData->fails())
        {
            Alert::toast($validateData->errors()->first(), 'error');

            return back()->withInput();
        }

        $uploadedImage = null;
        if($request->hasFile('image')) $uploadedImage = BlogService::uploadBlogImage($request->image);


        Blog::create([
            'title' => $request->title,
            'content' => $request->description,
            'url' => $request->url,
            'category_id' => $request->category_id,
            'featured_image' => $uploadedImage,
            'publish_date' => Carbon::parse($request->date)->format('Y-m-d h:i:s'),
            'status' => $request->status,
            'featured_text' => $request->featured_text
        ]);

        Alert::toast('Blog created successfully.', 'success');

        return redirect()->route('view.admin.blogs.home');

    }

    
    public function updateAction (Blog $blog, Request $request)
    {
        $validateData = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'max:5000', 
            'status' => ['required', Rule::in([Blog::BLOG_STATUS_PUBLISH, Blog::BLOG_STATUS_PENDING])],
            'image' => 'nullable|image|max:4096|mimes:jpeg,jpg,png',
            'category_id' => 'required',
            'url' => $request->url != $blog->url ? 'required|unique:blogs,url' : '',
        ]);

        if($validateData->fails())
        {
            Alert::toast($validateData->errors()->first(), 'error');

            return back();
        }

        if($request->hasFile('image')) {

            $uploadedImage = BlogService::uploadBlogImage($request->image);
            BlogService::removeBlogImage($blog); //Remove old image

            $blog->featured_image = $uploadedImage;
        }

        $blog->title = $request->title;
        $blog->content = $request->description;
        $blog->featured_text = $request->featured_text;
        $blog->category_id = $request->category_id;
        $blog->status = $request->status;
        $blog->url = $request->url;
        $blog->publish_date = Carbon::parse($request->date)->format('Y-m-d h:i:s');
        $blog->save();

        Alert::toast('Blog updated successfully.', 'success');

        return back();
    }
}
