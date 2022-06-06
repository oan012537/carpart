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
    <link href="assets/css/login1.css" rel="stylesheet">

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
                                เข้าสู่ระบบ
                            </p>
                        </div>
                        <div class="tt-text-log">
                            <p>
                                เบอร์มือถือ / อีเมล
                            </p>
                        </div>
                        <div class="input-group mb-3 box-border">

                            <input type="text" class="form-control" name="username" placeholder="01xx-xxx-xxxxx"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="tt-text-log2">
                            <p>
                                รหัสผ่าน
                            </p>
                        </div>
                        <div class="input-group mb-3 box-border">

                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="*************">

                        </div>
                        <div class="t-pass-t">
                            <p>
                                ลืมรหัสผ่าน
                            </p>
                        </div>
                        <br>
                        <div class='but-bb-log'>
                            <a href="{{url('supplier/logphone-sup')}}">
                                <button class="button button1"> เข้าสู่ระบบ </button>
                            </a>
                        </div>
                        <div class="text-or-t">
                            <p>
                                หรือ
                            </p>
                        </div>
                        <div class='but-bb-log2'>
                            <a href="{{url('supplier/regis-sup')}}">
                                <button class="button button2"> สมัครสมาชิก </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc_footer')

</body>

</html>