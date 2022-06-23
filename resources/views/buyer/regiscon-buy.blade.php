<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{url("")}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> register </title>
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
    <link href="assets/css/regis2.css" rel="stylesheet">

    @include('inc_stylesheet')
</head>

<body>
    <form method="POST" action="{{route('step2')}}">
    @csrf
    <section id="sec-regis2">
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
                                สมัครสมาชิก
                            </p>
                        </div>
                        <div class="img-send-img">
                            <div class="text-center">
                                <img src="assets/img/login/se1.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                        <div class="tt-text-send">
                            <p>
                                ข้อมูลสมาชิก
                            </p>
                        </div>
                        <div class="tt-text-send2">
                            <p>
                                ข้อมูลติดต่อ
                            </p>
                        </div>
                        <div class="tt-text-log">
                            <p>
                                เบอร์โทรศัพท์ *
                            </p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="0123456789" name="phone" aria-label="Username"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="tt-text-log2">
                            <p>
                                อีเมล
                            </p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="sample@gmail.com" name="email" aria-label="Username"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class='but-bb-log2'>
                            <a href="{{url('buyer/registerpass-buy')}}">
                                <button class="button button1"> ถัดไป &nbsp; <i class='fas fa-angle-right'></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
    @include('inc_footer')

</body>

</html>
