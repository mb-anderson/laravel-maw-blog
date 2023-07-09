<?php


namespace App\Services;


use App\Models\Blog;
use Illuminate\Support\Facades\File;

class BlogService
{
    /**
     * @param $file
     * @return string
     */
    public static function uploadBlogImage ($file): string
    {
        $mediaName = strtotime(date('d.m.Y H:i:s'));
        $mediaFullName =  $mediaName . '.png';
        $file->move(public_path('/storage/blogs/'), $mediaFullName);
        return $mediaFullName;
    }

    /**
     * @param Blog $blog
     */
    public static function removeBlogImage (Blog $blog): void
    {
        if (file_exists(public_path('storage/news/'.$blog->featured_image)))
        {
            File::delete((public_path('storage/news/'.$blog->featured_image)));
        }
    }
}
