<div class="box__productintro">
    <div class="row">
        <div class="col-6">
            <div class="h-promo-text">
                <p> สินค้าจากแบรนด์เดียวกัน </p>
            </div>
        </div>
    </div>
    <div class="row" data-sectionname="brand-home">
        <div class="col-12 carousel-brandhomepage"
            data-slick='{"slidesToShow":4, "slidesToScroll": 1,  "rows":1, "autoplay": true, "arrows": true, "dots": false, "autoplaySpeed": 3000}'>
            @foreach($products_brand as $key => $productbrand)
                @php 
                    $link_product_name = $productbrand->name_th;
                    $link_id = $productbrand->id;
                    $link_price = $productbrand->price;
                @endphp
                @include('buyer.product.box_preproduct')
            @endforeach
        </div>
    </div>
</div>

<div class="box__productintro">
    <div class="row">
        <div class="col-6">
            <div class="h-promo-text">
                <p> สินค้าใกล้เคียง </p>
            </div>
        </div>
    </div>
    <div class="row" data-sectionname="brand-home">
        <div class="col-12 carousel-brandhomepage"
            data-slick='{"slidesToShow":4, "slidesToScroll": 1,  "rows":1, "autoplay": true, "arrows": true, "dots": false, "autoplaySpeed": 3000}'>
            @foreach($products_subSubCategory as $key => $productsubSubCategory)
                @php 
                    $link_product_name = $productsubSubCategory->name_th;
                    $link_id = $productsubSubCategory->id;
                    $link_price = $productsubSubCategory->price;
                @endphp
                @include('buyer.product.box_preproduct')
            @endforeach
        </div>
    </div>
</div>

@if(isset($product_bookmark))
<div class="box__productintro">
    <div class="row">
        <div class="col-6">
            <div class="h-promo-text">
                <p> สินค้าที่ท่านอาจสนใจ </p>
            </div>
        </div>
    </div>
    <div class="row" data-sectionname="brand-home">
        <div class="col-12 carousel-brandhomepage"
            data-slick='{"slidesToShow":4, "slidesToScroll": 1,  "rows":1, "autoplay": true, "arrows": true, "dots": false, "autoplaySpeed": 3000}'>
            @foreach($product_bookmark as $key => $productbookmark)
                @php 
                    $link_product_name = $productbookmark->product->name_th;
                    $link_id = $productbookmark->product->id;
                    $link_price = $productbookmark->product->price;
                @endphp
                @include('buyer.product.box_preproduct')
            @endforeach
        </div>
    </div>
    <!-- <div class="row" data-sectionname="brand-home">
        <div class="col-12 carousel-brandhomepage"
            data-slick='{"slidesToShow":4, "slidesToScroll": 1,  "rows":1, "autoplay": true, "arrows": true, "dots": false, "autoplaySpeed": 3000}'>
            <?php // for ($i = 1; $i <= 5; $i++) { ?>
            <div class="col-xl-3 col-lg-6 col-6">
                <a href="javascript:void(0)">
                    <div class="box__itemssproductintro">
                        <div class="box__image">
                            <img src="assets/img/home/product-intro<?php echo $i; ?>.png"
                                class="img-fluid" alt="">

                            <div class="box__status">
                                <p>Promotion</p>
                            </div>

                            <div class="box__grade">
                                <p>Grade</p>
                            </div>
                        </div>

                        <div class="box__content">
                            <h5 class="intro__title">กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80
                                ,
                                AE90 ,
                                AE101
                                16V
                            </h5>
                            <p class="intro__serial">รหัส: 90915-YZZE1 - TOYOTA </p>
                            <p class="intro__price">฿ <span>72.00</span> /ชิ้น</p>
                        </div>
                    </div>
                </a>
            </div>
            <?php // } ?>
        </div>
    </div> -->
</div>
@endif