@extends('template')

@section('content')
<section id="promotion">
    <?php for ($box = 1; $box <= 3; $box++) { ?>
        <div class="group-promotion">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box__bannerpromotion">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php for ($banner = 1; $banner <= 3; $banner++) { ?>
                                        <div class="carousel-item <?php if ($banner == 1) {
                                                                        echo 'active';
                                                                    } ?>">
                                            <img src="assets/img/promotion/banner.png" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2>First slide label</h2>
                                                <p>Some representative placeholder content for the first slide.</p>
                                            </div>

                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>


                        <div class="box__productinbrands">
                            <div class="box__title">
                                <h2 class="text__title">สินค้าจากแบรนด์เดียวกัน</h2>
                            </div>
                            <div class="box__items" data-sectionname="promotion-page">
                                <div class="row carousel-promotion" data-slick='{"slidesToShow":4, "slidesToScroll": 1,  "rows":1, "autoplay": true, "arrows": true, "dots": false, "autoplaySpeed": 3000}'>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>
@stop

@section('script')
<script>

</script>
@stop