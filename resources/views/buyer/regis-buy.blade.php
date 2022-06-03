
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
    <link href="assets/css/regis4.css" rel="stylesheet">

    @include('inc_stylesheet')
</head>

<body>

    <section id="sec-regis4">
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
                                <img src="assets/img/login/se2.png" class="img-fluid" alt="...">
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


                        <div class="box-b-detailradio">
                            <div class="tt-text-log">
                                <p>ประเภท</p>
                            </div>
                            <div class="box-check">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tabs" id="onetab" checked="">
                                    <label class=" form-check-label" for="one"> บุคคลธรรมดา </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tabs" id="twotab">
                                    <label class="form-check-label" for="two"> นิติบุคคล </label>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="contenttab">
                            <fieldset>
                                <div class="tt-text-log">
                                    <p>
                                        ชื่อโปรไฟล์ <span class="dot__color">*</span>
                                    </p>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="ระบุ" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="tt-text-log">
                                    <p>
                                        ชื่อ <span class="dot__color">*</span>
                                    </p>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="ระบุ" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="tt-text-log">
                                    <p>
                                        นามสกุล <span class="dot__color">*</span>
                                    </p>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="ระบุ" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </fieldset>
                        </div>

                        <div class="contenttab">
                            <fieldset>
                                <div class="box-b-detail">
                                    <div class="tt-text-log">
                                        <p>
                                            ชื่อโปรไฟล์ <span class="dot__color">*</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            ชื่อนิติบุคคล/บริษัท <span class="dot__color">*</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            เลขประจำตัวผู้เสียภาษี <span class="dot__color">*</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            ชื่อผู้ติดต่อ <span class="dot__color">*</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            นามสกุล <span class="dot__color">*</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class='but-bb-log2'>
                            <a href="regiscon-buy.php">
                                <button class="button button1"> ถัดไป &nbsp; <i class='fas fa-angle-right'></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc_footer')
    @include('inc_javascript')

    <!-- JS tabcheckbox -->
    <script>
        $('[name=tabs]').each(function(i, d) {
            var p = $(this).prop('checked');
            if (p) {
                $('.contenttab').eq(i)
                    .addClass('on');
            }
        });

        $('[name=tabs]').on('change', function() {
            var p = $(this).prop('checked');

            var i = $('[name=tabs]').index(this);

            $('.contenttab').removeClass('on');
            $('.contenttab').eq(i).addClass('on');
        });
        //

        var current_fs, next_fs, previous_fs;
        var left, opacity, scale;
        var animating;

        $(".next").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            next_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    scale = 1 - (1 - now) * 0.2;
                    left = (now * 50) + "%";
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'position': 'absolute'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            previous_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    scale = 0.8 + (1 - now) * 0.2;
                    left = ((1 - now) * 50) + "%";
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                easing: 'easeInOutBack'
            });
        });

        $(".submit").click(function() {
            return false;
        })
    </script>


</body>

</html>
