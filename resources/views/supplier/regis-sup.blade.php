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
    <link href="assets/css/regis.css" rel="stylesheet">

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

                        <div class="b-box-big">
                            <div class="t-text-s">
                                <p>
                                    Strictly Necessary Cookies &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            checked>
                                    </div>
                                </div>
                                <hr class="new1">
                            </div>
                            <div class="ko-text-t">
                                <p>
                                    ข้อตกลง / เงื่อนไข
                                </p>
                            </div>
                            <div class="b-text-t-b">
                                <div class="d-detail">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It
                                        has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged. </p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It
                                        has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged. </p>
                                </div>
                            </div>
                            <div class="t-text-s2">
                                <div class="s-switch2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            checked>
                                    </div>
                                </div>
                                <p>
                                    Aceept/Reject
                                </p>
                            </div>
                            <div class="t-text-s3">
                                <p>
                                    Strictly Necessary Cookies &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch3">
                                    <p>
                                        Always accept
                                    </p>
                                </div>
                                <hr class="new3">
                            </div>
                            <div class="t-text-s4">
                                <p>
                                    Analytics Cookies &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            checked>
                                    </div>
                                </div>
                                <hr class="new4">
                            </div>
                            <div class="d-detail2">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It
                                    has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. </p>
                            </div>
                            <div class="t-text-s5">
                                <p>
                                    Functional Cookies &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch5">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            checked>
                                    </div>
                                </div>
                                <hr class="new5">
                            </div>
                            <div class="t-text-s6">
                                <p>
                                    Targeting Cookies &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch5">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            checked>
                                    </div>
                                </div>
                                <hr class="new5">
                            </div>
                        </div>
                        <br>
                        <div class='but-bb-log'>
                            <a href="{{url('supplier/regisphone-sup')}}">
                                <button class="button button1"> ยอมรับข้อตกลง & เงื่อนไข &nbsp; <i
                                        class='fas fa-angle-right'></i> </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc_footer')
    @include('inc_javascript')

</body>

</html>