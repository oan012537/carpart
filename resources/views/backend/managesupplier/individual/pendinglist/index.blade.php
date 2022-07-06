@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="managesupplier">
<input type="hidden" id="pageName2" name="pageName2" value="managesupplierindividual">
<input type="hidden" id="navpageName" name="navpageName" value="pendinglist">
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


                                <div class="card-card2">
                                    <div class="card-headercon">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="txt_txtid">
                                                    <p> Customer ID: ASdsadjlksjSS</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="txt_txtdate">
                                                    <p> ราคา </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="new1">
                                    <div class="box_body_detail2">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="box__image">
                                                    <img src="assets/img/mana/img2.png" class="img-bookbook">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="txt_img_tt">
                                                    <p>
                                                        กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                        AE90 , AE101 16V
                                                    </p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <p class="txt__detail"> <i
                                                                class="fa-solid fa-circle-question"></i>
                                                            เช็คสต็อก </p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <p class="txt__detail2"> <i
                                                                class="fa-solid fa-circle-question"></i>
                                                            ตรวจ Caution Plate </p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <p class="txt__detail3"> <i
                                                                class="fa-solid fa-circle-question"></i>
                                                            ขอวีดีโอ </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="txt_price_txt">
                                                    <p>
                                                        299 ฿
                                                    </p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn__opendetail2 me-3">
                                                        ดูรายละเอียด </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="card-card2">
                                    <div class="card-headercon">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="txt_txtid">
                                                    <p> หมายเลขคำสั่งซื้อ : W123467845123 </p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="txt_txtdate">
                                                    <p> วันที่ลงประกาศ dd/mm/yyyy hh:mm </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="new1">
                                    <div class="box_body_detail2">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="box__image">
                                                    <img src="assets/img/mana/img2.png" class="img-bookbook">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="txt_img_tt">
                                                    <p>
                                                        กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                        AE90 , AE101 16V
                                                    </p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <p class="txt__detail"> <i
                                                                class="fa-solid fa-circle-question"></i>
                                                            เช็คสต็อก </p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <p class="txt__detail2"> <i
                                                                class="fa-solid fa-circle-question"></i>
                                                            ตรวจ Caution Plate </p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <p class="txt__detail3"> <i
                                                                class="fa-solid fa-circle-question"></i>
                                                            ขอวีดีโอ </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="txt_price_txt">
                                                    <p>
                                                        299 ฿
                                                    </p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn__opendetail2 me-3">
                                                        ดูรายละเอียด </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="card-card2">
                                    <div class="card-headercon">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="txt_txtid">
                                                    <p> หมายเลขคำสั่งซื้อ : W123467845123 </p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="txt_txtdate">
                                                    <p> วันที่ลงประกาศ dd/mm/yyyy hh:mm </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="new1">
                                    <div class="box_body_detail2">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="box__image">
                                                    <img src="assets/img/mana/img2.png" class="img-bookbook">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="txt_img_tt">
                                                    <p>
                                                        กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                        AE90 , AE101 16V
                                                    </p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <p class="txt__detail"> <i
                                                                class="fa-solid fa-circle-question"></i>
                                                            เช็คสต็อก </p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <p class="txt__detail2"> <i
                                                                class="fa-solid fa-circle-question"></i>
                                                            ตรวจ Caution Plate </p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <p class="txt__detail3"> <i
                                                                class="fa-solid fa-circle-question"></i>
                                                            ขอวีดีโอ </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="txt_price_txt">
                                                    <p>
                                                        299 ฿
                                                    </p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn__opendetail2 me-3">
                                                        ดูรายละเอียด </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="card-card2">
                                    <div class="card-headercon">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="txt_txtid">
                                                    <p> หมายเลขคำสั่งซื้อ : W123467845123 </p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="txt_txtdate">
                                                    <p> วันที่ลงประกาศ dd/mm/yyyy hh:mm </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="new1">
                                    <div class="box_body_detail2">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="box__image">
                                                    <img src="assets/img/mana/img2.png" class="img-bookbook">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="txt_img_tt">
                                                    <p>
                                                        กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                        AE90 , AE101 16V
                                                    </p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <p class="txt__detail"> <i
                                                                class="fa-solid fa-circle-question"></i>
                                                            เช็คสต็อก </p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <p class="txt__detail2"> <i
                                                                class="fa-solid fa-circle-question"></i>
                                                            ตรวจ Caution Plate </p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <p class="txt__detail3"> <i
                                                                class="fa-solid fa-circle-question"></i>
                                                            ขอวีดีโอ </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="txt_price_txt">
                                                    <p>
                                                        299 ฿
                                                    </p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn__opendetail2 me-3">
                                                        ดูรายละเอียด </a>
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
</div>
@stop

@section('script')
<script>
</script>
@stop