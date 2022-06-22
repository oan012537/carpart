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
    <link href="assets/css/regis7.css" rel="stylesheet">

    @include('inc_stylesheet')
</head>

<body>
    <form method="POST" action="{{route('registercon-sup')}}">
        @csrf
    <section id="sec-regis5">
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
                                <img src="assets/img/login/se4.png" class="img-fluid" alt="...">
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
                        <div class="tt-text-send3">
                            <p>
                                ข้อมูลธนาคาร
                            </p>
                        </div>
                        <div class="box-b-detail">
                            <div class="tt-text-log">
                                <p>
                                    อีเมล
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="sample@gmail.com" name="email"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    เบอร์โทรศัพท์ *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="0123456789" name="phone" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    Page URL/Facebook Page *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Sample Name" name="facebook" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    GoogleMapsURL *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="www.sample.com" name="googlemap"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    ที่อยู่ร้านค้าตามที่อยู่บนบัตรประชาชน
                                </label>
                            </div>
                            <br>
                            <div class="tt-text-log">
                                <p>
                                    ที่อยู่ร้าน *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ระบุ" name="store_address" aria-label="Username" 
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    ตำบล *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ระบุ </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3 </option>
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    อำเภอ *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ระบุ </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3 </option>
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    จังหวัด *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ระบุ </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3 </option>
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    รหัสไปรษณีย์ *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ระบุ </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3 </option>
                                </select>
                            </div>
                            <br>
                            <div class='but-bb-log2'>
                                <a href="{{url('supplier/registerbank-sup')}}">
                                    <button class="button button1"> ถัดไป &nbsp; <i class='fas fa-angle-right'></i>
                                    </button>
                                </a>
                            </div>
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