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

                    <form id="formdelivery" method="post" enctype="multipart/form-data" action="{{route('backend.delivery.store')}}">
                        @csrf
                        <div class="box_cardboxtran2">
                            <div id="data-product1" class="collapse show mb-5">
                                <div class="box__accordian__edit">
                                    <div class="box__filter">
                                        <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse"
                                            data-bs-target="#data-product1"><span><i class="fas fa-info-circle"></i></span>
                                            ข้อมูลขนส่ง <p class="mb-0 mt-3">รายละเอียด</p></button>
                                        <div id="data-product1" class="collapse show mb-5">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label class="title__txt">ID</label>
                                                    <input type="text" class="form-control" id="id" name="id" placeholder="123456" readonly>
                                                </div>
                                                <div class="col-6">
                                                    <label for="name" class="title__txt">ชื่อผู้ให้บริการขนส่ง <span class="text-red">
                                                        *</span>
                                                    </label>
                                                    <label class="title__num"> 0/100
                                                    </label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="ผู้ขายเริ่มต้น">
                                                </div>
                                            </div>


                                            <div class="row mt-4">
                                                <div class="col-12">
                                                    <label class="title__txt"> ภาพขนส่ง <span> *(รองรับไฟล์ .jpg และ
                                                            .png
                                                            เท่านั้น. ขนาดไม่เกิน 5Mb.) </span> </label>
                                                    <div class="card-img-up">
                                                        <div class="img-product">
                                                            <button type="button" class="btn-add-img">
                                                                <i class="fas fa-plus-circle"></i>
                                                                <p class="mb-0">แนบรูปภาพ </p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mt-4">
                                                <div class="col-6">
                                                    <label for="type" class="title__txt">ประเภทการขนส่ง <span>
                                                            ชื่อประเภทการขนส่งของผู้ให้บริการ
                                                        </span> </label>
                                                    <input type="text" class="form-control" id="type" name="type"
                                                        placeholder="eg. EMS, ส่งด่วน, ส่งภายในวัน, แมสเซนเจอร์%">
                                                </div>
                                                <div class="col-6">
                                                    <label for="grouptypecpn" class="title__txt">กลุ่มประเภทขนส่งที่จัดโดย CPN</label>
                                                    <select class="form-select" aria-label="Default select example" name="grouptypecpn" id="grouptypecpn">
                                                        <option selected=""> บริษัทขนส่งเอกชนชิ้นใหญ่</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row mt-4">
                                                <div class="col-6">
                                                    <label for="timeinbkk" class="title__txt">ระยะเวลาการจัดส่งในกทม.</label>
                                                    <input type="text" class="form-control" id="timeinbkk" name="timeinbkk"
                                                        placeholder="eg. EMS, ส่งด่วน, ส่งภายในวัน, แมสเซนเจอร์%">
                                                </div>
                                                <div class="col-6">
                                                    <label for="timeoutbkk" class="title__txt">ระยะเวลาการจัดส่งในตวจ.</label>
                                                    <input type="text" class="form-control" id="timeoutbkk" name="timeoutbkk" placeholder="15%">
                                                </div>
                                            </div>


                                            <div class="row mt-4">
                                                <div class="col-2">
                                                    <label for="weight" class="title__txt">น้ำหนักสินค้า</label>
                                                </div>
                                                <div class="col-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control border-end-0 w-50 number"
                                                            placeholder="00.00" name="weight" id="weight" >
                                                        <select class="border-start-0 form-select text-center" name="weightunit" id="weightunit">
                                                            <option>KG</option>
                                                            <option>g</option>
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
                                                        <input type="text" class="form-control text-center" id="wide"
                                                            placeholder="กว้าง" name="wide">
                                                        <span class="mx-2"></span>
                                                        <input type="text" class="form-control text-center" id="long"
                                                            placeholder="ยาว" name="long">
                                                        <span class="mx-2"></span>
                                                        <input type="text" class="form-control text-center" id="high"
                                                            placeholder="สูง" name="high">
                                                        <span class="title__txt mx-3">หน่วย</span>
                                                        <select class="form-select text-center" name="unit">
                                                            <option>CM</option>
                                                            <option>M</option>
                                                            <option>MM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <label class="title__txt"> การรับประกัน <span> * </span></label>
                                                    <div class="row ms-2">
                                                        <div class="col-3 form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="warranty1"
                                                                name="warranty" value="1">
                                                            <label class="form-check-label" for="warranty1">มี </label><br>
                                                        </div>
                                                        <div class="col-3 form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="warranty2"
                                                                name="warranty" value="0">
                                                            <label class="form-check-label" for="warranty2">ไม่มี </label><br>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <label class="title__txt"> มีเลขแทร็กกิ้ง <span> * </span></label>
                                                    <div class="row ms-2">
                                                        <div class="col-3 form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="trackingnumber1"
                                                                name="trackingnumber" value="1">
                                                            <label class="form-check-label" for="trackingnumber1">มี </label><br>
                                                        </div>
                                                        <div class="col-3 form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="trackingnumber2"
                                                                name="trackingnumber" value="0">
                                                            <label class="form-check-label" for="trackingnumber2">ไม่มี </label><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product1">ย่อ <i class="fas fa-angle-up"></i></button>
                                    </div>
                                    
                                    <div class="box__accordian__edit">
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
                                                    <input type="text" class="form-control" id="warrantyterms" placeholder="ระบุ" name="warrantyterms">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <button type="button" class="btn-shot" data-bs-toggle="collapse"
                                        data-bs-target="#data-product2">ย่อ <i class="fas fa-angle-up"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>


                    <br>
                    <div class="text-center">
                        <a href="{{route('backend.delivery')}}" class="btn btn__app px-5">กลับ</a>
                        <button type="submit" form="formdelivery" class="btn btn__app btn__waitapproval px-5">ยืนยัน</button>
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