<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $sett->name }}</title>
    <link rel="icon" href="{{ asset('uploads/settings/' . $sett->favicon) }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/front/css') }}/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('/front/css') }}/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('/front/css') }}/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('/front/css') }}/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('/front/css') }}/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('/front/css') }}/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('/front/css') }}/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('/front/css') }}/style.css">

    @yield('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
