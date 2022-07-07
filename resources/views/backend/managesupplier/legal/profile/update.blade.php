@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="managesupplier">
<input type="hidden" id="pageName2" name="pageName2" value="managesupplierlegal">
<input type="hidden" id="navpageName" name="navpageName" value="profile">

<div class="content">

    <div class="boxbox__approvel">
        <div class="box__approvel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="txt__page">จัดการผู้ขาย : นิติบุคคล</h2>
                    </div>

                    <div class="col-3">
                        <div class="box__head">
                            <form>

                                <div class="text_name_t">
                                    <p>
                                        เฮงเฮงอะไหล่ยนต์
                                    </p>
                                </div>

                                <div class="text_id_t">
                                    <p>
                                        รหัสสมาชิก : 1234567
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="box__head">
                            <form>

                                <div class="text_name_t">
                                    <p>
                                        ขอเปลี่ยนแปลงข้อมูลผู้ขาย
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>


                    <div class="row">
                        @include('backend.managesupplier.legal.inc_nav')
                        <div class="col-md-9">
                            <div class="box_editbox">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="title__txt"> ชื่อ <span> * </span></label>
                                        <input type="text" class="form-control" id="" placeholder="ระบุ">
                                    </div>
                                    <div class="col-6">
                                        <label class="title__txt"> นามสกุล <span> * </span> </label>
                                        <input type="text" class="form-control" id="" placeholder="ระบุ">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="title__txt"> อีเมล </label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="emily@sample.com">
                                    </div>
                                    <div class="col-6">
                                        <label class="title__txt"> โทรศัพท์ <span> * </span> </label>
                                        <input type="text" class="form-control" id="" placeholder="0123344565">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="title__txt"> เลขบัตรประชาชน <span> * </span> </label>
                                        <input type="text" class="form-control" id="" placeholder="123456789">
                                    </div>
                                </div>

                                <br>

                                <label class="title__txt"> สำเนาบัตรประชาชน <span> *(รองรับไฟล์ .jpg และ .png
                                        เท่านั้น. ขนาดไม่เกิน 5Mb.) </span> </label>
                                <div class="card-img-up">
                                    <div class="img-product">
                                        <button class="btn-add-img">
                                            <svg class="svg-inline--fa fa-circle-plus" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="circle-plus"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM256 368C269.3 368 280 357.3 280 344V280H344C357.3 280 368 269.3 368 256C368 242.7 357.3 232 344 232H280V168C280 154.7 269.3 144 256 144C242.7 144 232 154.7 232 168V232H168C154.7 232 144 242.7 144 256C144 269.3 154.7 280 168 280H232V344C232 357.3 242.7 368 256 368z">
                                                </path>
                                            </svg>
                                            <!-- <i class="fas fa-plus-circle"></i> Font Awesome fontawesome.com -->
                                            <p class="mb-0">แนบรูปภาพ </p>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="txt_address">
                                <p>
                                    ข้อมูลที่อยู่
                                </p>
                            </div>
                            <div class="box_addressbox">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="title__txt"> ที่อยู่ตามบัตรประชาชน <span> * </span></label>
                                        <input type="text" class="form-control" id="" placeholder="ระบุ">
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="title__txt"> จังหวัด <span> * </span></label>
                                        <select class="form-select">
                                            <option>ระบุ</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="title__txt"> เขต/อำเภอ <span> * </span></label>
                                        <select class="form-select">
                                            <option>ระบุ</option>
                                        </select>

                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="title__txt"> เขต/อำเภอ <span> * </span></label>
                                        <select class="form-select">
                                            <option>ระบุ</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="title__txt"> รหัสไปรษณีย์ <span> * </span></label>
                                        <select class="form-select">
                                            <option>ระบุ</option>
                                        </select>

                                    </div>
                                </div>
                            </div>


                            <br><br><br><br>
                            <div class="text-center">
                                <button href="manage-selleredit.php" class="btn btn__app px-5">กลับ</button>
                                <button href="#" class="btn btn__app btn__waitapproval px-5">ยืนยัน</button>
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