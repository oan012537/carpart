@extends('backend.layouts.templates')
@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
<input type="hidden" id="pageName" name="pageName" value="manage-product">
<input type="hidden" id="pagemenuName" name="pagemenuName" value="manageproduct">

<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">แก้ไขสินค้า</h2>
                </div>

                <div class="col-xl-2 col-lg-12 tablet-show2">
                    <div class="box__accordian__edit">
                        <div class="box__filter">
                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product9">
                                <p><span><i class="fas fa-info-circle"></i></span> ข้อมูลสินค้า 1<span class="btn-shot"><i class="fas fa-angle-up"></i></span></p>
                            </button>
                            <div id="data-product9" class="collapse show">
                                <ul id="progressbar">
                                    <li class="active">
                                        <p class="progress-icon"></p>รายละเอียด
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>การรับประกัน
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>ข้อมูลสำหรับการขนส่ง
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>ราคา
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>จำนวน
                                    </li>
                                </ul>
                            </div>

                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product10">
                                <p><span><i class="fas fa-info-circle"></i></span> ข้อมูลสินค้า 2<span class="btn-shot"><i class="fas fa-angle-down"></i></span></p>
                            </button>
                            <div id="data-product10" class="collapse mb-5">
                                <ul id="progressbar">
                                    <li class="active">
                                        <p class="progress-icon"></p>รายละเอียด
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>การรับประกัน
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>ข้อมูลสำหรับการขนส่ง
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>ราคา
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>จำนวน
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="box__accordian__edit mt-3 mb-3">
                        <div class="box__filter">
                            <div class="form-box-input">
                                <p class="title__txt">วันที่สร้าง</p>
                                <p>01/12/2564</p>
                                <p class="title__txt">ผู้สร้าง</p>
                                <p>Thanatcha Singsomboon</p>
                                <p class="title__txt">สถานะขาย</p>
                                <small class="status-process">เปิดใช้งาน</small>
                            </div>
                        </div>
                    </div>

                    <div class="box__accordian__edit mt-3">
                        <div class="box__filter">
                            <div class="form-box-input">
                                <label class="title__txt">Promotion CODE</label>
                                <input type="text" class="form-control" id="" placeholder="ระบุ">
                            </div>
                        </div>
                    </div>
                    <div class="form-box-input mt-3">
                        <button class="btn btn__app btn__noapproval w-100 text-light" data-bs-toggle="modal" data-bs-target="#confirm"><i class="fas fa-times-circle"></i> ระงับการขาย</button>
                        <!-- The Modal -->
                        <div class="modal fade" id="confirm">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="{{asset('backends/assets/img/request-form/conf-noapprov.png')}}">
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer text-center">
                                        <p class="text-conf mb-3">คุณแน่ใจที่จะระงับการขาย!</p>
                                        <button class="btn btn__app px-5" data-bs-dismiss="modal">ยกเลิก</button>
                                        <button class="btn btn__app btn__waitapproval px-5" data-bs-toggle="modal" data-bs-target="#complete">ตกลง</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="complete">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="{{asset('backends/assets/img/request-form/comp-noapprov.png')}}">
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer text-center">
                                        <p class="text-conf mb-3">ระงับการขายสำเร็จ</p>
                                        <button class="btn btn__app px-5" data-bs-dismiss="modal">ยกเลิก</button>
                                        <button class="btn btn__app btn__waitapproval px-5" data-bs-dismiss="modal">ตกลง</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-xl-10 col-lg-12">
                    <div class="box__accordian__edit">
                        <div class="box__filter">
                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product1"><span><i class="fas fa-info-circle"></i></span> ข้อมูลสินค้า 1 <p class="mb-0 mt-3">รายละเอียด</p></button>
                            <div id="data-product1" class="collapse show mb-5">
                                <form class="form-box-input px-2">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">ID</label>
                                            <input type="text" class="form-control" id="" placeholder="123456">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">ชื่อสินค้า/Product Name (TH) <span class="text-red">*</span></label>
                                            <input type="text" class="form-control" id="" placeholder="generate ชื่ออัตโนมัติจาก หมวดหมู่ย่อย หมวดหมู่ แบรนด์ รุ่น ปี">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label for="" class="title__txt">ชื่อสินค้า/Product Name (EN) <span class="text-red">*</span></label>
                                            <input type="text" class="form-control" id="" placeholder="generate ชื่ออัตโนมัติจาก หมวดหมู่ย่อย หมวดหมู่ แบรนด์ รุ่น ปี">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label for="" class="title__txt">ชื่อสินค้าที่ใช้ในการซื้อขายจริง</label>
                                            <input type="text" class="form-control" id="" placeholder="generate ชื่ออัตโนมัติจาก หมวดหมู่ย่อย หมวดหมู่ แบรนด์ รุ่น ปี">
                                            <span class="text-red">กรณีไม่ระบุจะนำชื่อสินค้าที่ระบบประมวลผลให้แสดงแทน</span>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <div class="d-flex justify-content-between flex-initial">
                                                <label class="title__txt">รูปภาพสินค้า<span class="text-red">*</span></label>
                                                <button class="btn btn-search" type="button" id=""><i class="fas fa-qrcode"></i> สแกน QR Code เพื่ออัปโหลดวีดีโอผ่านมือถือ</button>
                                            </div>
                                            <div class="box-img-input">
                                                <div class="manage-input-product">
                                                    <div class="img-product">
                                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                        <button class="btn btn__delete">ลบ <i class="fas fa-trash"></i></button>
                                                    </div>
                                                    <div class="img-product">
                                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                        <button class="btn btn__delete">ลบ <i class="fas fa-trash"></i></button>
                                                    </div>
                                                    <div class="img-product">
                                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                        <button class="btn btn__delete">ลบ <i class="fas fa-trash"></i></button>
                                                    </div>
                                                    <div class="img-product">
                                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                        <button class="btn btn__delete">ลบ <i class="fas fa-trash"></i></button>
                                                    </div>
                                                    <div class="img-product">
                                                        <button class="btn-add-img">
                                                            <i class="fas fa-plus-circle"></i>
                                                            <p class="mb-0">แนบรูปภาพ .Jpeg</p>
                                                            <span>สูงสุดไม่เกิน 5 ภาพขนาดไม่เกิน 5 Mb.</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label class="title__txt">เกรด<span class="text-red">*</span></label>
                                            <div class="d-flex mt-2">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                    <label class="form-check-label" for="check1">แท้/Genuine</label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                                    <label class="form-check-label" for="check2">OEM</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">ผู้ผลิตชิ้นส่วน/Maker </label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">Genuine PARTS NO./SKU CODE</label>
                                            <input type="text" class="form-control" id="" placeholder="ATCB-1000-01">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label for="" class="title__txt">คุณภาพสินค้า<span class="text-red">*</span></label>
                                            <select class="form-select">
                                                <option>ดีมาก/Excellent (80~100%)</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label for="" class="title__txt">รหัสสินค้าภายในร้าน/Shop Original Code.</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">VIN Code </label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">Full Model Code</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">Engine Model Code</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">สีภายใน/Trim</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">สีภายนอก/Color</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>
                                    </div>

                                </form>
                                <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product1">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                            <hr>
                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product2">การรับประกัน</button>
                            <div id="data-product2" class="collapse show mb-5">
                                <form class="form-box-input px-2">
                                    <div class="col-xl-12 mb-4">
                                        <label class="title__txt">การรับประกัน<span class="text-red">*</span></label>
                                        <div class="d-flex mt-2">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                <label class="form-check-label" for="check1">แท้/Genuine</label>
                                            </div>
                                            <div class="form-check ms-2">
                                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                                <label class="form-check-label" for="check2">OEM</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-12 mb-4">
                                        <label class="title__txt">ระยะเวลาการรับประกัน</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control border-end-0 w-50" placeholder="6" name="">
                                            <select class="border-start-0 form-select text-center">
                                                <option>เดือน</option>
                                            </select>
                                        </div>
                                        <span class="text-red">ระยะเวลารับประกันสินค้าต้องเป็นไปตามประเภทของชิ้นส่วน</span>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label class="title__txt">เงื่อนไขการรับประกัน/รายละเอียดเกี่ยวกับสินค้าและคุณภาพเพิ่มเติม(ถ้ามี)</label><br>
                                        <span class="text-red">เช่น รอย,การเกิดสนิม,การแตกหัก,ชิ้นส่วนประกอบไม่ครบ,อะไหล่บิ้วต์ หรือ ข้อมูลอื่นๆ</span>
                                        <textarea rows="5" class="form-control" placeholder="ระบุ"></textarea>
                                    </div>
                                </form>

                                <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product2">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                            <hr>
                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product3">ข้อมูลสำหรับการขนส่ง</button>
                            <div id="data-product3" class="collapse show mb-5">
                                <div class="row">
                                    <div class="col-xl-2 col-12">
                                        <label class="title__txt">น้ำหนักสินค้า</label>
                                    </div>
                                    <div class="col-xl-3 col-12">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control border-end-0 w-50" placeholder="00.00" name="">
                                            <select class="border-start-0 form-select text-center">
                                                <option>KG</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-xl-2 col-12">
                                        <label class="title__txt">ขนาดของสินค้า</label>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                        <div class="d-flex">
                                            <input type="text" class="form-control text-center" id="" placeholder="กว้าง">
                                            <span class="mx-2"></span>
                                            <input type="text" class="form-control text-center" id="" placeholder="ยาว">
                                            <span class="mx-2"></span>
                                            <input type="text" class="form-control text-center" id="" placeholder="สูง">
                                            <span class="title__txt mx-3">หน่วย</span>
                                            <select class="form-select text-center">
                                                <option>CM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-xl-2 col-lg-12">
                                        <label class="title__txt">การขนส่ง</label>
                                    </div>
                                    <div class="col-xl-10 col-lg-12">
                                        <div class="card form-box-input setting-transport">
                                            <diV class="card-header">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                    <label class="form-check-label" for="check1">การจัดส่งที่รองรับโดยCPN</label>
                                                </div>
                                            </diV>
                                            <diV class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-7">
                                                        <p>ประเภทการจัดส่ง <span class="sent-conf">การจัดส่งที่รองรับโดย CPN</span></p>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <span>฿ 29.00</span>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-7">
                                                        <p>ประเภทการจัดส่ง <span class="sent-conf">การจัดส่งที่รองรับโดย CPN</span></p>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <span>฿ 29.00</span>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-7">
                                                        <p>ประเภทการจัดส่ง <span class="sent-conf">การจัดส่งที่รองรับโดย CPN</span></p>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <span>฿ 29.00</span>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </diV>

                                        </div>
                                        <div class="card form-box-input setting-transport">
                                            <diV class="card-header">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                                    <label class="form-check-label" for="check1">บริษัทขนส่งเอกชน(พัสดุชิ้นใหญ่)</label>
                                                </div>
                                            </diV>
                                            <diV class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-7">
                                                        <p>ประเภทการจัดส่ง </p>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <span>฿ 29.00</span><button class="btn btn-edit"><i class="fas fa-pencil-alt"></i></button>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-7">
                                                        <p>ประเภทการจัดส่ง </p>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <span>฿ 29.00</span><button class="btn btn-edit"><i class="fas fa-pencil-alt"></i></button>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-7">
                                                        <p>ประเภทการจัดส่ง </p>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <span>฿ 29.00</span><button class="btn btn-edit"><i class="fas fa-pencil-alt"></i></button>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </diV>

                                        </div>
                                        <div class="card form-box-input setting-transport">
                                            <diV class="card-header">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                                    <label class="form-check-label" for="check1">แสดง ชื่อขนส่งที่ Supplier setting ไว้</label>
                                                </div>
                                            </diV>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-2 col-lg-12">
                                        <label class="title__txt">การเตรียมการส่ง</label>
                                    </div>
                                    <div class="col-xl-10 col-lg-12">
                                        <div class="form-box-input row mt-2">
                                            <div class="col-xl-2 col-lg-12 form-check ms-2 mb-3">
                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                <label class="form-check-label" for="check1">พร้อมส่ง</label>
                                            </div>
                                            <div class="col-xl-3 col-lg-12 form-check   ms-2">
                                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                                <label class="form-check-label" for="check2">เตรียมการส่งนานกว่าปกติ</label><br>
                                                <div class="d-flex mt-3">
                                                    <label class=" title__txt me-3">ระบุวัน</label>
                                                    <select class="form-select w-50">
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-red mt-2">**กำหนดระยะเวลาตรวจสอบสินค้าระหว่างการจัดส่ง ภายใน 3 วัน หลังจากวันที่ได้รับสินค้า**</span>
                                    </div>
                                </div>

                                <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product3">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                            <hr>
                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product4">
                                <div class="row">
                                    <p class="col-xl-5 col-12 mb-0">ราคา</p>
                                    <p class="col-xl-7 col-12 mb-0">ประมาณการรายรับสุทธิของสินค้าชิ้นนี้</p>
                                </div>
                            </button>
                            <div id="data-product4" class="collapse show mb-5">
                                <div class="row form-box-input mb-4">
                                    <div class="col-xl-5 col-12">
                                        <div class="col-xl-8 col-12">
                                            <label class="title__txt">ราคา <span class="text-red">(รวม VAT)</span></label>
                                            <input type="text" class="form-control" id="" placeholder="100.00">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-12">
                                        <div class="row">
                                            <div class="col-xl-4 col-12">
                                                <label class="title__txt">คอมมิชชั่น </label>
                                                <input type="text" class="form-control" id="" placeholder="100.00">
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                <label class="title__txt">รายรับสุทธิ </label>
                                                <input type="text" class="form-control" id="" placeholder="100.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product4">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="box__accordian__edit mt-3">
                        <div class="box__filter txt_box_card">

                            <button type="button" class="data-edit" data-bs-toggle="collapse" data-bs-target="#data-product5">
                                <p><span><i class="fas fa-info-circle"></i></span> ข้อมูลสินค้า 2</p>รายละเอียด<span class="btn-shot">แสดง <i class="fas fa-angle-down"></i></span>
                            </button>
                            <div id="data-product5" class="collapse mb-5">
                                <form class="form-box-input px-2">
                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">ID</label>
                                            <input type="text" class="form-control" id="" placeholder="123456">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">ชื่อสินค้า/Product Name (TH) <span class="text-red">*</span></label>
                                            <input type="text" class="form-control" id="" placeholder="generate ชื่ออัตโนมัติจาก หมวดหมู่ย่อย หมวดหมู่ แบรนด์ รุ่น ปี">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label for="" class="title__txt">ชื่อสินค้า/Product Name (EN) <span class="text-red">*</span></label>
                                            <input type="text" class="form-control" id="" placeholder="generate ชื่ออัตโนมัติจาก หมวดหมู่ย่อย หมวดหมู่ แบรนด์ รุ่น ปี">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label for="" class="title__txt">ชื่อสินค้าที่ใช้ในการซื้อขายจริง</label>
                                            <input type="text" class="form-control" id="" placeholder="generate ชื่ออัตโนมัติจาก หมวดหมู่ย่อย หมวดหมู่ แบรนด์ รุ่น ปี">
                                            <span class="text-red">กรณีไม่ระบุจะนำชื่อสินค้าที่ระบบประมวลผลให้แสดงแทน</span>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <div class="d-flex justify-content-between  flex-initial">
                                                <label class="title__txt">รูปภาพสินค้า<span class="text-red">*</span></label>
                                                <button class="btn btn-search" type="button" id=""><i class="fas fa-qrcode"></i> สแกน QR Code เพื่ออัปโหลดวีดีโอผ่านมือถือ</button>
                                            </div>
                                            <div class="box-img-input">
                                                <div class="manage-input-product">
                                                    <div class="img-product">
                                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                        <button class="btn btn__delete">ลบ <i class="fas fa-trash"></i></button>
                                                    </div>
                                                    <div class="img-product">
                                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                        <button class="btn btn__delete">ลบ <i class="fas fa-trash"></i></button>
                                                    </div>
                                                    <div class="img-product">
                                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                        <button class="btn btn__delete">ลบ <i class="fas fa-trash"></i></button>
                                                    </div>
                                                    <div class="img-product">
                                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                        <button class="btn btn__delete">ลบ <i class="fas fa-trash"></i></button>
                                                    </div>
                                                    <div class="img-product">
                                                        <button class="btn-add-img">
                                                            <i class="fas fa-plus-circle"></i>
                                                            <p class="mb-0">แนบรูปภาพ .Jpeg</p>
                                                            <span>สูงสุดไม่เกิน 5 ภาพขนาดไม่เกิน 5 Mb.</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label class="title__txt">เกรด<span class="text-red">*</span></label>
                                            <div class="d-flex mt-2">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                    <label class="form-check-label" for="check1">แท้/Genuine</label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                                    <label class="form-check-label" for="check2">OEM</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">ผู้ผลิตชิ้นส่วน/Maker </label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">Genuine PARTS NO./SKU CODE</label>
                                            <input type="text" class="form-control" id="" placeholder="ATCB-1000-01">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label for="" class="title__txt">คุณภาพสินค้า<span class="text-red">*</span></label>
                                            <select class="form-select">
                                                <option>ดีมาก/Excellent (80~100%)</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label for="" class="title__txt">รหัสสินค้าภายในร้าน/Shop Original Code.</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">VIN Code </label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">Full Model Code</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">Engine Model Code</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">สีภายใน/Trim</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                            <label class="title__txt">สีภายนอก/Color</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>
                                    </div>

                                </form>
                                <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product5">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                            <hr>

                            <button type="button" class="data-edit" data-bs-toggle="collapse" data-bs-target="#data-product6">การรับประกัน<span class="btn-shot">แสดง <i class="fas fa-angle-down"></i></span></button>
                            <div id="data-product6" class="collapse mb-5">
                                <form class="form-box-input px-2">
                                    <div class="col-12 mb-4">
                                        <label class="title__txt">การรับประกัน<span class="text-red">*</span></label>
                                        <div class="d-flex mt-2">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                <label class="form-check-label" for="check1">แท้/Genuine</label>
                                            </div>
                                            <div class="form-check ms-3">
                                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                                <label class="form-check-label" for="check2">OEM</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-12 mb-4">
                                        <label class="title__txt">ระยะเวลาการรับประกัน</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control border-end-0 w-75" placeholder="6" name="">
                                            <select class="border-start-0 form-select text-center">
                                                <option>เดือน</option>
                                            </select>
                                        </div>
                                        <span class="text-red">ระยะเวลารับประกันสินค้าต้องเป็นไปตามประเภทของชิ้นส่วน</span>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label class="title__txt">เงื่อนไขการรับประกัน/รายละเอียดเกี่ยวกับสินค้าและคุณภาพเพิ่มเติม(ถ้ามี)</label><br>
                                        <span class="text-red">เช่น รอย,การเกิดสนิม,การแตกหัก,ชิ้นส่วนประกอบไม่ครบ,อะไหล่บิ้วต์ หรือ ข้อมูลอื่นๆ</span>
                                        <textarea rows="5" class="form-control" placeholder="ระบุ"></textarea>
                                    </div>
                                </form>
                                <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product6">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                            <hr>

                            <button type="button" class="data-edit" data-bs-toggle="collapse" data-bs-target="#data-product7">ข้อมูลสำหรับการขนส่ง<span class="btn-shot">แสดง <i class="fas fa-angle-down"></i></span></button>
                            <div id="data-product7" class="collapse mb-5">
                                <div class="row">
                                    <div class=" col-xl-2 col-12">
                                        <label class="title__txt">น้ำหนักสินค้า</label>
                                    </div>
                                    <div class="col-xl-3 col-12">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control border-end-0 w-50" placeholder="00.00" name="">
                                            <select class="border-start-0 form-select text-center">
                                                <option>KG</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-xl-2 col-12">
                                        <label class="title__txt">ขนาดของสินค้า</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="d-flex">
                                            <input type="text" class="form-control text-center" id="" placeholder="กว้าง">
                                            <span class="mx-2"></span>
                                            <input type="text" class="form-control text-center" id="" placeholder="ยาว">
                                            <span class="mx-2"></span>
                                            <input type="text" class="form-control text-center" id="" placeholder="สูง">
                                            <span class="title__txt mx-3">หน่วย</span>
                                            <select class="form-select text-center">
                                                <option>CM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-xl-2 col-12">
                                        <label class="title__txt">การขนส่ง</label>
                                    </div>
                                    <div class="col-xl-10 col-lg-12">
                                        <div class="card form-box-input setting-transport">
                                            <diV class="card-header">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                    <label class="form-check-label" for="check1">การจัดส่งที่รองรับโดยCPN</label>
                                                </div>
                                            </diV>
                                            <diV class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-7">
                                                        <p>ประเภทการจัดส่ง <span class="sent-conf">การจัดส่งที่รองรับโดย CPN</span></p>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <span>฿ 29.00</span>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-7">
                                                        <p>ประเภทการจัดส่ง <span class="sent-conf">การจัดส่งที่รองรับโดย CPN</span></p>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <span>฿ 29.00</span>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-7">
                                                        <p>ประเภทการจัดส่ง <span class="sent-conf">การจัดส่งที่รองรับโดย CPN</span></p>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <span>฿ 29.00</span>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </diV>

                                        </div>
                                        <div class="card form-box-input setting-transport">
                                            <diV class="card-header">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                                    <label class="form-check-label" for="check1">บริษัทขนส่งเอกชน(พัสดุชิ้นใหญ่)</label>
                                                </div>
                                            </diV>
                                            <diV class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-7">
                                                        <p>ประเภทการจัดส่ง </p>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <span>฿ 29.00</span><button class="btn btn-edit"><i class="fas fa-pencil-alt"></i></button>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-7">
                                                        <p>ประเภทการจัดส่ง </p>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <span>฿ 29.00</span><button class="btn btn-edit"><i class="fas fa-pencil-alt"></i></button>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-7">
                                                        <p>ประเภทการจัดส่ง </p>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <span>฿ 29.00</span><button class="btn btn-edit"><i class="fas fa-pencil-alt"></i></button>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </diV>

                                        </div>
                                        <div class="card form-box-input setting-transport">
                                            <diV class="card-header">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                                    <label class="form-check-label" for="check1">แสดง ชื่อขนส่งที่ Supplier setting ไว้</label>
                                                </div>
                                            </diV>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-2 col-lg-12">
                                        <label class="title__txt">การเตรียมการส่ง</label>
                                    </div>
                                    <div class="col-xl-10 col-lg-12">
                                        <div class="form-box-input row mt-2">
                                            <div class="col-xl-2 col-lg-12 form-check ms-2 mb-3">
                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                <label class="form-check-label" for="check1">พร้อมส่ง</label>
                                            </div>
                                            <div class="col-xl-3 col-lg-12 form-check   ms-2">
                                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                                <label class="form-check-label" for="check2">เตรียมการส่งนานกว่าปกติ</label><br>
                                                <div class="d-flex mt-2 ms-2">
                                                    <label class="title__txt me-3">ระบุวัน</label>
                                                    <select class="form-select w-50">
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-red">**กำหนดระยะเวลาตรวจสอบสินค้าระหว่างการจัดส่ง ภายใน 3 วัน หลังจากวันที่ได้รับสินค้า**</span>
                                    </div>
                                </div>
                                <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product7">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                            <hr>

                            <button type="button" class="data-edit" data-bs-toggle="collapse" data-bs-target="#data-product8">เพิ่มสินค้าจากรถรุ่นเดียวกัน <span class="btn-shot">แสดง <i class="fas fa-angle-down"></i></span></button>
                            <div id="data-product8" class="collapse mb-5">
                                <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product8">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                            <hr>

                        </div>
                    </div>

                    <div class="box__accordian__edit mt-3">
                        <div class="box__filter">
                            <p class="fs-18">เพิ่มสินค้าจากรถรุ่นเดียวกัน <span class="title__txt fs-14">คุณสามารถสร้างรายการสินค้าที่มาจากรถคันเดียวกันอย่างง่าย</span></p>
                            <div class="d-flex flex-filter">
                                <button class="btn-add-product">
                                    <img src="{{asset('backends/assets/img/request-form/add-set1.png')}}" class="w-25">
                                    <p class="mb-0">คัดลอกสินค้า</p>
                                    <span>ชื่อสินค้า แบรนด์ และรุ่น หมวดหมู่เดียวกัน
                                        <br><span class="text-red">แต่คุณภาพต่างกัน</span></span>
                                </button>

                                <button class="btn-add-product">
                                    <img src="{{asset('backends/assets/img/request-form/add-set2.png')}}" class="w-25">
                                    <p class="mb-0">สินค้าต่างหมวด</p>
                                    <span>แบรนด์ และรุ่นเดียวกัน</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <br><br>
                    <div class="text-center">
                        <button class="btn btn__app px-5">กลับ</button>
                        <button class="btn btn__app btn__waitapproval px-5">ยืนยัน</button>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-12 tablet-hidden">
                    <div class="box__accordian__edit">
                        <div class="box__filter">
                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product9">
                                <p><span><i class="fas fa-info-circle"></i></span> ข้อมูลสินค้า 1<span class="btn-shot"><i class="fas fa-angle-up"></i></span></p>
                            </button>
                            <div id="data-product9" class="collapse show">
                                <ul id="progressbar">
                                    <li class="active">
                                        <p class="progress-icon"></p>รายละเอียด
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>การรับประกัน
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>ข้อมูลสำหรับการขนส่ง
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>ราคา
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>จำนวน
                                    </li>
                                </ul>
                            </div>

                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product10">
                                <p><span><i class="fas fa-info-circle"></i></span> ข้อมูลสินค้า 2<span class="btn-shot"><i class="fas fa-angle-down"></i></span></p>
                            </button>
                            <div id="data-product10" class="collapse mb-5">
                                <ul id="progressbar">
                                    <li class="active">
                                        <p class="progress-icon"></p>รายละเอียด
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>การรับประกัน
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>ข้อมูลสำหรับการขนส่ง
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>ราคา
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>จำนวน
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="box__accordian__edit mt-3">
                        <div class="box__filter">
                            <div class="form-box-input">
                                <p class="title__txt">วันที่สร้าง</p>
                                <p>01/12/2564</p>
                                <p class="title__txt">ผู้สร้าง</p>
                                <p>Thanatcha Singsomboon</p>
                                <p class="title__txt">สถานะขาย</p>
                                <small class="status-process">เปิดใช้งาน</small>
                            </div>
                        </div>
                    </div>

                    <div class="box__accordian__edit mt-3">
                        <div class="box__filter">
                            <div class="form-box-input">
                                <label class="title__txt">Promotion CODE</label>
                                <input type="text" class="form-control" id="" placeholder="ระบุ">
                            </div>
                        </div>
                    </div>
                    <div class="form-box-input mt-3">
                        <button class="btn btn__app btn__noapproval w-100 text-light" data-bs-toggle="modal" data-bs-target="#confirm"><i class="fas fa-times-circle"></i> ระงับการขาย</button>
                        <!-- The Modal -->
                        <div class="modal fade" id="confirm">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="{{asset('backends/assets/img/request-form/conf-noapprov.png')}}">
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer text-center">
                                        <p class="text-conf mb-3">คุณแน่ใจที่จะระงับการขาย!</p>
                                        <button class="btn btn__app px-5" data-bs-dismiss="modal">ยกเลิก</button>
                                        <button class="btn btn__app btn__waitapproval px-5" data-bs-toggle="modal" data-bs-target="#complete">ตกลง</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="complete">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="{{asset('backends/assets/img/request-form/comp-noapprov.png')}}">
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer text-center">
                                        <p class="text-conf mb-3">ระงับการขายสำเร็จ</p>
                                        <button class="btn btn__app px-5" data-bs-dismiss="modal">ยกเลิก</button>
                                        <button class="btn btn__app btn__waitapproval px-5" data-bs-dismiss="modal">ตกลง</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop

@section('script')
<script>
</script>
@stop
