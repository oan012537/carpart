@extends('../layouts/templatelogin')

@section('content')
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
                            เข้าสู่ระบบ
                        </p>
                    </div>
                    <div class="tt-text-log">
                        <p>
                            เบอร์มือถือ / อีเมล
                        </p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="01xx-xxx-xxxxx" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="tt-text-log2">
                        <p>
                            รหัสผ่าน
                        </p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="textfield" class="form-control" id="inputPassword"
                            placeholder="*************">
                    </div>
                    <div class="t-pass-t">
                        <p>
                            ลืมรหัสผ่าน
                        </p>
                    </div>
                    <br>
                    <div class='but-bb-log'>
                        <a href="login2.php">
                            <button class="button button1"> เข้าสู่ระบบ </button>
                        </a>
                    </div>
                    <div class="social-log">
                        <img src="assets/img/login/i1.png" class="img-fluid" alt="">
                        &nbsp;
                        <img src="assets/img/login/i2.png" class="img-fluid" alt="">
                        &nbsp;
                        <img src="assets/img/login/i3.png" class="img-fluid" alt="">
                    </div>
                    <div class="text-or-t">
                        <p>
                            หรือ
                        </p>
                    </div>
                    <div class='but-bb-log2'>
                        <a href="regis.php">
                            <button class="button button2"> สมัครสมาชิก </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('script')
<script>

</script>
@stop