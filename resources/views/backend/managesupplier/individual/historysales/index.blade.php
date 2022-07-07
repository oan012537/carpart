@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="managesupplier">
<input type="hidden" id="pageName2" name="pageName2" value="managesupplierindividual">
<input type="hidden" id="navpageName" name="navpageName" value="historysales">
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

                            <div class="col-12">
                                <div class="box__filter2">
                                    <form class="form-box-input px-2">
                                        <div class="row">
                                            <div class="col-4">
                                                <label class="title__txt">หมายเลขคำสั่งซื้อ</label>
                                                <input type="text" class="form-control" id="" placeholder="ระบุ">
                                            </div>

                                            <div class="col-4">
                                                <label class="title__txt">หมายเลขติดตามพัสดุ</label>
                                                <input type="text" class="form-control" id="" placeholder="ระบุ">
                                            </div>

                                            <div class="col-4">
                                                <label for="" class="title__txt">หมวดหมู่สินค้า</label>
                                                <input type="text" class="form-control" id="" placeholder="ระบุ">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-4">
                                                <label class="title__txt">ตัวเลือกการจัดส่ง</label>
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
                                <div class="card-cardhead">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="txt_txtid">
                                                    <p> รายการสินค้า</p>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="txt_txtdate2">
                                                    <p> สถานะ </p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="txt_txtdate3">
                                                    <p> วันที่สั่งซื้อ </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="txt_txtid">
                                                    <p> หมายเลขคำสั่งซื้อ : W123467845123 </p>
                                                </div>
                                            </div>
                                            <!--<div class="col-2">
                                                <div class="txt_txtdate2">
                                                    <p> สถานะ </p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="txt_txtdate3">
                                                    <p> วันที่สั่งซื้อ </p>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="box_body_detail">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="box__image">
                                                    <img src="assets/img/mana/img2.png" class="img-bookbook">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="txt_img_ttsell">
                                                    <p>
                                                        กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                        AE90 , AE101 16V
                                                    </p>
                                                </div>
                                                <div class="txt_img_ttsell2">
                                                    <p>
                                                        รหัสสินค้า 1234
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="box_statussta">
                                                    <p>
                                                        ยังไม่ได้ชำระ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="box_dtaesell">
                                                    <p>
                                                        15/15/2560
                                                        18.00
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div>
                                                    <a href="#" class="btn btn__opendetailyelloe me-3">
                                                        ดูรายละเอียด </a>
                                                </div>

                                                <div>
                                                    <a href="#" class="btn btn__opendetailred me-3">
                                                        ปฏิเสธออเดอร์ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <div class="card-card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="txt_txtid">
                                                    <p> หมายเลขคำสั่งซื้อ : W123467845123 </p>
                                                </div>
                                            </div>
                                            <!--<div class="col-2">
                                                <div class="txt_txtdate2">
                                                    <p> สถานะ </p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="txt_txtdate3">
                                                    <p> วันที่สั่งซื้อ </p>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="box_body_detail">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="box__image">
                                                    <img src="assets/img/mana/img2.png" class="img-bookbook">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="txt_img_ttsell">
                                                    <p>
                                                        กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                        AE90 , AE101 16V
                                                    </p>
                                                </div>
                                                <div class="txt_img_ttsell2">
                                                    <p>
                                                        รหัสสินค้า 1234
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="box_statussta2">
                                                    <p>
                                                        ยังไม่ได้ชำระ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="box_dtaesell">
                                                    <p>
                                                        15/15/2560
                                                        18.00
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div>
                                                    <a href="#" class="btn btn__opendetailyelloe me-3">
                                                        ดูรายละเอียด </a>
                                                </div>

                                                <div>
                                                    <a href="#" class="btn btn__opendetailred me-3">
                                                        ปฏิเสธออเดอร์ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="card-card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="txt_txtid">
                                                    <p> หมายเลขคำสั่งซื้อ : W123467845123 </p>
                                                </div>
                                            </div>
                                            <!--<div class="col-2">
                                                <div class="txt_txtdate2">
                                                    <p> สถานะ </p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="txt_txtdate3">
                                                    <p> วันที่สั่งซื้อ </p>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="box_body_detail">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="box__image">
                                                    <img src="assets/img/mana/img2.png" class="img-bookbook">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="txt_img_ttsell">
                                                    <p>
                                                        กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                        AE90 , AE101 16V
                                                    </p>
                                                </div>
                                                <div class="txt_img_ttsell2">
                                                    <p>
                                                        รหัสสินค้า 1234
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="box_statussta3">
                                                    <p>
                                                        ยังไม่ได้ชำระ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="box_dtaesell">
                                                    <p>
                                                        15/15/2560
                                                        18.00
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div>
                                                    <a href="#" class="btn btn__opendetailyelloe me-3">
                                                        ดูรายละเอียด </a>
                                                </div>

                                                <div>
                                                    <a href="#" class="btn btn__opendetailred me-3">
                                                        ปฏิเสธออเดอร์ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="card-card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="txt_txtid">
                                                    <p> หมายเลขคำสั่งซื้อ : W123467845123 </p>
                                                </div>
                                            </div>
                                            <!--<div class="col-2">
                                                <div class="txt_txtdate2">
                                                    <p> สถานะ </p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="txt_txtdate3">
                                                    <p> วันที่สั่งซื้อ </p>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="box_body_detail">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="box__image">
                                                    <img src="assets/img/mana/img2.png" class="img-bookbook">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="txt_img_ttsell">
                                                    <p>
                                                        กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                        AE90 , AE101 16V
                                                    </p>
                                                </div>
                                                <div class="txt_img_ttsell2">
                                                    <p>
                                                        รหัสสินค้า 1234
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="box_statussta4">
                                                    <p>
                                                        ยังไม่ได้ชำระ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="box_dtaesell">
                                                    <p>
                                                        15/15/2560
                                                        18.00
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div>
                                                    <a href="#" class="btn btn__opendetailyelloe me-3">
                                                        ดูรายละเอียด </a>
                                                </div>

                                                <div>
                                                    <a href="#" class="btn btn__opendetailred me-3">
                                                        ปฏิเสธออเดอร์ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="card-card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="txt_txtid">
                                                    <p> หมายเลขคำสั่งซื้อ : W123467845123 </p>
                                                </div>
                                            </div>
                                            <!--<div class="col-2">
                                                <div class="txt_txtdate2">
                                                    <p> สถานะ </p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="txt_txtdate3">
                                                    <p> วันที่สั่งซื้อ </p>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="box_body_detail">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="box__image">
                                                    <img src="assets/img/mana/img2.png" class="img-bookbook">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="txt_img_ttsell">
                                                    <p>
                                                        กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                        AE90 , AE101 16V
                                                    </p>
                                                </div>
                                                <div class="txt_img_ttsell2">
                                                    <p>
                                                        รหัสสินค้า 1234
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="box_statussta5">
                                                    <p>
                                                        ยกเลิกคำสั่งซื้อ
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="box_dtaesell">
                                                    <p>
                                                        15/15/2560
                                                        18.00
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div>
                                                    <a href="#" class="btn btn__opendetailyelloe me-3">
                                                        ดูรายละเอียด </a>
                                                </div>

                                                <div>
                                                    <a href="#" class="btn btn__opendetailred me-3">
                                                        ปฏิเสธออเดอร์ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="card-card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="txt_txtid">
                                                    <p> หมายเลขคำสั่งซื้อ : W123467845123 </p>
                                                </div>
                                            </div>
                                            <!--<div class="col-2">
                                                <div class="txt_txtdate2">
                                                    <p> สถานะ </p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="txt_txtdate3">
                                                    <p> วันที่สั่งซื้อ </p>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="box_body_detail">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="box__image">
                                                    <img src="assets/img/mana/img2.png" class="img-bookbook">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="txt_img_ttsell">
                                                    <p>
                                                        กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                        AE90 , AE101 16V
                                                    </p>
                                                </div>
                                                <div class="txt_img_ttsell2">
                                                    <p>
                                                        รหัสสินค้า 1234
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="box_statussta6">
                                                    <p>
                                                        ได้รับการรีวิว
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="box_dtaesell">
                                                    <p>
                                                        15/15/2560
                                                        18.00
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div>
                                                    <a href="#" class="btn btn__opendetailyelloe me-3">
                                                        ดูรายละเอียด </a>
                                                </div>

                                                <div>
                                                    <a href="#" class="btn btn__opendetailred me-3">
                                                        ปฏิเสธออเดอร์ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <br><br><br>
                                <div class="view-all">
                                    <div>
                                        <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                    </div>
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);"><i
                                                    class="fas fa-chevron-left"></i></a></li>
                                        <li class="page-item">1/11</li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);"><i
                                                    class="fas fa-chevron-right"></i></a></li>
                                    </ul>
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