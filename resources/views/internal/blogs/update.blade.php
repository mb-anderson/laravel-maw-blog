@extends('internal.layouts.app')
@section('page_title', 'Blog')
@section('page_description', 'Blogu bu sayfadan düzenleyebilirsiniz.')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-3">
                <form id="deleteNewsForm" method="POST" action="{{ route('action.admin.blog.delete', $blog->id) }}">
                    @csrf
                    <button type="button" onclick="deleteBlog()" class="btn btn-danger"><span class="fa fa-trash"></span> Blogu Sil</button>
                </form>
            </div>
        </div>

        <form action="{{ route('view.admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <img src="{{ $blog->featured_image_url }}" style="width: 100%; height: 400px">
                </div>
                <div class="col-12">
                    <label>Blog Başlığı</label>
                    <input type="text" class="form-control form-control-lg" name="title" id="blogTitle" value="{{ $blog->title }}">
                </div>
                <div class="col-12 mt-4">
                    <label>Blog İçeriği</label>
                    <textarea id="summernote" name="description" class="form-control shadow-none border-secondary" rows="5">{{ $blog->content }}</textarea>
                </div>
                <div class="col-12 mt-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Yayınlanma Tarihi</label>
                            <input type="datetime-local" value="{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->publish_date)->toDateTimeLocalString() }}" name="date" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label>Durum</label>
                            <select class="form-control" name="status">
                                @foreach($blogStatuses as $blogStatus => $blogStatusName)
                                    <option value="{{ $blogStatus }}" {{ $blog->status == $blogStatus ? 'selected' : '' }}>{{ ucfirst($blogStatusName) }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-4">
                            <label>Öne Çıkan Resim</label><br>
                            <input type="file" name="image" class="mt-1">
                        </div>
                        <div class="col-9 mt-3">
                            <label>Blog Url</label>
                            <input type="text" name="url" id="url" value="{{ $blog->url }}" class="form-control">
                        </div>
                        <div class="col-3 mt-3">
                            <label>Blog Kategorisi</label>
                            <select class="form-control" name="category_id">
                                @foreach($blogCategories as $blogCategory)
                                    <option value="{{ $blogCategory->id }}" {{ $blog->category_id == $blogCategory->id  ? 'selected' : '' }}>{{ ucfirst($blogCategory->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            <label>Öne Çıkan Yazı</label>
                            <textarea class="form-control" rows="2" name="featured_text">{{ $blog->featured_text  }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4 text-center">
                    <button class="btn btn-primary btn-block btn-lg" type="submit"><span class="fa fa-check"></span> Blogu Güncelle</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Blog content...',
                tabsize: 1,
                height: 370,
                lang: "tr-TR",
                toolbar: [
                    ['font', ['bold', 'underline']],
                    ['para', ['paragraph']],
                ]
            });
        });
        $('#eventPrice').on('keyup', function(){
            let eventPrice = $(this).val();
            if(eventPrice > 0)
            {
                $('#eventFreeCheckbox').attr('checked', false)
            }
            else
            {
                $('#eventFreeCheckbox').attr('checked', true)
            }
        })
        $('#blogTitle').on('keyup', function () {
            $('#url').val(toSeoUrl($(this).val()))
        })
        function toSeoUrl(url) {
            return url.toString()
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g,'')
                .replace(/\s+/g,'-')
                .toLowerCase()
                .replace(/&/g,'-and-')
                .replace(/[^a-z0-9\-]/g,'')
                .replace(/-+/g,'-')
                .replace(/^-*/,'')
                .replace(/-*$/,'');
        }
        function deleteBlog () {
            let r = confirm("Are you sure?");
            if (r === true) {
                $('#deleteNewsForm').submit();
            }
        }
    </script>
@endsection
