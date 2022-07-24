@extends('backend.layouts.templates')
@section('content')
<style type="text/css">
    .img-bookbook{
        width: 100px;
        height: 100px;
    }
</style>
<input type="hidden" id="pagemenuName" name="pagemenuName" value="managesupplier">
<input type="hidden" id="pagemenuName2" name="pagemenuName2" value="managesupplierlegal">
<input type="hidden" id="navpageName" name="navpageName" value="profile">




<div class="content">

    <div class="boxbox__approvel">
        <div class="box__approvel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="txt__page">จัดการผู้ขาย : นิติบุคคล</h2>
                    </div>

                    <div class="col-lg-12">
                        <div class="box__head">
                            <form>

                                <div class="text_name_t">
                                    <p>
                                        {{$supplier->company_name}}
                                    </p>
                                </div>
                                <div class="text_id_t">
                                    <p>
                                        รหัสสมาชิก : {{$supplier->code}}
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-xl-3 col-lg-12 mt-4">
                            @include('backend.managesupplier.legal.inc_nav')
                        </div>

                        <div class="col-xl-9 col-lg-12 mt-4">
                            <div class="box__table p-4">
                                <nav>
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
                                </nav>


                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="all" class="tab-pane active"><br>

                                        <div class="txt-pen-edit">
                                            <a href="{{url('backend/manage/supplier/legal/profile/edit/1')}}">
                                                <p> <i class="fas fa-pencil-alt"></i> แก้ไข </p>
                                            </a>

                                        </div>


                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ชื่อ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$supplier->personal_first_name}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        นามสกุล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$supplier->personal_last_name}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        อีเมล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$user->email}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        โทรศัพท์
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$user->phone}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        เลขบัตรประชาชน
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$supplier->personal_card_id}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ที่อยู่
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$supplier->addressidcard}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div id="process" class="tab-pane fade"><br>

                                        <div class="txt-pen-edit">
                                            <a href="{{url('backend/manage/supplier/legal/profile/store/edit/1')}}">
                                                <p> <i class="fas fa-pencil-alt"></i> แก้ไข </p>
                                            </a>

                                        </div>


                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ชื่อ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$supplier->company_name}}
                                                    </p>
                                                </div>
                                                <div class="img-proname">
                                                    <img src="{{asset('backends/assets/img/mana/chack1.png')}}"
                                                        class="img-nameimg">
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
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        โทรศัพท์
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$supplier->phone}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        อีเมล
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$supplier->email}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        หนังสือรับรองบริษัท
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        ดูรูปภาพ <a data-fancybox class="btn__viewimage fancybox"
                                                            href="{{asset('suppliers/document')}}/{{$supplier->company_certificate}}"><i
                                                                class="fa-solid fa-image"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        สำเนา ภ.พ.20
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        ดูรูปภาพ <a data-fancybox class="btn__viewimage fancybox"
                                                            href="{{asset('suppliers/document')}}/{{$supplier->vat_registration_doc}}"><i
                                                                class="fa-solid fa-image"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        Page URL/Facebook URL
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$supplier->facebook_url}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        Google Map
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$supplier->google_map_url}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline-pro">
                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ที่อยู่
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$supplier->addressfull}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>



                                    </div>


                                    <div id="sold" class="tab-pane fade"><br>

                                        @foreach ($banks as $bank)


                                        <div class="txt-pen-edit">
                                            <a href="#">
                                                <p> <i class="fas fa-pencil-alt"></i> แก้ไข </p>
                                            </a>
                                        </div>


                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        หมายเลขบัญชี
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$bank->bank_account_no}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ชื่อบุญชี
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$bank->bank_account_name}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ธนาคาร
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$bank->bank_name}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        สาขา
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$bank->bank_branch}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        ประเภทบัญชี
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="txt_namedetail_t">
                                                    <p>
                                                        {{$bank->bank_account_type}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-xl-3 col-12">
                                                <div class="txt_name_t">
                                                    <p>
                                                        สำเนาหน้า Book Bank
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="img-bookbank">
                                                    {{-- <img src="{{asset('backends/assets/img/mana')}}/{{{{$bank->bank_book_image}}}}"
                                                    class="img-bookbook"> --}}
                                                    <a class="btn btn__pdf fancybox" data-fancybox href="{{asset('suppliers/document')}}/{{$bank->bank_book_image}}">
                                                        <img src="{{asset('suppliers/document')}}/{{$bank->bank_book_image}}" class="img-bookbook"> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

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
                                                        <a
                                                            href="{{url('backend/manage/supplier/legal/profile/address/edit/1')}}">
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
                                                <div class="col-xl-3 col-12">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            ชื่อ-นามสกุล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-12">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            คมเดช อินทรครรชิต
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3 col-12">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            โทรศัพท์
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-12">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            (+66) 84554512
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3 col-12">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            อีเมล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-12">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            sample@gmail.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3 col-12">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            ที่อยู่
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-12">
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
                                                        <a
                                                            href="{{url('backend/manage/supplier/legal/profile/address/edit/1')}}">
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
                                                <div class="col-xl-3 col-12">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            ชื่อ-นามสกุล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-12">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            คมเดช อินทรครรชิต
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3 col-12">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            โทรศัพท์
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-12">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            (+66) 84554512
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3 col-12">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            อีเมล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-12">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            sample@gmail.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3 col-12">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            ที่อยู่
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-12">
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
                                                        <a
                                                            href="{{url('backend/manage/supplier/legal/profile/address/edit/1')}}">
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
                                                <div class="col-xl-3 col-12">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            ชื่อ-นามสกุล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-12">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            คมเดช อินทรครรชิต
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3 col-12">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            โทรศัพท์
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-12">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            (+66) 84554512
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3 col-12">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            อีเมล
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-12">
                                                    <div class="txt_namedetail_t">
                                                        <p>
                                                            sample@gmail.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3 col-12">
                                                    <div class="txt_name_t2">
                                                        <p>
                                                            ที่อยู่
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-12">
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
<<<<<<< HEAD
@stop
=======
@stop
>>>>>>> b22adaa3709bad5bcada2940250455e56bdab6eb
