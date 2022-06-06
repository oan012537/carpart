<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{url("")}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <meta name="keywords" content="" />
    <meta name=" description" content="" />
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="brackets">
    <meta name='copyright' content='orange technology solution co.,ltd.'>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link type="image/ico" rel="shortcut icon" href="assets/img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="assets/css/login3.css" rel="stylesheet">

    @include('inc_stylesheet')
</head>

<body>

    <section id="sec-login1">
        <div class="container">
            <div class="box-b-login">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="img-img-log">
                            <img src="assets/img/login/ln1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="h-text-log">
                            <p>
                                ยืนยันรหัส OTP
                            </p>
                        </div>
                        <div class="text-tt-hd">
                            กรุณากรอก OTP ที่ส่งไปยังหมายเลข
                        </div>
                        <br>
                        <div class="tt-text-log">
                            <p>
                                012-345-6789
                            </p>
                        </div>
                        <br>
                        <div class="box-bb-num">
                            <img src="assets/img/login/b.png" class="img-fluid" alt="">
                            <img src="assets/img/login/b.png" class="img-fluid" alt="">
                            <img src="assets/img/login/b.png" class="img-fluid" alt="">
                            <img src="assets/img/login/b.png" class="img-fluid" alt="">
                            <img src="assets/img/login/b.png" class="img-fluid" alt="">
                            <img src="assets/img/login/b.png" class="img-fluid" alt="">
                        </div>
                        <br>
                        <div class="tt-text-re-num">
                            <p>
                                หากไม่ได้รับรหัสผ่านใน 1 นาที
                            </p>
                        </div>
                        <div class="tt-text-re-num2">
                            <p>
                                กรุณากด <font>ส่งรหัส OTP อีกครั้ง</font> &nbsp; <i class='fas fa-sync-alt'></i>
                            </p>
                        </div>

                        <br>
                        <div class='but-bb-log'>
                            <a href="{{url('supplier/regisphone-sup')}}">
                                <button class="button button1"> ย้อนกลับ
                                </button>
                            </a>
                            &nbsp;
                            <a href="{{url('supplier/register-sup')}}">
                                <button class="button button2"> ถัดไป &nbsp; <i class='fas fa-angle-right'></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    @include('inc_footer')


</body>

</html>