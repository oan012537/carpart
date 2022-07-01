@extends('backend.layouts.templates')
@section('content')
<style type="text/css">
    .my-active span{
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

                <div class="col-12">
                    <div class="box__filter">
                        <form class="px-2">
                            <div class="row">
                                <div class="col-2">
                                    <label class="title__txt">หมายเลขคำสั่งซื้อ</label>
                                    <input type="text" class="form-control" placeholder="ระบุ">
                                </div>
                                <div class="col-2">
                                    <label class="title__txt">ร้านค้า/ผู้ซื้อ</label>
                                    <input type="text" class="form-control" placeholder="ระบุ">
                                </div>
                                <div class="col-2">
                                    <label class="title__txt">หมวดหมู่สินค้า</label>
                                    <input type="text" class="form-control" placeholder="ระบุ">
                                </div>

                                <div class="col-2">
                                    <label class="title__txt">สถานะ</label>
                                    <select class="form-select">
                                        <option>ระบุ....</option>
                                    </select>
                                </div>

                                <div class="col-4">
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
                    <div class="d-flex justify-content-between mt-3 mt-lg-5">
                        <div class="txt__detail_num">
                            {{-- <span>17 รายการ</span> --}}
                        </div>
                        <div class="col-3 d-flex">
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
                                            <div class="col-4">
                                                <div class="form-check me-5">
                                                    <input class="form-check-input me-4" type="checkbox" id="selectall" name="selectall" >
                                                    <label class="form-check-label" for="selectall">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <span>ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-1">
                                                <span>สถานะ</span>
                                            </div>
                                            <div class="col-1">
                                                <span>การจัดส่ง</span>
                                            </div>
                                            <div class="col-1">
                                                <span>วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input dataall">
                                        <div class="card-header">
                                            <div class="d-flex">
                                                <p class="mb-0 ms-5">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-check me-5">
                                                        <input class="form-check-input me-4" type="checkbox" id="check1" name="option[all][]" value="something">
                                                        <div class="d-flex">
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
                                                <div class="col-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-1">
                                                    <div class="status">
                                                        <p id="unpaid">ยังไม่ได้ชำระ</p>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <span>-</span>
                                                </div>
                                                <div class="col-1">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <a href="unpaid-order-detail.php" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-1">
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
                                            <div class="col-4">
                                                <div class="form-check me-5">
                                                    <input class="form-check-input me-4" type="checkbox" id="selectunpaid" name="selectunpaid" value="">
                                                    <label class="form-check-label" for="selectunpaid">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <span>ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-1">
                                                <span>สถานะ</span>
                                            </div>
                                            <div class="col-1">
                                                <span>การจัดส่ง</span>
                                            </div>
                                            <div class="col-1">
                                                <span>วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input dataunpaid">
                                        <div class="card-header">
                                            <div class="d-flex">
                                                <p class="mb-0 ms-5">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-check me-5">
                                                        <input class="form-check-input me-4" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-flex">
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
                                                <div class="col-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-1">
                                                    <div class="status">
                                                        <p id="unpaid">ยังไม่ได้ชำระ</p>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <span>-</span>
                                                </div>
                                                <div class="col-1">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <a href="unpaid-order-detail.php" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-1">
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
                                            <div class="col-4">
                                                <div class="form-check me-5">
                                                    <input class="form-check-input me-4" type="checkbox" id="selectdelivered" name="selectdelivered">
                                                    <label class="form-check-label" for="selectdelivered">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <span>ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-1">
                                                <span>สถานะ</span>
                                            </div>
                                            <div class="col-1">
                                                <span>การจัดส่ง</span>
                                            </div>
                                            <div class="col-1">
                                                <span>วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input datadelivered">
                                        <div class="card-header">
                                            <div class="d-flex">
                                                <p class="mb-0 ms-5">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-check me-5">
                                                        <input class="form-check-input me-4" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-flex">
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
                                                <div class="col-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-1">
                                                    <div class="status">
                                                        <p id="unpaid">ยังไม่ได้ชำระ</p>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <span>-</span>
                                                </div>
                                                <div class="col-1">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <a href="unpaid-order-detail.php" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-1">
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
                                            <div class="col-4">
                                                <div class="form-check me-5">
                                                    <input class="form-check-input me-4" type="checkbox" id="selectshipping" name="selectshipping">
                                                    <label class="form-check-label" for="selectshipping">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <span>ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-1">
                                                <span>สถานะ</span>
                                            </div>
                                            <div class="col-1">
                                                <span>การจัดส่ง</span>
                                            </div>
                                            <div class="col-1">
                                                <span>วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input datashipping">
                                        <div class="card-header">
                                            <div class="d-flex">
                                                <p class="mb-0 ms-5">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-check me-5">
                                                        <input class="form-check-input me-4" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-flex">
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
                                                <div class="col-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-1">
                                                    <div class="status">
                                                        <p id="unpaid">ยังไม่ได้ชำระ</p>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <span>-</span>
                                                </div>
                                                <div class="col-1">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <a href="unpaid-order-detail.php" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-1">
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
                                            <div class="col-4">
                                                <div class="form-check me-5">
                                                    <input class="form-check-input me-4" type="checkbox" id="selectreceived" name="selectreceived">
                                                    <label class="form-check-label" for="selectreceived">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <span>ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-1">
                                                <span>สถานะ</span>
                                            </div>
                                            <div class="col-1">
                                                <span>การจัดส่ง</span>
                                            </div>
                                            <div class="col-1">
                                                <span>วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input datareceived">
                                        <div class="card-header">
                                            <div class="d-flex">
                                                <p class="mb-0 ms-5">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-check me-5">
                                                        <input class="form-check-input me-4" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-flex">
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
                                                <div class="col-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-1">
                                                    <div class="status">
                                                        <p id="unpaid">ยังไม่ได้ชำระ</p>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <span>-</span>
                                                </div>
                                                <div class="col-1">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <a href="unpaid-order-detail.php" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-1">
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
                                            <div class="col-4">
                                                <div class="form-check me-5">
                                                    <input class="form-check-input me-4" type="checkbox" id="selectcancel" name="selectcancel">
                                                    <label class="form-check-label" for="selectcancel">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <span>ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-1">
                                                <span>สถานะ</span>
                                            </div>
                                            <div class="col-1">
                                                <span>การจัดส่ง</span>
                                            </div>
                                            <div class="col-1">
                                                <span>วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input datacancel">
                                        <div class="card-header">
                                            <div class="d-flex">
                                                <p class="mb-0 ms-5">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-check me-5">
                                                        <input class="form-check-input me-4" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-flex">
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
                                                <div class="col-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-1">
                                                    <div class="status">
                                                        <p id="unpaid">ยังไม่ได้ชำระ</p>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <span>-</span>
                                                </div>
                                                <div class="col-1">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <a href="unpaid-order-detail.php" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-1">
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
                                            <div class="col-4">
                                                <div class="form-check me-5">
                                                    <input class="form-check-input me-4" type="checkbox" id="selectreview" name="selectreview">
                                                    <label class="form-check-label" for="selectreview">รายการสินค้า</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <span>ยอดคำสั่งซื้อทั้งหมด</span>
                                            </div>
                                            <div class="col-1">
                                                <span>สถานะ</span>
                                            </div>
                                            <div class="col-1">
                                                <span>การจัดส่ง</span>
                                            </div>
                                            <div class="col-1">
                                                <span>วันที่สั่งซื้อ</span>
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-1"></div>
                                        </div>
                                    </div>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $key => $value)
                                    <div class="card form-box-input datareview">
                                        <div class="card-header">
                                            <div class="d-flex">
                                                <p class="mb-0 ms-5">หมายเลขคำสั่งซื้อ : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ร้านค้า : W123467845123</p>
                                                <p class="mb-0 ms-5">ID ผู้ซื้อ : W123467845123</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-check me-5">
                                                        <input class="form-check-input me-4" type="checkbox" id="check1" name="option1" value="something">
                                                        <div class="d-flex">
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
                                                <div class="col-2">
                                                    <span>299 ฿</span>
                                                </div>
                                                <div class="col-1">
                                                    <div class="status">
                                                        <p id="unpaid">ยังไม่ได้ชำระ</p>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <span>-</span>
                                                </div>
                                                <div class="col-1">
                                                    <span>15/15/2560
                                                        18.00</span>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <a href="unpaid-order-detail.php" class="btn btn-search mt-0">ดูรายละเอียด</a>
                                                </div>
                                                <div class="col-1">
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

@stop

@section('script')
<script>
    $("#selectall").click(function (e) {
        if($(this).is(":checked")){
            $(".dataall input[type='checkbox']").prop('checked',true);
        }else{
            $(".dataall input[type='checkbox']").prop('checked',false);
        }
        // $(".dataall input[type='checkbox']").each(function(key,value){
        //     console.log(key);
        // })
        // e.preventDefault();
    });

    $("#selectunpaid").click(function (e) {
        if($(this).is(":checked")){
            $(".dataunpaid input[type='checkbox']").prop('checked',true);
        }else{
            $(".dataunpaid input[type='checkbox']").prop('checked',false);
        }
        // e.preventDefault();
    });

    $("#selectdelivered").click(function (e) {
        if($(this).is(":checked")){
            $(".datadelivered input[type='checkbox']").prop('checked',true);
        }else{
            $(".datadelivered input[type='checkbox']").prop('checked',false);
        }
        // e.preventDefault();
    });

    $("#selectshipping").click(function (e) {
        if($(this).is(":checked")){
            $(".datashipping input[type='checkbox']").prop('checked',true);
        }else{
            $(".datashipping input[type='checkbox']").prop('checked',false);
        }
        // e.preventDefault();
    });

    $("#selectreceived").click(function (e) {
        if($(this).is(":checked")){
            $(".datareceived input[type='checkbox']").prop('checked',true);
        }else{
            $(".datareceived input[type='checkbox']").prop('checked',false);
        }
        // e.preventDefault();
    });

    $("#selectcancel").click(function (e) {
        if($(this).is(":checked")){
            $(".datacancel input[type='checkbox']").prop('checked',true);
        }else{
            $(".datacancel input[type='checkbox']").prop('checked',false);
        }
        // e.preventDefault();
    });

    $("#selectreview").click(function (e) {
        if($(this).is(":checked")){
            $(".datareview input[type='checkbox']").prop('checked',true);
        }else{
            $(".datareview input[type='checkbox']").prop('checked',false);
        }
        // e.preventDefault();
    });
</script>
@stop