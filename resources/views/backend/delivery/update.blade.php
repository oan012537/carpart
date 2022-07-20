@extends('backend.layouts.templates')
@section('content')
<style>
    .status-error {
        background-color: #fe41371c;
        text-align: center;
        padding: 0.375rem 1rem;
        border-radius: 8px;
        color: red;
    }
</style>
<input type="hidden" id="pageName" name="pageName" value="delivery">
<input type="hidden" id="pageName2" name="pageName2" value="delivery">
<div class="content">
    <div class="box__approvel box__transport">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">จัดการขนส่ง</h2>
                </div>

                <div class="col-xl-2 col-lg-12 col-md-12 col-12 tablet-show mb-3">
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

                        <div class="box__accordian__edit mt-3">
                            <div class="box__filter">
                                <div class="form-box-input">
                                    <p class="title__txt">วันที่สร้าง</p>
                                    <p>{{date("d/m/Y H:i",strtotime($delivery->created_at))}}</p>
                                    <p class="title__txt">ผู้สร้าง</p>
                                    <p>{{$delivery->created_by}}</p>
                                    <p class="title__txt">สถานะขาย</p>
                                    @if($delivery->is_active == '1')
                                    <small class="status-process">เปิดใช้งาน</small>
                                    @else
                                    <small class="status-error">ปิดใช้งาน</small>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-12 col-md-12 col-12">
                    <div class="box__accordian__edit">
                        <form id="formdelivery" method="post" enctype="multipart/form-data" action="{{route('backend.delivery.update')}}">
                            @csrf
                            <div class="box__filter">
                                <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product1"><span><i class="fas fa-info-circle"></i></span>
                                    ข้อมูลขนส่ง <p class="mb-0 mt-3">รายละเอียด</p></button>
                                <div id="data-product1" class="collapse show mb-5">
                                    {{-- <form class="form-box-input px-2"> --}}
                                    <div class="row">
                                        <div class="col-xl-6 col-md-12 col-12">
                                            <label class="title__txt">ID</label>
                                            <input type="text" class="form-control" id="id" name="id" readonly placeholder="123456" value="{{$delivery->id}}">
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12">
                                            <label class="title__txt">ชื่อผู้ให้บริการขนส่ง <span class="text-red">
                                                    *</span>
                                            </label>
                                            <label class="title__num" for="name"> 0/100</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="" required value="{{$delivery->name}}">
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <label class="title__txt"> ภาพขนส่ง <span> *(รองรับไฟล์ .jpg และ
                                                    .png
                                                    เท่านั้น. ขนาดไม่เกิน 5Mb.) </span> </label>
                                            <div class="card-img-up">
                                                <div class="img-product">
                                                    <img id="imagePreview" style="display: none" class="btn-add-img">
                                                    <button type="button" class="btn-add-img" id="btnaddimage">
                                                        <i class="fas fa-plus-circle"></i>
                                                        <p class="mb-0">แนบรูปภาพ </p>

                                                    </button>
                                                    <input type="file" name="myFile" id="myFile" class="drop-zone__input" style="opacity: 0;width: 0;display: block;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-4">
                                        <div class="col-xl-6 col-md-12 col-12">
                                            <label for="type" class="title__txt">ประเภทการขนส่ง <span>
                                                    ชื่อประเภทการขนส่งของผู้ให้บริการ
                                                </span> </label>
                                            <input type="text" class="form-control" id="type" name="type" placeholder="eg. EMS, ส่งด่วน, ส่งภายในวัน, แมสเซนเจอร์%" required value="{{$delivery->type}}">
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12">
                                            <label for="grouptypecpn" class="title__txt">กลุ่มประเภทขนส่งที่จัดโดย CPN</label>
                                            <select class="form-select" aria-label="Default select example" name="grouptypecpn" id="grouptypecpn" required>
                                                <option @if($delivery->grouptypecpn == 'การจัดส่งที่รองรับโดย CPN') selected @endif selected=""> การจัดส่งที่รองรับโดย CPN</option>
                                                <option @if($delivery->grouptypecpn == 'บริษัทขนส่งเอกชนชิ้นใหญ่') selected @endif > บริษัทขนส่งเอกชนชิ้นใหญ่</option>
                                                <option @if($delivery->grouptypecpn == 'ผู้ขายกำหนดเอง') selected @endif > ผู้ขายกำหนดเอง</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row mt-4">
                                        <div class="col-xl-6 col-md-12 col-12">
                                            <label for="timeinbkk" class="title__txt">ระยะเวลาการจัดส่งในกทม.</label>
                                            <input type="text" class="form-control number" id="timeinbkk" name="timeinbkk" placeholder="ระยะเวลาการจัดส่งในกทม" required value="{{$delivery->timeinbkk}}">
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12">
                                            <label for="timeoutbkk" class="title__txt">ระยะเวลาการจัดส่งในตวจ.</label>
                                            <input type="text" class="form-control number" id="timeoutbkk" name="timeoutbkk" placeholder="ระยะเวลาการจัดส่งในตวจ" required value="{{$delivery->timeoutbkk}}">
                                        </div>
                                    </div>


                                    <div class="row mt-4">
                                        <div class="col-xl-2 col-md-4 col-4">
                                            <label for="weight" class="title__txt">น้ำหนักสินค้า</label>
                                        </div>
                                        <div class="col-xl-2 col-md-6 col-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control border-end-0  number" placeholder="00.00" name="weight" id="weight" value="{{$delivery->weight}}">
                                                <select class="border-start-0 form-select text-center" name="weightunit" id="weightunit">
                                                    <option @if($delivery->weightunit == 'KG') selected @endif>KG</option>
                                                    <option @if($delivery->weightunit == 'G') selected @endif>G</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-2 mb-4">
                                        <div class="col-xl-2 col-md-12 col-12">
                                            <label class="title__txt">ขนาดของสินค้า</label>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12">
                                            <div class="d-flex">
                                                <input type="text" class="form-control text-center" id="wide" placeholder="กว้าง" name="wide" value="{{$delivery->wide}}">
                                                <span class="mx-2"></span>
                                                <input type="text" class="form-control text-center" id="long" placeholder="ยาว" name="long" value="{{$delivery->long}}">
                                                <span class="mx-2"></span>
                                                <input type="text" class="form-control text-center" id="high" placeholder="สูง" name="high" value="{{$delivery->high}}">
                                                <span class="title__txt mx-3">หน่วย</span>
                                                <select class="form-select text-center" name="unit">
                                                    <option @if($delivery->unit == 'CM') selected @endif>CM</option>
                                                    <option @if($delivery->unit == 'M') selected @endif>M</option>
                                                    <option @if($delivery->unit == 'MM') selected @endif>MM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-6 col-md-12 col-12">
                                            <label class="title__txt"> การรับประกัน <span> * </span></label>
                                            <div class="row ms-2">
                                                <div class="col-3 form-check mt-2">
                                                    <input type="radio" class="form-check-input" id="warranty1" name="warranty" value="1" required @if($delivery->warranty == '1') checked @endif>
                                                    <label class="form-check-label" for="warranty1">มี </label><br>
                                                </div>
                                                <div class="col-3 form-check mt-2">
                                                    <input type="radio" class="form-check-input" id="warranty2" name="warranty" value="0" required @if($delivery->warranty == '0') checked @endif>
                                                    <label class="form-check-label" for="warranty2">ไม่มี </label><br>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-12 col-12">
                                            <label class="title__txt"> มีเลขแทร็กกิ้ง <span> * </span></label>
                                            <div class="row ms-2">
                                                <div class="col-3 form-check mt-2">
                                                    <input type="radio" class="form-check-input" id="trackingnumber1" name="trackingnumber" value="1" required @if($delivery->trackingnumber == '1') checked @endif>
                                                    <label class="form-check-label" for="trackingnumber1">มี </label><br>
                                                </div>
                                                <div class="col-3 form-check mt-2">
                                                    <input type="radio" class="form-check-input" id="trackingnumber2" name="trackingnumber" value="0" required @if($delivery->trackingnumber == '0') checked @endif>
                                                    <label class="form-check-label" for="trackingnumber2">ไม่มี </label><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- </form> --}}
                                    <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product1">ย่อ <i class="fas fa-angle-up"></i></button>
                                </div>
                            </div>

                            <div class="box__accordian__edit">
                                <div class="box__filter">
                                    <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product2">การรับประกัน</button>
                                    <div id="data-product2" class="collapse show mb-5">
                                        {{-- <form class="form-box-input px-2"> --}}

                                        <div class="row">
                                            <div class="col-xl-9 col-lg-12 col-12">
                                                <label class="title__txt">เงื่อนไขการรับประกัน/รายละเอียดเกี่ยวกับสินค้าและคุณภาพเพิ่มเติม(ถ้ามี)
                                                </label>
                                                <label class="title__txt2"> <span class="text-red">เช่น
                                                        รอย,การเกิดสนิม,การแตกหัก,ชิ้นส่วนประกอบไม่ครบ,อะไหล่บิ้วต์
                                                        หรือ ข้อมูลอื่นๆ* </span>
                                                </label>
                                            </div>
                                            <div class="col-xl-3 col-lg-12 col-12">
                                                <div class="txt_numtxt">
                                                    <p>
                                                        0/100
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="box_rabu2 mb-5">

                                                <div class="col-12 mt-2">
                                                    <textarea id="warrantyterms" name="warrantyterms" rows="1" maxlength="100">{{$delivery->warrantyterms}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- </form> --}}
                                        <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product2">ย่อ <i class="fas fa-angle-up"></i></button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </form>
                    </div>
                    <br>
                    <div class="text-center">
                        <a href="{{route('backend.delivery')}}" class="btn btn__app px-5">กลับ</a>
                        <button type="submit" form="formdelivery" class="btn btn__app btn__waitapproval px-5">ยืนยัน</button>
                    </div>
                    <br>
                </div>
                <div class="col-xl-2 col-lg-12 col-md-12 col-12 pc-show">
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

                        <div class="box__accordian__edit mt-3">
                            <div class="box__filter">
                                <div class="form-box-input">
                                    <p class="title__txt">วันที่สร้าง</p>
                                    <p>{{date("d/m/Y H:i",strtotime($delivery->created_at))}}</p>
                                    <p class="title__txt">ผู้สร้าง</p>
                                    <p>{{$delivery->created_by}}</p>
                                    <p class="title__txt">สถานะขาย</p>
                                    @if($delivery->is_active == '1')
                                    <small class="status-process">เปิดใช้งาน</small>
                                    @else
                                    <small class="status-error">ปิดใช้งาน</small>
                                    @endif

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
{{-- <script src="{{asset('vendor/midium/laravel-ckeditor/adapters/jquery.js')}}"></script> --}}
<script src="{{asset('vendor/midium/laravel-ckeditor/ckeditor.js')}}"></script>
<script>
    var editor = CKEDITOR.replace('warrantyterms', {
        height: 100,
        baseFloatZIndex: 10005,
        removeButtons: 'PasteFromWord'
    });
    editor.on('change', function(evt) {
        console.log('Total bytes: ' + evt.editor.getData().length);
        var data = CKEDITOR.instances.warrantyterms.getData();
        // console.log(data);
        // $("#term").val(data);
    });
    editor.on("keydown", function(event) {
        var data = CKEDITOR.instances.warrantyterms.getData();
        // $("#term").val(data);
    });
</script>
<script>
    const limitsize = 5;
</script>
{{-- <script src="{{asset('assets/js/dropzone.js')}}"></script> --}}
<script>
    $(document).ready(function() {

        $("#myFile").change(function(data) {

            var imageFile = data.target.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);

            reader.onload = function(evt) {
                $('#imagePreview').attr('src', evt.target.result);
                $('#imagePreview').show();
                $('#imagePreview').fadeIn(650);
                $("#btnaddimage").hide();
            }

        });
        $("#btnaddimage").click(function() {
            $("#myFile").click()
        })
        $('#imagePreview').click(function() {
            $("#myFile").click()
        })

    });
    $("#name").keyup(function() {
        var len = $(this).val().length;
        console.log(len);
        $(".title__num").html(' ' + len + '/100')
    });

    $("#warrantyterms").keyup(function() {
        var len = $(this).val().length;
        console.log(len);
        $(".txt_numtxt").html(' ' + len + '/100')
    });
</script>
@stop
