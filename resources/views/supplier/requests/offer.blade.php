@extends('supplier.layouts.template')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="spareparts-card">
<div class="content" id="spareparts-sendoffer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="box__titlepage">
                    <h3>ใบคำขอหาอะไหล่</h3>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box__detailnumberpart">
                    <p class="txt__number">หมายเลขคำขอหาอะไหล่ : <span>KT000000</span></p>
                    <p class="txt__date">วันที่ลงประกาศ : <span>15/12/2564</span></p>
                </div>
            </div>
        </div>

        <div class="box__allcontent">

            <div class="box__detailspare">
                <div class="row">

                    <div class="col-4">
                        <p class="txt__left">ชื่อสินค้า</p>
                    </div>
                    <div class="col-8">
                        <p class="txt__right">ยาง B Quick</p>
                    </div>


                    <div class="col-4">
                        <p class="txt__left">หมวดหมู่</p>
                    </div>
                    <div class="col-8">
                        <p class="txt__right">ยางรถยนต์ > หมวดหมู่</p>
                    </div>


                    <div class="col-4">
                        <p class="txt__left">แบรนด์</p>
                    </div>
                    <div class="col-8">
                        <p class="txt__right">Hyundai</p>
                    </div>


                    <div class="col-4">
                        <p class="txt__left">รุ่น</p>
                    </div>
                    <div class="col-8">
                        <p class="txt__right">H-1</p>
                    </div>

                    <div class="col-4">
                        <p class="txt__left">ปี</p>
                    </div>
                    <div class="col-8">
                        <p class="txt__right">2021</p>
                    </div>

                    <div class="col-4">
                        <p class="txt__left">ภาพอะไหล่สินค้า (เพิ่มเติม)</p>
                    </div>
                    <div class="col-8">
                        <div class="wrapper__image">
                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                <div class="box__image">
                                    <img src="{{asset('assets/img/img-null.png')}}" class="img-fluid" alt="">
                                </div>
                            <?php } ?>
                        </div>
                    </div>


                    <div class="col-4">
                        <p class="txt__left">หมายเลขประจำรถยนต์ Caution No.</p>
                    </div>
                    <div class="col-8">
                        <p class="txt__right">1324567890123</p>
                    </div>

                    <div class="col-4">
                        <p class="txt__left">VIN Code</p>
                    </div>
                    <div class="col-8">
                        <p class="txt__right">1324567890123</p>
                    </div>

                    <div class="col-4">
                        <p class="txt__left">รูปภาพหมายเลขประจำรถยนต์</p>
                    </div>
                    <div class="col-8">
                        <div class="box__image">
                            <img src="{{asset('assets/img/img-null.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>


                    <div class="col-4">
                        <p class="txt__left">ต้องการวีดีโอเพิ่มเติมหรือไม่</p>
                    </div>
                    <div class="col-8">
                        <p class="txt__right">ต้องการ</p>
                    </div>


                    <div class="col-4">
                        <p class="txt__left">ต้องการใบกำกับภาษี/ใบเสร็จรับเงินหรือไม่</p>
                    </div>
                    <div class="col-8">
                        <p class="txt__right">ต้องการ</p>
                    </div>
                </div>
            </div>

            <div class="box__sendoffer">
                <div class="box__title">
                    <p class="txt__title">ส่งข้อเสนอเพิ่ม</p>
                </div>

                <div class="box__wrapperbutton">
                    <a href="javascript:void(0)" class="btn btn__search" data-bs-toggle="modal" data-bs-target="#modalsearchproducts">
                        <img src="{{asset('assets/img/icon/ep_search.svg')}}" class="img-fluid" alt="">
                        <p>ค้นหาจากสินค้าภายในร้าน</p>
                        <span>ค้นหาจากรายการสินค้าที่มี</span>
                    </a>

                    <a href="javascript:void(0)" class="btn btn__sendlist" data-bs-toggle="modal" data-bs-target="#modalsendlist">
                        <img src="{{asset('assets/img/icon/mdi_car-wrench.svg')}}" class="img-fluid" alt="">
                        <p>ส่งรายการใหม่</p>
                        <span>สร้างรายการสินค้าใหม่</span>
                    </a>
                </div>
            </div>

            <div class="box__offer">
                <p class="txt__title">7 ข้อเสนอ</p>

                <?php for ($z = 1; $z <= 2; $z++) { ?>
                    <div class="box__allitems">
                        <form>
                            <div class="box__itemsoffer">
                                <div class="box__heading">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="txt__heading"> เสนอสินค้าชิ้นที่ <?php echo $z; ?> <span>วันที่ลงข้อเสนอ dd/mm/yyyy hh:mm</span></p>
                                        </div>
                                        <div class="col-6">
                                            <div class="box__btn">
                                                <a href="javascript:void(0)"><i class="fa-solid fa-trash-can"></i> ลบ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box__contentimage">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="wrapper__content">
                                                <div class="box__image">
                                                    <img src="{{asset('assets/img/img-null.png')}}" class="img-fluid" alt="">
                                                </div>

                                                <div class="box__content">
                                                    <h4 class="txt__title">กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</h4>
                                                    <p class="txt__numberproducts">รหัสสินค้า 1234</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="box__price">
                                                <p class="txt__text">ราคา</p>
                                                <p class="txt__price">299 ฿</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box__contentaccordion">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    รายละเอียดสินค้า
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <p class="txt__title">รายละเอียดสินค้า</p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="box__content">
                                                                <div class="row">
                                                                    <?php
                                                                    $txtleft = array(
                                                                        '1' => 'แบรนด์',
                                                                        '2' => 'ปี',
                                                                        '3' => 'คุณภาพสินค้า',
                                                                        '4' => 'Full Model Code',
                                                                        '5' => 'ผู้ผลิตชิ้นส่วน/Maker',
                                                                        '6' => 'ขนาด',
                                                                        '7' => 'น้ำหนัก',
                                                                        '8' => 'สีภายใน/Trim',
                                                                        '9' => 'สีภายนอก/Color',
                                                                        '10' => 'รายละเอียดเกี่ยวกับ สินค้า/เงื่อนไขประกัน สินค้า/คุณภาพเพิ่มเติม(ถ้ามี)',
                                                                    );

                                                                    $txtright = array(
                                                                        '1' => 'TOYOTA',
                                                                        '2' => '2021l',
                                                                        '3' => 'มือสอง - ดีมาก/Excellent (80~100%)',
                                                                        '4' => '123456-123242',
                                                                        '5' => 'TOYOTA',
                                                                        '6' => 'กว้าง x ยาว x สูง',
                                                                        '7' => '10 กิโลกรัม',
                                                                        '8' => 'สีขาว',
                                                                        '9' => 'สีดำ',
                                                                        '10' => 'ดึงค่าจากผู้ให้รับประกัน + ระยะเวลา เงื่อนไขกับรายละเอียด รวมกัน ตามที่comment ไว้ก่อนหน้า ดึงข้อมูลAuto จาก posting',
                                                                    );
                                                                    for ($i = 1; $i < 10; $i++) {
                                                                    ?>
                                                                        <div class="col-6">
                                                                            <p class="txt__left">
                                                                                <?php echo $txtleft[$i]; ?>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <p class="txt__right">
                                                                                <?php echo $txtright[$i]; ?>
                                                                            </p>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="box__content">
                                                                <div class="row">
                                                                    <?php
                                                                    $txtleft = array(
                                                                        '1' => 'ชื่อสินค้า',
                                                                        '2' => 'หมวดหลัก/หมวดย่อย',
                                                                        '3' => 'รุ่น',
                                                                        '4' => 'เกรด',
                                                                        '5' => 'Genuine PARTS NO.',
                                                                        '6' => 'Engine Model Code',
                                                                        '7' => 'VIN Code',
                                                                        '8' => 'สถานะสินค้า',
                                                                        '9' => 'ราคา',
                                                                        '10' => 'ราคาค่าส่ง',
                                                                        '11' => 'จัดส่ง',
                                                                    );

                                                                    $txtright = array(
                                                                        '1' => 'ยาง B Quick',
                                                                        '2' => 'หมวดหลัก > หมวดย่อย',
                                                                        '3' => 'รุ่น >  รุ่นย่อย',
                                                                        '4' => 'แท้',
                                                                        '5' => '123456-123242',
                                                                        '6' => '123456-123242',
                                                                        '7' => '2123HTRYTYytuioio$7675',
                                                                        '8' => 'พร้อมส่ง',
                                                                        '9' => '12345',
                                                                        '10' => '123',
                                                                        '11' => 'Flash',
                                                                    );
                                                                    for ($i = 1; $i < 11; $i++) {
                                                                    ?>
                                                                        <div class="col-6">
                                                                            <p class="txt__left">
                                                                                <?php echo $txtleft[$i]; ?>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <p class="txt__right">
                                                                                <?php echo $txtright[$i]; ?>
                                                                            </p>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    ภาพอะไหล่สินค้า (เพิ่มเติม) </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <?php for ($i = 1; $i <= 6; $i++) { ?>
                                                            <div class="col-xl-2 col-lg-3 col-md-3 col-12">
                                                                <a data-fancybox="gallery" href="{{asset('assets/img/img-null.png')}}">
                                                                    <div class="box__imageproductother">
                                                                        <img src="{{asset('assets/img/img-null.png')}}" class="img-fluid" alt="">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="box__checkbox">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            ออกใบกำกับภาษี/ใบเสร็จรับเงินได้
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            ซ่อน SKU (ระบบจะซ่อนข้อมูลช่อง SKU เท่านั้น กรณีถ้าผู้ขายระบุ SKU ลงไปในข้อมูลส่วนอื่นๆจะยังคงแสดงอยู่)
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            ยืนยันว่าสินค้าเข้ากันได้กับข้อมูล Caution Plate ของลูกค้า
                                            <br />
                                            <span>เป็นการยืนยันที่แสดงความครอบคลุมการรับประกันความเข้ากันได้ ผู้ขายยินดีจะรับผิดชอบกรณีลูกค้าไม่สามารถใช้งานสินค้าได้</span>
                                        </label>
                                    </div>
                                </div>

                                <hr />

                                <div class="box__qrvideoscan">
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt__tile">วิดิโอสินค้า</p>
                                        </div>
                                        <div class="col-4">
                                            <div class="box__btn">
                                                <button class="btn btn__scanqr"><i class="fa-solid fa-qrcode"></i> สแกน QR Code เพื่ออัปโหลดวีดีโอผ่านมือถือ</button>
                                            </div>

                                            <div class="box__video">
                                                <div class="drop-zone">
                                                    <span class="drop-zone__prompt"> <i class="fa-solid fa-video"></i>
                                                        <p> แบบวิดีโอ</p>

                                                    </span>
                                                    <input type="file" name="myFile" class="drop-zone__input">
                                                </div>



                                                <p class="txt__size"> ขนาดไม่เกิน 30 Mb, 1280 x 1280 px </p>
                                                <p class="txt__time">ระยะเวลา 10-60 วินาที นามสกุลไฟล์ MP4</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </form>
                    </div>
                <?php } ?>
            </div>

            <div class="box__btnsave">
                <a href="{{route('supplier.requests')}}" class="btn btn__back">กลับ</a>
                <button type="submit" class="btn btn__yes">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Search Profuct -->

<!-- Modal -->
<div class="modal fade" id="modalsearchproducts" tabindex="-1" aria-labelledby="modalsearchproductsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modalsearchproductsLabel">ค้นหาสินค้าจากร้าน</h3>
            </div>
            <div class="modal-body">
                <p class="txt__title">ค้นหาตาม Keyword </p>

                <form>
                    <div class="box__search">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">แบรนด์ <span> *</span></label>
                                    <input type="text" name="brands" class="form-control" placeholder="ระบุ">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">รุ่น</label>
                                    <input type="text" name="model" class="form-control" placeholder="ระบุ">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">รุ่นย่อย</label>
                                    <input type="text" name="model2" class="form-control" placeholder="ระบุ">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">ปี</label>
                                    <input type="text" name="year" class="form-control" placeholder="ระบุ">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">หมวดหมู่หลัก </label>
                                    <input type="text" name="catagories" class="form-control" placeholder="ระบุ">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">หมวดหมู่ย่อย </label>
                                    <input type="text" name="subcatagories" class="form-control" placeholder="ระบุ">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">ชื่อสินค้า </label>
                                    <input type="text" name="nameproducts" class="form-control" placeholder="ระบุ">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">SKU </label>
                                    <input type="text" name="sku" class="form-control" placeholder="ระบุ">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="box__btn">
                                    <button class="btn btn__search">ค้นหา</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </form>


                <div class="box__result">
                    <p class="txt__title">พบรายการสินค้า xx รายการ</p>

                    <?php for ($i = 1; $i <= 2; $i++) { ?>
                        <div class="box__itemsresult">
                            <div class="box__heading">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        เลือก
                                    </label>
                                </div>
                            </div>

                            <div class="box__content">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{asset('s/img/img-null.png')}}" class="img-fluid" alt="">
                                    </div>

                                    <div class="col-4">
                                        <h4 class="txt__products">กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</h4>
                                        <p class="txt__sub">SKU 12345</p>
                                        <p class="txt__sub">แบรนด์.</p>
                                        <p class="txt__sub">รุ่น > รุ่นย่อย</p>
                                        <p class="txt__sub">หมวดหมู่ > หมวดหมู่ย่อย</p>
                                        <p class="txt__sub">ปี</p>
                                    </div>
                                    <div class="col-2">
                                        <p class="txt__detail">OEM</p>
                                    </div>
                                    <div class="col-2">
                                        <p class="txt__detail">มือสอง 90%</p>
                                    </div>
                                    <div class="col-2">
                                        <p class="txt__detail">299 ฿</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="box__btn">
                    <a href="javascript:void(0)" class="btn btn__back" data-bs-dismiss="modal" aria-label="Close">กลับ</a>
                    <button type="submit" class="btn btn__yes">ยืนยัน</button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" id="modalsendlist" tabindex="-1" aria-labelledby="modalsendlistLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalsendlistLabel"> ส่งข้อเสนอใหม่</h5>
            </div>
            <div class="modal-body">
                <?php for ($o = 1; $o <= 2; $o++) { ?>
                    <form id="msform">
                        <div class="accordion" id="acctab<?php echo $o; ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button <?php if ($o == 2) {
                                                                        echo 'collapsed';
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#contentdetail<?php echo $o; ?>" aria-expanded="true" aria-controls="contentdetail<?php echo $o; ?>">
                                        <p class="txt__title"><i class="fa-solid fa-circle-exclamation"></i> ข้อมูลสินค้า <?php echo $o; ?></p>
                                    </button>
                                </h2>
                                <div id="contentdetail<?php echo $o; ?>" class="accordion-collapse collapse <?php if ($o != 2) {
                                                                                                                echo 'show';
                                                                                                            } ?>" aria-labelledby="headingOne" data-bs-parent="#acctab<?php echo $o; ?>">
                                    <div class="accordion-body">
                                        <div class="box__itemslist">

                                            <div class="form-group">
                                                <label class="label__list">รายละเอียด</label>

                                                <div class="box__formcheck">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            ใช้ข้อมูลหมวดหมู่ตามใบคำขอหาอะไหล่
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="box__allstep">
                                                <div class="box__step">
                                                    <p class="txt__titlestep">เลือกแบรนด์</p>
                                                    <div class="box__stepdetail">
                                                        <a href="javascript:void(0)" class="btn__label step1 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__brands"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                                        <a href="javascript:void(0)" class="btn__label step2 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__series"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                                        <a href="javascript:void(0)" class="btn__label step3 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__subseries"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                                        <a href="javascript:void(0)" class="btn__label step4 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__years"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                                        <a href="javascript:void(0)" class="btn__label step5 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__cat"></span> </a>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="ระบุ" aria-describedby="button-addon2">
                                                                <button class="btn btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <?php
                                                            foreach (range('A', 'Z') as $letter) {
                                                                echo "<a href='javascript:void(0)' class='letter__az'>$letter</a>";
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="box__contentdetail">
                                                    <div class="row box__scroll" id="fieldset1">
                                                        <?php
                                                        $name = array(
                                                            '1' => 'Aston Martin',
                                                            '2' => 'Toyota',
                                                            '3' => 'Hyundai',
                                                            '4' => 'Nissan',
                                                            '5' => 'Isuzu',
                                                            '6' => 'Toyota',
                                                            '7' => 'Aston Martin',
                                                            '8' => 'Nissan',
                                                            '9' => 'Isuzu',
                                                            '10' => 'Hyundai',
                                                            '11' => 'Aston Martin',
                                                            '12' => 'Toyota',
                                                            '13' => 'Hyundai',
                                                            '14' => 'Nissan',
                                                            '15' => 'Isuzu',
                                                            '16' => 'Toyota',
                                                            '17' => 'Aston Martin',
                                                            '18' => 'Nissan',
                                                            '19' => 'Isuzu',
                                                            '20' => 'Hyundai',
                                                        );
                                                        for ($i = 1; $i <= 20; $i++) {
                                                        ?>
                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-12 next">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="image-option" id="image-options<?php echo $i; ?>" value="option<?php echo $i; ?>">
                                                                    <label class="form-check-label" for="image-options<?php echo $i; ?>">
                                                                        <img src="{{asset('assets/img/logobrands/img-logo')}}<?php echo $i; ?>.png" class="img-fluid img-circleimg" alt="">
                                                                        <?php echo $name[$i]; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    <fieldset attr-id="1">
                                                        <div class="row box__scroll" id="fieldset2">
                                                            <?php $name = array(
                                                                '1' => 'Revo',
                                                                '2' => 'Alphard',
                                                                '3' => 'Avanza',
                                                                '4' => 'Camry',
                                                                '5' => 'Corlla',
                                                                '6' => 'Revo',
                                                                '7' => 'Alphard',
                                                                '8' => 'Avanza',
                                                                '9' => 'Camry',
                                                                '10' => 'Corlla',
                                                                '11' => 'Revo',
                                                                '12' => 'Alphard',
                                                                '13' => 'Avanza',
                                                                '14' => 'Camry',
                                                                '15' => 'Corlla',
                                                                '16' => 'Revo',
                                                                '17' => 'Alphard',
                                                                '18' => 'Avanza',
                                                                '19' => 'Camry',
                                                                '20' => 'Corlla',

                                                            );
                                                            for ($i = 1; $i <= 20; $i++) {
                                                            ?>
                                                                <div class="col-xl-3 col-lg-4 col-md-4 col-12 next">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            <?php echo $name[$i]; ?>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>

                                                        <!--  -->
                                                        <fieldset attr-id="2">
                                                            <div class="row box__scroll" id="fieldset3">
                                                                <?php $name = array(
                                                                    '1' => '2.4 E',
                                                                    '2' => '2.4 E Plus 4WD',
                                                                    '3' => '2.4 J',
                                                                    '4' => '2.4 E 4WD',
                                                                    '5' => '2.4 Entry',
                                                                    '6' => '2.4 E',
                                                                    '7' => '2.4 E Plus 4WD',
                                                                    '8' => '2.4 J',
                                                                    '9' => '2.4 E 4WD',
                                                                    '10' => '2.4 Entry',
                                                                    '11' => '2.4 E',
                                                                    '12' => '2.4 E Plus 4WD',
                                                                    '13' => '2.4 J',
                                                                    '14' => '2.4 E 4WD',
                                                                    '15' => '2.4 Entry',
                                                                    '16' => '2.4 E',
                                                                    '17' => '2.4 E Plus 4WD',
                                                                    '18' => '2.4 J',
                                                                    '19' => '2.4 E 4WD',
                                                                    '20' => '2.4 Entry',

                                                                );
                                                                for ($i = 1; $i <= 20; $i++) {
                                                                ?>
                                                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12 next">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                <?php echo $name[$i]; ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>

                                                            <!--  -->
                                                            <fieldset attr-id="3">
                                                                <div class="row box__scroll" id="fieldset4">
                                                                    <?php $years = array(
                                                                        '1' => '2022',
                                                                        '2' => '2022',
                                                                        '3' => '2022',
                                                                        '4' => '2022',
                                                                        '5' => '2022',
                                                                        '6' => '2022 ',
                                                                        '7' => '2022',
                                                                        '8' => '2022',
                                                                        '9' => '2022',
                                                                        '10' => '2022',
                                                                        '11' => '2022 ',
                                                                        '12' => '2022',
                                                                        '13' => '2022',
                                                                        '14' => '2022',
                                                                        '15' => '2022',
                                                                    );
                                                                    for ($i = 1; $i <= 15; $i++) {
                                                                    ?>
                                                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12 next">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                    <?php echo $years[$i]; ?>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                                <!--  -->
                                                                <fieldset attr-id="4">
                                                                    <div class="row box__scroll" id="fieldset5">
                                                                        <?php $content = array(
                                                                            '1' => 'ถังน้ำสำรอง',
                                                                            '2' => 'ชุดสายไฟ',
                                                                            '3' => 'กล่องฟิวส์',
                                                                            '4' => 'ถังน้ำมัน',
                                                                            '5' => 'ออยล์คูเลอร์',
                                                                            '6' => 'ออยล์คูเลอร์ ',
                                                                            '7' => 'ถังน้ำสำรอง',
                                                                            '8' => 'ชุดสายไฟ',
                                                                            '9' => 'กล่องฟิวส์',
                                                                            '10' => 'ถังน้ำมัน',
                                                                            '11' => 'ถังน้ำสำรอง ',
                                                                            '12' => 'ชุดสายไฟ',
                                                                            '13' => 'กล่องฟิวส์',
                                                                            '14' => 'ถังน้ำมัน',
                                                                            '15' => 'ออยล์คูเลอร์',
                                                                            '16' => 'ถังน้ำมัน',
                                                                            '17' => 'ถังน้ำสำรอง ',
                                                                            '18' => 'ชุดสายไฟ',
                                                                            '19' => 'กล่องฟิวส์',
                                                                            '20' => 'ถังน้ำมัน',
                                                                        );
                                                                        for ($i = 1; $i <= 15; $i++) {
                                                                        ?>
                                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12 ">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                                        <?php echo $content[$i]; ?>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </fieldset>
                                                                <!--  -->
                                                            </fieldset>
                                                            <!--  -->

                                                        </fieldset>
                                                        <!--  -->
                                                    </fieldset>

                                                    <div class="box__forminput">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">ID</label>
                                                                    <input type="text" class="form-control" name="id" placeholder="ระบุ">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">ชื่อสินค้า/Product Name (TH) <span>*</span></label>
                                                                    <input type="text" class="form-control" name="nameproductsth" placeholder="ระบุ">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">ชื่อสินค้า/Product Name (EN) <span>*</span></label>
                                                                    <input type="text" class="form-control" name="nameproductsen" placeholder="ระบุ">
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">ชื่อสินค้าที่ใช้ในการซื้อขายจริง</label>
                                                                    <input type="text" class="form-control" name="nameproducts" placeholder="ระบุ">
                                                                    <span>กรณีไม่ระบุจะนำชื่อสินค้าที่ระบบประมวลผลให้แสดงแทน</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="box__allimage">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <p class="txt__titlebox">รูปภาพสินค้า <span>*</span></p>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <button class="btn btn__scanqr"><i class="fa-solid fa-qrcode"></i> สแกน QR Code เพื่ออัปโหลดวีดีโอผ่านมือถือ</button>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="box__uploadimage">

                                                                    <div class="box__drop">
                                                                        <div class="row">
                                                                            <?php for ($i = 1; $i <= 3; $i++) { ?>
                                                                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                                                                    <a href="javascript:void(0)" class="btn__trash">
                                                                                        <img src="{{asset('assets/img/img-null.png')}}" class="img-fluid" alt="">
                                                                                        <i class="fa-solid fa-trash-can"></i> ลบ
                                                                                    </a>
                                                                                </div>
                                                                            <?php } ?>

                                                                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                                                                <div class="drop-zone">
                                                                                    <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"></i>
                                                                                        <p> แนบรูปภาพ .Jpeg</p>
                                                                                        <div class="tt-img-detail">
                                                                                            <p> สูงสุดไม่เกิน 5 ภาพขนาดไม่เกิน 5 Mb.</p>
                                                                                        </div>
                                                                                    </span>
                                                                                    <input type="file" name="myFile" class="drop-zone__input">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="box__statusoptions">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="box__grade">
                                                                    <p class="txt__titlebox">เกรด <span>*</span></p>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="grade1">
                                                                        <label class="form-check-label" for="grade1">
                                                                            แท้/Genuine
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="grade2">
                                                                        <label class="form-check-label" for="grade2">
                                                                            OEM
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="box__status">
                                                                    <p class="txt__titlebox">สภาพ <span>*</span></p>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="status1">
                                                                        <label class="form-check-label" for="status1">
                                                                            มือสอง
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="status2">
                                                                        <label class="form-check-label" for="status2">
                                                                            ใหม่
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="box__input2">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">ผู้ผลิตชิ้นส่วน/Maker</label>
                                                                    <input type="text" class="form-control" name="maker" placeholder="ระบุ">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">Genuine PARTS NO./SKU CODE</label>
                                                                    <input type="text" class="form-control" name="partno" placeholder="ระบุ">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">คุณภาพสินค้า <span>*</span></label>
                                                                    <input type="text" class="form-control" name="partno" placeholder="ระบุ">
                                                                </div>
                                                            </div>



                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">คุณภาพสินค้า <span>*</span></label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>ดีมาก/Excellent (80~100%)</option>
                                                                        <option value="1">ดีมาก/Excellent (80~100%)</option>
                                                                        <option value="2">ดี/Good (70~79%)</option>
                                                                        <option value="3">ใช้ได้/Fair (60~69%)</option>
                                                                        <option value="4">พอใช้/Poor (50~59%)</option>
                                                                        <option value="5">นำไปซ่อมใช้ได้/repairable(< 50%) </option>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">รหัสสินค้าภายในร้าน/Shop Original Code.</label>
                                                                    <input type="text" class="form-control" name="originalcode" placeholder="ระบุ">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">VIN Code</label>
                                                                    <input type="text" class="form-control" name="vincode" placeholder="ระบุ">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">Full Model Code</label>
                                                                    <input type="text" class="form-control" name="fullmodelcode" placeholder="ระบุ">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">Engine Model Code</label>
                                                                    <input type="text" class="form-control" name="enginemodelcode" placeholder="ระบุ">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">สีภายใน/Trim</label>
                                                                    <input type="text" class="form-control" name="trim" placeholder="ระบุ">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">สีภายนอก/Color</label>
                                                                    <input type="text" class="form-control" name="colors" placeholder="ระบุ">
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>


                                                    <!--  -->
                                                </div>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contentgaruntee<?php echo $o; ?>" aria-expanded="false" aria-controls="contentgaruntee<?php echo $o; ?>">
                                        <p class="txt__title">การรับประกัน</p>
                                    </button>
                                </h2>
                                <div id="contentgaruntee<?php echo $o; ?>" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#acctab<?php echo $o; ?>">
                                    <div class="accordion-body">
                                        <div class="box__guarantee">
                                            <div class="form-group">
                                                <label for="">การรับประกัน <span>*</span></label>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="yesguarantee">
                                                    <label class="form-check-label" for="yesguarantee">
                                                        มี
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="nogurantee">
                                                    <label class="form-check-label" for="nogurantee">
                                                        ไม่มี
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="ระบุ">
                                                    <button class="btn btn__garuntee dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">เดือน</button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">วัน</a></li>
                                                        <li><a class="dropdown-item" href="#">เดือน</a></li>
                                                        <li><a class="dropdown-item" href="#">ปี</a></li>
                                                    </ul>
                                                </div>
                                                <span>ระยะเวลารับประกันสินค้าต้องเป็นไปตามประเภทของชิ้นส่วน</span>
                                            </div>


                                            <div class="form-conditions">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <p class="txt__title">เงื่อนไขการรับประกัน/รายละเอียดเกี่ยวกับสินค้าและคุณภาพเพิ่มเติม(ถ้ามี)</p>
                                                        <p class="txt__small"> เช่น รอย,การเกิดสนิม,การแตกหัก,ชิ้นส่วนประกอบไม่ครบ,อะไหล่บิ้วต์ หรือ ข้อมูลอื่นๆ</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p class="txt__number">0/800</p>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="box__text">
                                                            <textarea name="detailgurantee" placeholder="ระบุ" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contenttransport<?php echo $o; ?>" aria-expanded="false" aria-controls="contenttransport<?php echo $o; ?>">
                                        <p class="txt__title">ข้อมูลสำหรับการขนส่ง</p>

                                    </button>
                                </h2>
                                <div id="contenttransport<?php echo $o; ?>" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#acctab<?php echo $o; ?>">
                                    <div class="accordion-body">
                                        <div class="box__transportation">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="txt__title">ข้อมูลสำหรับการขนส่ง</p>

                                                    <div class="box__weight">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                                                <p class="txt__label">น้ำหนักสินค้า</p>
                                                            </div>

                                                            <div class="col-xl-10 col-lg-10 col-md-10 col-12">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control">
                                                                    <button class="btn btn__weight dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">KG</button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">KG</a></li>
                                                                        <li><a class="dropdown-item" href="#">KG</a></li>
                                                                        <li><a class="dropdown-item" href="#">KG</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="box__size">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                                                <p class="txt__label">ขนาดของสินค้า</p>
                                                            </div>

                                                            <div class="col-xl-10 col-lg-10 col-md-10 col-12">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="width" placeholder="กว้าง">
                                                                    <input type="text" class="form-control" name="long" placeholder="ยาว">
                                                                    <input type="text" class="form-control" name="height" placeholder="สูง">
                                                                    <span>หน่วย</span>
                                                                    <button class="btn btn__unit dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">CM</button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#">CM</a></li>
                                                                        <li><a class="dropdown-item" href="#">CM</a></li>
                                                                        <li><a class="dropdown-item" href="#">CM</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="box__transport">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                                                <p class="txt__label">การขนส่ง</p>
                                                            </div>
                                                            <div class="col-xl-10 col-lg-10 col-md-10 col-12">

                                                                <?php
                                                                $title = array(
                                                                    '1' => 'การจัดส่งที่รองรับโดยCPN',
                                                                    '2' => 'บริษัทขนส่งเอกชน(พัสดุชิ้นใหญ่)',
                                                                    '3' => 'แสดง ชื่อขนส่งที่ Supplier setting ไว้',
                                                                );
                                                                for ($i = 1; $i <= 3; $i++) {
                                                                ?>

                                                                    <div class="accordion" id="accordionExample">
                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header" id="headingOne">
                                                                                <button class="accordion-button  <?php if ($i != 1) {
                                                                                                                        echo 'collapsed';
                                                                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#acco-tab<?php echo $i; ?>" aria-expanded="true" aria-controls="acco-tab<?php echo $i; ?>">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                                            <?php echo $title[$i]; ?>
                                                                                        </label>
                                                                                    </div>
                                                                                </button>
                                                                            </h2>
                                                                            <div id="acco-tab<?php echo $i; ?>" class="accordion-collapse collapse <?php if ($i == 1) {
                                                                                                                                                        echo 'show';
                                                                                                                                                    } ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body">
                                                                                    <div class="box__type">
                                                                                        <div class="row">
                                                                                            <?php for ($z = 1; $z <= 3; $z++) { ?>
                                                                                                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                                                                    <p class="txt__type">ประเภทการจัดส่ง <span class="label__success">การจัดส่งที่รองรับโดย CPN</span></p>
                                                                                                </div>
                                                                                                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                                                                    <div class="itemstype">
                                                                                                        <p class="txt__price">฿ 29.00
                                                                                                            <?php if ($i != 1) { ?>
                                                                                                                <a href="javascript:void(0)"><i class="fa-solid fa-pencil"></i></a>
                                                                                                            <?php } ?>
                                                                                                        </p>
                                                                                                        <div class="form-check form-switch">
                                                                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
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


                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--  -->

                                                    <div class="box__settransport">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                                                <p class="txt__label">การเตรียมการส่ง</p>
                                                            </div>

                                                            <div class="col-xl-10 col-lg-10 col-md-10 col-12">
                                                                <div class="wrapper__checkbox">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            พร้อมส่ง
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            เตรียมการส่งนานกว่าปกติ
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <span class="label__setdate">ระบุวัน</span>
                                                                        <select class="form-select" aria-label="Default select example">
                                                                            <option selected>1</option>
                                                                            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>

                                                                    <span class="txt__red">**กำหนดระยะเวลาตรวจสอบสินค้าระหว่างการจัดส่ง ภายใน 3 วัน หลังจากวันที่ได้รับสินค้า**</span>
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

                            <div class="accordion-item  box__priceitems">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contentprice<?php echo $o; ?>" aria-expanded="false" aria-controls="contentprice<?php echo $o; ?>">
                                        <p class="txt__title">ราคา</p>

                                    </button>
                                </h2>
                                <div id="contentprice<?php echo $o; ?>" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="box__price">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                                    <div class="box__itemsprice">
                                                        <p class="txt__title">ราคา</p>

                                                        <div class="form-group">
                                                            <label for="">ราคา <span>(รวม VAT)</span></label>
                                                            <input type="text" class="form-control" name="price" placeholder="ระบุ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-6 col-md-6 col-12">
                                                    <div class="box__itemstotal">
                                                        <p class="txt__title">ประมาณการรายรับสุทธิของสินค้าชิ้นนี้</p>

                                                        <div class="wrapper__form">
                                                            <div class="form-group">
                                                                <label for="">คอมมิชชั่น </label>
                                                                <input type="text" class="form-control" name="commission" placeholder="ระบุ">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">รายรับสุทธิ </label>
                                                                <input type="text" class="form-control" name="income" placeholder="ระบุ">
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

                    </form>
                    <hr />
                <?php } ?>

            </div>
        </div>
    </div>
</div>

<!-- End Modal -->
@stop

@section('script')
<script>
    const limitsize = 5;
</script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="{{asset('assets/js/dropzone.js')}}"></script>
<script>
    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;


    $(".next").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        next_fs.show();
        const attr__value = next_fs.attr('attr-id');
        // alert(attr__value);
        if (attr__value == 1) {
            $('.txt__titlestep').addClass('d-none');
            $('.step1').removeClass('d-none');
            $('.txt__brands').html('แบรนด์');
            $('.step2').removeClass('d-none');
            $('.txt__series').html('รุ่น');
        } else if (attr__value == 2) {
            $('.step3').removeClass('d-none');
            $('.txt__subseries').html('รุ่นย่อย');
        } else if (attr__value == 3) {
            $('.step4').removeClass('d-none');
            $('.txt__years').html('ปี');
        } else if (attr__value == 4) {
            $('.step5').removeClass('d-none');
            $('.txt__cat').html('หมวดหมู่');
        }

        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        previous_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 0.8 + (1 - now) * 0.2;
                left = ((1 - now) * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function() {
        return false;
    })
</script>
@stop