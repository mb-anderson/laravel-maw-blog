<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;

    CONST BLOG_STATUS_PENDING = 1;
    CONST BLOG_STATUS_PUBLISH = 2;

    CONST BLOG_STATUSES = [
      self::BLOG_STATUS_PENDING => 'pending',
      self::BLOG_STATUS_PUBLISH => 'publish',
    ];

    protected $appends = ['featured_image_url'];

    protected $fillable = [
        'title',
        'content',
        'url',
        'featured_image',
        'featured_text',
        'category_id',
        'publish_date',
        'status'
    ];

    public function getFeaturedImageUrlAttribute()
    {
        if (file_exists(public_path('storage/blogs/'.$this->featured_image)) && $this->featured_image) {

            $x = env('APP_URL') . "/public" . Storage::url("blogs/{$this->featured_image}");
            return $x;
        }

        return false;
    }
}
