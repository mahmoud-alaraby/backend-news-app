<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Bootstrap News Template - Free HTML Templates</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
    <meta content="Bootstrap News Template - Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/slick/slick-theme.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    @include('FrontEnd.Layouts.Header.top-header')

    <!-- Top Bar Start -->

    <!-- Brand Start -->
    @include('FrontEnd.Layouts.Header.main-headr')
    <!-- Brand End -->

    <!-- Nav Bar Start -->
    @include('FrontEnd.Layouts.Header.nav-header')
    <!-- Nav Bar End -->

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>
    {{-- Main Content --}}

    <!-- Footer Start -->
    @include('FrontEnd.Layouts.Footer.main-footer')
    <!-- Footer End -->

    <!-- Footer Menu Start -->
    @include('FrontEnd.Layouts.Footer.menus-footer')
    <!-- Footer Menu End -->

    <!-- Footer Bottom Start -->
    @include('FrontEnd.Layouts.Footer.bottom-footer')
    <!-- Footer Bottom End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/slick/slick.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
