<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARPASRTSNAVI</title>
    @include('supplier.layouts.inc_css')

</head>
<body id="body-pd" class="body-pd buyer">
    
    @include('supplier.layouts.inc_menu')

    @yield('content')
    

    @include('supplier.layouts.inc_js')
    @yield('script')

</body>

</html>