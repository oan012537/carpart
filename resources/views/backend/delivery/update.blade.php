@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="delivery">
<input type="hidden" id="pageName2" name="pageName2" value="delivery">

<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">จัดการขนส่ง</h2>
                </div>

                <div class="col-10">


                    <div class="box_cardboxtran2">
                        <div id="data-product1" class="collapse show mb-5">
                            <div class="card-cardheard">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="box__accordian__edit">
                                            <button type="button" class="data-edit txt_box_card"
                                                data-bs-toggle="collapse" data-bs-target="#data-product1"><span><i
                                                        class="fas fa-info-circle"></i></span>
                                                ข้อมูลขนส่ง <p class="mb-0 mt-3">รายละเอียด</p></button>
                                        </div>
                                        <div class="col-6"></div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="title__txt">ID</label>
                                            <input type="text" class="form-control" id="" placeholder="123456">
                                        </div>
                                        <div class="col-6">
                                            <label class="title__txt">ชื่อผู้ให้บริการขนส่ง <span> * </span>
                                            </label>
                                            <input type="text" class="form-control" id=""
                                                placeholder="ผู้ขายเริ่มต้น">
                                        </div>
                                    </div>


                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <label class="title__txt"> สำเนาบัตรประชาชน <span> *(รองรับไฟล์ .jpg และ
                                                    .png
                                                    เท่านั้น. ขนาดไม่เกิน 5Mb.) </span> </label>
                                            <div class="card-img-up">
                                                <div class="img-product">
                                                    <button class="btn-add-img">
                                                        <i class="fas fa-plus-circle"></i>
                                                        <p class="mb-0">แนบรูปภาพ </p>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <label class="title__txt">ประเภทการขนส่ง <span>
                                                    ชื่อประเภทการขนส่งของผู้ให้บริการ
                                                </span> </label>
                                            <input type="text" class="form-control" id=""
                                                placeholder="eg. EMS, ส่งด่วน, ส่งภายในวัน, แมสเซนเจอร์%">
                                        </div>
                                        <div class="col-6">
                                            <label class="title__txt">ค่าคอมมิชชั่น</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected=""> บริษัทขนส่งเอกชนชิ้นใหญ่</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <label class="title__txt">ระยะเวลาการจัดส่งในกทม.</label>
                                            <input type="text" class="form-control" id=""
                                                placeholder="eg. EMS, ส่งด่วน, ส่งภายในวัน, แมสเซนเจอร์%">
                                        </div>
                                        <div class="col-6">
                                            <label class="title__txt">ระยะเวลาการจัดส่งในตวจ.</label>
                                            <input type="text" class="form-control" id="" placeholder="15%">
                                        </div>
                                    </div>


                                    <div class="row mt-4">
                                        <div class="col-2">
                                            <label class="title__txt">น้ำหนักสินค้า</label>
                                        </div>
                                        <div class="col-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control border-end-0 w-50"
                                                    placeholder="00.00" name="">
                                                <select class="border-start-0 form-select text-center">
                                                    <option>KG</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-2 mb-4">
                                        <div class="col-2">
                                            <label class="title__txt">ขนาดของสินค้า</label>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex">
                                                <input type="text" class="form-control text-center" id=""
                                                    placeholder="กว้าง">
                                                <span class="mx-2"></span>
                                                <input type="text" class="form-control text-center" id=""
                                                    placeholder="ยาว">
                                                <span class="mx-2"></span>
                                                <input type="text" class="form-control text-center" id=""
                                                    placeholder="สูง">
                                                <span class="title__txt mx-3">หน่วย</span>
                                                <select class="form-select text-center">
                                                    <option>CM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <label class="title__txt"> การรับประกัน <span> * </span></label>
                                            <div class="row ms-2">
                                                <div class="col-3 form-check mt-2">
                                                    <input type="checkbox" class="form-check-input" id="check2"
                                                        name="option2" value="something">
                                                    <label class="form-check-label" for="check2">มี </label><br>
                                                </div>
                                                <div class="col-3 form-check mt-2">
                                                    <input type="checkbox" class="form-check-input" id="check2"
                                                        name="option2" value="something">
                                                    <label class="form-check-label" for="check2">ไม่มี </label><br>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label class="title__txt"> มีเลขแทร็กกิ้ง <span> * </span></label>
                                            <div class="row ms-2">
                                                <div class="col-3 form-check mt-2">
                                                    <input type="checkbox" class="form-check-input" id="check2"
                                                        name="option2" value="something">
                                                    <label class="form-check-label" for="check2">มี </label><br>
                                                </div>
                                                <div class="col-3 form-check mt-2">
                                                    <input type="checkbox" class="form-check-input" id="check2"
                                                        name="option2" value="something">
                                                    <label class="form-check-label" for="check2">ไม่มี </label><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button mb-4" class="btn-shot" data-bs-toggle="collapse"
                                    data-bs-target="#data-product1">ย่อ <i class="fas fa-angle-up"></i></button>
                                <br>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="box__accordian__edit">
                                            <button type="button" class="data-edit txt_box_card"
                                                data-bs-toggle="collapse" data-bs-target="#data-product2">
                                                การรับประกัน </button>
                                        </div>
                                        <div class="col-6"></div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-9">
                                            <label
                                                class="title__txt">เงื่อนไขการรับประกัน/รายละเอียดเกี่ยวกับสินค้าและคุณภาพเพิ่มเติม(ถ้ามี)
                                            </label>
                                            <label class="title__txt2"> <span>เช่น
                                                    รอย,การเกิดสนิม,การแตกหัก,ชิ้นส่วนประกอบไม่ครบ,อะไหล่บิ้วต์
                                                    หรือ ข้อมูลอื่นๆ* </span>
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <div class="txt_numtxt">
                                                <p>
                                                    0/100
                                                </p>

                                            </div>
                                        </div>
                                        <div class="box_rabu2">
                                            <div class="col-12 mt-2">
                                                <input type="text" class="form-control" id="" placeholder="ระบุ">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <button type="button  mb-5" class="btn-shot" data-bs-toggle="collapse"
                                    data-bs-target="#data-product2">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                        </div>
                    </div>



                    <br>
                    <div class="text-center">
                        <button class="btn btn__app px-5">กลับ</button>
                        <button class="btn btn__app btn__waitapproval px-5">ยืนยัน</button>
                    </div>
                    <br>
                </div>
                <div class="col-2">
                    <div class="box__accordian__edit">
                        <div class="box__filter">

                            <div id="data-product9" class="collapse show">
                                <ul id="progressbar">
                                    <li class="active">
                                        <p class="progress-icon"></p> รายละเอียด
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p> การรับประกัน
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