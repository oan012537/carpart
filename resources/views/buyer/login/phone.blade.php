
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
        <link href="assets/css/login2.css" rel="stylesheet">
        @include('buyer.layouts.inc_stylesheet')
   
    </head>
   
   
    <body>
        <form method="POST" action="{{route('buyer.login.confirmphone')}}"  enctype="multipart/form-data">
            @csrf
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
                                        ยืนยันเบอร์โทรศัพท์
                                    </p>
                                </div>
                                <div class="text-tt-hd">
                                    โปรดระบุเบอร์โทรศัพท์ของท่าน
                                </div>
                                <br>
                                <div class="tt-text-log">
                                    <p>
                                        เบอร์มือถือ
                                    </p>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="01xxxxxxxx" aria-label="Username"
                                        aria-describedby="basic-addon1" name="phone" maxlength="10">
                                </div>
                                <br>
                                <div class='but-bb-log'>
                                    <button type="submit" class="button button1"> ถัดไป &nbsp; <i class='fas fa-angle-right'></i></button>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
        @include('buyer.layouts.inc_footer')
        @include('buyer.layouts.inc_javascript')
    </body>
</html>
   