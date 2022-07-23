@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="managebuyer">
<input type="hidden" id="pageName2" name="pageName2" value="managebuyerlegal">
<input type="hidden" id="navpageName" name="navpageName" value="profile">

<div class="content">

    <div class="boxbox__approvel">
        <div class="box__approvel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="txt__page">จัดการผู้ซื้อ : นิติบุคคล</h2>
                    </div>

                    <div class="col-12">
                        <div class="box__head">
                            <form>

                                <div class="text_name_t">
                                    <p>
                                        {{$user->first_name}} {{$user->last_name}}
                                    </p>
                                </div>
                                <div class="text_id_t">
                                    <p>
                                        รหัสสมาชิก : {{$user->code}}
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>



                    <div class="row">
                        @include('backend.managebuyer.legal.inc_nav')
                        <div class="col-lg-md-9 mt-4">

                            <div class="box__table p-4">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all"> ข้อมูลผู้ขาย
                                        </a>
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

                                        <div class="card-cd">
                                            <div class="txt-pen-edit">
                                                <a href="{{url('backend/manage/buyer/legal/profile/edit/1')}}">
                                                    <p> <i class="fas fa-pencil-alt"></i> แก้ไข </p>
                                                </a>

                                            </div>

                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            ชื่อโปรไฟล์
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            {{$user->profile_name}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            ชื่อผู้ติดต่อ
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            {{$user->first_name}} {{$user->last_name}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            ชื่อนิติบุคคล/บริษัท
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            {{$user->company_name}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            เลขที่ประจำตัวผู้เสียภาษี
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            {{$user->vat_id}}
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
                                                            {{$user->email}}
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
                                                            {{$user->phone}}
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
                                                            @if(!empty($profile)){{$profile->addressfull}} @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            ตำบล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            @if(!empty($profile)){{$profile->district}} @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            อำเภอ
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            @if(!empty($profile)){{$profile->amphure}} @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            จังหวัด
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            @if(!empty($profile)){{$profile->province}} @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            รหัสไปรษณีย์
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            @if(!empty($profile)){{$profile->zip_code}} @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <br> <br>
                                        <div class="card-cd">


                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="box_txtpasi">
                                                        <p>
                                                            ข้อมูลสำหรับออกใบกำกับภาษี/ใบเสร็จ
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="txt-pen-edit">
                                                        <a href="{{url('backend/manage/buyer/legal/profile/edit/1')}}">
                                                            <p> <i class="fas fa-pencil-alt"></i> แก้ไข </p>
                                                        </a>
                                                    </div>
                                                </div>

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
                                                            @if(!empty($buyertax)){{$profile->name}} @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            เบอร์โทรศัพท์
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            @if(!empty($buyertax)){{$buyertax->texid}} @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            เลขที่ประจำตัวผู้เสียภาษี
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            @if(!empty($buyertax)){{$buyertax->texid}} @endif
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
                                                            @if(!empty($buyertax)){{$buyertax->addressfull}} @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            ตำบล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            @if(!empty($buyertax)){{$buyertax->district}} @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            อำเภอ
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            @if(!empty($buyertax)){{$buyertax->amphure}} @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            จังหวัด
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            @if(!empty($buyertax)){{$buyertax->province}} @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="underline-pro">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="txt_name_t">
                                                        <p>
                                                            รหัสไปรษณีย์
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            @if(!empty($buyertax)){{$buyertax->zip_code}} @endif
                                                        </p>
                                                    </div>
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
                                                        <a href="#">
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
                                                        <a href="#">
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
                                                        <a href="#">
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
                                                <button href="manage-selleraddressedit2.php"
                                                    class="button button-inadd">
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
