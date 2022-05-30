@extends('template')

@section('content')
<section id="article__content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__nav">
                    <h2 class="title__box">บทความ</h2>

                    <div class="nav">
                        <a href="{{url('articles')}}">บทความ</a> <span><i class="fa-solid fa-chevron-right"></i></span> <a href="javascript:void(0)">สารพันดูแลยางรถยนต์</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="box__contentall">
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12">
                    <div class="box__content">
                        <h1 class="title__content">สารพันดูแลยางรถยนต์</h1>
                        <p class="text__content">
                            วันที่ 24 กันยายน 2563 นายขรรค์ ประจวบเหมาะ ผู้อำนวยการสำนักงานจัดหารายได้ สภากาชาดไทย รับมอบเงินบริจาคจำนวน 1,451,500 บาท จากคุณธีระยุทธ จิราธิวัฒน์ ประธานเจ้าหน้าที่บริหาร และคุณสุพัตรา จิราธิวัฒน์ รองประธานอาวุโสฝ่ายองค์กรสัมพันธ์และภาพลักษณ์ โรงแรมและรีสอร์ทในเครือเซ็นทารา จากการจัดโครงการ “Helping the
                        </p>

                        <div class="box__image">
                            <img src="assets/img/articles/image.png" class="img-fluid" alt="">
                        </div>

                        <div class="box__subdetail">
                            <div class="box__date">
                                <p class="text__date"><img src="assets/img/icon/icon-timegray.svg" class="img-fluid" alt=""> 11 พ.ค. 2565</p>
                            </div>

                            <div class="box__share">
                                <span>SHARE</span>
                                <a href="javascript:void(0)" class="btn__facebook"><i class="fa-brands fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn__twitter"><i class="fa-brands fa-twitter"></i></a>
                                <a href="javascript:void(0)" class="btn__line"><i class="fa-brands fa-line"></i></a>
                            </div>
                        </div>

                        <div class="box__content2">
                            <p>
                                1. รัน - อินต้องมีการรัน-อิน ยางใหม่ก็เช่นกันในช่วง 100 - 200 กิโลเมตรแรก ควรใช้ความเร็วไม่เกิน 80 - 100 กิโลเมตร/ชั่วโมง เพื่อให้โครงสร้างแก้มยาง และหน้ายางมีการปรับตัว เพราะยางทุกเส้น ถูกผลิตออกมาให้รับกับมุมแคมเบอร์ของล้อเท่ากับ 0 คือตั้งฉากกับพื้น แต่รถยนต์ทุกคันไม่ได้มีมุม
                                แคมเบอร์เท่ากับ 0 มีทั้งแบะหรือหุบ ในช่วงแรกจึงต้องใช้เวลาให้หน้ายางสึกปรับตัวรับกับศ ูนย์ล้อ
                            </p>

                            <p>
                                2. ถ่วงล้อยางต้องหมุนนับพันรอบต่อนาที โดยเฉพาะล้อคู่หน้าที่มีการเลี้ยงด้วยจึงต้องมีการถ่ วงสมดุล เพราะถ้าล้อคู่หน้าไมได้สมดุล มักมีอาการพวงมาลัยสั่นในบางช่วงความเร็ว และทำให้ลูกปืนล้อ
                                หรือช่วงล่างมีอายุการใช้งานสั้นลง ด้วย เมื่อเปลี่ยนยางใหม่ หรือถอดยางออกจากระทะล้อ เพื่อสลับยาง
                                หรือเปลี่ยนยาง ต้องมีการถ่วงสมดุลใหม่เสมอ เมื่อใช้งานไปสัก 40 - 50 % ของอายุการใช้งานยาง ควรถอดมาถ่วงสมดุล เพราะการสึกหรออาจไม่สม่ำเสมอกัน ถ้าใช้วิธีถอดกระทะล้อออกมาถ่วงสมดุล
                            </p>
                        </div>


                        <div class="box__share2">
                            <div class="row">
                                <div class="col-2 mobile__hidden"></div>
                                <div class="col-2">
                                    <a href="javascript:void(0)" class="btn__facebook" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="แชร์บทความนี้">
                                        <i class="fa-brands fa-facebook"></i>
                                        <p>1,065 <span>ครั้ง</span></p>
                                    </a>
                                </div>

                                <div class="col-2">
                                    <a href="javascript:void(0)" class="btn__line" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="แชร์บทความนี้">
                                        <div class="box__border">
                                            <i class="fa-brands fa-line"></i>
                                        </div>
                                        <p>155 <span>ครั้ง</span></p>
                                    </a>
                                </div>

                                <div class="col-2">
                                    <a href="javascript:void(0)" class="btn__twitter" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="แชร์บทความนี้">
                                        <div class="box__border">
                                            <i class="fa-brands fa-twitter"></i>
                                        </div>
                                        <p>300 <span>ครั้ง</span></p>
                                    </a>
                                </div>

                                <div class="col-2">
                                    <a href="javascript:void(0)" class="btn__copy" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="แชร์บทความนี้">
                                        <div class="box__border">
                                            <i class="fa-solid fa-copy"></i>
                                        </div>
                                        <p>300 <span>ครั้ง</span></p>
                                    </a>
                                </div>

                                <div class="col-2 mobile__hidden"></div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--  -->
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="box__otherarticle">
                        <div class="box__title">
                            <p class="title__box">ดูบทความอื่น</p>
                        </div>
                        <div class="row">
                            <?php for ($i = 1; $i <= 3; $i++) { ?>
                                <div class="col-xl-12">
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
                </div>
            </div>
        </div>
</section>

@stop
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    [...document.querySelectorAll('[data-bs-toggle="popover"]')]
    .forEach(el => new bootstrap.Popover(el))
</script>
@section('script')
<script>

</script>
@stop