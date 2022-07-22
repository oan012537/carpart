<div class="box__content">
    <div class="head-address">
        <p>
            โซเชียลมีเดีย
        </p>
    </div>
    <div class="head-address2">
        <p>
            เชื่อมต่อบัญชีโซเชียลมีเดีย
        </p>
    </div>


    <div class="row">
        <div class="col-lg-4">
            <div class="box-line">
                <div class="img-icon-social">
                    <img src="{{ asset('assets/img/account/line.png') }}" class="img-fluid"
                        alt="shoe image">
                </div>

                <div class="text-so-tt">
                    <p>
                        Line Account
                    </p>
                </div>
                <div class="text-so-tt2">
                    <p>
                        @Komdej
                    </p>
                </div>
                <br>
            </div>
            <div class="but-but-soso">
                @if(!is_null($user_buyer->social_lineid))
                    <button class="button button3-3" id="btnsocial_disconnect_line" rel="line">ยกเลิกการเชื่อมต่อบัญชี</button>
                @else
                    <a href="{{ url('login/line') }}">
                        <button class="button button3-3" id="btnsocial_connect_line" rel="line">เชื่อมต่อบัญชี</button>
                    </a>
                @endif
            </div>
        </div>

        <div class="col-lg-4">
            <div class="box-face">
                <div class="img-icon-social2">
                    <img src="{{ asset('assets/img/account/face.png') }}" class="img-fluid"
                        alt="shoe image">
                </div>
                <div class="text-so-tt-face">
                    <p>
                        Facebook
                    </p>
                </div>

                <div class="text-so-tt2-face">
                    <p>
                        เชื่อมต่อบัญชีกับ Facebook Account
                        ของคุณเพื่อใช้ในการเข้าสู่ระบบ
                    </p>
                </div>
            </div>
            <div class="but-but-soso">
                @if(!is_null($user_buyer->social_facebookid))
                    <button class="button button3-3" id="btnsocial_disconnect_facebook" rel="facebook">ยกเลิกการเชื่อมต่อบัญชี</button>
                @else
                    <a href="{{ url('login/facebook') }}">
                        <button class="button button4-3" id="btnsocial_connect_facebook" rel="facebook">เชื่อมต่อบัญชี</button>
                    </a>
                @endif
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box-google">
                <div class="img-icon-social2">
                    <img src="{{ asset('assets/img/account/google.png') }}" class="img-fluid"
                        alt="shoe image">
                </div>
                <div class="text-so-tt-face">
                    <p>
                        Google
                    </p>
                </div>

                <div class="text-so-tt2-google">
                    <p>
                        เชื่อมต่อบัญชีกับ Google Account
                        ของคุณเพื่อใช้ในการเข้าสู่ระบบ
                    </p>
                </div>
            </div>
            <div class="but-but-soso">
                @if(!is_null($user_buyer->social_googleid))
                    <button class="button button3-3" id="btnsocial_disconnect_google" rel="google">ยกเลิกการเชื่อมต่อบัญชี</button>
                @else
                    {{-- <!-- <a href="{{ url('login/google') }}"> --> --}}
                    <a href="{{ url('google/login') }}">
                        <button class="button button4-3" id="btnsocial_connect_google" rel="google">เชื่อมต่อบัญชี</button>
                    </a>
                @endif
            </div>
        </div>
        </div>
    <br><br><br><br>
</div>