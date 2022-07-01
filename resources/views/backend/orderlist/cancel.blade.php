@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="cancel-order-detail">

<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">รายละเอียด</h2>
                </div>
                <div class="col-9">
                    <div class="txt__detail_num d-flex justify-content-between mb-3">
                        <div><span>หมายเลขคำสั่งซื้อ : C123456789</span></div>
                        <div><span>วันที่สั่งซื้อ : 15/12/2564 18.00 น.</span></div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="box__accordian__edit mb-3">
                        <div class="box__filter p-4">
                            <div class="row">
                                <div class="col-6">
                                    <h5>ผู้ขาย</h5>
                                    <span>Shop ID: 3453453453454</span><span class="ms-4">ร้านอะไหล่</span>
                                </div>
                                <div class="col-6">
                                    <h5>ผู้ซื้อ</h5>
                                    <span>Customer ID: 3453453453454</span><span class="ms-4">นายก.ไก่</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box__accordian__edit mb-3">
                        <div class="box__filter p-4">
                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <h5>ยกเลิกคำสั่งซื้อ</h5>
                                    <span>ผู้ซื้อได้ส่งคำขอยกเลิกคำสั่งซื้อของคุณ</span>
                                </div>
                                <div class=" form-box-input">
                                    <a class="btn btn-search mt-0" href="cancel-order-detail-conf.php">ยืนยันคำขอยกเลิก</a>
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
                                <div class="col-9"></div>
                                <div class="col-3">
                                    <sapn>ราคาสินค้า</sapn>
                                    <span class="float-end">฿ 199.00</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-9"></div>
                                <div class="col-3">
                                    <sapn>ค่าการจัดส่ง</sapn>
                                    <span class="float-end">฿ 26.00</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-9"></div>
                                <div class="col-3">
                                    <sapn>ยอดรวม</sapn>
                                    <span class="float-end">฿ 225.00</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-9"></div>
                                <div class="col-3">
                                    <sapn>คูปองส่วนลด</sapn>
                                    <span class="float-end">- ฿ 20.00</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-9"></div>
                                <div class="col-3">
                                    <sapn>การจัดส่ง</sapn>
                                    <span class="float-end">Kerry</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-9"></div>
                                <div class="col-3">
                                    <sapn>ชำระเงิน</sapn>
                                    <span class="float-end">QR Code</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-9"></div>
                                <div class="col-3">
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
                <div class="col-3">
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
                                            </div>
                                        </span>

                                    </li>

                                    <li>
                                        <span>
                                            <div class="Step5"></div>
                                            <div>
                                                <p class="mb-0">ยกเลิกคำสั่งซื้อ</p>
                                            </div>
                                        </span>

                                    </li>
                                    {{-- ยกเลิก --}}
                                    {{-- <li class="active">
                                        <span>
                                            <div class="Step5"></div>
                                            <div>
                                                <p class="mb-0">ยกเลิกคำสั่งซื้อ</p>
                                                <div class="step-text">
                                                    <small>ยกเลิกเมื่อ 13.30 น. 07/11/64 </small>
                                                </div>
                                            </div>
                                        </span>

                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="request-form-details.php" class="btn btn__viewdetail"><i class="fas fa-users"></i> สร้างการติดต่อสองหน้าต่าง ผู้ซื้อและผู้ขาย</a>
                </div>
            </div>

        </div>
    </div>
</div>
@stop

@section('script')
<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>
@stop