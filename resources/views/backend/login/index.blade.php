@extends('backend.layouts.templateadminlogin')
@section('content')
<style>
    #modalerror .modal-footer {
        background-color: #282828;
        padding: 50px;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }
    #modalerror p {
        color: white;
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 36px;
        display: block;
        text-align: center;
    }
</style>
<section id="sec-login1">
    <div class="container">
        <div class="box-b-login box-backend">
            <form method="POST" action="{{ route('backend.login') }}" onsubmit="return loginfn();" id="formlogin">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="img-img-log">
                            <img src="{{asset('backends/assets/img/login/ln1.png')}}" class="img-fluid" alt="">
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
                                อีเมล
                            </p>
                        </div>
                        <div class="input-group mb-3 box-border">
                            <span> <img src="{{asset('backends/assets/img/login/icon-in.svg')}}" class="img-fluid icon-signin" alt=""></span>
                            <input type="text" class="form-control" name="email" placeholder="01xx-xxx-xxxxx" aria-label="Email" aria-describedby="basic-addon1" required autocomplete="off">
                        </div>
                        <div class="tt-text-log2">
                            <p>
                                รหัสผ่าน
                            </p>
                        </div>
                        <div class="input-group mb-3 box-border">
                            <img src="{{asset('backends/assets/img/login/icon-key.svg')}}" class="img-fluid icon-key" alt="">
                            <input type="password" name="password" class="form-control" id="password" placeholder="*************" required autocomplete="off">
                            <img src="{{asset('backends/assets/img/login/icon-eye.svg')}}" class="img-fluid icon-eye" alt="" onclick="eyePassword()">
                        </div>
                        <div class="t-pass-t">
                            <p>
                                ลืมรหัสผ่าน
                            </p>
                        </div>
                        <br>
                        <div class='but-bb-log'>
                            <button  type="submit" class="button button1" id="submit">
                                เข้าสู่ระบบ
                            </button>
                        </div>

                        <div class="text-or-t">
                            <p>
                                CPN
                            </p>
                        </div>
                        <div class='but-bb-log2'>
                            <a href="{{ route('backend.register') }}" class="button button2">
                                สมัครสมาชิก
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<div class="modal fade" id="modalsuccess" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{asset('backends/assets/img/login/sf.png')}}" class="img-fluid" alt="" style="margin-left: 4px;">
            </div>
            <div class="modal-footer">
                <div class="tt-text-con">
                    <p>
                        ยืนยันตัวตนสำเร็จ
                    </p>
                </div>
                <br>
                <div class="but-bb">
                    <a href="#" id="loginsuccess"><button class="button button3" data-bs-dismiss="modal" type="button"> ตกลง</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalerror" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{asset('backends/assets/img/login/conf-noapprov.png')}}" class="img-fluid" alt="" style="margin-left: 4px;">
            </div>
            <div class="modal-footer">
                <div class="tt-text-con">
                    <p>
                        เกิดข้อผิดพลาด
                    </p>
                </div>
                <br>
                <div class="but-bb">
                    <button class="button button3" data-bs-dismiss="modal" type="button"> ตกลง</button>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('script')
<script>
    function loginfn() {
        console.log($("#formlogin").serialize());
        $.post($("#formlogin").attr('action'),$("#formlogin").serialize(),function(data){

            console.log(data);
            if(data.status){
                $("#modalsuccess").modal('show');
                // alert(data.msg)
                // window.location=data.redirect_location;
                $("#loginsuccess").attr('href',data.redirect_location)
            }else{
                $("#modalerror").modal('show');
                
            }

        }).fail(function(response) {
            $(e).find("[type='submit']").html("LOGIN");
            $(".alert").remove();
            var erroJson = JSON.parse(response.responseText);
            for (var err in erroJson) {
                for (var errstr of erroJson[err])
                $("[name='" + err + "']").after("<div class='alert alert-danger'>" + errstr + "</div>");
            }

        });
        return false;
    }
</script>
@stop
