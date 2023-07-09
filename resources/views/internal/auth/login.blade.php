<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Maware - Login</title>
    @include('internal.layouts.styles')

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="{{ asset('common/img/logos/Ai Logo Blue Small.png') }}" style="max-width: 100px">
                                </div>
                                <div class="text-center mt-4 mb-4">
                                    <h1 class="h4 text-gray-900">Hoşgeldiniz!</h1>
                                    <p class="lead">Giriş Yapabilirsiniz</p>
                                </div>
                                @error('error')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <form class="user" method="post" action="{{ route('action.admin.login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                               id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                                               placeholder="Eposta...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="exampleInputPassword"  name="password" placeholder="Şifre...">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Beni Hatırla</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Giriş Yap
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="#">Şifrenizi mi Unuttunuz?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('internal.layouts.scripts')
</body>

</html>
