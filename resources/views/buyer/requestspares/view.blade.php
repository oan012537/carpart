@extends('buyer.layouts.template')

@section('content')
<section id="detail-request">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__title">
                    <p class="text__title">ใบคำขอหาอะไหล่</p>
                </div>
            </div>
        </div>

        <div class="box__detailrequest">
            <div class="row">
                <div class="col-lg-6">
                    <p class="detail__request">หมายเลขคำขอหาอะไหล่ : KT000000</p>
                </div>
                <div class="col-lg-6">
                    <p class="detail__date">วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                </div>
            </div>
        </div>


        <div class="box__detailall">
            <div class="box__detail">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="txt__title">ชื่อสินค้า</p>
                    </div>
                    <div class="col-lg-8">
                        <p class="txt__detail">ยาง B Quick</p>
                    </div>
                </div>
            </div>

            <div class="box__detail">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="txt__title">หมวดหมู่</p>
                    </div>
                    <div class="col-lg-8">
                        <p class="txt__detail">
                            <span>ยางรถยนต์</span> >
                            <span>หมวดหมู่ย่อย</span> >
                            <span> หมวดหมุ่ย่อย</span>
                        </p>
                    </div>
                </div>
            </div>


            <div class="box__detail">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="txt__title">แบรนด์</p>
                    </div>
                    <div class="col-lg-8">
                        <p class="txt__detail"> Hyundai </p>
                    </div>
                </div>
            </div>

            <div class="box__detail">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="txt__title">รุ่น</p>
                    </div>
                    <div class="col-lg-8">
                        <p class="txt__detail"> รุ่น > รุ่นย่อย </p>
                    </div>
                </div>
            </div>

            <div class="box__detail">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="txt__title">ปี</p>
                    </div>
                    <div class="col-lg-8">
                        <p class="txt__detail"> 2021 </p>
                    </div>
                </div>
            </div>


            <div class="box__detail">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="txt__title">ภาพอะไหล่สินค้า (เพิ่มเติม)</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="wrapper__image">
                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                <div class="box__image">
                                    <img src="{{asset('assets/img/createrequest/imagenull-2.png')}}" class="img-fluid" alt="">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="box__detail">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="txt__title">หมายเลขประจำรถยนต์ Caution No.</p>
                    </div>
                    <div class="col-lg-8">
                        <p class="txt__detail"> 1324567890123 </p>
                    </div>
                </div>
            </div>

            <div class="box__detail">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="txt__title">VIN Code</p>
                    </div>
                    <div class="col-lg-8">
                        <p class="txt__detail"> 1324567890123 </p>
                    </div>
                </div>
            </div>


            <div class="box__detail">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="txt__title">รูปภาพหมายเลขประจำรถยนต์</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="wrapper__image">
                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                <div class="box__image">
                                    <img src="{{asset('assets/img/createrequest/imagenull-2.png')}}" class="img-fluid" alt="">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="box__detail">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="txt__title">ต้องการวีดีโอเพิ่มเติมหรือไม่</p>
                    </div>
                    <div class="col-lg-8">
                        <p class="txt__detail"> ต้องการ </p>
                    </div>
                </div>
            </div>

            <div class="box__detail">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="txt__title">ต้องการใบกำกับภาษีหรือไม่</p>
                    </div>
                    <div class="col-lg-8">
                        <p class="txt__detail"> ต้องการ </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="box__productother">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box__title">
                        <div class="text__title2">สินค้าที่ตรงกับใบคำขอ 10 รายการ</div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                        <div class="box__product">
                            <div class="box__heading">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="box__model">
                                            <img src="{{asset('assets/img/icon/smile.svg')}}" class="img-fluid" alt="">
                                            <p class="txt__model">ตรงรุ่น</p>
                                            <p class="txt__idshop">Shop ID: ASdsadjlksjSS</p>
                                            <p class="txt__verify"> <img src="{{asset('assets/img/icon/check.svg')}}" class="img-fluid" alt=""> ร้านค้าที่ผ่านการรับรอง</p>

                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="box__date">
                                            <p> วันที่ส่งข้อเสนอ dd/mm/yyyy hh:mm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box__content">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="box__image">
                                            <img src="{{asset('assets/img/createrequest/imagenull-2.png')}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="box__content">
                                            <p class="title__product">กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                            <p class="number__product">รหัสสินค้า 1234 </p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="box__detailprice">
                                            <div class="box__price">
                                                <p>299 ฿</p>
                                            </div>

                                            <div class="box__btn">
                                                <a href="{{route('buyer.requestspares.details')}}" class="btn btn__view">ดูรายละเอียด</a>
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

        <div class="box__paginate">
            <nav aria-label="Page navigation example">
                <ul class="pagination">

                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i> ย้อนกลับ</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">ถัดไป <i class="fa-solid fa-chevron-right"></i> </a></li>
                </ul>
            </nav>
        </div>

        <!--  -->
    </div>
</section>
@stop

@section('script')
<script>

</script>
<script>
    $('#tab').on('click', 'a', function(e) {
        dataId = $(this).data('id');
        $("[id$='-tab']").hide();
        $('#' + dataId + '-tab').show();
        e.preventDefault();
    })
</script>
@stop