@extends('buyer.layouts.template')

@section('matavendor')
    <link rel="stylesheet" href="{{asset('assets/css/order-list.css') }}">
@stop

@section('content')

    <section id="history-request">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="nav__top">
                        <a href="javascript:void(0)">บัญชีของฉัน</a> <span><i
                                class="fa-solid fa-chevron-right"></i></span> <a href="javascript:void(0)">
                            รายการรอยืนยันจากผู้ขาย </a>
                    </div>

                    @include('buyer.profile.nav_profile')

                </div>
                <div class="col-8">
                    <div class="box__contentmain">
                        <p class="txt__titletop">การยืนยันความพร้อมของสินค้า</p>
                        <p class="txt__subtop">ข้อมูลประวัติการขอยืนยันความพร้อมของสินค้า</p>
                        <hr class="underline">

                        <div class="box__tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="taball-tab" data-bs-toggle="tab"
                                        data-bs-target="#taball" type="button" role="tab" aria-controls="taball"
                                        aria-selected="true">ทั้งหมด <span>2</span></button>
                                    <button class="nav-link" id="tabrequest-tab" data-bs-toggle="tab"
                                        data-bs-target="#tabrequest" type="button" role="tab" aria-controls="tabrequest"
                                        aria-selected="false"> รอการยืนยัน <span>2</span></button>
                                    <button class="nav-link" id="navopen-tab" data-bs-toggle="tab"
                                        data-bs-target="#navopen" type="button" role="tab" aria-controls="navopen"
                                        aria-selected="false">ได้รับการยืนยัน <span>2</span></button>
                                    <button class="nav-link" id="navclose-tab" data-bs-toggle="tab"
                                        data-bs-target="#navclose" type="button" role="tab" aria-controls="navclose"
                                        aria-selected="false">ยกเลิก <span>2</span></button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="taball" role="tabpanel"
                                    aria-labelledby="taball-tab">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-magnifying-glass"></i> </span>
                                        <input type="text" class="form-control"
                                            placeholder="ค้นหาจากหมายเลขคำสั่งซื้อ หรือชื่อสินค้าในทุกคำสั่งซื้อ "
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                                    <div class="box__content">
                                        <div class="row">
                                            <div class="col-8">
                                                <p class="txt__title">หมายเลขคำร้องยืนยันความพร้อมของสินค้า :
                                                    ABC123343545 </p>
                                                <p class="txt__date">วันที่สอบถาม 15/12/2564</p>
                                            </div>
                                            <div class="col-4">
                                                <div class="box__sta <?php if ($i == 1) {
                                                                                echo 'status-waiting';
                                                                            } else if ($i == 2) {
                                                                                echo 'status-success';
                                                                            } else {
                                                                                echo 'status-close';
                                                                            } ?>">
                                                    <?php if ($i == 1) {
                                                            echo '<p>สถานะ : รอการยืนยัน</p>';
                                                        } else if ($i == 2) {
                                                            echo '<p>สถานะ : ได้รับการยืนยัน</p>';
                                                        } else {
                                                            echo '<p>สถานะ : ยกเลิก</p>';
                                                        } ?>

                                                </div>
                                            </div>
                                        </div>

                                        <hr class="underline">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="box__image">
                                                    <img src="assets/img/createrequest/imagenull-2.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <p class="txt__name">กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 ,
                                                    AE90 , AE101 16V</p>
                                                <div class="txt_txt_detail">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <p class="txt__detail"> <i
                                                                            class="fa-solid fa-circle-question"></i>
                                                                        เช็คสต็อก </p>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <p class="txt__detail2"> <i
                                                                            class="fa-solid fa-circle-question"></i>
                                                                        ตรวจ Caution Plate </p>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <p class="txt__detail3"> <i
                                                                            class="fa-solid fa-circle-question"></i>
                                                                        ขอวีดีโอ </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="box__btn">
                                                    <?php if ($i == 1 || $i == 3) { ?>
                                                    <a href="confirm.php">
                                                        <button class="btn btn__viewall">
                                                            ดูข้อมูลรายละเอียด
                                                        </button>
                                                    </a>
                                                    <?php } ?>

                                                    <?php if ($i == 1) { ?>
                                                    <button class="btn btn__closerequst">ยกเลิก</button>
                                                    <?php } ?>

                                                    <?php if ($i == 2) { ?>
                                                    <a href="confirm.php">
                                                        <button class="btn btn__viewall">ดูข้อมูลรายละเอียด</button>
                                                    </a>
                                                    <button class="btn btn__cancle">ยกเลิก</button>
                                                    <?php } ?>

                                                    <?php if ($i == 3) { ?>
                                                    <button class="btn btn__createrequst">ยกเลิก</button>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <?php if ($i == 1 || $i == 2 || $i == 3) { ?>
                                                <p class="txt__problem">
                                                    ยอดคำสั่งซื้อทั้งหมด: &nbsp;<span class="txt__price"> ฿ 725 </span>
                                                </p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="tab-pane fade" id="tabrequest" role="tabpanel"
                                    aria-labelledby="tabrequest-tab">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-magnifying-glass"></i> </span>
                                        <input type="text" class="form-control"
                                            placeholder="ค้นหาจากหมายเลขคำสั่งซื้อ หรือชื่อสินค้าในทุกคำสั่งซื้อ "
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                                    <div class="box__content">
                                        <div class="row">
                                            <div class="col-8">
                                                <p class="txt__title">หมายเลขคำร้องยืนยันความพร้อมของสินค้า :
                                                    ABC123343545</p>
                                                <p class="txt__date">วันที่สั่งซื้อ 15/12/2564</p>
                                            </div>
                                            <div class="col-4">
                                                <div class="box__status status-waiting">
                                                    <p>สถานะ : รอตรวจสอบ</p>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="underline">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="box__image">
                                                    <img src="assets/img/createrequest/imagenull-2.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>

                                            <div class="col-10">
                                                <p class="txt__name">กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80
                                                    ,
                                                    AE90 , AE101 16V</p>
                                                <div class="txt_txt_detail">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <p class="txt__detail"> <i
                                                                            class="fa-solid fa-circle-question"></i>
                                                                        เช็คสต็อก </p>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <p class="txt__detail2"> <i
                                                                            class="fa-solid fa-circle-question"></i>
                                                                        ตรวจ Caution Plate </p>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <p class="txt__detail3"> <i
                                                                            class="fa-solid fa-circle-question"></i>
                                                                        ขอวีดีโอ </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline">

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="box__btn">
                                                    <a href="confirm.php">
                                                        <button class="btn btn__viewall">ดูข้อมูลรายละเอียด</button>
                                                    </a>
                                                    <button class="btn btn__cancle">ยกเลิก</button>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <?php if ($i == 1 || $i == 2 || $i == 3) { ?>
                                                <p class="txt__problem">
                                                    ยอดคำสั่งซื้อทั้งหมด: <span class="txt__price"> ฿ 725 </span>
                                                </p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="tab-pane fade" id="navopen" role="tabpanel" aria-labelledby="navopen-tab">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-magnifying-glass"></i> </span>
                                        <input type="text" class="form-control"
                                            placeholder="ค้นหาจากหมายเลขคำสั่งซื้อ หรือชื่อสินค้าในทุกคำสั่งซื้อ "
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                                    <div class="box__content">
                                        <div class="row">
                                            <div class="col-8">
                                                <p class="txt__title">หมายเลขคำร้องยืนยันความพร้อมของสินค้า :
                                                    ABC123343545 </p>
                                                <p class="txt__date">วันที่สั่งซื้อ 15/12/2564</p>
                                            </div>
                                            <div class="col-4">
                                                <div class="box__status status-success">
                                                    <p>สถานะ : ได้รับการยืนยัน</p>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="underline">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="box__image">
                                                    <img src="assets/img/createrequest/imagenull-2.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>

                                            <div class="col-10">
                                                <p class="txt__name">กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80
                                                    ,
                                                    AE90 , AE101 16V</p>
                                                <div class="txt_txt_detail">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <p class="txt__detail"> <i
                                                                            class="fa-solid fa-circle-question"></i>
                                                                        เช็คสต็อก </p>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <p class="txt__detail2"> <i
                                                                            class="fa-solid fa-circle-question"></i>
                                                                        ตรวจ Caution Plate </p>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <p class="txt__detail3"> <i
                                                                            class="fa-solid fa-circle-question"></i>
                                                                        ขอวีดีโอ </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline">

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="box__btn">
                                                    <a href="confirm.php">
                                                        <button class="btn btn__viewall">ดูข้อมูลรายละเอียด</button>
                                                    </a>
                                                    <button class="btn btn__closerequst">ยกเลิก</button>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <?php if ($i == 1 || $i == 2 || $i == 3) { ?>
                                                <p class="txt__problem">
                                                    ยอดคำสั่งซื้อทั้งหมด: <span class="txt__price"> ฿ 725 </span>
                                                </p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="tab-pane fade" id="navclose" role="tabpanel" aria-labelledby="navclose-tab">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-magnifying-glass"></i> </span>
                                        <input type="text" class="form-control"
                                            placeholder="ค้นหาจากหมายเลขคำสั่งซื้อ หรือชื่อสินค้าในทุกคำสั่งซื้อ "
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                                    <div class="box__content">
                                        <div class="row">
                                            <div class="col-8">
                                                <p class="txt__title">หมายเลขคำร้องยืนยันความพร้อมของสินค้า :
                                                    ABC123343545 </p>
                                                <p class="txt__date">วันที่สั่งซื้อ 15/12/2564</p>
                                            </div>
                                            <div class="col-4">
                                                <div class="box__status status-close">
                                                    <p>สถานะ : ยกเลิก</p>
                                                </div>
                                                <div class="txt__close">
                                                    <p>
                                                        ยกเลิกโดยผู้ขาย
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class=" underline">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="box__image">
                                                    <img src="assets/img/createrequest/imagenull-2.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>

                                            <div class="col-10">
                                                <p class="txt__name">กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80
                                                    ,
                                                    AE90 , AE101 16V</p>
                                                <div class="txt_txt_detail">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <p class="txt__detail"> <i
                                                                            class="fa-solid fa-circle-question"></i>
                                                                        เช็คสต็อก </p>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <p class="txt__detail2"> <i
                                                                            class="fa-solid fa-circle-question"></i>
                                                                        ตรวจ Caution Plate </p>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <p class="txt__detail3"> <i
                                                                            class="fa-solid fa-circle-question"></i>
                                                                        ขอวีดีโอ </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="underline">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="box__btn">
                                                    <a href="confirm.php">
                                                        <button class="btn btn__viewall">ดูข้อมูลรายละเอียด</button>
                                                    </a>
                                                    <button class="btn btn__createrequst">ยกเลิก</button>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <?php if ($i == 1 || $i == 2 || $i == 3) { ?>
                                                <p class="txt__problem">
                                                    ยอดคำสั่งซื้อทั้งหมด: <span class="txt__price"> ฿ 725 </span>
                                                </p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('script')

    <script>

    </script>

@stop
