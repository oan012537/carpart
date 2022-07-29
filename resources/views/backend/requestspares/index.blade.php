@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="request-form">
<input type="hidden" id="pagemenuName" name="pagemenuName" value="requestspares">



<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">ใบคำขอหาอะไหล่</h2>
                </div>

                <div class="col-lg-12">
                    <div class="box__filter">
                        <form class="px-2">
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label class="title__txt">ค้นหาตามแบรนด์</label>
                                    <select class="form-select">
                                        <option>ระบุ....</option>
                                    </select>
                                </div>

                                <div class="col-12 col-md-4 col-lg-2">
                                    <label class="title__txt">ค้นหาตามประเภทอะไหล่</label>
                                    <select class="form-select">
                                        <option>ระบุ....</option>
                                    </select>
                                </div>

                                <div class="col-12 col-md-4 col-lg-2">
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
                    <div class="txt__detail_num mt-3 mt-lg-5">
                        <span>17 รายการ</span>
                    </div>
                    <div class="box__table">
                        <div class="px-2" id="card-detail">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="open-request-tab" data-bs-toggle="tab" data-bs-target="#open-request" type="button" role="tab" aria-controls="open-request" aria-selected="true">เปิดรับคำขอ <span class="circle"> 1234</span></button>
                                    <button class="nav-link" id="closed-request-tab" data-bs-toggle="tab" data-bs-target="#closed-request" type="button" role="tab" aria-controls="closed-request" aria-selected="false">ปิดรับคำขอแล้ว <span class="circle"> 14</span></button>
                                </div>
                            </nav>
                            <div class="tab-content mt-4" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="open-request" role="tabpanel" aria-labelledby="open-request-tab">
                                    @if(!empty($brands))
                                    @foreach($brands as $key => $value)
                                    <div class="card form-box-input">
                                        <div class="card-header">
                                            <div class="d-lg-flex justify-content-between">
                                                <div class="d-md-flex">
                                                    <div class="form-check me-md-5 me-0">
                                                        <input class="form-check-input me-lg-3 me-0" type="checkbox" id="check1" name="option1" value="something">
                                                        <label class="form-check-label mb-2 mb-lg-0 ms-2">หมายเลขใบคำขอหาอะไหล่ : W123467845123</label>
                                                    </div>
                                                    <p>ID ผู้ซื้อ : W123467845123</p>
                                                </div>
                                                <div class="">
                                                    <p>วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-md-flex justify-content-between">
                                                <div class="d-md-flex">
                                                    <div class="me-3">
                                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                    </div>
                                                    <div class="text-request">
                                                        <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                                        <span>รหัสสินค้า 1234</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="{{url('backend/requestspares/view/1')}}" class="btn btn__viewdetail mt-3 mt-md-0">ดูรายละเอียด</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-md-flex justify-content-between">
                                                <div class="d-flex">
                                                    <div class="box__btn me-2 me-md-3">
                                                        <a href="#" class="btn btn__viewdetail">ลบ</a>
                                                    </div>
                                                    <span>ข้อเสนอที่ได้รับ 12,000 สินค้า</span>
                                                </div>
                                                <div class="status">
                                                    <p id="open" class="mt-3 mt-md-0">สถานะ : เปิดรับคำขอ</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{ $brands->links('vendor.pagination.custom') }}
                                    @endif
                                </div>

                                <div class="tab-pane fade" id="closed-request" role="tabpanel" aria-labelledby="closed-request-tab">
                                    @if(!empty($brands))
                                    @foreach($brands as $key => $value)
                                    <div class="card form-box-input">
                                        <div class="card-header">
                                            <div class="d-lg-flex justify-content-between">
                                                <div class="d-md-flex">
                                                    <div class="form-check me-md-5 me-0">
                                                        <input class="form-check-input me-lg-3 me-0" type="checkbox" id="check1" name="option1" value="something">
                                                        <label class="form-check-label mb-2 mb-lg-0 ms-2">หมายเลขใบคำขอหาอะไหล่ : W123467845123</label>
                                                    </div>
                                                    <p>ID ผู้ซื้อ : W123467845123</p>
                                                </div>
                                                <div class="">
                                                    <p>วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-md-flex justify-content-between">
                                                <div class="d-md-flex">
                                                    <div class="me-3">
                                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                    </div>
                                                    <div class="text-request">
                                                        <p>กรองน้ำมันเครื่อง VIOS YARIS ALTIS AVANZA AE80 , AE90 , AE101 16V</p>
                                                        <span>รหัสสินค้า 1234</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="{{url('backend/requestspares/view/1')}}" class="btn btn__viewdetail">ดูรายละเอียด</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-md-flex justify-content-between">
                                                <div class="d-flex">
                                                    <div class="box__btn me-2 me-md-3">
                                                        <a href="#" class="btn btn__viewdetail">ลบ</a>
                                                    </div>
                                                    <span>ข้อเสนอที่ได้รับ 12,000 สินค้า</span>
                                                </div>
                                                <div class="status">
                                                    <p id="open" class="mt-3 mt-md-0">สถานะ : เปิดรับคำขอ</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{ $brands->links('vendor.pagination.custom') }}
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
    
</script>
@stop