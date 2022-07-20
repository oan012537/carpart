@extends('backend.layouts.templateadminlogin')
@section('content')
<section id="sec-login1">
    <div class="container">
        <div class="box-b-login">
            <form method="POST" action="{{ route('backend.register.store') }}">
                @csrf
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="img-img-log">
                            <img src="{{asset('backends/assets/img/login/ln1.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="box__pding">
                            <div class="h-text-log">
                                <p>
                                    เข้าสู่ระบบ
                                </p>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    ชื่อ
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name" id="name" placeholder="ระบุ" aria-label="Username" aria-describedby="basic-addon1" required autocomplete="off">
                            </div>
                            <div class="tt-text-log2">
                                <p>
                                    อีเมล
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" id="email" placeholder="carparts.navi@gmail.com" required autocomplete="off">
                            </div>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            <br>
                            @endif

                            <div class="tt-text-log2">
                                <p>
                                    เบอร์มือถือ <span>*</span>
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="ระบุ" required autocomplete="off">
                            </div>

                            <br>
                            <div class='but-bb-log'>
                                {{-- <a href="javascript:void(0)" class="button button1" data-bs-toggle="modal" data-bs-target="#modalsuccess"> สมัครสมาชิก</a> --}}
                                <button type="submit" class="button button1">สมัครสมาชิก</button>
                            </div>

                            <div class="text-or-t">
                                <p>
                                    CPN
                                </p>
                            </div>
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
                    <button class="button button3 btn__padding" data-bs-dismiss="modal"> ตกลง</button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
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
<script>

</script>
@stop
