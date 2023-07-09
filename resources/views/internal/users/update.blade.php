@extends('internal.layouts.app')
@section('page_title', 'Kullanıcı')
@section('page_description', 'Kullanıcıyı bu sayfadan düzenleyebilirsiniz.')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mb-3">
                <form id="deleteNewsForm" method="POST" action="{{ route('action.admin.user.delete', $user->id) }}">
                    @csrf
                    <button type="button" onclick="deleteuser()" class="btn btn-danger"><span class="fa fa-trash"></span> Kullanıcıyı Sil</button>
                </form>
            </div>
        </div>

        <form action="{{ route('view.admin.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-12">
                    <label>Adı</label>
                    <input type="text" class="form-control form-control-lg" name="name" id="userName" value="{{ $user->name }}">
                </div>
                <div class="col-12">
                    <label>Soyadı</label>
                    <input type="text" class="form-control form-control-lg" name="surname" id="userSurname" value="{{ $user->surname }}">
                </div>
                <div class="col-12">
                    <label>Email</label>
                    <input type="text" class="form-control form-control-lg" name="email" id="userEmail" value="{{ $user->email }}">
                </div>
                <div class="col-12 mt-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Oluşturulma Tarihi</label>
                            <input type="datetime-local" value="{{ $user->created_at->toDateTimeLocalString() }}" name="date" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label>Yetki</label>
                            <select class="form-control" name="type">
                                    @if($user->type == "admin"){
                                        <option value="admin" selected>Admin</option>
                                        <option value="user" >Kullanıcı</option>
                                    }@else{
                                        <option value="admin" >Admin</option>
                                        <option value="user" selected>Kullanıcı</option>
                                    }
                                    @endif
                            </select>

                        </div>
                        <div class="col-9 mt-3">
                            <label>Şifre</label>
                            <input type="text" name="password" id="password" value="{{ old('password') }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4 text-center">
                    <button class="btn btn-primary btn-block btn-lg" type="submit"><span class="fa fa-check"></span> Kullanıcıyı Güncelle</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        function deleteuser () {
            let r = confirm("Are you sure?");
            if (r === true) {
                $('#deleteNewsForm').submit();
            }
        }
    </script>
@endsection
