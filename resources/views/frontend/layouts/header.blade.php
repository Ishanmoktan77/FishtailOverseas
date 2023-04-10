<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Fishtail Overseas Pvt. Ltd.</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    {{-- <owl carousel min.js> --}}
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    {{-- owl carousel theme min.css --}}
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">



    <!-- =======================================================
  * Template Name: Medilab - v4.10.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a
                    href="mailto:fishtailoverseas2016@gmail.com">fishtailoverseas2016@gmail.com</a>
                <i class="bi bi-phone"></i> +977 01-4386382, 01-4385664
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/fishtailoverseas" target="blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            {{-- <h1 class="logo me-auto"><a href="{{route('home')}}">Fishtail Overseas</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ route('home') }}" class="me-auto"><img src="assets/img/logo.png" alt=""
                    class="img-fluid" height="60px" width="60px"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link  {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a></li>
                    <li class="dropdown">
                        <a href="#"
                            style="{{ request()->routeIs('aboutUs') || request()->routeIs('legalDocuments')
                                ? 'color:#1ca71c;border-color:#1ca71c;'
                                : '' }}"><span>About</span>
                            <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('aboutUs') }}"
                                    style="{{ request()->routeIs('aboutUs') ? 'color:#1ca71c;' : '' }}">About
                                    Us</a></li>
                            <li><a href="{{ route('legalDocuments') }}"
                                    style="{{ request()->routeIs('legalDocuments') ? 'color:#1ca71c;' : '' }}">Legal
                                    Documents</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"
                            style="{{ request()->routeIs('recruitmentProcess') ||
                            request()->routeIs('sampleDocuments') ||
                            request()->routeIs('categories')
                                ? 'color:#1ca71c;border-color:#1ca71c;'
                                : '' }}"><span>Recuritment</span><i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('recruitmentProcess') }}"
                                    style="{{ request()->routeIs('recruitmentProcess') ? 'color:#1ca71c;' : '' }}">Recruitment
                                    Process</a></li>
                            <li><a href="{{ route('sampleDocuments') }}"
                                    style="{{ request()->routeIs('sampleDocuments') ? 'color:#1ca71c;' : '' }}">Sample
                                    Documents</a></li>
                            <li><a href="{{ route('categories') }}"
                                    style="{{ request()->routeIs('categories') ? 'color:#1ca71c;' : '' }}">Categories
                                    we provide</a></li>
                        </ul>
                    <li><a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}"
                            href="{{ route('services') }}">Services</a></li>
                    <li><a class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}"
                            href="{{ url('/team') }}">Our Team</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="{{ route('contact') }}" class="appointment-btn">Contact Us</a>
        </div>
    </header><!-- End Header -->
