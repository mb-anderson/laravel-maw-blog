@extends('internal.layouts.app')
@section('page_title', 'Kullanıcı')
@section('page_description', 'Bu sayfadan kullanıcı oluşturabilirsiniz.')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('body')
    <div class="container">
        <form action="{{ route('view.admin.user.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label>Adı</label>
                    <input type="text" class="form-control form-control-lg" name="name" id="userName" value="{{ old('name') }}">
                </div>
                <div class="col-12">
                    <label>Soyadı</label>
                    <input type="text" class="form-control form-control-lg" name="surname" id="userSurname" value="{{ old('surname') }}">
                </div>
                <div class="col-12">
                    <label>Email</label>
                    <input type="text" class="form-control form-control-lg" name="email" id="userEmail" value="{{ old('email') }}">
                </div>
                <div class="col-12 mt-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Oluşturulma Tarihi</label>
                            <input type="datetime-local" value="{{ \Carbon\Carbon::now()->toDateTimeLocalString() }}" name="date" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label>Yetki</label>
                            <select class="form-control" name="type">

                                    <option value="admin">Admin</option>
                                    <option value="user">Kullanıcı</option>
                               
                            </select>

                        </div>
                        <div class="col-9 mt-3">
                            <label>Şifre</label>
                            <input type="text" name="password" id="password" value="{{ old('password') }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4 text-center">
                    <button class="btn btn-primary btn-block btn-lg" type="submit"><span class="fa fa-check"></span> Kullanıcı Oluştur</button>
                </div>
            </div>
        </form>
    </div>
@endsection

