@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="request-form">
<input type="hidden" id="pagemenuName" name="pagemenuName" value="requestspares">



<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <h2 class="txt__page">ใบคำขอหาอะไหล่</h2>
                        <div class="txt__detail_num mt-4">
                            <p>หมายเลขคำขอหาอะไหล่ : <span>KT000000</span></p>
                            <p>วันที่ลงประกาศ : <span>15/12/2564</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="box__filter">
                        <div class="d-md-flex justify-content-between px-2">
                            <div>
                                <h5>ผู้ซื้อ</h5>
                                <span>Customer ID: 3453453453454</span>
                                <span class="ms-3">นายก.ไก่</span>
                            </div>
                            <div class="status">
                                <p id="open">สถานะ : เปิดรับคำขอ</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="box__table">
                        <div class="txt-detail-reques mb-5 px-2">
                            <div class="row">
                                <div class="col-3 col-md-4 col-lg-3">
                                    <p class="txt-h-redetail">ชื่อสินค้า</p>
                                </div>
                                <div class="col-9 col-md-8 col-lg-9">
                                    <p class="txt-tt-redetail">ยาง B Quick</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-md-4 col-lg-3">
                                    <p class="txt-h-redetail">หมวดหมู่</p>
                                </div>
                                <div class="col-9 col-md-8 col-lg-9">
                                    <p class="txt-tt-redetail">ยางรถยนต์ > หมวดหมู่</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-md-4 col-lg-3">
                                    <p class="txt-h-redetail">แบรนด์</p>
                                </div>
                                <div class="col-9 col-md-8 col-lg-9">
                                    <p class="txt-tt-redetail">Hyundai</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-md-4 col-lg-3">
                                    <p class="txt-h-redetail">รุ่น</p>
                                </div>
                                <div class="col-9 col-md-8 col-lg-9">
                                    <p class="txt-tt-redetail">H-1</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-md-4 col-lg-3">
                                    <p class="txt-h-redetail">ปี</p>
                                </div>
                                <div class="col-9 col-md-8 col-lg-9">
                                    <p class="txt-tt-redetail">2021</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p class="txt-h-redetail">ภาพอะไหล่สินค้า (เพิ่มเติม)</p>
                                </div>
                                <div class="col-9 col-lg-9">
                                    <div class="txt-tt-redetail d-md-flex">
                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request me-3 mb-3 mb-lg-0">
                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request me-3 mb-3 mb-lg-0">
                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request me-3 mb-3 mb-lg-0">
                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request me-3 mb-3 mb-lg-0">
                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request me-3 mb-3 mb-lg-0">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <p class="txt-h-redetail">หมายเลขประจำรถยนต์ Caution No.</p>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <p class="txt-tt-redetail">1324567890123</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <p class="txt-h-redetail">VIN Code</p>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <p class="txt-tt-redetail">1324567890123</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <p class="txt-h-redetail">รูปภาพหมายเลขประจำรถยนต์</p>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <div class="txt-tt-redetail">
                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request me-3">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <p class="txt-h-redetail">ต้องการวีดีโอเพิ่มเติมหรือไม่</p>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <p class="txt-tt-redetail">ต้องการ</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <p class="txt-h-redetail">ต้องการใบกำกับภาษี/ใบเสร็จรับเงินหรือไม่</p>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <p class="txt-tt-redetail">ต้องการ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="txt__detail_num ">
                        <span>7 ข้อเสนอ</span>
                    </div>
                    <div class="" id="card-detail">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-lg-flex justify-content-between align-items-center">
                                    <div class="d-md-flex txt_box_card">
                                        <div class="me-0 me-md-5 me-lg-3 mb-3 mb-md-0">
                                            <img src="{{asset('backends/assets/img/request-form/lo-ch.png')}}" class="img-icon">
                                            <span>ตรงรุ่น</span>
                                        </div>
                                        <div class="me-0 me-md-5 me-lg-3 mb-3 mb-md-0">
                                            <p class="mb-0">Shop ID: ASdsadjlksjSS</p>
                                        </div>
                                        <div class="mb-3 mb-md-0">
                                            <img src="{{asset('backends/assets/img/request-form/lo2.png')}}" class="img-icon">
                                            <span>ร้านค้าที่ผ่านการรับรอง</span>
                                        </div>
                                    </div>
                                    <div class=" mt-md-3 mt-lg-0">
                                        <p class="mb-0">วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-md-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request me-3">
                                        <div class="text-request">
                                            <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                            <span>รหัสสินค้า 1234</span>
                                        </div>
                                    </div>
                                    <div class="mx-md-3 mx-lg-0">
                                        <p>299 ฿</p>
                                    </div>
                                    <div>
                                        <a href="{{url('backend/requestspares/details/1')}}" class="btn btn__viewdetail">ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="d-lg-flex justify-content-between align-items-center">
                                    <div class="d-md-flex txt_box_card">
                                        <div class="me-0 me-md-5 me-lg-3 mb-3 mb-md-0">
                                            <img src="{{asset('backends/assets/img/request-form/lo-ch.png')}}" class="img-icon">
                                            <span>ตรงรุ่น</span>
                                        </div>
                                        <div class="me-0 me-md-5 me-lg-3 mb-3 mb-md-0">
                                            <p class="mb-0">Shop ID: ASdsadjlksjSS</p>
                                        </div>
                                        <div class="mb-3 mb-md-0">
                                            <img src="{{asset('backends/assets/img/request-form/lo2.png')}}" class="img-icon">
                                            <span>ร้านค้าที่ผ่านการรับรอง</span>
                                        </div>
                                    </div>
                                    <div class=" mt-md-3 mt-lg-0">
                                        <p class="mb-0">วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-md-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request me-3">
                                        <div class="text-request">
                                            <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                            <span>รหัสสินค้า 1234</span>
                                        </div>
                                    </div>
                                    <div class="mx-md-3 mx-lg-0">
                                        <p>299 ฿</p>
                                    </div>
                                    <div>
                                        <a href="{{url('backend/requestspares/details/1')}}" class="btn btn__viewdetail">ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="card">
                            <div class="card-header">
                                <div class="d-lg-flex justify-content-between align-items-center">
                                    <div class="d-md-flex txt_box_card">
                                        <div class="me-0 me-md-5 me-lg-3 mb-3 mb-md-0">
                                            <img src="{{asset('backends/assets/img/request-form/lo-ch.png')}}" class="img-icon">
                                            <span>ตรงรุ่น</span>
                                        </div>
                                        <div class="me-0 me-md-5 me-lg-3 mb-3 mb-md-0">
                                            <p class="mb-0">Shop ID: ASdsadjlksjSS</p>
                                        </div>
                                        <div class="mb-3 mb-md-0">
                                            <img src="{{asset('backends/assets/img/request-form/lo2.png')}}" class="img-icon">
                                            <span>ร้านค้าที่ผ่านการรับรอง</span>
                                        </div>
                                    </div>
                                    <div class=" mt-md-3 mt-lg-0">
                                        <p class="mb-0">วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-md-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request me-3">
                                        <div class="text-request">
                                            <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                            <span>รหัสสินค้า 1234</span>
                                        </div>
                                    </div>
                                    <div class="mx-md-3 mx-lg-0">
                                        <p>299 ฿</p>
                                    </div>
                                    <div>
                                        <a href="{{url('backend/requestspares/details/1')}}" class="btn btn__viewdetail">ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="card">
                            <div class="card-header">
                                <div class="d-lg-flex justify-content-between align-items-center">
                                    <div class="d-md-flex txt_box_card">
                                        <div class="me-0 me-md-5 me-lg-3 mb-3 mb-md-0">
                                            <img src="{{asset('backends/assets/img/request-form/lo-ch.png')}}" class="img-icon">
                                            <span>ตรงรุ่น</span>
                                        </div>
                                        <div class="me-0 me-md-5 me-lg-3 mb-3 mb-md-0">
                                            <p class="mb-0">Shop ID: ASdsadjlksjSS</p>
                                        </div>
                                        <div class="mb-3 mb-md-0">
                                            <img src="{{asset('backends/assets/img/request-form/lo2.png')}}" class="img-icon">
                                            <span>ร้านค้าที่ผ่านการรับรอง</span>
                                        </div>
                                    </div>
                                    <div class=" mt-md-3 mt-lg-0">
                                        <p class="mb-0">วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-md-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request me-3">
                                        <div class="text-request">
                                            <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                            <span>รหัสสินค้า 1234</span>
                                        </div>
                                    </div>
                                    <div class="mx-md-3 mx-lg-0">
                                        <p>299 ฿</p>
                                    </div>
                                    <div>
                                        <a href="{{url('backend/requestspares/details/1')}}" class="btn btn__viewdetail">ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="card">
                            <div class="card-header">
                                <div class="d-lg-flex justify-content-between align-items-center">
                                    <div class="d-md-flex txt_box_card">
                                        <div class="me-0 me-md-5 me-lg-3 mb-3 mb-md-0">
                                            <img src="{{asset('backends/assets/img/request-form/lo-ch.png')}}" class="img-icon">
                                            <span>ตรงรุ่น</span>
                                        </div>
                                        <div class="me-0 me-md-5 me-lg-3 mb-3 mb-md-0">
                                            <p class="mb-0">Shop ID: ASdsadjlksjSS</p>
                                        </div>
                                        <div class="mb-3 mb-md-0">
                                            <img src="{{asset('backends/assets/img/request-form/lo2.png')}}" class="img-icon">
                                            <span>ร้านค้าที่ผ่านการรับรอง</span>
                                        </div>
                                    </div>
                                    <div class=" mt-md-3 mt-lg-0">
                                        <p class="mb-0">วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-md-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request me-3">
                                        <div class="text-request">
                                            <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                            <span>รหัสสินค้า 1234</span>
                                        </div>
                                    </div>
                                    <div class="mx-md-3 mx-lg-0">
                                        <p>299 ฿</p>
                                    </div>
                                    <div>
                                        <a href="{{url('backend/requestspares/details/1')}}" class="btn btn__viewdetail">ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pagination-request">
                            <ul class="pagination justify-content-center mt-5">
                                <li class="page-item"><a class="page-link me-3" href="javascript:void(0);">
                                        < ก่อนหน้า</a>
                                </li>
                                <li class="page-item active"><a class="page-link me-1" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link me-1" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link me-1" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                <li class="page-item"><a class="page-link ms-3" href="javascript:void(0);">ถัดไป ></a></li>
                            </ul>
                        </div>
                    </div>
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