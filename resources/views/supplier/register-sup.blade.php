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
    <form method="POST" action="{{route('regiser-sup')}}">
        @csrf

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
                                <img src="assets/img/login/se3.png" class="img-fluid" alt="...">
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


                        <div class="box-b-detailradio">
                            <div class="tt-text-log">
                                <p>ประเภท</p>
                            </div>
                            <div class="box-check">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tabs" id="onetab" value="normal" checked="">
                                    <label class=" form-check-label" for="one"> บุคคลธรรมดา </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tabs" id="twotab"  value="niti">
                                    <label class="form-check-label" for="two"> นิติบุคคล </label>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="contenttab">
                            <fieldset>
                                <div class="box-b-detail">
                                    <div class="tt-text-log">
                                        <p>
                                            ชื่อร้าน *
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" name="store_name" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            ชื่อ *
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" name="first_name" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            นามสกุล *
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" name="last_name" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            เลขบัตรประชาชน *
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" name="card_id" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            ที่อยู่ (ตามบัตรประชาชน) *
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" name="address" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    
                                    <div class="tt-text-log">
                                        <p>
                                            จังหวัด <span class="dot__color">*</span>
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
                                            เขต/อำเภอ <span class="dot__color">*</span>
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
                                            แขวง/ตำบล <span class="dot__color">*</span>
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
                                            สำเนาบัตรประชาชน *
                                        </p>
                                        <div class="text-t-log">
                                            <p>
                                                (รองรับไฟล์ .jpg และ .png เท่านั้น. ขนาดไม่เกิน 5Mb.)
                                            </p>
                                        </div>
                                    </div>

                                    <div class="drop-zone">
                                        <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"
                                                style="font-size:35px"></i>
                                            <p> แนบรูปภาพ Jpeg</p>
                                            <div class="tt-img-detail">
                                                <div class="text-size-tt">
                                                    <p> ขนาดไม่เกิน 5 ภาพ </p>
                                                </div>
                                                <div class="text-size-t">
                                                    <p> ขนาดไม่เกิน 5 Mb. </p>
                                                </div>
                                            </div>
                                        </span>
                                        <input type="file" name="myFile" class="drop-zone__input">
                                    </div>

                                    <br>
                                    <div class="tt-text-log">
                                        <p>
                                            สำเนาทะเบียนบ้าน *
                                        </p>
                                        <div class="text-t-log">
                                            <p>
                                                (รองรับไฟล์ .jpg และ .png เท่านั้น. ขนาดไม่เกิน 5Mb.)
                                            </p>
                                        </div>
                                    </div>

                                    <div class="drop-zone">
                                        <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"
                                                style="font-size:35px"></i>
                                            <p> แนบรูปภาพ Jpeg</p>
                                            <div class="tt-img-detail">
                                                <div class="text-size-t">
                                                    <p> ขนาดไม่เกิน 5 Mb. </p>
                                                </div>
                                            </div>
                                        </span>
                                        <input type="file" name="myFile" class="drop-zone__input">
                                    </div>
                                </div>
                            </fieldset>
                            <br>
                        </div>

                        <div class="contenttab">
                            <fieldset>
                                <div class="box-b-detail">
                                    <div class="tt-text-log">
                                        <p>
                                            ชื่อบริษัท <span class="dot__color">*</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" name="company_name" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            สาขา <span class="dot__color">*</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" name="branch" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            หมายเลขประจำตัวผู้เสียภาษี <span class="dot__color">*</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" name="vat_id" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            หนังสือรับรองบริษัท อายุไม่เกิน6เดือน *
                                        </p>
                                        <div class="text-t-log">
                                            <p>
                                                (รองรับไฟล์ .jpg .pdf และ .png เท่านั้น. ขนาดไม่เกิน 5Mb.)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="drop-zone">
                                        <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"
                                                style="font-size:35px"></i>
                                            <p> แนบรูปภาพ Jpeg</p>
                                            <div class="tt-img-detail">
                                                <div class="text-size-t">
                                                    <p> ขนาดไม่เกิน 5 Mb. </p>
                                                </div>
                                            </div>
                                        </span>
                                        <input type="file" name="myFile" class="drop-zone__input">
                                    </div>

                                    <div class="tt-text-log">
                                        <p>
                                            สำเนา ภ.พ.20
                                        </p>
                                        <div class="text-t-log">
                                            <p>
                                                (รองรับไฟล์ .jpg .png หรือ .pdf เท่านั้น ขนาดไม่เกิน 5Mb.)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="text-tt-img-detail">
                                        <p>
                                            <i class='far fa-file-alt'></i> &nbsp; กดดูเพื่อแสดงตัวอย่างเอกสาร
                                        </p>
                                    </div>
                                    <div class="drop-zone">
                                        <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"
                                                style="font-size:35px"></i>
                                            <p> แนบรูปภาพ Jpeg</p>
                                            <div class="tt-img-detail">
                                                <div class="text-size-t">
                                                    <p> ขนาดไม่เกิน 5 Mb. </p>
                                                </div>
                                            </div>
                                        </span>
                                        <input type="file" name="myFile" class="drop-zone__input">
                                    </div>
                                    <br>
                                    <div class="tt-text-log">
                                        <p>
                                            ที่อยู่ (ตามหนังสือรับรอง) <span class="dot__color">*</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" name="address2" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                   
                                    <div class="tt-text-log">
                                        <p>
                                            จังหวัด <span class="dot__color">*</span>
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
                                            เขต/อำเภอ <span class="dot__color">*</span>
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
                                            แขวง/ตำบล <span class="dot__color">*</span>
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
                                            รหัสไปรษณีย์ <span class="dot__color">*</span>
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
                                </div>
                            </fieldset>
                            <br>
                        </div>
                        <div class='but-bb-log2'>
                            <a href="{{url('supplier/registercon-sup')}}">
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