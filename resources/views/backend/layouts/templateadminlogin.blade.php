<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="keywords" content="" />
    <meta name=" description" content="" />
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="brackets">
    <meta name='copyright' content='orange technology solution co.,ltd.'>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link type="image/ico" rel="shortcut icon" href="{{asset('backends/assets/img/favicon.ico')}}">
    @include('backend.layouts.inc_css')
</head>
<body>

    @yield('content')

    @include('backend.layouts.inc_footer')
    @include('backend.layouts.inc_js')

    <script>
        eyePassword = () => {
            const togglePassword = document.querySelector('.icon-eye');
            const password = document.querySelector('#password');

            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

        }
    </script>

</body>
@yield('script')
</html>