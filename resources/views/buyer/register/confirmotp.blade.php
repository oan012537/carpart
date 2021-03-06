
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
        <link href="assets/css/login3.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
        @include('buyer.layouts.inc_stylesheet')
   
    </head>
   
   
    <body>
        <form method="POST" action="{{route('buyer.register.member')}}"  enctype="multipart/form-data" id="formotp">
            @csrf
            <input type="hidden" value="{{$tokens}}" name="tokenotp">
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
                                        ?????????????????????????????? OTP
                                    </p>
                                </div>
                                <div class="text-tt-hd">
                                    ??????????????????????????? OTP ??????????????????????????????????????????????????????
                                </div>
                                <br>
                                <div class="tt-text-log">
                                    <p>
                                        {{$phone}}
                                    </p>
                                </div>
                                <br>
                                <div class="box-bb-num" style="text-align: center;">
                                    <input class="otp number" style="height: 58px;width: 54px;border-radius: 5px;background-color: #333333;color: white;text-align: center;" type="text" maxlength="1" name="otp1" required>
                                    <input class="otp number" style="height: 58px;width: 54px;border-radius: 5px;background-color: #333333;color: white;text-align: center;" type="text" maxlength="1" name="otp2" required>
                                    <input class="otp number" style="height: 58px;width: 54px;border-radius: 5px;background-color: #333333;color: white;text-align: center;" type="text" maxlength="1" name="otp3" required>
                                    <input class="otp number" style="height: 58px;width: 54px;border-radius: 5px;background-color: #333333;color: white;text-align: center;" type="text" maxlength="1" name="otp4" required>
                                    <input class="otp number" style="height: 58px;width: 54px;border-radius: 5px;background-color: #333333;color: white;text-align: center;" type="text" maxlength="1" name="otp5" required>
                                    <input class="otp number" style="height: 58px;width: 54px;border-radius: 5px;background-color: #333333;color: white;text-align: center;" type="text" maxlength="1" name="otp6" required>
                                </div>
                                <br>
                                <div class="tt-text-re-num">
                                    <p>
                                        ?????????????????????????????????????????????????????????????????? 5 ????????????
                                    </p>
                                </div>
                                <div class="tt-text-re-num2">
                                    <p>
                                        ????????????????????? <a href="javascript:fncheckotp();"><font>????????????????????? OTP ????????????????????????</font></a> &nbsp; <i class='fas fa-sync-alt'></i>
                                    </p>
                                </div>
        
                                <br>
                                <div class='but-bb-log'>
                                    <a href="{{route('buyer.register.phone')}}">
                                        <button type="button" class="button button1"> ????????????????????????
                                        </button>
                                    </a>
                                    &nbsp;
                                    <a href="#">
                                        <button type="button" id="btnsubmitotp" class="button button2"> ??????????????? &nbsp; <i class='fas fa-angle-right'></i>
                                        </button>
                                    </a>
                                        
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
<script>
    $(document).ready(function() {

    // OTP
    document.querySelectorAll(".otp").forEach(function(otpEl) {
        otpEl.addEventListener("keyup", backSp);
        otpEl.addEventListener("keypress", function(e) {
            if ((parseInt(e.keyCode) > 47 && parseInt(e.keyCode) < 58) || (parseInt(backKey.keyCode) > 96 && parseInt(backKey.keyCode) < 105)) {
                if(this.name != 'otp6'){
                    var nexEl = this.nextElementSibling;
                    nexEl.focus();
                }
                
            }

        });
    })

    function backSp(backKey) {
        if (backKey.keyCode == 8) {
            var prev = this.previousElementSibling.focus()
        } else {

            if ((parseInt(backKey.keyCode) > 47 && parseInt(backKey.keyCode) < 58) || (parseInt(backKey.keyCode) > 96 && parseInt(backKey.keyCode) < 105)) {
                // console.log(backKey.keyCode)
                if(this.name != 'otp6'){
                    var nexEl = this.nextElementSibling.focus();
                }
            }

        }
    }



    });
    function fncheckotp() {
        // alert();
        // return false;

        $("#modalotp").modal('show');
        setTimeout(() => {
            $('#modalotp input[class="otp"]:first').focus();
            $.get("{{url('supplier/gettoken')}}/" + $('.txt__phone').text(),
                function(data, textStatus, jqXHR) {
                    $("#token").val(data);
                },
                // "dataType"
            );
        }, 2000);

        return false;
    }
    $("#btnsubmitotp").click(function(e) {
        $.post("{{route('buyer.register.confirmotp')}}", $("#formotp").serialize(),
            function(data, textStatus, jqXHR) {
                console.log(data);
                if (data.result.status) {
                    $("#formotp").submit();
                } else {
                    toastralert('error', '??????????????????????????????????????????');
                }
            },
            // "dataType"
        );
        e.preventDefault();

    });
</script>
   