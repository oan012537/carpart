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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="assets/css/regis3.css" rel="stylesheet">

    @include('inc_stylesheet')
</head>

<body>
    <form method="POST" action="{{route('registerpass-sup')}}">
    @csrf
    <section id="sec-regis3">
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
                                สร้างรหัสผ่าน
                            </p>
                        </div>
                        <div class="tt-text-log">
                            <p>
                                รหัสผ่าน
                            </p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="*************"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="tt-text-log2">
                            <p>
                                ยืนยันรหัสผ่าน
                            </p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="*************"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class='but-bb-log'>
                            <a href="{{url('supplier/registerbank-sup')}}">
                                <button class="button button1"> ย้อนกลับ
                                </button>
                            </a>
                            &nbsp;
                            <button class="button button2" id="myBtn"> ถัดไป &nbsp; <i class='fas fa-angle-right'></i>
                            </button>
                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div class="modal-body">
                                        <img src="assets/img/login/sf.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <div class="tt-text-con">
                                            <p>
                                                สมัครสมาชิกสำเร็จ
                                            </p>
                                        </div>
                                        <br>
                                        <div class="but-bb">
                                            <button class="button button3"> ตกลง
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
</form>

    @include('inc_footer')

    <script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</body>

</html>