@extends('../../layouts/template')
<link href="{{asset('assets/css/login1.css')}}" rel="stylesheet">
@section('content')
<section id="sec-login1">
    <div class="container">
        <div class="box-b-login">
            <form method="post" action="{{ route('supplier.login') }}" enctype="multipart/form-data">
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
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="xxxxx@xxxx.xx" id="email" name="email" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="tt-text-log2">
                            <p>
                                รหัสผ่าน
                            </p>
                        </div>
                        <div class="input-group mb-3">
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
                            {{-- <a href="login2.php"> --}}
                                <button class="button button1" type="submit"> เข้าสู่ระบบ </button>
                            {{-- </a> --}}
                        </div>
                        <div class="social-log">
                            <img src="{{asset('assets/img/login/i1.png')}}" class="img-fluid" alt="">
                            &nbsp;
                            <img src="{{asset('assets/img/login/i2.png')}}" class="img-fluid" alt="">
                            &nbsp;
                            
                            <a href="{{ route('google.login') }}"><img src="{{asset('assets/img/login/i3.png')}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="text-or-t">
                            <p>
                                หรือ
                            </p>
                        </div>
                        <div class='but-bb-log2'>
                            <a href="{{route('supplier.login')}}">
                                <button class="button button2" type="button"> สมัครสมาชิก </button>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</section>
@stop

@section('script')
<script>

</script>
@stop