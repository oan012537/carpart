<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('') }}">
    <meta charset="utf-8" />
    <title> Skote - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="backend/images/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="backend/css/bootstrap-dark.min.css" id="bootstrap-dark" rel="stylesheet" type="text/css" />
    <link href="backend/css/bootstrap.min.css" id="bootstrap-light" rel="stylesheet" type="text/css" />
    <link href="backend/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="backend/css/app-rtl.min.css" id="app-rtl" rel="stylesheet" type="text/css" />
    <link href="backend/css/app-dark.min.css" id="app-dark" rel="stylesheet" type="text/css" />
    <link href="backend/css/app.min.css" id="app-light" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="backend/libs/datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="backend/libs/toastr/toastr.min.css">

    <link href="backend/css/custom.css" id="app-light" rel="stylesheet" type="text/css" />

    <script src="backend/libs/jquery/jquery.min.js"></script>
    <script src="backend/libs/bootstrap/bootstrap.min.js"></script>
    <script src="backend/libs/metismenu/metismenu.min.js"></script>
    <script src="backend/libs/simplebar/simplebar.min.js"></script>
    <script src="backend/libs/node-waves/node-waves.min.js"></script>
    <script type="text/javascript">$(function() { $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}}); });</script>

    <!-- Plugins DataTables js -->
    <script src="backend/libs/datatables/datatables.min.js"></script>
    <script src="backend/libs/jszip/jszip.min.js"></script>
    <script src="backend/libs/pdfmake/pdfmake.min.js"></script>

    <!-- Magnific Popup -->
    <script src="backend/libs/toastr/toastr.min.js"></script>

    <!-- App js -->
    <script src="backend/js/app.min.js"></script>
    <script src="backend/js/sweetalert2.all.min.js"></script>

</head>

<body class="c-app flex-row">
    <script>
        var c = localStorage.getItem("theme"),
            tag = document.getElementsByTagName('body').item(0).classList;
        if (c.length > 0) {
            tag.add(c);
        }
    </script>
</body>

</html>

<script>
    const url = '{{@$url}}';
    $(function() {
        Swal.fire({
            title: "{{@$title}}",
            text: "{{@$text}}",
            icon: "error",
            allowOutsideClick: false,
        }).then((result) => {
            if (url == '') {
                window.location = window.location.href;
            } else {
                window.location = url
            }
        });
    })
</script>