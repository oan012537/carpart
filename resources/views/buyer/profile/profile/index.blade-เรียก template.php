@extends('buyer.layouts.template')

<link rel="stylesheet" href="{{ asset('assets/css/account-buy.css') }}">

@section('content')

<!-- <input type="hidden" id="pageNameNav" name="pageNameNav" value="account-buy" > -->
{{-- 
{{ Auth::guard('buyer')->user()->id }}, {{ Auth::guard('buyer')->user()->profile_name }}
--}}

<section id="history-request">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="nav__top">
                        <a href="javascript:void(0)">บัญชีของฉัน</a> <span><i
                                class="fa-solid fa-chevron-right"></i></span> <a href="javascript:void(0)">
                            บัญชีของฉัน </a>
                    </div>

                    @include('buyer.profile.nav_profile')

                </div>
                <div class="col-8">
                    <div class="box__contentmain">
                        <div class="box__tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="taball-tab" data-bs-toggle="tab"
                                        data-bs-target="#taball" type="button" role="tab" aria-controls="taball"
                                        aria-selected="true">ข้อมูลส่วนตัว </button>
                                    <button class="nav-link" id="tabrequest-tab" data-bs-toggle="tab"
                                        data-bs-target="#tabrequest" type="button" role="tab" aria-controls="tabrequest"
                                        aria-selected="false"> รหัสผ่าน </button>
                                    <button class="nav-link" id="navopen-tab" data-bs-toggle="tab"
                                        data-bs-target="#navopen" type="button" role="tab" aria-controls="navopen"
                                        aria-selected="false">เชื่อมต่อโซเชียล</button>
                                    <button class="nav-link" id="navbank-tab" data-bs-toggle="tab"
                                        data-bs-target="#navbank" type="button" role="tab" aria-controls="navbank"
                                        aria-selected="false">ข้อมูลธนาคาร </button>
                                    <button class="nav-link" id="navaddress-tab" data-bs-toggle="tab"
                                        data-bs-target="#navaddress" type="button" role="tab" aria-controls="navaddress"
                                        aria-selected="false">จัดการที่อยู่ </button>

                                </div>
                            </nav>


                            <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="taball" role="tabpanel"
                                    aria-labelledby="taball-tab">

                                    <div class="box__content">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="head-address">
                                                    <p>
                                                        ข้อมูลส่วนตัว
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="ac-detail-text-tt">
                                                    <a href="#">
                                                        <p onclick="document.getElementById('id01').style.display='block'"
                                                            class="w3-button w3-black"> <i class="fas fa-pen"
                                                                style="font-size:18px"></i> &nbsp;
                                                            แก้ไข </p>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        ชื่อโปรไฟล์
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        Sommut
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        ชื่อผู้ติดต่อ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        สมมติ แซ่ตัน
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        อีเมล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        emily@sample.com
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        โทรศัพท์
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        012345678
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        ที่อยู่
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        123 หมู่ 0 ถนน เจริญกรุง แขวง เยาวราช ซอย 5
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        แขวง/ตำบล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        ทุ่งสุขลา
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        เขต/อำเภอ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        ศรีราชา
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        จังหวัด
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        ชลบุรี
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        รหัสไปรษณีย์
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        12345
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="box__content">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="head-address">
                                                    <p>
                                                        ข้อมูลสำหรับออกใบกำกับภาษี/ใบเสร็จรับเงิน
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="ac-detail-text-tt">
                                                    <a href="#">
                                                        <p onclick="document.getElementById('id02').style.display='block'"
                                                            class="w3-button w3-black"> <i class="fas fa-pen"
                                                                style="font-size:18px"></i> &nbsp;
                                                            แก้ไข </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        ชื่อ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        นายสมมุติ สมุด
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        เบอร์โทรศัพท์
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        0812345677
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        เลขที่ประจำตัวผู้เสียภาษี
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        1 234 5678 9101 2
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        ที่อยู่
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        123 หมู่ 0 ถนน เจริญกรุง แขวง เยาวราช ซอย 5
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        แขวง/ตำบล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        ทุ่งสุขลา
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        เขต/อำเภอ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        ศรีราชา
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        จังหวัด
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        ชลบุรี
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2">
                                                    <p>
                                                        รหัสไปรษณีย์
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2">
                                                    <p>
                                                        12345
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="tabrequest" role="tabpanel"
                                    aria-labelledby="tabrequest-tab">
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
                                                    <input type="text" class="form-control" placeholder="ระบุ"
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
                                                    <input type="text" class="form-control" placeholder="ระบุ"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2">
                                                    <div class="icon-eye-pass">
                                                        <span> <i class="fa fa-eye"></i> </span>
                                                    </div>
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
                                                    <input type="text" class="form-control" placeholder="ระบุ"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2">
                                                    <div class="icon-eye-pass">
                                                        <span> <i class="fa fa-eye"></i> </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3"></div>
                                        </div>

                                        <br><br>
                                        <div class="row">
                                            <div class="col-lg-3"></div>
                                            <div class="col-lg-6">
                                                <div class="but-ca">
                                                    <button class="button button2-3"
                                                        onclick="document.getElementById('id03').style.display='block'">
                                                        อัพเดท
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-lg-3"></div>
                                        </div>
                                        <br><br>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="navopen" role="tabpanel" aria-labelledby="navopen-tab">
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
                                                        <img src="assets/img/account/line.png" class="img-fluid"
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
                                                    <button class="button button3-3">ยกเลิกการเชื่อมต่อบัญชี</button>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="box-face">
                                                    <div class="img-icon-social2">
                                                        <img src="assets/img/account/face.png" class="img-fluid"
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
                                                    <button class="button button4-3">เชื่อมต่อบัญชี</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="box-google">
                                                    <div class="img-icon-social2">
                                                        <img src="assets/img/account/google.png" class="img-fluid"
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
                                                    <button class="button button4-3">เชื่อมต่อบัญชี</button>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br><br>
                                    </div>
                                </div>




                                <div class="tab-pane fade" id="navbank" role="tabpanel" aria-labelledby="navbank-tab">

                                    <div class="box__content">
                                        <div class="box-check-set">
                                            <label class="b-bank"> ตั้งเป็นบัญชีรับเงิน
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2-bank">
                                                    <p>
                                                        หมายเลขบัญชี
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2-bank">
                                                    <p>
                                                        123-123456-1
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2-bank">
                                                    <p>
                                                        ชื่อบัญชี
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2-bank">
                                                    <p>
                                                        บริษัท เฮงเฮงอะไหล่ยนต์
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2-bank">
                                                    <p>
                                                        ธนาคาร
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2-bank">
                                                    <p>
                                                        emily@sample.com
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2-bank">
                                                    <p>
                                                        กรุงไทย
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2-bank">
                                                    <p>
                                                        012345678
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2-bank">
                                                    <p>
                                                        สาขา
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2-bank">
                                                    <p>
                                                        ประชาอุทิศ
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2-bank">
                                                    <p>
                                                        ประเภทบัญชี
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2-bank">
                                                    <p>
                                                        ออมทรัพย์
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="txt__title2-bank">
                                                    <p>
                                                        สำเนาหน้า Book Bank
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="txt__detailtitle2-bank">
                                                    <img src="assets/img/account/img-bank.png" class="img-fluid"
                                                        alt="shoe image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="but-bank">

                                    </div>
                                    <div class="b-but-addplus">
                                        <button class="button button-inadd"
                                            onclick="document.getElementById('id04').style.display='block'"> <i
                                                class="fa fa-plus-circle"></i> เพิ่มที่อยู่จัดส่ง
                                        </button>
                                    </div>
                                </div>




                                <div class="tab-pane fade" id="navaddress" role="tabpanel"
                                    aria-labelledby="navaddress-tab">

                                    <div class="box__content">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label class="b-bank2"> ตั้งเป็นที่อยู่โปรไฟล์
                                                            <input type="checkbox" checked="checked">
                                                            <span class="checkmark2"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="b-bank3"> ตั้งเป็นที่อยู่จัดส่ง
                                                            <input type="checkbox">
                                                            <span class="checkmark3"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="ac-detail-text-tt2">
                                                    <a href="#">
                                                        <p onclick="document.getElementById('id06').style.display='block'"
                                                            class="w3-button w3-black"> <i class="fas fa-pen"
                                                                style="font-size:18px"></i> &nbsp;
                                                            แก้ไข </p>
                                                    </a>
                                                </div>
                                                <div class="ttext-delate">
                                                    <a href="#">
                                                        <p> ลบ </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="h-text-h">
                                                    <p>
                                                        ชื่อ-นามสกุล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="detail-text-detail">
                                                    <p>
                                                        คมเดช อินทรครรชิต
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="h-text-h">
                                                    <p>
                                                        โทรศัพท์
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="detail-text-detail">
                                                    <p>
                                                        (+66) 84554512
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="h-text-h">
                                                    <p>
                                                        อีเมล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="detail-text-detail">
                                                    <p>
                                                        sample@gmail.com
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="h-text-h">
                                                    <p>
                                                        ที่อยู่
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="detail-text-detail">
                                                    <p>
                                                        88/2 ลดาวัลย์ รัตนาธิเบศร์ อำเภอเมืองนนทบุรี จังหวัดนนทบุรี
                                                        11000
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="box__content">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label class="b-bank4"> ตั้งเป็นที่อยู่โปรไฟล์
                                                            <input type="checkbox" checked="checked">
                                                            <span class="checkmark4"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="b-bank3"> ตั้งเป็นที่อยู่จัดส่ง
                                                            <input type="checkbox">
                                                            <span class="checkmark3"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="ac-detail-text-tt2">
                                                    <a href="#">
                                                        <p onclick="document.getElementById('id06').style.display='block'"
                                                            class="w3-button w3-black"> <i class="fas fa-pen"
                                                                style="font-size:18px"></i> &nbsp;
                                                            แก้ไข </p>
                                                    </a>
                                                </div>
                                                <div class="ttext-delate">
                                                    <a href="#">
                                                        <p> ลบ </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="h-text-h">
                                                    <p>
                                                        ชื่อ-นามสกุล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="detail-text-detail">
                                                    <p>
                                                        คมเดช อินทรครรชิต
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="h-text-h">
                                                    <p>
                                                        โทรศัพท์
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="detail-text-detail">
                                                    <p>
                                                        (+66) 84554512
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="h-text-h">
                                                    <p>
                                                        อีเมล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="detail-text-detail">
                                                    <p>
                                                        sample@gmail.com
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="h-text-h">
                                                    <p>
                                                        ที่อยู่
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="detail-text-detail">
                                                    <p>
                                                        88/2 ลดาวัลย์ รัตนาธิเบศร์ อำเภอเมืองนนทบุรี จังหวัดนนทบุรี
                                                        11000
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="b-but-addplus2">
                                        <button class="button button-inadd"
                                            onclick="document.getElementById('id06').style.display='block'"> <i
                                                class="fa fa-plus-circle"></i> เพิ่มที่อยู่
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>



            <!-- The Modal -->
            <div id="id01" class="w3-modal">
                <div class="w3-modal-content">
                    <div class="w3-container">
                        <div class="text-t-haer-pakan">
                            <p>
                                แก้ไขข้อมูลส่วนตัว
                            </p>
                        </div>
                        <div class="card-con w-100">
                            <div class="text-t-deail-add-edit">
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label"> ชื่อผู้ติดต่อ <span> + </span>
                                        </label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label"> เบอร์โทรศัพท์ <span> + </span>
                                        </label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </form>
                                <br>
                                <form class="row g-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label"> ที่อยู่ <span> +
                                            </span></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                </form>
                                <br>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label"> จังหวัด <span> + </span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> ระบุ </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label"> เขต/อำเภอ <span> + </span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> ระบุ </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                </form>
                                <br>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label"> แขวง/ตำบล <span> + </span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> ระบุ </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label"> รหัสไปรษณีย์ <span> + </span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> ระบุ </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                </form>


                            </div>
                        </div>
                        <br>
                        <div style="text-align:center;">
                            <div class="b-but-concon">
                                <button class="button button-close"
                                    onclick="document.getElementById('id01').style.display='none'"
                                    class="w3-button w3-display-topright"> ยกเลิก </button>
                                <button class="button button-up"
                                    onclick="document.getElementById('id01').style.display='none'"
                                    class="w3-button w3-display-topright"> อัพเดท </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- The Modal -->
            <div id="id02" class="w3-modal">
                <div class="w3-modal-content">
                    <div class="w3-container">
                        <div class="text-t-haer-pakan">
                            <p>
                                แก้ไขข้อมูลสำหรับออกใบกำกับภาษี/ใบเสร็จรับเงิน
                            </p>
                        </div>
                        <div class="card-con w-100">
                            <div class="text-t-deail-add-edit">
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label"> ชื่อผู้ติดต่อ <span> + </span>
                                        </label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label"> เบอร์โทรศัพท์ <span> + </span>
                                        </label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </form>
                                <br>
                                <form class="row g-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label"> ที่อยู่ <span> +
                                            </span></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                </form>
                                <br>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label"> จังหวัด <span> + </span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> ระบุ </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label"> เขต/อำเภอ <span> + </span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> ระบุ </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                </form>
                                <br>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label"> แขวง/ตำบล <span> + </span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> ระบุ </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label"> รหัสไปรษณีย์ <span> + </span>
                                        </label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </form>


                            </div>
                        </div>
                        <br>
                        <div style="text-align:center;">
                            <div class="b-but-concon">
                                <button class="button button-close"
                                    onclick="document.getElementById('id02').style.display='none'"
                                    class="w3-button w3-display-topright"> ยกเลิก </button>
                                <button class="button button-up"
                                    onclick="document.getElementById('id02').style.display='none'"
                                    class="w3-button w3-display-topright"> อัพเดท </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- The Modal -->
            <div id="id03" class="w3-modal">
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
                                    <img src="assets/img/account/b.png" class="img-fluid" alt="shoe image">
                                    <img src="assets/img/account/b.png" class="img-fluid" alt="shoe image">
                                    <img src="assets/img/account/b.png" class="img-fluid" alt="shoe image">
                                    <img src="assets/img/account/b.png" class="img-fluid" alt="shoe image">
                                    <img src="assets/img/account/b.png" class="img-fluid" alt="shoe image">
                                    <img src="assets/img/account/b.png" class="img-fluid" alt="shoe image">
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
                                    onclick="document.getElementById('id03').style.display='none'"
                                    class="w3-button w3-display-topright"> กลับ </button>
                                <button class="button button-up"
                                    onclick="document.getElementById('id03').style.display='none'"
                                    class="w3-button w3-display-topright"> ยืนยัน </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- The Modal -->
            <div id="id04" class="w3-modal">
                <div class="w3-modal-content">
                    <div class="w3-container">
                        <div class="text-t-haer-pakan">
                            <p>
                                แก้ไขข้อมูลสำหรับออกใบกำกับภาษี/ใบเสร็จรับเงิน
                            </p>
                        </div>
                        <div class="card-con w-100">
                            <div class="text-t-deail-add-edit">
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label"> หมายเลขบัญชี <span> + </span>
                                        </label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label"> ชื่อบัญชี <span> + </span>
                                        </label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </form>
                                <br>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label"> ธนาคาร <span> + </span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> ระบุ </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label"> สาขา <span> + </span>
                                        </label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </form>
                                <br>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label"> ประเภทบัญชี <span> + </span>
                                        </label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </form>
                                <br>
                                <label for="inputPassword4" class="form-label"> สำเนาหน้า Book Bank <span> + (รองรับไฟล์
                                        .pdf, .jpg และ .png เท่านั้น. ขนาดไม่เกิน 5Mb.) </span>
                                    <div class="card-in2">
                                        <div class="w3-container w3-center">
                                            <div class="drop-zone">
                                                <span class="drop-zone__prompt2"> <i class="fa fa-plus-circle"
                                                        style="font-size:35px"></i>
                                                    <p>แนบรูปภาพ หรือ PDF</p>

                                                </span>
                                                <input type="file" name="myFile" class="drop-zone__input">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div style="text-align:center;">
                            <div class="b-but-concon">
                                <button class="button button-close"
                                    onclick="document.getElementById('id04').style.display='none'"
                                    class="w3-button w3-display-topright"> ยกเลิก </button>
                                <button class="button button-up"
                                    onclick="document.getElementById('id05').style.display='block'"
                                    class="w3-button w3-black"> อัพเดท </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- The Modal -->
            <div id="id05" class="w3-modal">
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
                                    <img src="assets/img/account/b.png" class="img-fluid" alt="shoe image">
                                    <img src="assets/img/account/b.png" class="img-fluid" alt="shoe image">
                                    <img src="assets/img/account/b.png" class="img-fluid" alt="shoe image">
                                    <img src="assets/img/account/b.png" class="img-fluid" alt="shoe image">
                                    <img src="assets/img/account/b.png" class="img-fluid" alt="shoe image">
                                    <img src="assets/img/account/b.png" class="img-fluid" alt="shoe image">
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
                                    onclick="document.getElementById('id05').style.display='none'"
                                    class="w3-button w3-display-topright"> กลับ </button>
                                <button class="button button-up"
                                    onclick="document.getElementById('id05').style.display='none'"
                                    class="w3-button w3-display-topright"> ยืนยัน </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- The Modal -->
            <div id="id06" class="w3-modal">
                <div class="w3-modal-content">
                    <div class="w3-container">
                        <div class="text-t-haer-pakan">
                            <p>
                                เพิ่ม/แก้ไขที่อยู่
                            </p>
                        </div>
                        <div class="card-con w-100">
                            <div class="text-t-deail-add-edit">
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label"> ชื่อผู้ติดต่อ <span> + </span>
                                        </label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label"> เบอร์โทรศัพท์ <span> + </span>
                                        </label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </form>
                                <br>
                                <form class="row g-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label"> ที่อยู่ <span> +
                                            </span></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                </form>
                                <br>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label"> จังหวัด <span> + </span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> ระบุ </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label"> เขต/อำเภอ <span> + </span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> ระบุ </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                </form>
                                <br>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label"> แขวง/ตำบล <span> + </span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> ระบุ </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label"> รหัสไปรษณีย์ <span> + </span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> ระบุ </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                </form>


                            </div>
                        </div>
                        <br>
                        <div style="text-align:center;">
                            <div class="b-but-concon">
                                <button class="button button-close"
                                    onclick="document.getElementById('id06').style.display='none'"
                                    class="w3-button w3-display-topright"> ยกเลิก </button>
                                <button class="button button-up"
                                    onclick="document.getElementById('id06').style.display='none'"
                                    class="w3-button w3-display-topright"> อัพเดท </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@stop

@section('script')

<!-- JS  upload img -->
<script>
    onChangeHandler = () => {
        let reader = new FileReader();
        let file = $(".upload-image__file")[0].files[0]
        reader.onloadend = () => {
            console.log(reader.result)
            $(".upload-image").css("background-image", "url(" + reader.result + ")")

        }
        reader.readAsDataURL(file);
    }
    </script>
    <script src="./src/main.js"></script>
    <script>
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        const dropZoneElement = inputElement.closest(".drop-zone");

        dropZoneElement.addEventListener("click", (e) => {
            inputElement.click();
        });

        inputElement.addEventListener("change", (e) => {
            if (inputElement.files.length) {
                updateThumbnail(dropZoneElement, inputElement.files[0]);
            }
        });

        dropZoneElement.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZoneElement.classList.add("drop-zone--over");
        });

        ["dragleave", "dragend"].forEach((type) => {
            dropZoneElement.addEventListener(type, (e) => {
                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        dropZoneElement.addEventListener("drop", (e) => {
            e.preventDefault();

            if (e.dataTransfer.files.length) {
                inputElement.files = e.dataTransfer.files;
                updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
            }

            dropZoneElement.classList.remove("drop-zone--over");
        });
    });

    /**
     * Updates the thumbnail on a drop zone element.
     *
     * @param {HTMLElement} dropZoneElement
     * @param {File} file
     */
    function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

        // First time - remove the prompt
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
            dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }

        // First time - there is no thumbnail element, so lets create it
        if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("drop-zone__thumb");
            dropZoneElement.appendChild(thumbnailElement);
        }

        thumbnailElement.dataset.label = file.name;

        // Show thumbnail for image files
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = () => {
                thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
            };
        } else {
            thumbnailElement.style.backgroundImage = null;
        }
    }
    </script>



    <!-- JS  modal edit -->
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


    <!-- JS  modal edit 2 -->
    <script>
    var modal = document.getElementById("myModa2");
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

@stop