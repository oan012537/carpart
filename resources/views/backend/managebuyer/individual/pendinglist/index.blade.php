@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="managebuyer">
<input type="hidden" id="pageName2" name="pageName2" value="managebuyerindividual">
<input type="hidden" id="navpageName" name="navpageName" value="pendinglist">
<div class="content">

    <div class="boxbox__approvel">
        <div class="box__approvel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="txt__page">จัดการผู้ซื้อ : บุคคลธรรมดา</h2>
                    </div>

                    <div class="col-12">
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



                    <div class="row">
                        @include('backend.managebuyer.individual.inc_nav')
                        <div class="col-md-9">
                            <div class="box__table p-4">
                                <div class="txt_txt_bai">
                                    <p>
                                        การยืนยันความพร้อมของสินค้า
                                    </p>
                                </div>
                                <div class="txt_txt_bai2">
                                    <p>
                                        ข้อมูลประวัติการขอยืนยันความพร้อมของสินค้า
                                    </p>
                                </div>

                                <hr class="new2">

                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all"> ทั้งหมด
                                            <span class="circle2"> 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#process"> รอการยืนยัน
                                            <span class="circle2"> 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#sold"> ได้รับการยืนยัน
                                            <span class="circle2"> 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#suspended"> ยกเลิก
                                            <span class="circle2"> 2</span>
                                        </a>
                                    </li>
                                </ul>

                                <br>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-magnifying-glass"></i> </span>
                                    <input type="text" class="form-control"
                                        placeholder="ค้นหาจากหมายเลขคำสั่งซื้อ หรือชื่อสินค้าในทุกคำสั่งซื้อ "
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>


                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="all" class="tab-pane active"><br>



                                        <div class="box_cardbox1">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="txt_txtid">
                                                        <p> หมายเลขคำสั่งซื้อ: KT000000 </p>
                                                    </div>
                                                    <div class="txt_txt_bai2">
                                                        <p>
                                                            วันที่สั่งซื้อ 15/12/2564
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6">

                                                    <div class="box__status status-success2">
                                                        <p>สถานะ : เปิดรับข้อเสนอ</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <hr class="new2">

                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="box__image">
                                                        <img src="assets/img/mana/img3.png" class="img-bookbook">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="txt_img_tt">
                                                        <p>
                                                            กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                            AE90 , AE101 16V
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="new2">

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="box_bb_box2">
                                                        <button class="btn btn__viewall">ดูข้อเสนอทั้งหมด
                                                            (20)</button>
                                                        <button class="btn btn__closerequst">กดปิดรับคำขอ</button>
                                                    </div>

                                                </div>
                                                <div class="col-6">
                                                    <div class="txt__kotxt">
                                                        <p>
                                                            ยอดคำสั่งซื้อทั้งหมด: <span> ฿ 725 </span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="box_cardbox1">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="txt_txtid">
                                                        <p> หมายเลขคำสั่งซื้อ: KT000000 </p>
                                                    </div>
                                                    <div class="txt_txt_bai2">
                                                        <p>
                                                            วันที่สั่งซื้อ 15/12/2564
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6">

                                                    <div class="box__status status-waiting2">
                                                        <p>สถานะ : รอตรวจสอบ</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <hr class="new2">

                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="box__image">
                                                        <img src="assets/img/mana/img3.png" class="img-bookbook">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="txt_img_tt">
                                                        <p>
                                                            กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                            AE90 , AE101 16V
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="new2">

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="box_bb_box2">

                                                        <button class="btn btn__closerequst">ยกเลิกคำขอ</button>
                                                    </div>

                                                </div>
                                                <div class="col-6">
                                                    <div class="txt__kotxt">
                                                        <p>
                                                            ยอดคำสั่งซื้อทั้งหมด: <span> ฿ 725 </span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="box_cardbox1">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="txt_txtid">
                                                        <p> หมายเลขคำสั่งซื้อ: KT000000 </p>
                                                    </div>
                                                    <div class="txt_txt_bai2">
                                                        <p>
                                                            วันที่สั่งซื้อ 15/12/2564
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="box__status status-close2">
                                                        <p>สถานะ : ยกเลิกคำขอ</p>
                                                    </div>
                                                    <div class="txt_txt_bai3">
                                                        <p>
                                                            ยกเลิกโดยผู้ขาย
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="new2">

                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="box__image">
                                                        <img src="assets/img/mana/img3.png" class="img-bookbook">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="txt_img_tt">
                                                        <p>
                                                            กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                            AE90 , AE101 16V
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="new2">

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="box_bb_box2">
                                                        <button class="btn btn__viewall">ดูข้อเสนอทั้งหมด
                                                            (20)</button>
                                                        <button
                                                            class="btn btn__closerequst">สร้างใบคำขออีกครั้ง</button>
                                                    </div>

                                                </div>
                                                <div class="col-6">
                                                    <div class="txt__kotxt">
                                                        <p>
                                                            ยอดคำสั่งซื้อทั้งหมด: <span> ฿ 725 </span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div id="process" class="tab-pane fade"><br>





                                    </div>


                                    <div id="sold" class="tab-pane fade"><br>







                                    </div>


                                    <div id="suspended" class="tab-pane fade"><br>








                                    </div>



                                    <div id="dealete" class="tab-pane fade"><br>






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