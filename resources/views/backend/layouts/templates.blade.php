<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARPASRTSNAVI</title>
    @include('backend.layouts.inc_css')

</head>
<body id="body-pd" class="body-pd buyer">
    @include('backend.layouts.inc_navbar')
    {{-- <div class="content ">
        <h4>Main Components</h4>
    </div> --}}
    @yield('content')
    @include('backend.layouts.inc_footer')
    @include('backend.layouts.inc_js')




</body>
@yield('script')
</html>