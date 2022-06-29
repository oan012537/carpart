@extends('buyer.layouts.template')

@section('content')
<section id="createrequest">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__title">
                    <div class="text__title">สร้างใบคำขอหาอะไหล่</div>
                </div>
            </div>
        </div>

        <div class="box__createrequest">
            <form>
                <div class="row">
                    <div class="col-2">
                        <p class="title__txt">รายละเอียด</p>
                    </div>
                    <div class="col-10">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>แบรนด์</label>
                                    <input type="text" class="form-control" name="createbrands" id="createbrands">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>รุ่น</label>
                                    <input type="text" class="form-control" name="model" id="model">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>รุ่นย่อย</label>
                                    <input type="text" class="form-control" name="model2" id="model2">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>ปี</label>
                                    <input type="text" class="form-control" name="years" id="years">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>หมวดหมู่</label>
                                    <input type="text" class="form-control" name="cat" id="cat">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>หมวดหมู่ย่อย 1</label>
                                    <input type="text" class="form-control" name="cat1" id="cat1">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>หมวดหมู่ย่อย 2</label>
                                    <input type="text" class="form-control" name="cat2" id="cat2">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>ชื่อสินค้าที่ต้องการ</label>
                                    <input type="text" class="form-control" name="nameproducts" id="nameproducts">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <hr class="underlinepage">
                    </div>

                    <div class="col-2">
                        <p class="title__txt">รายละเอียดอื่นๆ</p>
                    </div>

                    <div class="col-10">

                        <div class="row">
                            <div class="col-12">
                                <p class="text__col">รูปภาพอะไหล่สินค้า <span>(หากมีตัวอย่างรูปภาพสินค้า)</span></p>
                                <div class="box__groupimage">
                                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                                        <div class="box__upload ">
                                            <img id="imageShow<?php echo $i; ?>" src="" class="img-fluid" />
                                            <a href="javascript:void(0)">ลบ <i class="fa-solid fa-trash"></i></a>
                                        </div>
                                    <?php } ?>

                                    <!--  -->
                                    <div class="upload-box">
                                        <div class="box__content">
                                            <div class="upload-btn-wrapper">
                                                <button class="btn"> <i class="fa-solid fa-circle-plus"></i></button>
                                                <input type="file" onchange="preview()">

                                                <p class="txt__title">แนบรูปภาพ .Jpeg</p>
                                                <p class="txt__sub">สูงสุดไม่เกิน 5 ภาพขนาดไม่เกิน 5 Mb.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>

                            <div class="col-6 box__other">
                                <div class="form-group">
                                    <label>จำนวน</label>
                                    <input type="text" class="form-control" name="valuep" id="valuep">
                                </div>
                            </div>
                            <div class="col-6 box__other">
                                <div class="form-group">
                                    <label>หมายเลขประจำรถยนต์ Caution No. (ไม่บังคับ)</label>
                                    <input type="text" class="form-control" name="numbercar" id="numbercar">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="box__groupimage">
                                    <?php for ($z = 5; $z <= 8; $z++) { ?>
                                        <div class="box__upload ">
                                            <img id="imageShow<?php echo $z; ?>" src="" class="img-fluid" />
                                            <a href="javascript:void(0)">ลบ <i class="fa-solid fa-trash"></i></a>
                                        </div>
                                    <?php } ?>

                                    <!--  -->
                                    <div class="upload-box">
                                        <div class="box__content">
                                            <div class="upload-btn-wrapper">
                                                <button class="btn"> <i class="fa-solid fa-circle-plus"></i></button>
                                                <input type="file" onchange="preview()">

                                                <p class="txt__title">แนบรูปภาพ .Jpeg</p>
                                                <p class="txt__sub">สูงสุดไม่เกิน 5 ภาพขนาดไม่เกิน 5 Mb.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!--  -->
                                </div>

                                <div class="box__select">
                                    <p class="text__col">ต้องการวีดีโอเพิ่มเติมหรือไม่ <span>(กรณีสนใจจริงๆ)</span></p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="novideo" id="novideo">
                                        <label class="form-check-label" for="novideo">
                                            ไม่ต้องการ
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="yesvideo" id="yesvideo">
                                        <label class="form-check-label" for="yesvideo">
                                            ต้องการ
                                        </label>
                                    </div>

                                </div>
                                <div class="box__select">
                                    <p class="text__col">ต้องการใบกำกับภาษีหรือไม่ <span> * (อาจจะมีบางผู้ขายที่ไม่รองรับการออกใบเสร็จ/ใบกำกับภาษี)</span></p>


                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="noslip" id="noslip">
                                        <label class="form-check-label" for="noslip">
                                            ไม่ต้องการ
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="yesslip" id="yesslip">
                                        <label class="form-check-label" for="yesslip">
                                            ต้องการ
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </form>
        </div>

        <div class="box__btn">
            <a  href="#">
            <button class="btn btn__clear">ยกเลิก</button>
            </a>
            <a href="detail-request.php">
            <button class="btn btn__send">ยืนยัน</button>
            </a>
        </div>
    </div>
</section>
@stop

@section('script')
<script>

</script>
<script>
    const image1 = document.getElementById("imageShow1");
    const image2 = document.getElementById("imageShow2");
    const image3 = document.getElementById("imageShow3");
    const image4 = document.getElementById("imageShow4");
    const image5 = document.getElementById("imageShow5");
    const image6 = document.getElementById("imageShow6");
    const image7 = document.getElementById("imageShow7");
    const image8 = document.getElementById("imageShow8");

    image1.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    image2.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    image3.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    image4.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    image5.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    image6.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    image7.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    image8.src = "{{asset('assets/img/createrequest/imagenull.png')}}";

    preview = () => {
        image1.src = URL.createObjectURL(event.target.files[0]);
        image2.src = URL.createObjectURL(event.target.files[0]);
        image3.src = URL.createObjectURL(event.target.files[0]);
        image4.src = URL.createObjectURL(event.target.files[0]);

    }
</script>
@stop