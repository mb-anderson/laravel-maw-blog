@extends('layouts.app')
@section('title', $blog->title)
@section('body')
    <div class="container-sm px-md-5 pb-5 mt-4">
        <div class="pb-3">
            <a href="{{ route('view.blogs.home') }}" class="btn btn-primary"><span class="fa fa-chevron-left"></span> Geri Dön</a>
        </div>
        <div class="text-center">
            <img src="{{ $blog->featured_image_url }}" style="max-height: 600px; width: 100%">
        </div>
        <h2 class="text-center mt-3">{{ $blog->title }}</h2>
        <div>
           {!! $blog->content !!}
        </div>
    </div>
@endsection()
