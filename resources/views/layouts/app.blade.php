
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mburak | @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="{{ asset('common/css/theme.css?v=1.3') }}" rel="stylesheet" />
    
    @yield('styles')

</head>


<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark py-3 sticky-top" style="z-index: 99999">
        <div class="container">
            <a class="navbar-brand" href="{{ route('view.home') }}">
                <img src="{{ asset('common/img/logos/logo.png') }}" class="logo-img"/>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
                    <li class="nav-item"><a class="nav-link {{ Request::routeIs('view.home') ? 'active' : '' }}" style="font-size: 18px" aria-current="page" href="{{ route('view.home')  }}">Anasayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-size: 18px" >Hakkında</a></li>
                    <li class="nav-item dropdown hizmetler" >
                        <a style="font-size: 18px" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hizmetler
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item pb-2" href="#">Özel Yazılım Geliştirme</a></li>
                            <li><a class="dropdown-item pb-2" href="#">İçerik Yönetimi</a></li>
                            <li><a class="dropdown-item pb-2" href="#">Mobil Uygulama</a></li>
                            <li><a class="dropdown-item pb-2" href="#">İnternet Sitesi Geliştirme</a></li>
                            <li><a class="dropdown-item pb-2" href="#">IT Desteği</a></li>
                            <li><a class="dropdown-item pb-2" href="#">Kapalı Devre Güvenlik Kamera Sistemleri</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-size: 18px" >Projeler</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::routeIs('view.blogs.home') ? 'active' : '' }}" href="{{ route('view.blogs.home') }}" style="font-size: 18px" >Bloglar</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::routeIs('view.contact') ? 'active' : '' }}" href="#contact" style="font-size: 18px" >İletişim</a></li>
                </ul>

                <ul class="navbar-nav mx-auto border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
				<li class="nav-item dropdown">
					<a class="btn btn-outline-light rounded-pill order-0 my-3 mb-lg-0 mt-md-0 dropdown-toggle w-100 w-lg-auto" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="fa fa-phone-alt"></span>
						Arayın
					</a>
					<ul class="dropdown-menu rounded-pill mb-3 mb-lg-0" aria-labelledby="navbarDropdown">
						<li>
							<a class="dropdown-item pb-0 rounded-pill" href="tel:+905076000349">
								<span class="fa fa-phone-alt"></span>
								0507 600 0349
							</a>
						</li>
					</ul>
				</li>
			</ul>            </div>
        </div>
    </nav>

    @yield('body')

    <section class="py-5 z-index-1" style="margin-bottom: -10rem">
        <div class="container">
            <div class="card py-5 px-md-5 border-0 shadow-sm">
                <div class="card-body">
                    <div class="row flex-center">
                        <div class="col-12 col-lg-6 text-lg-start">
                            <img src="{{ asset('common/img/anydesk-logo.svg') }}" style="max-width: 160px;">
                            <h2 class="pt-1">Desteğe mi İhtiyacınız Var?</h2>
                            <p class="mb-lg-0">Destek almak için uzak bağlantı aracını indirebilirsiniz.</p>
                        </div>
                        <div class="col-12 col-lg-6 text-lg-end"><a target="_blank" class="btn btn-lg btn-primary hover-top btn-glow text-end" href="https://anydesk.com/en/downloads/"><span class="fa fa-download"></span> Şimdi İndir</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>

    <section class="pt-9 pb-0 bg-primary text-light">

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-3"><a href="#"><img class="d-inline-block align-middle" src="{{ asset('common/img/logos/logo.png') }}" alt="" width="100" /></a>
                    <p class="my-3">
                    Sadece web uygulamaları, web siteleri, e-ticaret siteleri oluşturmuyoruz, bunları da sürdürüyoruz. Gerekli tüm yedeklemeleri ve güncellemeleri / değişiklikleri yapıyoruz.                    </p>
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="#!" class="text-light"><span class="fab fa-facebook fa-2x"></span></a></li>
                        <li class="list-inline-item"><a href="#!" class="text-light"><span class="fab fa-instagram fa-2x"></span></a></li>
                        <li class="list-inline-item"><a href="#!" class="text-light"><span class="fab fa-twitter fa-2x"></span></a></li>
                    </ul>
                    <p class="text-400 my-3">&copy; 2023 Maware Technologhy Mustafa Burak Yücel</p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 mb-3">
                    <h5 class="lh-lg text-light">Hizmetler</h5>
                    <ul class="list-unstyled mb-md-4 mb-lg-0">
                        <li class="lh-lg"><p class="text-300 text-decoration-none mb-0">E-ticaret</p></li>
                        <li class="lh-lg"><p class="text-300 text-decoration-none  mb-0">Online Randevu</p></li>
                        <li class="lh-lg"><p class="text-300 text-decoration-none  mb-0">Hızlı Sipariş</p></li>
                        <li class="lh-lg"><p class="text-300 text-decoration-none  mb-0" >Online Form</p></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-4 col-lg-3 mb-3 ps-xxl-7 ps-xl-5">
                    <h5 class="lh-lg text-light">Şartlar</h5>
                    <ul class="list-unstyled mb-md-4 mb-lg-0">
                        <li class="lh-lg"><a class="text-300 text-decoration-none" href="#">Hizmet Şartları</a></li>
                        <li class="lh-lg"><a class="text-300 text-decoration-none" href="#">Aydınlatma Metni ve Gizlilik Politikası</a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 mb-3">
                    <h5 class="lh-lg text-light" id="contact">İletişim</h5>
                    <ul class="list-unstyled mb-md-4 mb-lg-0">
                        <li class="lh-lg">
                            <p class="mb-0" style="white-space: nowrap;"> <b>İnternet Sitesi:</b> coredb.sonbellek.com</p>
                            <p class="mb-0" style="white-space: nowrap;"> <b>E-mail:</b> mburakyucel38@gmail.com</p>
                            <p class="mb-0" style="white-space: nowrap;"> <b>Telefon:</b> +90 507 600 0349</p>
                        </li>
                    </ul>
                </div>

                <hr class="opacity-25" />
                <div class="text-400 text-center">
                    <p>Design By Maware <br>Maware Bootstrap Themes 
                    </p>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>

</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script><script src="{{ asset('common/vendors/@popperjs/popper.min.js') }}"></script>

<script src="{{ asset('common/vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('common/vendors/is/is.min.js') }}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>

<script src="{{ asset('common/js/theme.js') }}"></script>
<script>
   $(document).ready(function(){
  $(".hizmetler").mouseenter(function(){
    $(".hizmetler > ul").show();
    console.log("se");
  });
  $(".hizmetler").mouseleave(function(){
    $(".hizmetler > ul").hide();
    console.log("se");
  });
});
</script>
@yield('scripts')
</body>

</html>
