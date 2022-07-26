@extends('buyer.layouts.template')

@section('matavendor')
    <link rel="stylesheet" href="{{asset('assets/css/order-confirm.css') }}">
@stop

@section('content')

<section id="sec-confirm">
    <div class="container">
        <div class="h-text-confirm">
            <p>
                ใบคำขอยืนยันความพร้อมของสินค้า
            </p>
        </div>
        <div class="d-text-confirm">
            <p>
                หมายเลขคำร้องยืนยันความพร้อมของสินค้า : {{ $confirminventory->id }}
            </p>
        </div>
        <div class="text-t-date">
            <p>
                <!-- วันที่ขอยืนยัน dd/mm/yyyy hh:mm -->
                วันที่ขอยืนยัน {{ date('d/m/Y H:i', strtotime($confirminventory->pending_date."+543 years")) }}
            </p>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="box__model">
                            <img src="{{ asset('assets/img/icon/smile.svg') }}" class="img-fluid" alt="">
                            <p class="txt__model">ตรงรุ่น</p>
                            <p class="txt__idshop"> &nbsp;&nbsp; Shop ID: ASdsadjlksjSS</p>
                            <p class="txt__verify"> &nbsp;&nbsp; <img src="{{ asset('assets/img/icon/check.svg') }}"
                                    class="img-fluid" alt="">
                                &nbsp; ร้านค้าที่ผ่านการรับรอง</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box__date2">
                            <p> วันที่ส่งข้อเสนอ dd/mm/yyyy hh:mm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                    @php 
                        $product_image = DB::table('product_images')
                            ->where('product_id',$confirminventory->product_id)
                            ->orderBy('line_item_no', 'asc')
                            ->first();

                        $image_name = "assets/img/createrequest/imagenull-2.png";
                        if(!is_null($product_image)){
                            $image_name = "assets/img/prodetail/".$product_image->image ;     
                        }       
                    @endphp
                        <img src="{{ asset($image_name) }}" style="max-height:112px;" class="img-fluid" alt="{{ $confirminventory->product_name }}">
                    </div>
                    <div class="col-lg-6">
                        <p class="card-title"> {{ $confirminventory->product_name }}
                        </p>
                        <p class="card-text"> รหัสสินค้า {{ $confirminventory->id }} </p>
                    </div>
                    <div class="col-lg-2">
                        <p class="card-title-price">
                            {{ number_format($confirminventory->product_price,2) }} ฿
                        </p>
                    </div>
                    <div class="col-lg-2">
                        <button class="button button6"> สั่งสินค้า </button>
                    </div>
                </div>
            </div>
        </div>

        <br> <br> <br>
        <div class="card2">

            <div class="box-card-body">
                <div class="card-body">
                    <p class="card-title"> สินค้าได้รับการรับรองได้จากผู้ขายว่าตรงกับรุ่นที่ต้องการ
                        โดยตรวจสอบจากข้อมูลจาก Caution plate ที่แนบมาในคำขอ หากซื้อกับผู้ขายรายนี้จะได้รับการประกัน
                        ความเข้ากันได้ </p>
                    <div class="text-detail-t">
                        <p> <i class="fa-solid fa-eye"></i>
                            ดูรายละเอียดการรับประกันเพิ่มเติม
                        </p>
                    </div>
                </div>
            </div>

            <div class="box-de-detail">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        รายละเอียดสินค้า
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        แบรนด์
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        {{ (is_null($product->brand->name_th) ? '-' : $product->brand->name_th) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        ชื่อสินค้า
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        {{ (is_null($product->name_th) ? '-' : $product->name_th) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-3">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        ปี
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        2021 --> ดึงส่วนไหน
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        หมวดหลัก/หมวดย่อย
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        {{ (is_null($product->category->name_th) ? '-' : $product->category->name_th) }} > 
                                        {{ (is_null($product->subCategory->name_th) ? '-' : $product->subCategory->name_th) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-3">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        คุณภาพสินค้า
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        <!-- มือสอง - ดีมาก/Excellent (80~100%) -->
                                        {{ (is_null($product->product_type) ? '-' : $product->product_type) }} / 
                                        {{ (is_null($product->quality) ? '-' : $product->quality) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        รุ่น
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        {{ (is_null($product->model->name_th) ? '-' : $product->model->name_th) }} > รุ่นย่อย *ดึงได้ที่ส่วนไหน
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-3">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        Full Model Code
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        {{ (is_null($product->full_model_code) ? '-' : $product->full_model_code) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        เกรด
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        {{ (is_null($product->grade) ? '-' : $product->grade) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-3">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        ผู้ผลิตชิ้นส่วน/Maker
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        <!-- TOYOTA -->
                                        {{ (is_null($product->maker) ? '-' : $product->maker) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        Genuine PARTS NO.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        {{ (is_null($product->sku_code) ? '-' : $product->sku_code) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-3">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        ขนาด
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        <!-- กว้าง x ยาว x สูง -->
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
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        Engine Model Code
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        {{ (is_null($product->engine_model_code) ? '-' : $product->engine_model_code) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-3">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        น้ำหนัก
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        <!-- 10 กิโลกรัม -->
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
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        VIN Code
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        {{ (is_null($product->vin_code) ? '-' : $product->vin_code) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-3">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        สีภายใน/Trim
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        <!-- สีขาว -->
                                        {{ (is_null($product->trim) ? '-' : $product->trim) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        สถานะสินค้า
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        <!-- พร้อมส่ง -->
                                        {{ (is_null($product->status_code) ? '-' : $product->status_code) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-3">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        สีภายนอก/Color
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        <!-- สีดำ -->
                                        {{ (is_null($product->color) ? '-' : $product->color) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        ราคา
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        {{ number_format($confirminventory->product_price,2) }} ฿
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-3">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        รายละเอียดเกี่ยวกับ สินค้า/เงื่อนไขประกัน สินค้า/คุณภาพเพิ่มเติม (ถ้ามี)
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        ดึงค่าจากผู้ให้รับประกัน + ระยะเวลา เงื่อนไขกับรายละเอียด รวมกัน
                                        ตามที่comment ไว้ก่อนหน้า ดึงข้อมูลAuto จาก posting
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        ราคาค่าส่ง
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        123
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="txt-detail-txt-d">
                                    <p>
                                        จัดส่ง
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="txt-haer-txt-d">
                                    <p>
                                        Flash
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-vidio-b">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="tt-text-vidio">
                            <p>
                                วีดีโออะไหล่สินค้า (เพิ่มเติม)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <img src="assets/img/confirm/logo-vi.png" class="img-fluid" alt="shoe image">
                    </div>
                </div>
            </div>


            <div class="box-check-b">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="tt-text-check">
                            <P>
                                ตรวจสอบว่า
                                สามารถใช้ร่วมกันกับรถ
                            </P>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="box__model">
                            <img src="assets/img/confirm/lo-ch.png" class="img-fluid" alt="">
                            <p class="txt__model">ตรงรุ่น</p>
                            <p class="txt__idshop"> &nbsp;&nbsp; ผู้ขายยืนยันว่าสามารถใช้ร่วมกันได้</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="box-b-img">
                            <img src="assets/img/confirm/logo-img.png" class="img-fluid" alt="shoe image">
                            <div class="t-code-img">
                                <p>
                                    VIN Code : fdsfk;dkfl;s;df;kds;fksdkf;dsk
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>


            <div class="box-pay-b">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="tt-text-pay">
                            <P>
                                ใบกำกับภาษี/ใบเสร็จรับเงิน
                            </P>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="tt-text-pay">
                            <p>
                                ผู้ขายสามาถออกใบกำกับภาษี/ใบเสร็จรับเงินได้
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div style="text-align:center;">
        <div class="b-but-confirm">
            <a href="#">
                <button class="button button3"> กลับ
                </button>
            </a>
            &nbsp;
            <a href="#">
                <button class="button button2"> สั่งสินค้า
                </button>
            </a>
        </div>
        <div class="text-date-t">
            <p>
                กรุณาชำระสินค้าภายใน xx ชั่วโมง เพื่อรักษาสถานะสินค้า
            </p>
        </div>
    </div>

</section>


<!-- JS  modal edit -->
<script>

    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

    <!-- JS  upload-->
    <script src="./src/main.js"></script>
    <script>
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        const dropZoneElement = inputElement.closest(".drop-zone");

        dropZoneElement.addEventListener("click", (e) => {
            inputElement.click();
        });

        inputElement.addEventListener("change", (e) => {
            if (inputElement.files.length) {
                updateThumbnail(dropZoneElement, inputElement.files[0]);
            }
        });

        dropZoneElement.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZoneElement.classList.add("drop-zone--over");
        });

        ["dragleave", "dragend"].forEach((type) => {
            dropZoneElement.addEventListener(type, (e) => {
                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        dropZoneElement.addEventListener("drop", (e) => {
            e.preventDefault();

            if (e.dataTransfer.files.length) {
                inputElement.files = e.dataTransfer.files;
                updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
            }

            dropZoneElement.classList.remove("drop-zone--over");
        });
    });

    /**
     * Updates the thumbnail on a drop zone element.
     *
     * @param {HTMLElement} dropZoneElement
     * @param {File} file
     */
    function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

        // First time - remove the prompt
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
            dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }

        // First time - there is no thumbnail element, so lets create it
        if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("drop-zone__thumb");
            dropZoneElement.appendChild(thumbnailElement);
        }

        thumbnailElement.dataset.label = file.name;

        // Show thumbnail for image files
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = () => {
                thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
            };
        } else {
            thumbnailElement.style.backgroundImage = null;
        }
    }
</script>

@stop

@section('script')

    <script>

    </script>

@stop
