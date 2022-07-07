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

                    <div class="col-12">
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



                    <div class="row">
                        @include('backend.managesupplier.individual.inc_nav')
                        <div class="col-md-9">

                            <div class="box__table p-4">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all"> ข้อมูลผู้ขาย
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#process"> ข้อมูลร้านค้า </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#sold"> ข้อมูลธนาคาร </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#suspended"> ข้อมูลที่อยู่
                                        </a>
                                    </li>
                                </ul>


                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="all" class="tab-pane active"><br>

                                        <div class="txt-pen-edit">
                                            <a href="{{url('backend/manage/supplier/individual/profile/edit/1')}}">
                                                <p> <i class="fas fa-pencil-alt"></i> แก้ไข </p>
                                            </a>

                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ชื่อ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        สมมติ
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        นามสกุล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        แซ่ตัน
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        อีเมล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        emily@sample.com
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        โทรศัพท์
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        012345678
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        เลขบัตรประชาชน
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        12345678901234
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ที่อยู่
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        123 หมู่ 0 ถนน เจริญกรุง ซอย 5 ตำบล ทุ่งสุลา อำเภอ ศรีราชา
                                                        จังหวัด ชลบุรี 12345
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        สำเนาบัตรประชาชน
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        ดูรูปภาพ
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ทะเบียนบ้าน
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        ดูรูปภาพ
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div id="process" class="tab-pane fade"><br>

                                        <div class="txt-pen-edit">
                                            <a href="{{url('backend/manage/supplier/individual/profile/store/edit/1')}}">
                                                <p> <i class="fas fa-pencil-alt"></i> แก้ไข </p>
                                            </a>

                                        </div>


                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ชื่อ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        เฮงเฮงอะไหล่ยนต์
                                                    </p>
                                                </div>
                                                <div class="img-proname">
                                                    <img src="assets/img/mana/chack1.png" class="img-nameimg">
                                                </div>
                                                <div class="txt_namedetail_t2">
                                                    <p>
                                                        ร้านค้ายังไม่ได้ยืนยันตัวตน
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro2">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        โทรศัพท์
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        012345678
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        อีเมล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        emily@sample.com
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        Page URL/Facebook URL
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        HengHeng Sell
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        Google Map
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        www,.sample.com
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ที่อยู่
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        123 หมู่ 0 ถนน เจริญกรุง ซอย 5 ตำบล ทุ่งสุลา อำเภอ ศรีราชา
                                                        จังหวัด ชลบุรี 12345
                                                    </p>
                                                </div>
                                            </div>
                                        </div>



                                    </div>


                                    <div id="sold" class="tab-pane fade"><br>


                                        <div class="txt-pen-edit">
                                            <a href="#">
                                                <p> <i class="fas fa-pencil-alt"></i> แก้ไข </p>
                                            </a>
                                        </div>


                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        หมายเลขบัญชี
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        123-123456-1
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ชื่อบุญชี
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        บริษัท เฮงเฮงอะไหล่ยนต์
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ธนาคาร
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        กรุงไทย
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        สาขา
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        ประชาอุทิศ
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ประเภทบัญชี
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        ออมทรัพย์
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-3">
                                                <div class="txt_name_t">
                                                    <p>
                                                        สำเนาหน้า Book Bank
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="img-bookbank">
                                                    <img src="assets/img/mana/img1.png" class="img-bookbook">
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div id="suspended" class="tab-pane fade"><br>

                                        <div class="box_addresstxt">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="box_chackbox3">
                                                                <label class="container-ch2">ตั้งเป็นที่อยู่ของฉัน
                                                                    <input type="checkbox" checked="checked">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="box_chackbox2">
                                                                <label class="container-ch3">ตั้งเป็นที่อยู่หลัก
                                                                    <input type="checkbox">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="txt-pen-edit2">
                                                        <a href="{{url('backend/manage/supplier/individual/profile/address/edit/1')}}">
                                                            <p> แก้ไข </p>
                                                        </a>
                                                    </div>
                                                    <div class="txt-pen-delete">
                                                        <a href="#">
                                                            <p> ลบ </p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            ชื่อ-นามสกุล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            คมเดช อินทรครรชิต
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            โทรศัพท์
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            (+66) 84554512
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            อีเมล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            sample@gmail.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            ที่อยู่
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            88/2 ลดาวัลย์ รัตนาธิเบศร์ อำเภอเมืองนนทบุรี
                                                            จังหวัดนนทบุรี 11000
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                        <div class="box_addresstxt">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="box_chackbox4">
                                                                <label class="container-ch4">ตั้งเป็นที่อยู่ของฉัน
                                                                    <input type="checkbox" checked="checked">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="box_chackbox2">
                                                                <label class="container-ch3">ตั้งเป็นที่อยู่หลัก
                                                                    <input type="checkbox">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="txt-pen-edit2">
                                                        <a href="{{url('backend/manage/supplier/individual/profile/address/edit/1')}}">
                                                            <p> แก้ไข </p>
                                                        </a>
                                                    </div>
                                                    <div class="txt-pen-delete">
                                                        <a href="#">
                                                            <p> ลบ </p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            ชื่อ-นามสกุล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            คมเดช อินทรครรชิต
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            โทรศัพท์
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            (+66) 84554512
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            อีเมล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            sample@gmail.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            ที่อยู่
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            88/2 ลดาวัลย์ รัตนาธิเบศร์ อำเภอเมืองนนทบุรี
                                                            จังหวัดนนทบุรี 11000
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="box_addresstxt">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="box_chackbox4">
                                                                <label class="container-ch4">ตั้งเป็นที่อยู่ของฉัน
                                                                    <input type="checkbox" checked="checked">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="box_chackbox2">
                                                                <label class="container-ch3">ตั้งเป็นที่อยู่หลัก
                                                                    <input type="checkbox">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="txt-pen-edit2">
                                                        <a href="{{url('backend/manage/supplier/individual/profile/address/edit/1')}}">
                                                            <p> แก้ไข </p>
                                                        </a>
                                                    </div>
                                                    <div class="txt-pen-delete">
                                                        <a href="#">
                                                            <p> ลบ </p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            ชื่อ-นามสกุล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            คมเดช อินทรครรชิต
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            โทรศัพท์
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            (+66) 84554512
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            อีเมล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            sample@gmail.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            ที่อยู่
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            88/2 ลดาวัลย์ รัตนาธิเบศร์ อำเภอเมืองนนทบุรี
                                                            จังหวัดนนทบุรี 11000
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="box_buttonadd">
                                            <div class="b-but-addplus2">
                                                <button href="manage-selleraddressedit2.php" class="button button-inadd">
                                                    <i class="fa fa-plus-circle"></i>
                                                    เพิ่มที่อยู่
                                                </button>
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
    </div>
</div>
@stop

@section('script')
<script>
</script>
@stop   
