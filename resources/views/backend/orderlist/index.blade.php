@extends('backend.layouts.templates')
@section('content')
<style type="text/css">
    .my-active span {
        background-color: #5cb85c !important;
        color: white !important;
        border-color: #5cb85c !important;
    }
</style>
{{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
<input type="hidden" id="pageName" name="pageName" value="orderlist">

<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">รายการสั่งซื้อ</h2>
                </div>

                <div class="col-lg-12">
                    <div class="box__filter">
                        <form class="px-2">
                            <div class="row">
                                <div class="col-6 col-lg-2">
                                    <label class="title__txt">หมายเลขคำสั่งซื้อ</label>
                                    <input type="text" class="form-control" placeholder="ระบุ">
                                </div>
                                <div class="col-6 col-lg-2">
                                    <label class="title__txt">ร้านค้า/ผู้ซื้อ</label>
                                    <input type="text" class="form-control" placeholder="ระบุ">
                                </div>
                                <div class="col-6 col-lg-2">
                                    <label class="title__txt">หมวดหมู่สินค้า</label>
                                    <input type="text" class="form-control" placeholder="ระบุ">
                                </div>

                                <div class="col-6 col-lg-2">
                                    <label class="title__txt">สถานะ</label>
                                    <select class="form-select">
                                        <option>ระบุ....</option>
                                    </select>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <label for="" class="title__txt">ช่วงวัน-เวลา</label>
                                    <div class="input-group ">
                                        <input type="date" class="form-control" placeholder="Recipient's username" aria-describedby="button-yes">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-lg-between mt-3 mt-lg-5">
                        <div class="txt__detail_num">
                            {{-- <span>17 รายการ</span> --}}
                        </div>
                        <div class="col-12 col-lg-3 d-flex">
                            <a href="request-form-details.php" class="btn btn__viewdetail me-3"><i class="fas fa-print"></i> ปริ้นใบคำสั่งซื้อ</a>
                            <a href="request-form-details.php" class="btn btn__viewdetail"><i class="far fa-file-excel"></i> ส่งออกเป็น Excel</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">

                    <div class="box__table">
                        <div class="px-2" id="card-detail">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="all-order-tab" data-bs-toggle="tab" data-bs-target="#all-order" type="button" role="tab" aria-controls="all-order" aria-selected="true">ทั้งหมด <span class="circle"> 1234</span></button>
                                    <button class="nav-link" id="unpaid-order-tab" data-bs-toggle="tab" data-bs-target="#unpaid-order" type="button" role="tab" aria-controls="unpaid-order" aria-selected="false">ยังไม่ได้ชำระ <span class="circle"> 3</span></button>
                                    <button class="nav-link" id="delivered-tab" data-bs-toggle="tab" data-bs-target="#delivered" type="button" role="tab" aria-controls="delivered" aria-selected="false">ที่ต้องจัดส่ง <span class="circle"> 2</span></button>
                                    <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping" type="button" role="tab" aria-controls="shipping" aria-selected="false">กำลังจัดส่ง <span class="circle"> 3</span></button>
                                    <button class="nav-link" id="received-tab" data-bs-toggle="tab" data-bs-target="#received" type="button" role="tab" aria-controls="received" aria-selected="false">ได้รับสินค้าแล้ว <span class="circle"> 122</span></button>
                                    <button class="nav-link" id="cancel-order-tab" data-bs-toggle="tab" data-bs-target="#cancel-order" type="button" role="tab" aria-controls="cancel-order" aria-selected="false">ยกเลิกคำสั่งซื้อ <span class="circle"> 8</span></button>
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">ได้รับการรีวิว <span class="circle"> 9</span></button>
                                </div>
                            </nav>
                            <div class="tab-content mt-4" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="all-order" role="tabpanel" aria-labelledby="all-order-tab">
                                    <div class="head-card-tabs form-box-input">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <div class="form-check me-lg-5 me-3">
                                                    <input class="form-check-input me-lg-4 me-1" type="checkbox" id="selectall" name="selectall">
                                                    <label class="form-check-label" for="selectall">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <span class="mobile">ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">สถานะ</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">การจัดส่ง</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-2"></div>
                                            <div class="col-12 col-md-6 col-lg-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input dataall">
                                        <div class="card-header">
                                            <div class="d-lg-flex">
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-10 col-lg-4">
                                                    <div class="form-check me-lg-5 me-1">
                                                        <input class="form-check-input me-lg-4 me-1" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-md-flex">
                                                            <div class="me-3">
                                                                <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                            </div>
                                                            <div class="text-request">
                                                                <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                                                <span>รหัสสินค้า 1234</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-5 col-md-3 col-lg-1">
                                                    <div class="status">
                                                        <p id="unpaid">ยังไม่ได้ชำระ</p>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <span>-</span>
                                                </div>
                                                <div class="col-12 col-md-3 col-lg-1 mb-2 mb-lg-0">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-8 col-md-3 col-lg-2 text-center">
                                                    <a href="orderlist/unpaid/details/1" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-1">
                                                    <div class="img-product">
                                                        <button class="btn btn__delete"><i class="fas fa-print"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{ $data->links('vendor.pagination.custom') }}
                                    @endif
                                </div>

                                <div class="tab-pane fade" id="unpaid-order" role="tabpanel" aria-labelledby="unpaid-order-tab">
                                    <div class="head-card-tabs form-box-input">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <div class="form-check me-lg-5 me-3">
                                                    <input class="form-check-input me-lg-4 me-1" type="checkbox" id="selectunpaid" name="selectunpaid" value="">
                                                    <label class="form-check-label" for="selectunpaid">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <span class="mobile">ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">สถานะ</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">การจัดส่ง</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-2"></div>
                                            <div class="col-12 col-md-6 col-lg-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input dataunpaid">
                                        <div class="card-header">
                                            <div class="d-lg-flex">
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-10 col-lg-4">
                                                    <div class="form-check me-lg-5 me-1">
                                                        <input class="form-check-input me-lg-4 me-1" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-md-flex">
                                                            <div class="me-3">
                                                                <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                            </div>
                                                            <div class="text-request">
                                                                <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                                                <span>รหัสสินค้า 1234</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-5 col-md-3 col-lg-1">
                                                    <div class="status">
                                                        <p id="unpaid">ยังไม่ได้ชำระ</p>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <span>-</span>
                                                </div>
                                                <div class="col-12 col-md-3 col-lg-1 mb-2 mb-lg-0">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-8 col-md-3 col-lg-2 text-center">
                                                    <a href="orderlist/unpaid/details/1" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-1">
                                                    <div class="img-product">
                                                        <button class="btn btn__delete"><i class="fas fa-print"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{ $data->links('vendor.pagination.custom') }}
                                    @endif
                                </div>

                                <div class="tab-pane fade" id="delivered" role="tabpanel" aria-labelledby="delivered-tab">
                                    <div class="head-card-tabs form-box-input">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <div class="form-check me-lg-5 me-3">
                                                    <input class="form-check-input me-lg-4 me-1" type="checkbox" id="selectdelivered" name="selectdelivered">
                                                    <label class="form-check-label" for="selectdelivered">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <span class="mobile">ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">สถานะ</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">การจัดส่ง</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-2"></div>
                                            <div class="col-12 col-md-6 col-lg-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input datadelivered">
                                        <div class="card-header">
                                            <div class="d-lg-flex">
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-10 col-lg-4">
                                                    <div class="form-check me-lg-5 me-1">
                                                        <input class="form-check-input me-lg-4 me-1" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-md-flex">
                                                            <div class="me-3">
                                                                <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                            </div>
                                                            <div class="text-request">
                                                                <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                                                <span>รหัสสินค้า 1234</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-5 col-md-3 col-lg-1">
                                                    <div class="status">
                                                        <p id="delivered2">ที่ต้องจัดส่ง</p>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <span>-</span>
                                                </div>
                                                <div class="col-12 col-md-3 col-lg-1 mb-2 mb-lg-0">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-8 col-md-3 col-lg-2 text-center">
                                                    <a href="orderlist/delivered/details/1" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-1">
                                                    <div class="img-product">
                                                        <button class="btn btn__delete"><i class="fas fa-print"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{ $data->links('vendor.pagination.custom') }}
                                    @endif
                                </div>

                                <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                                    <div class="head-card-tabs form-box-input">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <div class="form-check me-lg-5 me-1">
                                                    <input class="form-check-input me-lg-4 me-1" type="checkbox" id="selectshipping" name="selectshipping">
                                                    <label class="form-check-label" for="selectshipping">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <span class="mobile">ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">สถานะ</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">การจัดส่ง</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-2"></div>
                                            <div class="col-12 col-md-6 col-lg-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input datashipping">
                                        <div class="card-header">
                                            <div class="d-lg-flex">
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-10 col-lg-4">
                                                    <div class="form-check me-lg-5 me-1">
                                                        <input class="form-check-input me-lg-4 me-1" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-md-flex">
                                                            <div class="me-3">
                                                                <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                            </div>
                                                            <div class="text-request">
                                                                <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                                                <span>รหัสสินค้า 1234</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-5 col-md-2 col-lg-1">
                                                    <div class="status">
                                                        <p id="open">กำลังจัดส่ง</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3 col-lg-1 mb-2 mb-lg-0">
                                                    <span>Kerry
                                                        TH1234567890</span>
                                                </div>
                                                <div class="col-12 col-md-3 col-lg-1 mb-2 mb-lg-0">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-8 col-md-2 col-lg-2 text-center">
                                                    <a href="orderlist/shipping/details/1" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-1">
                                                    <div class="img-product">
                                                        <button class="btn btn__delete"><i class="fas fa-print"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{ $data->links('vendor.pagination.custom') }}
                                    @endif
                                </div>

                                <div class="tab-pane fade" id="received" role="tabpanel" aria-labelledby="received-tab">
                                    <div class="head-card-tabs form-box-input">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <div class="form-check me-lg-5 me-3">
                                                    <input class="form-check-input me-lg-4 me-1" type="checkbox" id="selectreceived" name="selectreceived">
                                                    <label class="form-check-label" for="selectreceived">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <span class="mobile">ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">สถานะ</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">การจัดส่ง</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-2"></div>
                                            <div class="col-12 col-md-6 col-lg-2"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input datareceived">
                                        <div class="card-header">
                                            <div class="d-lg-flex">
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-10 col-lg-4">
                                                    <div class="form-check me-lg-5 me-1">
                                                        <input class="form-check-input me-lg-4 me-1" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-md-flex">
                                                            <div class="me-3">
                                                                <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                            </div>
                                                            <div class="text-request">
                                                                <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                                                <span>รหัสสินค้า 1234</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-5 col-md-2 col-lg-1">
                                                    <div class="status">
                                                        <p id="received2">ได้รับสินค้าแล้ว</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3 col-lg-1 mb-2 mb-lg-0">
                                                    <span>Kerry
                                                        TH1234567890</span>
                                                </div>
                                                <div class="col-12 col-md-3 col-lg-1 mb-2 mb-lg-0">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-8 col-md-2 col-lg-2 text-center">
                                                    <a href="orderlist/received/details/1" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-1">
                                                    <div class="img-product">
                                                        <button class="btn btn__delete"><i class="fas fa-print"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{ $data->links('vendor.pagination.custom') }}
                                    @endif
                                </div>

                                <div class="tab-pane fade" id="cancel-order" role="tabpanel" aria-labelledby="cancel-order-tab">
                                    <div class="head-card-tabs form-box-input">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <div class="form-check me-lg-5 me-3">
                                                    <input class="form-check-input me-lg-4 me-2" type="checkbox" id="selectcancel" name="selectcancel">
                                                    <label class="form-check-label" for="selectcancel">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <span class="mobile">ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">สถานะ</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">การจัดส่ง</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-2"></div>
                                            <div class="col-12 col-md-6 col-lg-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input datacancel">
                                        <div class="card-header">
                                            <div class="d-lg-flex">
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-10 col-lg-4">
                                                    <div class="form-check me-lg-5 me-1">
                                                        <input class="form-check-input me-lg-4 me-1" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-md-flex">
                                                            <div class="me-3">
                                                                <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                            </div>
                                                            <div class="text-request">
                                                                <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                                                <span>รหัสสินค้า 1234</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-5 col-md-3 col-lg-1">
                                                    <div class="status">
                                                        <p id="closed">ยกเลิกคำสั่งซื้อ</p>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <span>-</span>
                                                </div>
                                                <div class="col-12 col-md-3 col-lg-1 mb-2 mb-lg-0">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-8 col-md-3 col-lg-2 text-center">
                                                    <a href="orderlist/cancel/details/1" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-1">
                                                    <div class="img-product">
                                                        <button class="btn btn__delete"><i class="fas fa-print"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{ $data->links('vendor.pagination.custom') }}
                                    @endif
                                </div>

                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="head-card-tabs form-box-input">
                                        <div class="row">
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <div class="form-check me-lg-5 me-1">
                                                    <input class="form-check-input me-lg-4 me-1" type="checkbox" id="selectreview" name="selectreview">
                                                    <label class="form-check-label" for="selectreview">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-lg-4">
                                                <span class="mobile">ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">สถานะ</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">การจัดส่ง</span>
                                            </div>
                                            <div class="col-12 col-md-2 col-lg-1">
                                                <span class="mobile">วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-2"></div>
                                            <div class="col-12 col-md-6 col-lg-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input datareview">
                                        <div class="card-header">
                                            <div class="d-lg-flex">
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-lg-0 mb-1 ms-lg-5 ms-1">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-10 col-lg-4">
                                                    <div class="form-check me-lg-5 me-1">
                                                        <input class="form-check-input me-lg-4 me-1" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-md-flex">
                                                            <div class="me-3">
                                                                <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                            </div>
                                                            <div class="text-request">
                                                                <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                                                <span>รหัสสินค้า 1234</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-5 col-md-2 col-lg-1">
                                                    <div class="status">
                                                        <p>ได้รับการรีวิว</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3 col-lg-1 mb-2 mb-lg-0">
                                                    <span>Kerry TH1234567890</span>
                                                </div>
                                                <div class="col-12 col-md-3 col-lg-1 mb-2 mb-lg-0">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-8 col-md-2 col-lg-2 text-center">
                                                    <a href="orderlist/review/details/1" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-1">
                                                    <div class="img-product">
                                                        <button class="btn btn__delete"><i class="fas fa-print"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{ $data->links('vendor.pagination.custom') }}
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<style>
    /*-----------------------------------------
    RESPONSIVE
-------------------------------------------*/
    @media (max-width:426px) {
        .content {
            padding: 1rem 0;
        }

        .box__approvel .txt__page {
            font-size: 16px;
            margin-bottom: 1rem;
        }

        .box__approvel .box__filter {
            padding: 0.5rem 0.5rem 1rem 0.5rem;
        }

        .box__approvel .btn.btn__viewdetail {
            font-size: 14px;
        }

        .box__approvel .box__table {
            margin-top: 0.5rem;
            padding: 0;
        }

        .box__approvel .box__table .nav-tabs {
            width: 1140px;
        }

        .mobile {
            display: none;
        }

        .btn.btn__delete {
            width: 100%;
            padding: 0.375rem 0;
        }

        .form-box-input .btn-search {
            padding: 0.375rem 1rem;
        }
        .status{
            font-size: 14px;
        }
    }

    @media screen and (min-width:427px) and (max-width:767px) {
        .content {
            padding: 1rem 0;
        }

        .box__approvel .txt__page {
            font-size: 20px;
            margin-bottom: 1rem;
            margin-top: 4rem;
        }

        .box__approvel .box__filter {
            padding: 0.5rem 0.5rem 1rem 0.5rem;
        }

        .box__approvel .box__table {
            margin-top: 0.5rem;
            padding: 0;
        }

        .box__approvel .box__table .nav-tabs {
            width: 1140px;
        }

        .mobile {
            display: none;
        }

        .btn.btn__delete {
            width: 100%;
            padding: 0.375rem 0;
        }

        .form-box-input .btn-search {
            padding: 0.375rem 1rem;
        }
        .status{
            font-size: 14px;
        }
    }

    @media screen and (min-width:768px) and (max-width:1023px) {
        .content {
            padding: 1rem 0;
        }

        .box__approvel .txt__page {
            font-size: 24px;
            margin-bottom: 1rem;
        }

        .box__approvel .box__filter {
            padding: 0.5rem 0.5rem 1rem 0.5rem;
        }

        .box__approvel .box__table {
            margin-top: 0.5rem;
            padding: 0;
        }

        .box__approvel .box__table .nav-tabs {
            width: 1140px;
        }

        .btn.btn__delete {
            width: 100%;
            padding: 0.375rem 0;
        }

        .form-box-input .btn-search {
            padding: 0.375rem 0.5rem;
            font-size: 14px;
        }
        .status{
            font-size: 14px;
        }

    }

    @media screen and (min-width:1024px) and (max-width:1279px) {
        .box__filter .title__txt {
            font-size: 13px;
        }

        .box__approvel .box__filter {
            padding: 1rem 0.5rem 2rem 0.5rem;
        }

        .content {
            padding: 1rem 0.5rem;
        }
        .btn.btn__delete {
            width: 100%;
            padding: 0.375rem 0;
        }
    }
</style>
@stop

@section('script')
<script>
    $("#selectall").click(function(e) {
        if ($(this).is(":checked")) {
            $(".dataall input[type='checkbox']").prop('checked', true);
        } else {
            $(".dataall input[type='checkbox']").prop('checked', false);
        }
        // $(".dataall input[type='checkbox']").each(function(key,value){
        //     console.log(key);
        // })
        // e.preventDefault();
    });

    $("#selectunpaid").click(function(e) {
        if ($(this).is(":checked")) {
            $(".dataunpaid input[type='checkbox']").prop('checked', true);
        } else {
            $(".dataunpaid input[type='checkbox']").prop('checked', false);
        }
        // e.preventDefault();
    });

    $("#selectdelivered").click(function(e) {
        if ($(this).is(":checked")) {
            $(".datadelivered input[type='checkbox']").prop('checked', true);
        } else {
            $(".datadelivered input[type='checkbox']").prop('checked', false);
        }
        // e.preventDefault();
    });

    $("#selectshipping").click(function(e) {
        if ($(this).is(":checked")) {
            $(".datashipping input[type='checkbox']").prop('checked', true);
        } else {
            $(".datashipping input[type='checkbox']").prop('checked', false);
        }
        // e.preventDefault();
    });

    $("#selectreceived").click(function(e) {
        if ($(this).is(":checked")) {
            $(".datareceived input[type='checkbox']").prop('checked', true);
        } else {
            $(".datareceived input[type='checkbox']").prop('checked', false);
        }
        // e.preventDefault();
    });

    $("#selectcancel").click(function(e) {
        if ($(this).is(":checked")) {
            $(".datacancel input[type='checkbox']").prop('checked', true);
        } else {
            $(".datacancel input[type='checkbox']").prop('checked', false);
        }
        // e.preventDefault();
    });

    $("#selectreview").click(function(e) {
        if ($(this).is(":checked")) {
            $(".datareview input[type='checkbox']").prop('checked', true);
        } else {
            $(".datareview input[type='checkbox']").prop('checked', false);
        }
        // e.preventDefault();
    });
</script>
@stop