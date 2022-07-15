<div class="box__content">
    <div class="head-address">
        <p>
            เปลี่ยนรหัสผ่าน
        </p>
    </div>
    <div class="head-address2">
        <p>
            กรุณาอย่าเปิดเผยรหัสผ่านแก่คนอื่นๆ เพื่อความปลอดภัยของบัญชีผู้ใช้คุณเอง
        </p>
    </div>

    <br><br>
    <form id="form_changepassword">
    @csrf
    <div class="row">
        <div class="col-lg-3">
            <div class="head-pass-detail">
                <p>
                    รหัสผ่านปัจจุบัน
                </p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="input-group2 mb-3">
                <input type="password" class="form-control" placeholder="ระบุ" id="old_password" name="old_password"
                    aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-3">
            <div class="head-pass-detail">
                <p>
                    รหัสผ่านใหม่
                </p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="input-group2 mb-3">
                <input type="password" class="form-control" placeholder="ระบุ" id="new_password" name="new_password"
                    aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <!-- <div class="icon-eye-pass">
                    <span> <i class="fa fa-eye"></i> </span>
                </div> -->
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-3">
            <div class="head-pass-detail">
                <p>
                    ยืนยันรหัสผ่าน
                </p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="input-group2 mb-3">
                <input type="password" class="form-control" placeholder="ระบุ" id="confirm_password" name="confirm_password"
                    aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <!-- <div class="icon-eye-pass">
                    <span> <i class="fa fa-eye"></i> </span>
                </div> -->
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="but-ca">
                <button type="submit" class="button button2-3">
                    อัพเดท
                </button>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>

    </form>
    <br><br>
</div>

<!-- The Modal -->
<div id="modal_comfirmchangepassword" class="w3-modal">
    <div class="w3-modal-content">
        <div class="w3-container">
            <div class="text-t-haer-pakan">
                <p>
                    ยืนยันรหัส OTP
                </p>
            </div>
            <div class="card-conotp w-100">
                <div class="h-text-otp">
                    <p>
                        กรุณากรอกรหัส OTP ที่ส่งไปยังหมายเลข
                    </p>
                </div>
                <div class="num-text-otp">
                    <p>
                        012-345-6789
                    </p>
                </div>
                <div class="w3-container w3-center">
                    <div class="img-text-otp">
                        <img src="{{ asset('assets/img/account/b.png') }}" class="img-fluid" alt="shoe image">
                        <img src="{{ asset('assets/img/account/b.png') }}" class="img-fluid" alt="shoe image">
                        <img src="{{ asset('assets/img/account/b.png') }}" class="img-fluid" alt="shoe image">
                        <img src="{{ asset('assets/img/account/b.png') }}" class="img-fluid" alt="shoe image">
                        <img src="{{ asset('assets/img/account/b.png') }}" class="img-fluid" alt="shoe image">
                        <img src="{{ asset('assets/img/account/b.png') }}" class="img-fluid" alt="shoe image">
                    </div>
                </div>
                <br>
                <div class="vi-text-otp">
                    <p>
                        หากไม่ได้รับรหัสผ่านใน 1 นาที
                    </p>
                </div>
                <div class="re-text-otp">
                    <p>
                        กรุณากด ส่งรหัส OTP อีกครั้ง <i class='fas fa-sync'></i>
                    </p>
                </div>
            </div>
            <br>
            <div style="text-align:center;">
                <div class="b-but-concon">
                    <button class="button button-close"
                        onclick="document.getElementById('modal_comfirmchangepassword').style.display='none'"
                        class="w3-button w3-display-topright"> กลับ </button>
                    <button class="button button-up"
                        onclick="document.getElementById('modal_comfirmchangepassword').style.display='none'"
                        class="w3-button w3-display-topright"> ยืนยัน </button>
                </div>
            </div>
        </div>
    </div>
</div>