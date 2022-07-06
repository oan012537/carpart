@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="managesupplier">
<input type="hidden" id="pageName2" name="pageName2" value="managesupplierindividual">
<input type="hidden" id="navpageName" name="navpageName" value="profile">
<div class="content">

    <div class="boxbox__approvel">
        <div class="box__approvel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="txt__page">จัดการผู้ขาย : บุคคลธรรมดา</h2>
                    </div>

                    <div class="col-3">
                        <div class="box__head">
                            <form>

                                <div class="text_name_t">
                                    <p>
                                        สมมติ แซ่ตัน
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
                                        ขอเปลี่ยนแปลงข้อมูลร้านค้า
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>


                    <div class="row">
                        @include('backend.managesupplier.individual.inc_nav')
                        <div class="col-md-9">
                            <div class="box_editbox">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="title__txt"> ชื่อ <span> * </span></label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="เฮงเฮงอะไหล่ยนต์">
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
                                        <label class="title__txt"> Page URL/Facebook URL </label>
                                        <input type="text" class="form-control" id="" placeholder="HengHeng Sell">
                                    </div>
                                    <div class="col-6">
                                        <label class="title__txt"> Google Map <span> * </span> </label>
                                        <input type="text" class="form-control" id="" placeholder="www.samplecom">
                                    </div>
                                </div>

                            </div>


                            <div class="txt_address">
                                <p>
                                    ข้อมูลที่อยู่
                                </p>
                            </div>
                            <div class="box_addressbox">

                                <div class="box_chackbox">
                                    <label class="container-ch">ที่อยู่ร้านค้าตรงตามบัตรประชาชน
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>

                                </div>

                                <br>
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