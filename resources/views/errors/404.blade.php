<!DOCTYPE html>
<html lang="en">
<head>
    <!-- PRECONNECT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://unpkg.com">
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="dns-prefetch" href="https://www.w3.org">
    <link rel="preconnect" href="https://www.w3.org">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- SIMPLE META -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="id-ID">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta name="google" content="notranslate">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="Raihan Interior">
    <meta name="language" content="id">
    <meta name="geo.country" content="id">
    <meta name="geo.placename" content="Indonesia">
    <meta name="robots" content="all,index,follow">
	<meta NAME="Distribution" CONTENT="Global">
	<meta NAME="Rating" CONTENT="General">

    <!-- WEBSITE META -->
    <title>Page Not Found | Raihan Interior</title>
    <meta name="keywords" content="Interior, Raihan Interior, Raihan Interior Official Website">
    <meta name="description" content="Raihan Interior adalah perusahaan yang menyediakan solusi kreatif dalam desain dan penataan ruang.">
    <link rel="icon" type="image/png" href="{{ asset('assets/logo/logo.png') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/public/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/public/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/public/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/public/css/style.css') }}" rel="stylesheet">

    <!-- WAP -->
    <script type="text/javascript" src="{{ asset('assets/public/wap/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/public/wap/floating-wpp.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/public/wap/floating-wpp.min.css') }}">

    <!-- Source Sweet Alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

@section('content')
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="{{ asset('assets/logo/logo.png') }}" width="64" height="64" alt="Icon">
    </div>
    <!-- Spinner End -->
    @include('layouts.public.nav')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">404 Page Not Found</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                    <a class="btn btn-primary py-3 px-5" href="{{ route('home.publik') }}">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->

    @include('layouts.public.footer')
    @include('layouts.public.script')
@endsection

<body>
    @yield('content')
</body>
</html>
