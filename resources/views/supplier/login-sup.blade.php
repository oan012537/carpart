@extends('../../layouts/template')
<link href="{{asset('assets/css/login1.css')}}" rel="stylesheet">
@section('content')
<section id="sec-login1">
    <div class="container">
        <div class="box-b-login">
            <form method="post" action="{{ route('supplier.login') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="img-img-log">
                            <img src="{{asset('assets/img/login/ln1.png')}}" class="img-fluid" alt="">
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
                                เบอร์มือถือ / อีเมล
                            </p>
                        </div>
                        <div class="input-group mb-3 box-border">

                            <input type="text" class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" name="username" placeholder="01xx-xxx-xxxxx"
                                aria-label="Username" aria-describedby="basic-addon1" required autofocus>
                        </div>
                        <div class="tt-text-log2">
                            <p>
                                รหัสผ่าน
                            </p>
                        </div>
                        <div class="input-group mb-3 box-border">

                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="*************" required>

                        </div>
                        <div class="t-pass-t">
                            <p>
                                ลืมรหัสผ่าน
                            </p>
                        </div>
                        <br>
                        <div class='but-bb-log'>
                            {{-- <a href="{{route('supplier/logphone-sup')}}"> --}}
                                <button class="button button1" type="submit"> เข้าสู่ระบบ </button>
                            {{-- </a> --}}
                        </div>
                        <div class="text-or-t">
                            <p>
                                หรือ
                            </p>
                        </div>
                        <div class='but-bb-log2'>
                            <a href="{{url('supplier/regis-sup')}}">
                                <button class="button button2" type="button"> สมัครสมาชิก </button>
                            </a>
                        </div>
                    </div>
                </div>

                @if ($errors->has('success'))
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
                @endif



            </form>
        </div>
    </div>
</section>
@stop

@section('script')
<script>

</script>
@stop
