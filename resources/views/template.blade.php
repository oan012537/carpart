<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARPARTSNAVI</title>
    <meta name="keywords" content="" />
    <meta name=" description" content="" />
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="brackets">
    <meta name='copyright' content='orange technology solution co.,ltd.'>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link type="image/ico" rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">

    @include('inc_css')
</head>
<body id="homepage">
    @php
        // dd(Auth::user(),Auth::guard('supplier')->check());
    @endphp
    @if(!Auth::guard('supplier')->check() || !Auth::guard('buyer')->check())
        @include('inc_header')
    @else
        @include('inc_headerlogin')
    @endif


    {{-- @include('inc_slide') --}}

    @yield('content')

    @include('inc_footer')
    @include('inc_js')

    <script src="{{asset('assets/js/slide-homepage.js')}}"></script>

</body>
@yield('script')
</html>