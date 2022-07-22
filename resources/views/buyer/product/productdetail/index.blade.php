@extends('buyer.layouts.template')

<link href="{{ asset('assets/css/product-detail.css') }}" rel="stylesheet">

@section('content')
    <section id="sec-product-de1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box__nav" style="width:100%;">
                        <div class="nav">
                            <span>
                                <a href="{{ url('/') }}"> หน้าหลัก </a>
                                &nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;
                                <a href="javascript:void(0)"> {{ $product->category->name_th }} </a>
                                &nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;
                                <a href="articles.php"> {{ $product->brand->name_th }} </a>
                                &nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;
                                <a href="javascript:void(0)"> {{ $product->subCategory->name_th }} </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-imgs">
                        <div class="img-display">
                            <div class="img-showcase"> 
                                @foreach($product->productImages as $productimage)
                                    @php 
                                        $proimage = "";
                                        $proimage = "assets/img/prodetail/".$productimage->image ; 
                                    @endphp
                                    <img src="{{ asset($proimage) }}" class="img-fluid" alt="{{ $product->name_th }}">
                                @endforeach
                            </div>
                        </div>
                        <div class="img-select">
                            
                            @foreach($product->productImages as $key => $productimage)
                                @php 
                                    $proimage = "";
                                    $proimage = "assets/img/prodetail/".$productimage->image ; 
                                @endphp
                                <div class="img-item">
                                    <a href="#" data-id="{{ ++$key }}">
                                        <img src="{{ asset($proimage) }}" class="img-fluid" alt="{{ $product->name_th }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="product-content">
                        <p class="product-title"> {{ $product->name_th }} </p>
                        <div class="pro-detail-pro">
                            <p>
                                {{ $product->subtitle_th }}
                            </p>
                        </div>

                        {{-- 
                        <!-- <div class="pro-text-id" >
                            <p> Shop ID: ASdsadjlksjS<br></p>
                            <div class="img-lo-icon">
                                <img src="{{ asset('assets/img/prodetail/lo1.png') }}" class="img-fluid" alt="shoe image">
                            </div>
                            <div class="d-text-deatil-t">
                                <p>
                                    นิติบุคคล
                                </p>
                            </div>
                        </div> -->
                        --}}

                        <div style="margin-top:50px; margin-left:-150px;">
                            <div class="img-lo-icon">
                                <img src="{{ asset('assets/img/prodetail/lo1.png') }}" class="img-fluid" alt="shoe image">
                            </div>
                            <div class="d-text-deatil-t">
                                <p>
                                    นิติบุคคล
                                </p>
                            </div>
                        </div>

                        <div class="product-rating">
                            <!-- <span> 4.8 </span> -->
                            <span> {{ number_format($review_score_average,1) }} </span>
                            &nbsp;
                            @php 
                                $review_score_average = number_format($review_score_average,1);
                                list($num, $frac) = explode('.', $review_score_average);
                                $fracPre = substr($frac, 0, 1);
                            @endphp
                            <?php
                                for($i=0; $i<$num; $i++){
                            ?>
                                <i class="fas fa-star"></i>
                            <?php
                                }
                            ?>
                            @if($fracPre > 0)
                                <i class="fas fa-star-half-alt"></i>
                            @endif
                        </div>

                        <div class="text-persen-t">
                            <p>
                                <span> อัตราการตอบกลับ : </span> &nbsp;&nbsp; 95%
                            </p>
                        </div>
                        <hr class="new1">
                        <div class="product-price">
                            <p class="last-price"> <span> ฿ {{ number_format($product->price,2) }} </span> &nbsp;&nbsp; ฿ {{ number_format($product->price,2) }} <font> / ตัว </font>
                            </p>
                        </div>

                        <div class="product-detail">
                            <p> <span> สถานะ : </span> &nbsp;&nbsp; <!--พร้อมส่ง--> {{ (is_null($product->status_code) ? '-' : $product->status_code) }}</p>
                            <p> <span> แบรนด์ : </span> &nbsp;&nbsp; {{ (is_null($product->brand->name_th) ? '-' : $product->brand->name_th) }} </p>
                            <p> <span> สภาพสินค้า : </span> &nbsp;&nbsp; {{ (is_null($product->grade) ? '-' : $product->grade) }}</p>
                        </div>
                        <div class='but-bb-log'>
                            <button class="button button1"> สั่งซื้อสินค้า </button>
                            <button class="button button2"> <i class='far fa-comment-dots' style='font-size:20px'></i>
                                แชท </button>
                        </div>

                        <div class="purchase-info">
                            <button type="button" class="btn btn_bookmark" rel="{{ $product->id }}"> <i class="fa fa-heart" style="font-size:18px"></i>
                            </button>
                            <div class="text-t-into">
                                @php 
                                    if(!is_null($product_bookmark_check)){
                                        $text_text_bookmark = "ยกเลิก สนใจสินค้าตัวนี้";
                                    }else{
                                        $text_text_bookmark = "สนใจสินค้าตัวนี้";
                                    }
                                @endphp
                                <p id="text_bookmark"> {{ $text_text_bookmark }} </p>
                            </div>
                        </div>
                        <div class="social-links">
                            <p>แชร์ : </p>
                            &nbsp;
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-line"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-share-nodes"></i>
                            </a>
                            &nbsp;
                            <font> คัดลอกลิงค์ </font>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="sec-tab-detail">
        <div class="container">
            <div class="tabs">
                <input type="radio" name="tabs" id="tabone" checked="checked">
                <label for="tabone"> <i class="fa fa-list" style="font-size:16px"></i> รายละเอียดผลิตภัณฑ์ </label>
                <div class="tab">
                    <div class="h-text-tab">
                        <p>รายละเอียดผลิตภัณฑ์ </p>
                    </div>
                    <div class="detail-text-tab">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="tt-detail-tt">
                                    <p>
                                        แบรนด์
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt2">
                                    <p>
                                        {{ (is_null($product->brand->name_th) ? '-' : $product->brand->name_th) }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt3">
                                    <p>
                                        หมวดหลัก/หมวดย่อย
                                    </p>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt4">
                                    <p>
                                        <!-- หมวดหลัก/หมวดย่อย -->
                                        {{ (is_null($product->category->name_th) ? '-' : $product->category->name_th) }} / 
                                        {{ (is_null($product->subCategory->name_th) ? '-' : $product->subCategory->name_th) }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="tt-detail-tt">
                                    <p>
                                        คุณภาพสินค้า
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt2">
                                    <p>
                                        <!-- มือสอง - ดีมาก/Excellent (80-100%) -->
                                        {{ (is_null($product->product_type) ? '-' : $product->product_type) }} / 
                                        {{ (is_null($product->quality) ? '-' : $product->quality) }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt3">
                                    <p>
                                        เกรด
                                    </p>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt4">
                                    <p>
                                        <!-- แท้ -->
                                        {{ (is_null($product->grade) ? '-' : $product->grade) }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="tt-detail-tt">
                                    <p>
                                        Full Modal Code
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt2">
                                    <p>
                                        {{ (is_null($product->full_model_code) ? '-' : $product->full_model_code) }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt3">
                                    <p>
                                        Genuine PARTS NO./SKU CODE
                                    </p>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt4">
                                    <p>
                                        <!-- 123456-123242 -->
                                        {{ (is_null($product->sku_code) ? '-' : $product->sku_code) }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="tt-detail-tt">
                                    <p>
                                        ผู้ผลิตชิ้นส่วน/Maker
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt2">
                                    <p>
                                        <!-- 16 ชิ้น -->
                                        {{ (is_null($product->maker) ? '-' : $product->maker) }} ชิ้น
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt3">
                                    <p>
                                        Engine Model Code
                                    </p>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt4">
                                    <p>
                                        <!-- 16 ชิ้น -->
                                        {{ (is_null($product->engine_model_code) ? '-' : $product->engine_model_code) }} ชิ้น
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="tt-detail-tt">
                                    <p>
                                        รหัสสินค้าภายในร้าน/Shop Original Code
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt2">
                                    <p>
                                        {{ (is_null($product->shop_original_code) ? '-' : $product->shop_original_code) }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt3">
                                    <p>
                                        VIN Code
                                    </p>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt4">
                                    <p>
                                        <!-- สมุทรปราการ -->
                                        {{ (is_null($product->vin_code) ? '-' : $product->vin_code) }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="tt-detail-tt">
                                    <p>
                                        ขนาด
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt2">
                                    <p>
                                        <!-- กว้าง x ยาว x สูง :  -->
                                        @if(!is_null($product->transportation))
                                            {{ $product->transportation->width }} x 
                                            {{ $product->transportation->length }} x 
                                            {{ $product->transportation->height }} 
                                            {{ $product->transportation->uom }}
                                        @else
                                            -
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt3">
                                    <p>
                                        น้ำหนัก 
                                    </p>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt4">
                                    <p>
                                        <!-- 10 กิโลกรัม  -->
                                        @if(!is_null($product->transportation))
                                            {{ $product->transportation->weight }}
                                            {{ $product->transportation->unit }}
                                        @else
                                            -
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="tt-detail-tt">
                                    <p>
                                        สีภายใน/Trim
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt2">
                                    <p>
                                        <!-- สีขาว -->
                                        {{ (is_null($product->trim) ? '-' : $product->trim) }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt3">
                                    <p>
                                        สีภายนอก/Color
                                    </p>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt4">
                                    <p>
                                        <!-- สีดำ -->
                                        {{ (is_null($product->color) ? '-' : $product->color) }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="tt-detail-tt">
                                    <p>
                                        <!-- ส่งจาก -->
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt2">
                                    <p>
                                        {{-- (is_null($product->supplier) ? '-' : $product->supplier->Province->name_th) --}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt3">
                                    <p>
                                        สถานะสินค้า
                                    </p>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt4">
                                    <p>
                                        {{ (is_null($product->status_code) ? '-' : $product->status_code) }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="tt-detail-tt">
                                    <p> </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt2">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt3">
                                    <p>
                                        ประกัน
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tt-detail-tt4">
                                    <p>
                                        @if(!is_null($product->warranty))
                                            {{ $product->warranty->duration }} {{ $product->warranty->year_month_day }}
                                        @else
                                            -
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="detail-detail-text">
                        <div class="h-detail-text">
                            <p>
                                รายละเอียดเกี่ยวกับสินค้า/เงื่อนไขประกันสินค้า/คุณภาพเพิ่มเติม
                            </p>
                        </div>
                        <div class="d-detail-text">
                            <p>
                                {{ (is_null($product->term_and_condition) ? '-' : $product->term_and_condition) }}
                            </p>
                        </div>
                    </div>

                    @include('buyer.product.productdetail.group_box_preproduct')
                    

                </div>

                <input type="radio" name="tabs" id="tabtwo">
                <label for="tabtwo"> <i class="fa fa-star-o" style="font-size:16px"></i> รีวิวจากผู้ซื้อ </label>
                <div class="tab">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="h-review-detail">
                                <p>
                                    <!-- 4.9 เต็ม 5 -->
                                    {{ number_format($review_score_average,1) }} เต็ม 5
                                </p>
                                <div class="icon-rwview-detail">
                                    @php 
                                        $review_score_average = number_format($review_score_average,1);
                                        list($num, $frac) = explode('.', $review_score_average);
                                        $fracPre = substr($frac, 0, 1);
                                    @endphp
                                    <?php
                                        for($i=0; $i<$num; $i++){
                                    ?>
                                        <i class="fas fa-star"></i>
                                    <?php
                                        }
                                    ?>
                                    @if($fracPre > 0)
                                        <i class="fas fa-star-half-alt"></i>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="w3-bar">
                                <div class="but-but-review">
                                    <button class="w3-bar-item w3-button my-3" onclick="openCity('review1')"> ทั้งหมด
                                    </button>
                                    <button class="w3-bar-item w3-button my-3" onclick="openCity('review2')"> 5 ดาว ({{ $review_score_5_count }})
                                    </button>
                                    <button class="w3-bar-item w3-button my-3" onclick="openCity('review3')"> 4 ดาว ({{ $review_score_4_count }})
                                    </button>
                                    <button class="w3-bar-item w3-button my-3" onclick="openCity('review4')"> 3 ดาว ({{ $review_score_3_count }})
                                    </button>
                                    <button class="w3-bar-item w3-button my-3" onclick="openCity('review5')"> 2 ดาว ({{ $review_score_2_count }})
                                    </button>
                                    <div class="review-b-but">
                                        <button class="w3-bar-item w3-button" onclick="openCity('review6')"> ความคิดเห็น
                                            ({{ $review_score_all_count }})
                                        </button>
                                        <button class="w3-bar-item w3-button" onclick="openCity('review7')"> มีรูปภาพ
                                            (79)
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <br><br><br>
                        <div id="review1" class="w3-container w3-display-container city">
                            <div class="h-text-h-review">
                                <p> รีวิวจากผู้ซื้อ </p>
                            </div>
                            <hr class="new1">
                            @foreach($review_score_all as $key => $review)
                                @include('buyer.product.productdetail.review_lists')
                            @endforeach
                        </div>

                        <div id="review2" class="w3-container w3-display-container city" style="display:none">
                            <div class="h-text-h-review">
                                <p> รีวิวจากผู้ซื้อ (5 ดาว) </p>
                            </div>
                            <hr class="new1">
                            @foreach($review_score_5 as $key => $review)
                                @include('buyer.product.productdetail.review_lists')
                            @endforeach
                        </div>

                        <div id="review3" class="w3-container w3-display-container city" style="display:none">
                            <div class="h-text-h-review">
                                <p> รีวิวจากผู้ซื้อ (4 ดาว) </p>
                            </div>
                            <hr class="new1">
                            @foreach($review_score_4 as $key => $review)
                                @include('buyer.product.productdetail.review_lists')
                            @endforeach
                        </div>

                        <div id="review4" class="w3-container w3-display-container city" style="display:none">
                            <div class="h-text-h-review">
                                <p> รีวิวจากผู้ซื้อ (3 ดาว) </p>
                            </div>
                            <hr class="new1">
                            @foreach($review_score_3 as $key => $review)
                                @include('buyer.product.productdetail.review_lists')
                            @endforeach
                        </div>

                        <div id="review5" class="w3-container w3-display-container city" style="display:none">
                            <div class="h-text-h-review">
                                <p> รีวิวจากผู้ซื้อ (2 ดาว) </p>
                            </div>
                            <hr class="new1">
                            @foreach($review_score_2 as $key => $review)
                                @include('buyer.product.productdetail.review_lists')
                            @endforeach
                        </div>

                        <div id="review6" class="w3-container w3-display-container city" style="display:none">
                            <div class="h-text-h-review">
                                <p> รีวิวจากผู้ซื้อ (ความคิดเห็น) </p>
                            </div>
                            <hr class="new1">
                            <br>
                            <div class="icon-rwview-detail">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <br>
                            <div class="d-review-text">
                                <p> ID ลูกค้า : 01234567890 </p>
                                <p> dd/mm/yyyy hh:mm : ตัวเลือก 1-สภาพ 80% </p>
                                <p> อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก
                                    ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก
                                    อะไหล่สภาพดีมาก ตัวสินค้าดีมาก </p>
                                <br>
                                <img src="assets/img/prodetail/pr1.png" class="img-fluid" alt="shoe image"
                                    style="width: 10%;">
                            </div>
                            <br><br><br>
                            <div class="icon-rwview-detail">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <br>
                            <div class="d-review-text">
                                <p> ID ลูกค้า : 01234567890 </p>
                                <p> dd/mm/yyyy hh:mm : ตัวเลือก 1-สภาพ 80% </p>
                                <p> อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก
                                    ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก
                                    อะไหล่สภาพดีมาก ตัวสินค้าดีมาก </p>
                                <br>
                                <img src="assets/img/prodetail/pr1.png" class="img-fluid" alt="shoe image"
                                    style="width: 10%;">
                            </div>
                            <br><br><br>
                            <div class="icon-rwview-detail">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <br>
                            <div class="d-review-text">
                                <p> ID ลูกค้า : 01234567890 </p>
                                <p> dd/mm/yyyy hh:mm : ตัวเลือก 1-สภาพ 80% </p>
                                <p> อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก
                                    ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก
                                    อะไหล่สภาพดีมาก ตัวสินค้าดีมาก </p>
                                <br>
                                <img src="assets/img/prodetail/pr1.png" class="img-fluid" alt="shoe image"
                                    style="width: 10%;">
                            </div>
                        </div>

                        <div id="review7" class="w3-container w3-display-container city" style="display:none">
                            <div class="h-text-h-review">
                                <p> รีวิวจากผู้ซื้อ (รูปภาพ)</p>
                            </div>
                            <hr class="new1">
                            <br>
                            <div class="icon-rwview-detail">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <br>
                            <div class="d-review-text">
                                <p> ID ลูกค้า : 01234567890 </p>
                                <p> dd/mm/yyyy hh:mm : ตัวเลือก 1-สภาพ 80% </p>
                                <p> อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก
                                    ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก
                                    อะไหล่สภาพดีมาก ตัวสินค้าดีมาก </p>
                                <br>
                                <img src="assets/img/prodetail/pr1.png" class="img-fluid" alt="shoe image"
                                    style="width: 10%;">
                            </div>
                            <br><br><br>
                            <div class="icon-rwview-detail">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <br>
                            <div class="d-review-text">
                                <p> ID ลูกค้า : 01234567890 </p>
                                <p> dd/mm/yyyy hh:mm : ตัวเลือก 1-สภาพ 80% </p>
                                <p> อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก
                                    ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก
                                    อะไหล่สภาพดีมาก ตัวสินค้าดีมาก </p>
                                <br>
                                <img src="assets/img/prodetail/pr1.png" class="img-fluid" alt="shoe image"
                                    style="width: 10%;">
                            </div>
                            <br><br><br>
                            <div class="icon-rwview-detail">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <br>
                            <div class="d-review-text">
                                <p> ID ลูกค้า : 01234567890 </p>
                                <p> dd/mm/yyyy hh:mm : ตัวเลือก 1-สภาพ 80% </p>
                                <p> อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก
                                    ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก อะไหล่สภาพดีมาก ตัวสินค้าดีมาก
                                    อะไหล่สภาพดีมาก ตัวสินค้าดีมาก </p>
                                <br>
                                <img src="assets/img/prodetail/pr1.png" class="img-fluid" alt="shoe image"
                                    style="width: 10%;">
                            </div>
                        </div>
                    </div>
                    <br><br>

                    @include('buyer.product.productdetail.group_box_preproduct')

                </div>


                <input type="radio" name="tabs" id="tabthree">
                <label for="tabthree"> <i class="fa fa-wrench" style="font-size:16px"></i> อะไหล่อื่นๆจากรุ่นเดียวกัน
                </label>
                <div class="tab">
                    <div class="box__productintro">
                        <div class="row">
                            <div class="col-6">
                                <div class="h-promo-text">
                                    <p> อะไหล่อื่นๆจากรถรุ่นเดียวกัน </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($products_subModel as $key => $subModel)
                                <div class="col-xl-3 col-lg-6 col-6">
                                    @php 
                                        $link_product_name = $subModel->name_th;
                                        $link_id = $subModel->id;
                                        $link_price = $subModel->price;
                                    @endphp
                                    @include('buyer.product.box_preproduct')
                                </div>
                            @endforeach                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('script')

    <!-- JS product detail -->
    <script>
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage();
        });
    });

    function slideImage() {
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

        document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
    </script>


    <!-- JS tab -->
    <script>
    function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "block";
    }
    </script>

    <!-- === OAT === -->
<script>
    $(document).on("click", ".btn_bookmark", function(e){
        e.preventDefault();
        var id = $(this).attr("rel");
        console.log(id);
        $.ajax({
            type:'GET',
            url: '{{ url("productbookmark") }}/'+id,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                console.log(response);
                if(response.status == 200){ 
                    $("#text_bookmark").text(response.message); 
                }else{
                    alert('กรุณาเข้าระบบก่อน');
                }
            },
            error: function(response){
                console.log("error");
                console.log(response);
            }
        });
    });
</script>

@stop
