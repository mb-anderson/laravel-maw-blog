@extends('internal.layouts.app')
@section('page_title', 'Bloglar')
@section('page_description', 'Bu sayfadan tüm blogları görüntüleyebilirsiniz')

@section('body')
    <div>
        <table class="table table-bordered table-responsive" id="blogsTable">
            <thead class="bg-primary text-light">
            <tr>
                <th scope="col">Durum</th>
                <th scope="col">Başlık</th>
                <th scope="col">Yayınlanma Tarihi</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td class="text-capitalize"> <span style="font-size: 14px" class="badge badge-{{ $blog->status == \App\Models\Blog::BLOG_STATUS_PUBLISH ? 'success' : 'danger' }}">{{ \App\Models\Blog::BLOG_STATUSES[$blog->status] }}</span> </td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->publish_date }}</td>
                    <td class="text-center"><a href="{{ route('view.admin.blog.update', $blog->id) }}" class="btn btn-primary btn-sm">Edit / Update</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#blogsTable').DataTable();
        } );
    </script>
@endsection
