@extends('layouts.app')
@section('title', 'Anasayfa')
@section('body')

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-6 mt-n4 bg-primary">

    <div class="container">
        <div class="row flex-center">
            <div class="col-lg-6 col-md-5 order-md-1 text-center"><img class="img-fluid" style="max-width:90%" src="{{ asset('common/img/illustrations/WebDevelopment.png') }}" alt="" /></div>
            <div class="col-md-7 col-lg-6 mt-2 text-center text-md-start">
                <h1 class="fw-medium h2 text-light">GAZİ ÜNİVERSİTESİ<br>Bu site Laravel Framework ile yazılmıştır.<br>201816705 Mustafa Burak Yücel</h1> 
                </p>
                <a class="btn btn-lg btn-light btn-glow" style="font-size: 19px;  color: #051350" href="https://www.github.com/mb-anderson" target="_blank">Github <span class="fa fa-chevron-circle-right"></span></a>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pt-6 py-md-8 ">

    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center mb-3">
                <h1>Maware Technology</h1>
                <p class="lead">Maware, istek üzerine / özel web geliştirme konusunda uzmanlaşmış bir şirkettir. Sizinle ortaklaşa çalışarak Mobil uygulamanızı, içerik yönetim sisteminizi ve internet sitelerinizi geliştirebiliriz.
Ayrıca tam bilgisayar teknik desteği sağladığımız için, yazılım ve donanım projelerini daha iyi ve daha büyük projeler için birleştirecek deneyime ve bilgiye sahibiz. </p>
            </div>
        </div>
    </div>

</section>


<section class="pt-5 pt-md-5 pb-4 bg-primary text-light" style="" >

    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-3">
                <h2 class="text-light">Teknolojiler</h2>
                <p class="lead text-muted">Sitenin yapımı için kullanılan teknolojiler açıklanmıştır</p>
            </div>
        </div>
        <div class="row h-100 justify-content-center">

        <div class="col-md-3 mt-3">
                <div class="card card-body h-100 bg-transparent text-center shadow-lg">
                    <div class="text-center pt-4">
                        <img class="img-fluid" style="width:70px" src="{{ asset('common/img/tech/html.svg') }}" alt="" />
                    </div>
                    <h5 class="mt-4 text-light">HTML</h5>
                    <p>
                        HTML web sayfalarının düzenli bir şekilde görüntülenmesinde kullanılan etiketleme dilidir. Bütün web sayfaları HTML ile görüntülenir.
                    </p>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <div class="card card-body h-100 bg-transparent text-center shadow-lg">
                    <div class="text-center pt-4">
                        <img class="img-fluid" style="width:70px" src="{{ asset('common/img/tech/css.svg') }}" alt="" />
                    </div>
                    <h5 class="mt-4 text-light">CSS</h5>
                    <p>
                        CSS web sayfalarının tasarımlarının düzenlenmesinde kullanılan tasarım dilidir. SASS kullanılarak .scss uzantılı SCSS yani programatik CSS yazılabilir. En nihayetinde .scss dosyaları .css dosyalarına dönüştürülecektir. Bu sitede SASS teknolojisi kullanılmıştır.
                    </p>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <div class="card card-body h-100 bg-transparent text-center shadow-lg">
                    <div class="text-center pt-4">
                        <img class="img-fluid" style="width:140px" src="{{ asset('common/img/tech/bootstrap.svg') }}" alt="" />
                    </div>
                    <h5 class="mt-4 text-light">Bootstrap</h5>
                    <p>
                    Bootstrap, web sayfaları veya uygulamalarında kullanılabilecek, HTML ve CSS tabanlı tasarım şablonlarını içerir. Jquery ve SASS kullanarak yazılmıştır.
                    </p>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <div class="card card-body h-100 bg-transparent text-center shadow-lg">
                    <div class="text-center pt-4">
                        <img class="img-fluid" style="width:70px" src="{{ asset('common/img/tech/javascript.svg') }}" alt="" />
                    </div>
                    <h5 class="mt-4 text-light">Javascript</h5>
                    <p>
                        Jquery kütüphanesi Javascript ile yazılmış bir kütüphanedir, sorgularla HTML elementlerine ulaşmayı ve işlem yapmayı sağlar.
                    </p>
                </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card card-body h-100 bg-transparent text-center shadow-lg">
                    <div class="text-center pt-4">
                        <img class="img-fluid" style="width:127px" src="{{ asset('common/img/tech/php.svg') }}" alt="" />
                    </div>
                    <h5 class="mt-4 text-light">Php</h5>
                    <p>PHP sunucu tabanlı bir web programlama dilidir, Laravel PHP dili ile yazılmış bir frameworktür.</p>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <div class="card card-body bg-transparent h-100 text-center shadow-lg">
                    <div class="text-center pt-4">
                        <img class="img-fluid" style="width:90px" src="{{ asset('common/img/tech/laravel.svg') }}" alt="" />
                    </div>
                    <h5 class="mt-4 text-light">Laravel</h5>
                    <p>Laravel kolay kod yazımı sağlayan PHP dili ile yazılmış bir frameworktür. Çok tercih ettiğim bir framework olmamasına rağmen projemi Laravel ile geliştirmek istedim.</p>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <div class="card card-body bg-transparent h-100 text-center shadow-lg">
                    <div class="text-center pt-4">
                        <img class="img-fluid" style="width:90px" src="{{ asset('common/img/tech/symfony.svg') }}" alt="" />
                    </div>
                    <h5 class="mt-4 text-light">Symfony</h5>
                    <p>Laravel frameworkünde Symfony frameworkü kullanılmaktadır.</p>
                </div>
            </div>
            
            <div class="col-md-3 mt-3">
                <div class="card card-body bg-transparent h-100 text-center shadow-lg">
                    <div class="text-center pt-4">
                        <img class="img-fluid" style="width:120px" src="{{ asset('common/img/tech/mysql.svg') }}" alt="" />
                    </div>
                    <h5 class="mt-4 text-light">MySQL</h5>
                    <p>MySQL bir veritabanı yönetim sistemidir. Bu sitede veritabanı yönetim sistemi olarak mysql tercih edilmiştir.</p>
                </div>
            </div>
            
            <div class="col-md-3 mt-3">
                <div class="card card-body  bg-transparent h-100 text-center shadow-lg">
                    <div class="text-center pt-4">
                        <img class="img-fluid" style="height:70px" src="{{ asset('common/img/tech/ubuntu.svg') }}" alt="" />
                    </div>
                    <h5 class="mt-4 text-light">Ubuntu</h5>
                    <p>Ubuntu linux tabanlı bir işletim sistemidir. Geliştirme ortamı olarak Ubuntu sisteminde Visual Studio Code kullanılmıştır. </p>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <div class="card card-body  bg-transparent h-100 text-center shadow-lg">
                    <div class="text-center pt-4">
                        <img class="img-fluid" style="height:70px" src="{{ asset('common/img/tech/apache.svg') }}" alt="" />
                    </div>
                    <h5 class="mt-4 text-light">Apache</h5>
                    <p>
                        Apache bir web sunucusu yazılımıdır.
                    </p>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <div class="card card-body  bg-transparent h-100 text-center shadow-lg">
                    <div class="text-center pt-4">
                        <img class="img-fluid" style="height:100px" src="{{ asset('common/img/tech/vscode.svg') }}" alt="" />
                    </div>
                    <h5 class="mt-4 text-light">VsCode</h5>
                    <p>Visual Studio Code bir metin editörüdür.</p>
                </div>
            </div>

            <div class="col-12 text-center mt-5 pb-4">
                <h3 class="text-light">ve daha fazlası...</h3>
            </div>

        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->

<!-- <section> begin ============================-->
<section class="pt-0 mt-6">

    <div class="container">
        <div class="row flex-center">
            <div class="col-md-8 col-lg-5 text-center">
                <h2>
                    Son Yayınlanan<br />Bloglar</h2>
                <p class="lead">Teknoloji ve yaptıklarımız hakkında yeni şeyler keşfedin.</p>
            </div>
        </div>
        <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
            <div class="carousel-inner">
            @php $checkActive = true;
            @endphp

            @foreach($blogs as $blog)
                <div class="carousel-item {{ $checkActive ? 'active': $checkActive = false }}" data-bs-interval="10000">
                {{ $checkActive ? $checkActive = false : '' }}
                <div class="row h-100">
                    @foreach($blog as $blogObject)
                    <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card h-100">
                                <a href="{{ route('view.blogs.detail', $blogObject->url) }}" class="card-body p-0">
                                    <div class="text-center">
                                    <h3 class="text-center">{{ $blogObject->title }}</h3>
                                    <p class="text-center">{{ $blogObject->featured_text }}</p>
                                        <img class="img-fluid" src="{{ $blogObject->featured_image_url }}"  />
                                        <div class="mt-3 text-center">
                                            <a href="{{ route('view.blogs.detail', $blogObject->url) }}" class="btn btn-primary"> Read More</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        <div>
            <div class="row px-3 px-md-0 mt-4">
                <div class="col-6 position-relative">
                    <ol class="carousel-indicators">
                        <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                        <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                    </ol>
                </div>
                <div class="col-6 position-relative"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->

@endsection
@section('scripts')
    <script>
        $('.card-body').on('mouseenter', function (){
            $(this).removeClass('shadow-lg')
            $(this).addClass('shadow-sm')
        })
        $('.card-body').on('mouseleave', function (){
            $(this).addClass('shadow-lg')
            $(this).removeClass('shadow-sm')
        })
    </script>
@endsection

