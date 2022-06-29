@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="request-form">
<input type="hidden" id="pagemenuName" name="pagemenuName" value="requestspares">

<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="txt__page">ใบคำขอหาอะไหล่</h2>
                        <div class="txt__detail_num">
                            <p>หมายเลขคำขอหาอะไหล่ : <span>KT000000</span></p>
                            <p>วันที่ลงประกาศ : <span>15/12/2564</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="" id="card-detail">
                        <div class="card mt-0">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex txt_box_card">
                                        <div class="me-3">
                                            <img src="{{asset('backends/assets/img/request-form/lo-ch.png')}}" class="img-icon">
                                            <span>ตรงรุ่น</span>
                                        </div>
                                        <div class="me-3">
                                            <p class="mb-0">Shop ID: ASdsadjlksjSS</p>
                                        </div>
                                        <div>
                                            <img src="{{asset('backends/assets/img/request-form/lo2.png')}}" class="img-icon">
                                            <span>ร้านค้าที่ผ่านการรับรอง</span>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="mb-0">วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="d-flex">
                                            <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request me-3">
                                            <div class="text-request">
                                                <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                                <span>รหัสสินค้า 1234</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <p>299 ฿</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="box__table p-4">
                        <div class="alert-request mb-5">
                            <div class="alert">
                                <span>สินค้าได้รับการรับรองได้จากผู้ขายว่าตรงกับรุ่นที่ต้องการ โดยตรวจสอบจากข้อมูลจาก Caution plate ที่แนบมาในคำขอ หากซื้อกับผู้ขายรายนี้จะได้รับการประกัน
                                    ความเข้ากันได้ </span>
                                <a href=""><i class="fas fa-eye me-1"></i>ดูรายละเอียดการรับประกันเพิ่มเติม</a>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-sm-2">
                                <p>รายละเอียดสินค้า</p>
                            </div>
                            <div class="col-sm-5">
                                <div class="txt-detail-reques2 mb-5 px-2">
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">ชื่อสินค้า</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">ยาง B Quick</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">หมวดหลัก/หมวดย่อย</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">หมวดหลัก > หมวดย่อย > หมวดย่อย</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">รุ่น</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">รุ่น > รุ่นย่อย</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">เกรด</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">แท้</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">Genuine PARTS NO.</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">123456-123242</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">Engine Model Code</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">123456-123242</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">VIN Code</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">2123HTRYTYytuioio$7675</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">สถานะสินค้า</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">พร้อมส่ง</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">ราคา</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">12345</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">ราคาค่าส่ง</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">123</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">จัดส่ง</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">Flash</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="txt-detail-reques2 mb-5 px-2">
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">แบรนด์</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">TOYOTA</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">ปี</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">คุณภาพสินค้า</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">มือสอง - ดีมาก/Excellent (80~100%)</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">Full Model Code</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">123456-123242</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">ผู้ผลิตชิ้นส่วน/Maker</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">TOYOTA</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">ขนาด</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">กว้าง x ยาว x สูง</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">น้ำหนัก</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">10 กิโลกรัม</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">สีภายใน/Trim</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">สีขาว</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">สีภายนอก/Color</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">สีดำ</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">ใบกำกับภาษี</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">สามารถออกใบกำกับภาษีเต็มรูปแบบได้ </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="txt-h-redetail">รายละเอียดเกี่ยวกับสินค้า/เงื่อนไขประกันสินค้า/คุณภาพเพิ่มเติม(ถ้ามี)</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="txt-tt-redetail">ดึงค่าจากผู้ให้รับประกัน + ระยะเวลา เงื่อนไขกับรายละเอียด รวมกัน ตามที่commentไว้ก่อนหน้า ดึงข้อมูลAuto จาก posting</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-sm-2">
                                <p>รายละเอียดสินค้า</p>
                            </div>
                            <div class="col-sm-10">
                                <img src="{{asset('backends/assets/img/request-form/video.png')}}" class="img-request">
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-sm-2">
                                <p>ตรวจสอบว่า<br>
                                    สามารถใช้ร่วมกันกับรถ</p>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex txt_box_card">
                                    <div class="me-3">
                                        <img src="{{asset('backends/assets/img/request-form/lo-ch.png')}}" class="img-icon">
                                        <span>ตรงรุ่น</span>
                                    </div>
                                    <div class="me-3">
                                        <p class="mb-0">ผู้ขายยืนยันว่าสามารถใช้ร่วมกันได้</p>
                                    </div>
                                </div>
                                <div class="img-test">
                                    <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}">
                                    <p>VIN Code<span class="ms-3">fdsfk;dkfl;s;df;kds;fksdkf;dsk</span></p>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <p>ใบกำกับภาษี/ใบเสร็จรับเงิน</p>
                            </div>
                            <div class="col-sm-10">
                                <p>ผู้ขายสามาถออกใบกำกับภาษี / ใบเสร็จรับเงินได้</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination-request mb-5">
                    <ul class="pagination justify-content-end mt-5">
                        <li class="page-item"><a class="page-link me-3" href="javascript:void(0);">
                                < ก่อนหน้า</a>
                        </li>
                        <li class="page-item"><a class="page-link ms-3" href="javascript:void(0);">ถัดไป ></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
<script>
</script>
@stop