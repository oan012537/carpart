@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="received-order-detail">

<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">รายละเอียด</h2>
                </div>
                <div class="col-12 col-md-9">
                    <div class="txt__detail_num d-flex justify-content-between mb-3">
                        <div><span>หมายเลขคำสั่งซื้อ : C123456789</span></div>
                        <div><span>วันที่สั่งซื้อ : 15/12/2564 18.00 น.</span></div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="box__accordian__edit mb-3">
                        <div class="box__filter p-4">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 mb-md-0">
                                    <h5>ผู้ขาย</h5>
                                    <span>Shop ID: 3453453453454</span><span class="ms-4">ร้านอะไหล่</span>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5>ผู้ซื้อ</h5>
                                    <span>Customer ID: 3453453453454</span><span class="ms-4">นายก.ไก่</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box__accordian__edit mb-3">
                        <div class="box__filter p-4">
                            <div class="d-md-flex justify-content-between align-items-end">
                                <div>
                                    <h5>ได้รับสินค้าแล้ว</h5>
                                    <span>ผู้ซื้อได้ยืนยันการรับสินค้าแล้ว</span>
                                </div>
                                <div class=" form-box-input">
                                    <button class="btn btn-search mt-3 mt-md-0" data-bs-toggle="modal" data-bs-target="#seeRecieved"><i class="fas fa-eye"></i> ดูใบเสร็จการส่งสินค้า</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="box__accordian__edit mb-3">
                        <div class="box__filter p-4">
                            <h5 class="mb-4"><i class="fas fa-map-marker-alt"></i> ที่อยู่ในการจัดส่ง</h5>
                            <p>สมมติ แซ่ตัน 123 หมู่ 0 ถนน เจริญกรุง ซอย 5 ตำบล ทุ่งสุลา อำเภอ ศรีราชา จังหวัด ชลบุรี 12345</p>
                            <p> เบอร์โทร 01234567 อีเมล emily@sample.com</p>
                        </div>
                    </div>

                    <div class="box__accordian__edit mb-3">
                        <div class="box__filter p-4">
                            <h5 class="mb-4"><i class="fas fa-file-alt"></i> ใบกำกับภาษี/.ใบเสร็จรับเงิน</h5>
                            <p>บริษัทอะไหล่ จำกัด (สำนักงานใหญ่) เลขที่ผู้เสียภาษี 12345678989012 ที่อยู่ 88/2 ลดาวัลย์ ต.ท่าทราย,
                                อำเภอเมืองนนทบุรี, จังหวัดนนทบุรี, 11000</p>
                        </div>
                    </div>

                    <div class="box__accordian__edit mb-3">
                        <div class="box__filter p-4">
                            <div class=" form-box-input">
                                <div class="row">
                                    <div class="col-12 col-lg-9">
                                        <h5 class="mb-4">การจัดส่ง</h5>
                                        <div class="d-md-flex">
                                            <div>
                                                <button class="btn-flash mb-1"><img src="assets/img/request-form/flash.png"></button><br>
                                                <a href="#" title="เงื่อนไขการรับประกัน" data-bs-toggle="popover" data-bs-placement="bottom" data-content="Content" class="text-white"><i class="fas fa-info-circle"></i> เงื่อนไขการรับประกัน</a>
                                            </div>
                                            <div class="ms-md-4 ms-0">
                                                <p class="mb-0 fs-18">Flash Express <span class="sent-conf fs-14">การจัดส่งที่รองรับโดย CPN</span></p>
                                                <span>(ระยะเวลาจัดส่งโดยประมาณ 2-3 วัน)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mt-3 mt-lg-0">
                                        <h6 class="mb-lg-4 mb-1">ราคาประมาณขนส่ง</h6>
                                        <span>฿ 29.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box__accordian__edit mb-3">
                        <div class="" id="card-detail">
                            <div class="card mt-0">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-10 d-flex">
                                            <div class="me-3">
                                                <img src="assets/img/request-form/lo-ch.png" class="img-icon">
                                                <span>ตรงรุ่น</span>
                                            </div>
                                            <div class="me-3">
                                                <p class="mb-0">ผู้ขายยืนยันว่าสามารถใช้ร่วมกันได้</p>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <p class="mb-0">ราคาต่อชิ้น</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 pb-0">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="d-flex">
                                                <span class="me-4">1</span>
                                                <img src="assets/img/request-form/Frame 24513.png" class="img-request me-3">
                                                <div class="text-request">
                                                    <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                                    <span>รหัสสินค้า 1234</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <p>299 ฿</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <button type="button" class="data-edit" data-bs-toggle="collapse" data-bs-target="#detail-product">รายละเอียดสินค้า<span class="btn-down"><i class="fas fa-angle-down"></i></span></button>
                                    <div id="detail-product" class="collapse mb-5">
                                        <form class="form-box-input px-2">
                                            <div class="row mb-5">
                                                <div class="col-sm-6">
                                                    <div class="txt-detail-reques2 mb-5 px-2">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">ชื่อสินค้า</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">ยาง B Quick</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">หมวดหลัก/หมวดย่อย</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">หมวดหลัก > หมวดย่อย > หมวดย่อย</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">รุ่น</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">รุ่น > รุ่นย่อย</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">เกรด</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">แท้</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">Genuine PARTS NO.</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">123456-123242</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">Engine Model Code</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">123456-123242</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">VIN Code</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">2123HTRYTYytuioio$7675</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">สถานะสินค้า</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">พร้อมส่ง</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">ราคา</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">12345</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">ราคาค่าส่ง</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">123</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">จัดส่ง</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">Flash</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="txt-detail-reques2 mb-5 px-2">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">แบรนด์</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">TOYOTA</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">ปี</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">คุณภาพสินค้า</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">มือสอง - ดีมาก/Excellent (80~100%)</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">Full Model Code</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">123456-123242</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">ผู้ผลิตชิ้นส่วน/Maker</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">TOYOTA</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">ขนาด</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">กว้าง x ยาว x สูง</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">น้ำหนัก</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">10 กิโลกรัม</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">สีภายใน/Trim</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">สีขาว</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">สีภายนอก/Color</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">สีดำ</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">ใบกำกับภาษี</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">สามารถออกใบกำกับภาษีเต็มรูปแบบได้ </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p class="txt-h-redetail">รายละเอียดเกี่ยวกับสินค้า/เงื่อนไขประกันสินค้า/คุณภาพเพิ่มเติม(ถ้ามี)</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <p class="txt-tt-redetail">ดึงค่าจากผู้ให้รับประกัน + ระยะเวลา เงื่อนไขกับรายละเอียด รวมกัน ตามที่commentไว้ก่อนหน้า ดึงข้อมูลAuto จาก posting</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product6">ย่อ <i class="fas fa-angle-up"></i></button>
                                    </div>
                                    <hr>

                                    <button type="button" class="data-edit" data-bs-toggle="collapse" data-bs-target="#video-product">วิดีโออะไหล่สินค้า (เพิ่มเติม)<span class="btn-down"><i class="fas fa-angle-down"></i></span></button>
                                    <div id="video-product" class="collapse mb-5">
                                        <img src="assets/img/request-form/video.png" class="img-request">
                                        <img src="assets/img/request-form/video.png" class="img-request">

                                        <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product6">ย่อ <i class="fas fa-angle-up"></i></button>
                                    </div>
                                    <hr>

                                    <button type="button" class="data-edit" data-bs-toggle="collapse" data-bs-target="#results-product">ผลการตรวจสอบ<span class="btn-down"><i class="fas fa-angle-down"></i></span></button>
                                    <div id="results-product" class="collapse mb-5">
                                        <div class="d-flex txt_box_card">
                                            <div class="me-3">
                                                <img src="assets/img/request-form/lo-ch.png" class="img-icon">
                                                <span>ตรงรุ่น</span>
                                            </div>
                                            <div class="me-3">
                                                <p class="mb-0">ผู้ขายยืนยันว่าสามารถใช้ร่วมกันได้</p>
                                            </div>
                                        </div>
                                        <div class="img-test">
                                            <img src="assets/img/request-form/Frame 24513.png">
                                            <p>VIN Code<span class="ms-3">fdsfk;dkfl;s;df;kds;fksdkf;dsk</span></p>
                                        </div>

                                        <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product6">ย่อ <i class="fas fa-angle-up"></i></button>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box__accordian__edit mb-3">
                        <div class="box__filter pb-0">
                            <div class="row">
                                <div class="col-4 col-lg-9"></div>
                                <div class="col-8 col-lg-3">
                                    <sapn>ราคาสินค้า</sapn>
                                    <span class="float-end">฿ 199.00</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4 col-lg-9"></div>
                                <div class="col-8 col-lg-3">
                                    <sapn>ค่าการจัดส่ง</sapn>
                                    <span class="float-end">฿ 26.00</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4 col-lg-9"></div>
                                <div class="col-8 col-lg-3">
                                    <sapn>ยอดรวม</sapn>
                                    <span class="float-end">฿ 225.00</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4 col-lg-9"></div>
                                <div class="col-8 col-lg-3">
                                    <sapn>คูปองส่วนลด</sapn>
                                    <span class="float-end">- ฿ 20.00</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4 col-lg-9"></div>
                                <div class="col-8 col-lg-3">
                                    <sapn>การจัดส่ง</sapn>
                                    <span class="float-end">Kerry</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4 col-lg-9"></div>
                                <div class="col-8 col-lg-3">
                                    <sapn>ชำระเงิน</sapn>
                                    <span class="float-end">QR Code</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4 col-lg-9"></div>
                                <div class="col-8 col-lg-3">
                                    <sapn>ยอดชำระสุทธิ:</sapn>
                                    <h4 class="btn-shot">฿ 225.00</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <button class="btn btn__app px-5">กลับ</button>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="box__accordian__edit mb-3">
                        <div class="box__filter">
                            <div class="img-product">
                                <button class="btn btn__delete float-start"><i class="fas fa-print"></i> เพิ่มบันทึก</button>
                            </div>
                            <div class="text-area">
                            </div>
                        </div>
                    </div>
                    <div class="box__accordian__edit mb-3">
                        <div class="box__filter pb-0">
                            <p>ประวัติการสั่งซื้อ</p>
                            <div id="hirtory-order">
                                <ul id="progressbar">
                                    <li class="active">
                                        <span>
                                            <div class="Step1"></div>
                                            <div>
                                                <p class="mb-0">ยังไม่ได้ชำระ</p>
                                                <div class="step-text">
                                                    <p class="mb-0">13.30 น. 07/11/64 </p>
                                                </div>
                                            </div>
                                        </span>

                                    </li>
                                    <li class="active">
                                        <span>
                                            <div class="Step2"></div>
                                            <div>
                                                <p class="mb-0">ที่ต้องจัดส่ง</p>
                                                <div class="step-text">
                                                    <p class="mb-0">ชำระผ่าน QR Code</p>
                                                    <small>เมื่อ 13.30 น. 07/11/64 </small>
                                                </div>
                                            </div>
                                        </span>
                                    </li>
                                    <li class="active">
                                        <span>
                                            <div class="Step3"></div>
                                            <div>
                                                <p class="mb-0">กำลังจัดส่ง</p>
                                                <div class="step-text">
                                                    <p class="mb-0">13.30 น. 07/11/64</p>
                                                    <small>Kerry - TH12345678 </small>
                                                </div>
                                            </div>
                                        </span>

                                    </li>
                                    <li class="active">
                                        <span>
                                            <div class="Step4"></div>
                                            <div>
                                                <p class="mb-0">ได้รับสินค้าแล้ว</p>
                                                <div class="step-text">
                                                    <p class="mb-0">13.30 น. 07/11/64</p>
                                                    <small>Kerry - TH12345678</small>
                                                </div>
                                            </div>
                                        </span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="request-form-details.php" class="btn btn__viewdetail"><i class="fas fa-users"></i> สร้างการติดต่อสองหน้าต่าง ผู้ซื้อและผู้ขาย</a>
                </div>
            </div>

            <!-- The Modal -->
            <div class="box__accordian__edit">
                <div class="modal fade" id="seeRecieved">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">ใบเสร็จการส่งสินค้า</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="card form-box-input mb-3">
                                    <div class="card-header">
                                        <p class="mb-0 ms-5">หมายเลขคำสั่งซื้อ : W123467845123</p>

                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="d-flex">
                                                    <div class="me-3">
                                                        <img src="assets/img/request-form/Frame 24513.png" class="img-request">
                                                    </div>
                                                    <div class="text-request">
                                                        <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                                        <span>รหัสสินค้า 1234</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <span>299 ฿</span>
                                            </div>
                                            <div class="col-2">
                                                <p>Kerry TH12345678fds</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <label class="title__txt">รูปภาพสินค้า/บรรจุภัณฑ์สินค้า</label>
                                <div class="box-img-input mt-3 mb-3">
                                    <div class="manage-input-product">
                                        <div class="img-product">
                                            <img src="assets/img/request-form/Frame 24513.png" class="img-request">
                                        </div>
                                        <div class="img-product">
                                            <img src="assets/img/request-form/Frame 24513.png" class="img-request">
                                        </div>
                                        <div class="img-product">
                                            <img src="assets/img/request-form/Frame 24513.png" class="img-request">
                                        </div>
                                        <div class="img-product">
                                            <img src="assets/img/request-form/Frame 24513.png" class="img-request">
                                        </div>
                                        <div class="img-product">
                                            <img src="assets/img/request-form/Frame 24513.png" class="img-request">
                                        </div>
                                    </div>
                                </div>

                                <label class="title__txt">ใบเสร็จการจัดส่ง</label>
                                <div class="box-img-input mt-3">
                                    <div class="manage-input-product">
                                        <div class="img-product">
                                            <img src="assets/img/request-form/Frame 24513.png" class="img-request">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer justify-content-center">
                                <button class="btn btn__app px-5">กลับ</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    /*-----------------------------------------
    RESPONSIVE
-------------------------------------------*/

    .btn.btn__delete {
        width: 100%;
    }
    .btn.btn__delete:hover {
        width: 100%;
    }
    @media (max-width:426px) {
        .content {
            padding: 1rem 0;
        }

        .box__approvel .txt__page {
            margin-bottom: 1rem;
        }

        .box__approvel .box__filter {
            padding: 0.5rem 0.5rem 1rem 0.5rem;
        }

        .img-test,
        .img-test img {
            width: 100%;
        }

        .btn.btn__delete {
            width: 50%;
        }

    }

    @media screen and (min-width:427px) and (max-width:767px) {
        .content {
            padding: 1rem 0;
        }

        .box__approvel .txt__page {
            margin-bottom: 1rem;
        }

        .box__approvel .box__filter {
            padding: 0.5rem 0.5rem 1rem 0.5rem;
        }

        .img-test,
        .img-test img {
            width: 100%;
        }

        .btn.btn__delete {
            width: 50%;
        }
    }

    @media screen and (min-width:768px) and (max-width:1023px) {

        .content {
            padding: 1rem 0;
        }

        .box__approvel .txt__page {
            margin-bottom: 1rem;
            margin-top: 4rem;
        }

        .box__approvel .box__filter {
            padding: 0.5rem 0.5rem 1rem 0.5rem;
        }

        .img-test,
        .img-test img {
            width: 100%;
        }

        .btn.btn__delete {
            width: 100%;
        }

        .box__accordian__edit .box__filter #hirtory-order #progressbar li span:before {
            left: 70px;
            top: -13px;
            height: 33px;
        }

        .box__accordian__edit .box__filter #hirtory-order #progressbar li .Step1,
        .box__accordian__edit .box__filter #hirtory-order #progressbar li .Step2,
        .box__accordian__edit .box__filter #hirtory-order #progressbar li .Step3,
        .box__accordian__edit .box__filter #hirtory-order #progressbar li .Step4,
        .box__accordian__edit .box__filter #hirtory-order #progressbar li .Step5 {
            height: 75px;
        }

        .box__accordian__edit .box__filter #hirtory-order #progressbar li span{
            flex-wrap: wrap;
            justify-content: center;
            text-align: center;
        }
        
    }

    @media screen and (min-width:1024px) and (max-width:1279px) {
        .btn.btn__delete {
            width: 100%;
        }
    }
</style>
@stop

@section('script')
<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>
@stop