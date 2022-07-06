@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="managesupplier">
<input type="hidden" id="pageName2" name="pageName2" value="managesupplierlegal">
<input type="hidden" id="navpageName" name="navpageName" value="historyparts">

<div class="content">

    <div class="boxbox__approvel">
        <div class="box__approvel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="txt__page">จัดการผู้ขาย : นิติบุคคล</h2>
                    </div>

                    <div class="col-12">
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



                    <div class="row">
                        @include('backend.managesupplier.legal.inc_nav')
                        <div class="col-md-9">

                            <div class="col-12">
                                <div class="box__filter2">
                                    <form class="form-box-input px-2">
                                        <div class="row">
                                            <div class="col-3">
                                                <label class="title__txt">ค้นหาตามแบรนด์</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected> ระบุ</option>
                                                </select>
                                            </div>

                                            <div class="col-3">
                                                <label class="title__txt">ค้นหาตามประเภทอะไหล่</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected> ระบุ</option>
                                                </select>
                                            </div>

                                            <div class="col-4">
                                                <label for="" class="title__txt">ช่วงวัน - เวลา</label>
                                                <div class="input-group ">
                                                    <input type="date" class="form-control"
                                                        placeholder="Recipient's username"
                                                        aria-describedby="button-yes">
                                                </div>
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>


                            <br>
                            <div class="txt_txtlist">
                                <p>
                                    17 รายการ
                                </p>
                            </div>
                            <div class="box__table p-4">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all"> ทั้งหมด
                                            <span class="circle"> 1234</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#process"> รอตรวจสอบ
                                            <span class="circle"> 4</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#sold"> ส่งข้อเสนอแล้ว
                                            <span class="circle"> 4</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#suspended"> ปิดรับคำขอแล้ว
                                            <span class="circle"> 3</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#dealete"> ลบ
                                            <span class="circle"> 122</span>
                                        </a>
                                    </li>
                                </ul>


                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="all" class="tab-pane active"><br>

                                        <div class="card-card">
                                            <div class="card-header">
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
                                            <div class="box_body_detail">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="box__image">
                                                            <img src="assets/img/mana/img2.png"
                                                                class="img-bookbook">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="txt_img_tt">
                                                            <p>
                                                                กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                                AE90 , AE101 16V
                                                            </p>
                                                        </div>
                                                        <div class="txt_img_tt2">
                                                            <p>
                                                                รหัสสินค้า 1234
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div>
                                                            <a href="#" class="btn btn__opendetail me-3">
                                                                ดูรายละเอียด </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="new1">

                                            <div class="box_body_detail">
                                                <div class="row">
                                                    <div class="col-6">

                                                        <div class="box_bb_box">
                                                            <a href="#" class="btn btn__delete me-3">
                                                                ลบ </a>
                                                        </div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div class="txt_txtstatus">
                                                            <p>
                                                                สถานะ : รอตรวจสอบ
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="card-card">
                                            <div class="card-header">
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
                                            <div class="box_body_detail">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="box__image">
                                                            <img src="assets/img/mana/img2.png"
                                                                class="img-bookbook">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="txt_img_tt">
                                                            <p>
                                                                กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                                AE90 , AE101 16V
                                                            </p>
                                                        </div>
                                                        <div class="txt_img_tt2">
                                                            <p>
                                                                รหัสสินค้า 1234
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div>
                                                            <a href="#" class="btn btn__opendetail me-3">
                                                                ดูรายละเอียด </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="new1">

                                            <div class="box_body_detail">
                                                <div class="row">
                                                    <div class="col-6">

                                                        <div class="box_bb_box">
                                                            <a href="#" class="btn btn__delete me-3">
                                                                ลบ </a>
                                                        </div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div class="txt_txtstatus2">
                                                            <p>
                                                                สถานะ : ส่งคำขอแล้ว
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="card-card">
                                            <div class="card-header">
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
                                            <div class="box_body_detail">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="box__image">
                                                            <img src="assets/img/mana/img2.png"
                                                                class="img-bookbook">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="txt_img_tt">
                                                            <p>
                                                                กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                                AE90 , AE101 16V
                                                            </p>
                                                        </div>
                                                        <div class="txt_img_tt2">
                                                            <p>
                                                                รหัสสินค้า 1234
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div>
                                                            <a href="#" class="btn btn__opendetail me-3">
                                                                ดูรายละเอียด </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="new1">

                                            <div class="box_body_detail">
                                                <div class="row">
                                                    <div class="col-6">

                                                        <div class="box_bb_box">
                                                            <a href="#" class="btn btn__delete me-3">
                                                                ลบ </a>
                                                        </div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div class="txt_txtstatus3">
                                                            <p>
                                                                สถานะ : ปิดรับคำขอแล้ว
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="card-card">
                                            <div class="card-header">
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
                                            <div class="box_body_detail">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="box__image">
                                                            <img src="assets/img/mana/img2.png"
                                                                class="img-bookbook">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="txt_img_tt">
                                                            <p>
                                                                กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                                AE90 , AE101 16V
                                                            </p>
                                                        </div>
                                                        <div class="txt_img_tt2">
                                                            <p>
                                                                รหัสสินค้า 1234
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div>
                                                            <a href="#" class="btn btn__opendetail me-3">
                                                                ดูรายละเอียด </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="new1">

                                            <div class="box_body_detail">
                                                <div class="row">
                                                    <div class="col-6">

                                                        <div class="box_bb_box">
                                                            <a href="#" class="btn btn__delete me-3">
                                                                ลบ </a>
                                                        </div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div class="txt_txtstatus4">
                                                            <p>
                                                                สถานะ : ลบ
                                                            </p>
                                                        </div>
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