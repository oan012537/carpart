@extends('supplier.layouts.template')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="spareparts-card">
<div class="content" id="spareparts-detaillast">
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

        <!--  -->
        <div class="box__productother">
            <div class="row">

                <div class="col-lg-12">
                    <div class="box__product">
                        <div class="box__heading">
                            <div class="row">
                                <div class="col-12 col-sm-8">
                                    <div class="box__model">
                                        <img src="{{asset('assets/img/icon/smile.svg')}}" class="img-fluid" alt="">
                                        <p class="txt__model">ตรงรุ่น</p>
                                        <p class="txt__idshop">Shop ID: ASdsadjlksjSS</p>
                                        <p class="txt__verify"> <img src="{{asset('assets/img/icon/check.svg')}}" class="img-fluid" alt=""> ร้านค้าที่ผ่านการรับรอง</p>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="box__date">
                                        <p> วันที่ส่งข้อเสนอ dd/mm/yyyy hh:mm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box__content">
                            <div class="row">
                                <div class="col-12 col-sm-2">
                                    <div class="box__image">
                                        <img src="{{asset('assets/img/createrequest/imagenull-2.png')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-8">
                                    <div class="box__content">
                                        <p class="title__product">กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                        <p class="number__product">รหัสสินค้า 1234 </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <div class="box__detailprice">
                                        <div class="box__price">
                                            <p>299 ฿</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="box__contentdetail">
            <div class="box__announce">
                <p>สินค้าได้รับการรับรองได้จากผู้ขายว่าตรงกับรุ่นที่ต้องการ โดยตรวจสอบจากข้อมูลจาก Caution plate ที่แนบมาในคำขอ หากซื้อกับผู้ขายรายนี้จะได้รับการประกัน
                    ความเข้ากันได้ </p>
                <a href="javascript:void(0)" class="btn__view"><i class="fa-solid fa-eye"></i> ดูรายละเอียดการรับประกันเพิ่มเติม</a>
            </div>

            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="box__txt">
                        <p>รายละเอียดสินค้า</p>
                    </div>
                </div>
                <div class="col-12 col-sm-8">
                    <div class="row box__con">
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">แบรนด์</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">TOYOTA</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">ปี</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">2021</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">คุณภาพสินค้า</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">มือสอง - ดีมาก/Excellent (80~100%)</p>
                        </div>


                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">Full Model Code</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">123456-123242</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">ผู้ผลิตชิ้นส่วน/Maker</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">TOYOTA</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">ขนาด</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">กว้าง x ยาว x สูง</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">น้ำหนัก</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">10 กิโลกรัม</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">สีภายใน/Trim</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">สีขาว</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">สีภายนอก/Color</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">สีดำ</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">รายละเอียดเกี่ยวกับสินค้า/เงื่อนไขประกันสินค้า/คุณภาพเพิ่มเติม(ถ้ามี)</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">ดึงค่าจากผู้ให้รับประกัน + ระยะเวลาเงื่อนไขกับรายละเอียด รวมกัน ตามที่commentไว้ก่อนหน้า ดึงข้อมูลAuto จาก posting</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">ชื่อสินค้า</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">ยาง B Quick</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">หมวดหลัก/หมวดย่อย</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">หมวดหลัก > หมวดย่อย</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">รุ่น</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">รุ่น > รุ่นย่อย</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">เกรด</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">แท้</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">Genuine PARTS NO.</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">123456-123242</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">Engine Model Code</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">123456-123242</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">VIN Code</p>
                        </div>
                        <div class="col-12 col-sm-3">
                            <p class="txt__content">2123HTRYTYytuioio$7675</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">สถานะสินค้า</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">พร้อมส่ง </p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">ราคา</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">12345 </p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">ราคาค่าส่ง</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">123</p>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__title">จัดส่ง</p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <p class="txt__content">Flash</p>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-12 col-sm-4">
                    <div class="box__txtvideo">
                        <p>วีดีโออะไหล่สินค้า (เพิ่มเติม)</p>
                    </div>
                </div>
                <div class="col-12 col-sm-8">
                    <div class="box__video">
                        <video width="420" height="240" controls>
                            <source src="https://samplelib.com/lib/preview/mp4/sample-5s.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <!--  -->


                <div class="col-12 col-sm-4">
                    <div class="box__txtcheck">
                        <p>ตรวจสอบว่า สามารถใช้ร่วมกันกับรถ</p>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="box__check">
                        <span class="txt__blue"> <img src="{{asset('assets/img/icon/smile.svg')}}" class="img-fluid" alt="">ตรงรุ่น</span> ผู้ขายยืนยันว่าสามารถใช้ร่วมกันได้

                        <div class="box__image">
                            <img src="{{asset('assets/img/createrequest/imagenull-2.png')}}" class="img-fluid" alt="">
                            <p> VIN Code <span>fdsfk;dkfl;s;df;kds;fksdkf;dsk</span></p>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <!--  -->


        <!--  -->

        <div class="box__btn">
            <div class="box__btnnextprev">
                <button class="btn btn__prev"><i class="fa-solid fa-chevron-left"></i> ก่อนหน้า</button>
                <button class="btn btn__next">ถัดไป <i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </div>

</div>
<style>
    @media screen and (min-width:320px) and (max-width:374px) {
        #spareparts-detaillast .box__detailnumberpart {
            flex-wrap: wrap;
        }

        #spareparts-detaillast .box__productother .box__product .box__heading .box__date {
            text-align: left;
        }

        #spareparts-detaillast .box__productother .box__product .box__content{
            padding: 10px;
        }

        #spareparts-detaillast .box__contentdetail{
            padding: 10px;
        }

        #spareparts-detaillast .box__contentdetail .box__announce{
            padding: 10px;
        }

        #spareparts-detaillast .box__contentdetail .box__image{
            padding: 10px;
        }
        .box__video video{
            width: 150px;
            height: auto;
        }

        .box__check .box__image span{
            font-size: 12px;
        }
    }

    @media screen and (min-width:375px) and (max-width:413px) {
        #spareparts-detaillast .box__detailnumberpart {
            flex-wrap: wrap;
        }

        #spareparts-detaillast .box__productother .box__product .box__heading .box__date {
            text-align: left;
        }

        #spareparts-detaillast .box__productother .box__product .box__content{
            padding: 10px;
        }

        #spareparts-detaillast .box__contentdetail{
            padding: 10px;
        }

        #spareparts-detaillast .box__contentdetail .box__announce{
            padding: 10px;
        }

        #spareparts-detaillast .box__contentdetail .box__image{
            padding: 10px;
        }
        .box__video video{
            width: 210px;
            height: auto;
        }

        .box__check .box__image span{
            font-size: 12px;
        }
    }

    @media screen and (min-width:414px) and (max-width:424px) {
        #spareparts-detaillast .box__detailnumberpart {
            flex-wrap: wrap;
        }

        #spareparts-detaillast .box__productother .box__product .box__heading .box__date {
            text-align: left;
        }

        #spareparts-detaillast .box__productother .box__product .box__content{
            padding: 10px;
        }

        #spareparts-detaillast .box__contentdetail{
            padding: 10px;
        }

        #spareparts-detaillast .box__contentdetail .box__announce{
            padding: 10px;
        }

        #spareparts-detaillast .box__contentdetail .box__image{
            padding: 10px;
        }
        .box__video video{
            width: 210px;
            height: auto;
        }

        .box__check .box__image span{
            font-size: 12px;
        }
    }

    @media screen and (min-width:425px) and (max-width:767px) {
        #spareparts-detaillast .box__detailnumberpart {
            flex-wrap: wrap;
        }

        #spareparts-detaillast .box__productother .box__product .box__heading .box__date {
            text-align: left;
        }

        #spareparts-detaillast .box__productother .box__product .box__content{
            padding: 10px;
        }

        #spareparts-detaillast .box__contentdetail{
            padding: 10px;
        }

        #spareparts-detaillast .box__contentdetail .box__announce{
            padding: 10px;
        }

        #spareparts-detaillast .box__contentdetail .box__image{
            padding: 10px;
        }
        .box__video video{
            width: 270px;
            height: auto;
        }

        .box__check .box__image span{
            font-size: 12px;
        }
    }

    @media screen and (min-width:768px) and (max-width:1023px) {
        .box__video video{
            width: 290px;
            height: auto;
        }
    }

    @media screen and (min-width:1024px) and (max-width:1279px) {}

    @media screen and (min-width:1280px) and (max-width:1359px) {}

    @media screen and (min-width:1360px) and (max-width:1439px) {}

    @media screen and (min-width:1440px) and (max-width:1599px) {}

    @media screen and (min-width:1600px) and (max-width:1919px) {}

    @media screen and (min-width:1920px) and (max-width:2559px) {}

    @media screen and (min-width:2560px) {}
</style>
@stop

@section('script')
<script>
    $('#tab').on('click', 'a', function(e) {
        dataId = $(this).data('id');
        $("[id$='-tab']").hide();
        $('#' + dataId + '-tab').show();
        e.preventDefault();
    })
</script>
@stop