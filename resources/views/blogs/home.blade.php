@extends('layouts.app')
@section('title', 'Blogs')
@section('body')
    <div class="container pb-5 mt-4">
        <h2>Bloglar</h2>
        <p class="lead">Sizin için yazdıklarımız</p>

        <div class="row mt-5">
            @foreach($blogs as $blog)
            <div class="col-md-4 my-3">
                <div class="card bl-card">
                    <img src="{{ $blog->featured_image_url }}" class="img_fluid" style="max-height: 250px; width: 100%">
                    <div class="card-body">
                        <h3 class="text-center">{{ $blog->title }}</h3>
                        <p class="text-center">{{ $blog->featured_text }}</p>
                        <div class="mt-3 text-center">
                            <a href="{{ route('view.blogs.detail', $blog->url) }}" class="btn btn-primary"> Daha Fazla</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection()
