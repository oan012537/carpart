<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CARPARTSNAVI </title>
    <meta name="keywords" content="" />
    <meta name=" description" content="" />
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="brackets">
    <meta name='copyright' content='orange technology solution co.,ltd.'>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    @yield('matavendor')

    <link type="image/ico" rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- link modal -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- link modal -->
    

    @include('buyer.layouts.inc_stylesheet')

</head>
<body>
   
    @if(!empty(Auth::guard('buyer')))
        @include('buyer.layouts.inc_headerlogin')
    @else
        @include('layouts.inc_header')
    @endif
    
    @yield('content')

    @include('layouts.inc_footer')
    @include('buyer.layouts.inc_js')


    @yield('script')

</body>
</html>