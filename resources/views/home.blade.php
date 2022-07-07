@extends('template')

@section('content')
@include('inc_slide')
<section id="section-home">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box__hot">
                    <h3>หมวดหมู่ยอดนิยม</h3>

                    <div class="row" data-sectionname="hot-homepageslide">
                        <div class="col-12 carousel-hothomepage" data-slick='{"slidesToShow":4, "slidesToScroll": 1,  "rows":1, "autoplay": true, "arrows": true, "dots": false, "autoplaySpeed": 3000}'>
                            <?php for ($i = 0; $i <= 10; $i++) { ?>
                                <div class="box__itemshot">
                                    <img src="assets/img/home/hotitems.png" class="img-fluid" alt="">
                                    <p class="name__hot">หมวดหมู่</p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!--  -->
                <div class="box__brands">
                    <h3>แบรนด์</h3>

                    <div class="row" data-sectionname="brand-home">
                        <div class="col-12 carousel-brandhomepage" data-slick='{"slidesToShow":5, "slidesToScroll": 1,  "rows":1, "autoplay": true, "arrows": true, "dots": false, "autoplaySpeed": 3000}'>
                            <?php for ($i = 1; $i <= 7; $i++) { ?>
                                <a href="javascript:void(0)">
                                    <div class="box__itemsbrand">
                                        <img src="assets/img/home/brands<?php echo $i; ?>.png" class="img-fluid" alt="">
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!--  -->

                <!-- Promotion -->
                <div class="box__promotion">
                    <div class="row">
                        <div class="col-6">
                            <h3>โปรโมชั่น</h3>
                        </div>
                        <div class="col-6">
                            <div class="box__btn">
                                <a href="javascript:void(0)" class="btn btn__viewall"> ดูทั้งหมด <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="rev_slider">

                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                            <div class="rev_slide">
                                <img src="assets/img/home/promotion-image.png" class="img-fluid" alt="">
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <!-- End Promotion -->

                <!--  -->
                <div class="box__coupon">
                    <div class="row">
                        <div class="col-6">
                            <h3>คูปองส่วนลด</h3>
                        </div>
                        <div class="col-6">
                            <div class="box__btn">
                                <a href="javascript:void(0)" class="btn btn__viewall"> ดูทั้งหมด <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="box__allcoupon">
                        <div class="row">
                            <?php for ($i = 1; $i <= 3; $i++) { ?>
                                <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                                    <div class="box__itemscoupon">
                                        <p class="coupon__title">ส่วนลด 10%</p>
                                        <p class="coupon__deail">เมื่อซื้ออะไหล่ในกลุ่มสินค้าของ Aston Martin</p>
                                        <p class="coupon__date"><img src="assets/img/icon/icon-time.svg" class="img-fluid" alt=""> ใช้ได้ถึง 3 เม.ย. 2564</p>
                                        <div class="box__btn">
                                            <button class="btn btn__save">เก็บคูปอง</button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!--  -->

                <!-- Product Intro -->
                <div class="box__productintro">
                    <div class="row">
                        <div class="col-6">
                            <h3>สินค้าแนะนำ</h3>
                        </div>
                        <div class="col-6">
                            <div class="box__btn">
                                <a href="javascript:void(0)" class="btn btn__viewall"> ดูทั้งหมด <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php for ($i = 1; $i <= 8; $i++) { ?>
                            <div class="col-xl-3 col-lg-6 col-6">
                                <a href="javascript:void(0)">
                                    <div class="box__itemssproductintro">
                                        <div class="box__image">
                                            <img src="assets/img/home/product-intro<?php echo $i; ?>.png" class="img-fluid" alt="">

                                            <div class="box__status">
                                                <p>Promotion</p>
                                            </div>

                                            <div class="box__grade">
                                                <p>Grade</p>
                                            </div>
                                        </div>

                                        <div class="box__content">
                                            <h5 class="intro__title">กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</h5>
                                            <p class="intro__serial">รหัส: 90915-YZZE1 - TOYOTA </p>
                                            <p class="intro__price">฿ <span>72.00</span> /ชิ้น</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!--  -->

                <!-- Note -->
                <div class="box__notehomepage">
                    <div class="row">
                        <div class="col-6">
                            <h3>บทความ</h3>
                        </div>
                        <div class="col-6">
                            <div class="box__btn">
                                <a href="javascript:void(0)" class="btn btn__viewall"> ดูทั้งหมด <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <?php for ($i = 1; $i <= 3; $i++) { ?>
                            <div class="col-xl-4 col-lg-6 col-6">
                                <a href="{{url('articles-content')}}">
                                    <div class="box__itemsnote">
                                        <div class="box__image">
                                            <img src="assets/img/home/img-note.png" class="img-fluid" alt="">
                                        </div>

                                        <div class="box__content">
                                            <p class="content__title">Lorem Ipsum is simply dummy text of the
                                                printing and typesetting industry</p>

                                            <div class="group__flex">
                                                <div class="box__time">
                                                    <p> <img src="assets/img/icon/icon-timegray.svg" class="img-fluid" alt=""> 11 พ.ค. 2565</p>
                                                </div>

                                                <div class="box__btn">
                                                    <p class="btn btn__readmore">อ่านต่อ <i class="fa-solid fa-chevron-right"></i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- End Note -->
            </div>
        </div>
    </div>
</section>
@stop

@section('script')
<script>

</script>
@stop
