@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="managebuyer">
<input type="hidden" id="pageName2" name="pageName2" value="managebuyerindividual">
<input type="hidden" id="navpageName" name="navpageName" value="profile">

<div class="content">

    <div class="boxbox__approvel">
        <div class="box__approvel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="txt__page">จัดการผู้ซื้อ : บุคคลธรรมดา</h2>
                    </div>

                    <div class="col-3">
                        <div class="box__head">
                            <form>

                                <div class="text_name_t">
                                    <p>
                                        โฉมงาม เฉิดฉาย
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
                                        แก้ไขข้อมูลส่วนตัว
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>


                    <div class="row">
                        @include('backend.managebuyer.individual.inc_nav')
                        <div class="col-md-9">
                            <div class="box_editbox">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="title__txt"> ชื่อโปรไฟล์ <span> * </span></label>
                                        <input type="text" class="form-control" id="" placeholder="ระบุ">
                                    </div>
                                    <div class="col-6">
                                        <label class="title__txt"> ชื่อผู้ติดต่อ <span> * </span> </label>
                                        <input type="text" class="form-control" id="" placeholder="ระบุ">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="title__txt"> เบอร์โทรศัพท์ </label>
                                        <input type="text" class="form-control" id="" placeholder="0123344565">
                                    </div>
                                    <div class="col-6">
                                        <label class="title__txt"> อีเมล <span> * </span> </label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="emily@sample.com">
                                    </div>
                                </div>
                                <br>
                                <div class="box_boxaddressbox">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="title__txt"> ที่อยู่ตามบัตรประชาชน <span> *
                                                </span></label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="title__txt"> จังหวัด <span> * </span> </label>
                                        <select class="form-select">
                                            <option>ระบุ</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="title__txt"> เขต/อำเภอ <span> * </span> </label>
                                        <select class="form-select">
                                            <option>ระบุ</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="title__txt"> แขวง/ตำบล <span> * </span> </label>
                                        <select class="form-select">
                                            <option>ระบุ</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="title__txt"> รหัสไปรษณีย์ <span> * </span> </label>
                                        <input type="text" class="form-control" id="" placeholder="ระบุ">
                                    </div>
                                </div>
                            </div>


                            <div class="txt_address">
                                <p>
                                    แก้ไขข้อมูลสำหรับออกใบกำกับภาษี/ใบเสร็จ
                                </p>
                            </div>
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
                                        <label class="title__txt"> เบอร์มือถือ <span> * </span> </label>
                                        <input type="text" class="form-control" id="" placeholder="0123344565">
                                    </div>
                                    <div class="col-6">
                                        <label class="title__txt"> เลขที่ประจำตัวผู้เสียภาษี /เลขบัตรประชาชน <span> * </span> </label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="emily@sample.com">
                                    </div>
                                </div>
                                <br>
                                <div class="box_boxaddressbox">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="title__txt"> ที่อยู่ตามบัตรประชาชน <span> *
                                                </span></label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="title__txt"> จังหวัด <span> * </span> </label>
                                        <select class="form-select">
                                            <option>ระบุ</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="title__txt"> เขต/อำเภอ <span> * </span> </label>
                                        <select class="form-select">
                                            <option>ระบุ</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="title__txt"> แขวง/ตำบล <span> * </span> </label>
                                        <select class="form-select">
                                            <option>ระบุ</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="title__txt"> รหัสไปรษณีย์ <span> * </span> </label>
                                        <input type="text" class="form-control" id="" placeholder="ระบุ">
                                    </div>
                                </div>
                            </div>


                            <br><br><br><br>
                            <div class="text-center">
                                <a href="{{url('backend/manage/buyer/individual/profile/1')}}" class="btn btn__app px-5">กลับ</a>
                                <button type="submit" class="btn btn__app btn__waitapproval px-5">ยืนยัน</button>
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