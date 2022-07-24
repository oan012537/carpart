@extends('backend.layouts.templates')
@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
<input type="hidden" id="pageName" name="pageName" value="manageproduct">
<input type="hidden" id="pageName2" name="pageName2" value="manageproduct">

<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">ข้อมูลสินค้า</h2>
                </div>

                <div class="col-10">

                    <div class="box__accordian__edit">
                        <div class="box__filter">
                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product1"><span><i class="fas fa-info-circle"></i></span> ข้อมูลสินค้า<p class="mb-0 mt-3">รายละเอียด</p></button>
                            <div id="data-product1" class="collapse show mb-5">
                                <form class="form-box-input px-2">
                                    <div class="row">
                                        <div class="col-6 mb-4">
                                            <label class="title__txt">ID</label>
                                            <input type="text" class="form-control" id="" value="{{$data->id}}" disabled>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label class="title__txt">ชื่อสินค้า/Product Name (TH) <span class="text-red">*</span></label>
                                            <input type="text" class="form-control" id="" value="{{$data->name_th}}" disabled>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label for="" class="title__txt">ชื่อสินค้า/Product Name (EN) <span class="text-red">*</span></label>
                                            <input type="text" class="form-control" id="" value="{{$data->name_en}}" disabled>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label for="" class="title__txt">ชื่อสินค้าที่ใช้ในการซื้อขายจริง</label>
                                            <input type="text" class="form-control" id="" value="{{$data->trading_name}}" disabled>
                                            <span class="text-red">กรณีไม่ระบุจะนำชื่อสินค้าที่ระบบประมวลผลให้แสดงแทน</span>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label class="title__txt">รูปภาพสินค้า<span class="text-red">*</span></label>
                                                {{-- <button class="btn btn-search" type="button" id=""><i class="fas fa-qrcode"></i> สแกน QR Code เพื่ออัปโหลดวีดีโอผ่านมือถือ</button> --}}
                                            </div>
                                            <div class="box-img-input">
                                                <div class="manage-input-product">
                                                    @if(!empty($product_image))
                                                    @foreach($product_image as $images)
                                                    <div class="img-product">
                                                        <img src="{{ asset('product/images/' . $images) }}" class="img-fluid" alt="{{ $data->name_en }}">
                                                    </div>
                                                    @endforeach
                                                    @else
                                                    <div class="img-product">
                                                        <img src="{{asset('backends/assets/img/request-form/Frame 24513.png')}}" class="img-request">
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label class="title__txt">เกรด<span class="text-red">*</span></label>
                                            <div class="d-flex mt-2">
                                                <div class="form-check ms-5">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="Genuine" @if ($data->grade == 'Genuine') checked @endif disabled>
                                                    <label class="form-check-label">แท้/Genuine</label>
                                                </div>
                                                <div class="form-check ms-5">
                                                    <input type="checkbox" class="form-check-input" id="check2" name="option2" value="OEM" @if ($data->grade == 'OEM') checked @endif disabled>
                                                    <label class="form-check-label">OEM</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label class="title__txt">ผู้ผลิตชิ้นส่วน/Maker </label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ" value="{{ old('maker')? old('maker'): $data->maker }}" disabled>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label class="title__txt">Genuine PARTS NO./SKU CODE</label>
                                            <input type="text" class="form-control" id="" placeholder="ATCB-1000-01" value="{{ old('sku_code')? old('sku_code'): $data->sku_code }}" disabled>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label for="" class="title__txt">คุณภาพสินค้า<span class="text-red">*</span></label>
                                            <select class="form-select" disabled>
                                                {{-- <option>ดีมาก/Excellent (80~100%)</option> --}}
                                                @foreach ($product_qualities as $quality)
                                                <option value="{{ $quality }}" 
                                                {{-- @if ($quality == $data->quality) selected @endif --}}
                                                    >{{ trans('file.'. $quality) }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label for="" class="title__txt">รหัสสินค้าภายในร้าน/Shop Original Code.</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ" value="{{ old('shop_original_code')? old('shop_original_code'): $data->shop_original_code }}" disabled>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label class="title__txt">VIN Code </label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ" value="{{ old('vin_code')? old('vin_code'): $data->vin_code }}" disabled>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label class="title__txt">Full Model Code</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ" value="{{ old('full_model_code')? old('full_model_code'): $data->full_model_code }}" disabled>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label class="title__txt">Engine Model Code</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ" value="{{ old('engine_model_code')? old('engine_model_code'): $data->engine_model_code }}" disabled>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label class="title__txt">สีภายใน/Trim</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ" value="{{ old('color')? old('color'): $data->color }}" disabled>
                                        </div>

                                        <div class="col-6 mb-4">
                                            <label class="title__txt">สีภายนอก/Color</label>
                                            <input type="text" class="form-control" id="" placeholder="ระบุ" value="{{ old('trim')? old('trim'): $data->color }}" disabled>
                                        </div>
                                    </div>

                                </form>
                                <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product1">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                            <hr>
                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product2">การรับประกัน</button>
                            <div id="data-product2" class="collapse show mb-5">
                                <form class="form-box-input px-2">
                                    <div class="col-12 mb-4">
                                        <label class="title__txt">การรับประกัน<span class="text-red">*</span></label>
                                        <div class="d-flex mt-2">
                                            <div class="form-check ms-5">
                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" @if($data->is_warranty == 1) checked @endif disabled>
                                                <label class="form-check-label">มี</label>
                                            </div>
                                            <div class="form-check ms-5">
                                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something" @if($data->is_warranty == 0) checked @endif disabled>
                                                <label class="form-check-label">ไม่มี</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mb-4">
                                        <label class="title__txt">ระยะเวลาการรับประกัน</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control border-end-0 w-50" placeholder="6" name="" value="{{ old('duration')? old('duration'): isset($warranty->duration)? $warranty->duration : '' }}" disabled>
                                            <select class="border-start-0 form-select text-center" disabled>
                                                @foreach ($day_month_year as $timeType)
                                                    <option value="{{ $timeType }}" 
                                                        @if($timeType == (isset($warranty->year_month_day)? $warranty->year_month_day : '')) selected @endif
                                                        >{{ trans('file.' . $timeType) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="text-red">ระยะเวลารับประกันสินค้าต้องเป็นไปตามประเภทของชิ้นส่วน</span>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label class="title__txt">เงื่อนไขการรับประกัน/รายละเอียดเกี่ยวกับสินค้าและคุณภาพเพิ่มเติม(ถ้ามี)</label><br>
                                        <span class="text-red">เช่น รอย,การเกิดสนิม,การแตกหัก,ชิ้นส่วนประกอบไม่ครบ,อะไหล่บิ้วต์ หรือ ข้อมูลอื่นๆ</span>
                                        <textarea rows="5" class="form-control" placeholder="ระบุ" disabled>{{ old('term_and_condition')? old('term_and_condition'): $data->term_and_condition }}</textarea>
                                    </div>
                                </form>

                                <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product2">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                            <hr>
                            {{-- transportion --}}
                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product3">ข้อมูลสำหรับการขนส่ง</button>
                            <div id="data-product3" class="collapse show mb-5">
                                <div class="row mb-4">
                                    <div class="col-2">
                                        <label class="title__txt">น้ำหนักสินค้า</label>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control border-end-0 w-50" placeholder="00.00" name="" value="{{ old('weight')? old('weight'): isset($transport->weight)? $transport->weight : 0 }}" disabled>
                                            <select class="border-start-0 form-select text-center" disabled>
                                                {{-- <option>KG</option> --}}
                                                @foreach ($units as $unit)
                                                    <option value="{{ $unit }}" 
                                                        @if($unit == (isset($transport->unit)? $transport->unit : '')) selected @endif
                                                        >{{ $unit }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-2">
                                        <label class="title__txt">ขนาดของสินค้า</label>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <input type="text" class="form-control text-center" id="" placeholder="กว้าง" value="{{ old('width')? old('width'): isset($transport->width)? $transport->width : '' }}" disabled>
                                            <span class="mx-2"></span>
                                            <input type="text" class="form-control text-center" id="" placeholder="ยาว" value="{{ old('length')? old('length'): isset($transport->length)? $transport->length : '' }}" disabled>
                                            <span class="mx-2"></span>
                                            <input type="text" class="form-control text-center" id="" placeholder="สูง" value="{{ old('height')? old('height'): isset($transport->height)? $transport->height : '' }}" disabled>
                                            <span class="title__txt mx-3">หน่วย</span>
                                            <select class="form-select text-center" disabled>
                                                @foreach ($uoms as $uom)
                                                    <option value="{{ $uom }}" 
                                                        @if($uom == (isset($transport->uom)? $transport->uom : '')) selected @endif
                                                        >{{ $uom }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-2">
                                        <label class="title__txt">การขนส่ง</label>
                                    </div>
                                    <div class="col-10">
                                        <div class="card form-box-input setting-transport">
                                            <diV class="card-header">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked disabled>
                                                    <label class="form-check-label" for="check1">การจัดส่งที่รองรับโดยCPN</label>
                                                </div>
                                            </diV>
                                            <diV class="card-body">
                                                @foreach($deliverys as $delivery)
                                                @if($delivery->grouptypecpn = 'การจัดส่งที่รองรับโดย CPN')
                                                <div class="row">
                                                    <div class="col-8">
                                                        <p>ประเภทการจัดส่ง <span class="sent-conf">การจัดส่งที่รองรับโดย CPN</span></p>
                                                    </div>
                                                    <div class="col-2">
                                                        {{-- <span>฿ 29.00</span> --}}
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                            </diV>

                                        </div>
                                        <div class="card form-box-input setting-transport">
                                            <diV class="card-header">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" disabled>
                                                    <label class="form-check-label" for="check1">บริษัทขนส่งเอกชน(พัสดุชิ้นใหญ่)</label>
                                                </div>
                                            </diV>
                                            <diV class="card-body">
                                                @foreach($deliverys as $delivery)
                                                @if($delivery->grouptypecpn = 'บริษัทขนส่งเอกชนชิ้นใหญ่')
                                                <div class="row">
                                                    <div class="col-8">
                                                        <p>ประเภทการจัดส่ง <span class="sent-conf">การจัดส่งที่รองรับโดย CPN</span></p>
                                                    </div>
                                                    <div class="col-2">
                                                        {{-- <span>฿ 29.00</span> --}}
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                            </diV>

                                        </div>
                                        <div class="card form-box-input setting-transport">
                                            <diV class="card-header">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" disabled>
                                                    <label class="form-check-label" for="check1">แสดง ชื่อขนส่งที่ Supplier setting ไว้</label>
                                                </div>
                                            </diV>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="title__txt">การเตรียมการส่ง</label>
                                    </div>
                                    <div class="col-10">
                                        <div class="form-box-input row mt-2">
                                            <div class="col-2 form-check ms-5">
                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="1" @if((isset($transport->is_deliver)? $transport->is_deliver:true) == true) checked @endif disabled>
                                                <label class="form-check-label">พร้อมส่ง</label>
                                            </div>
                                            <div class="col-3 form-check ms-5">
                                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="0"  @if((isset($transport->is_deliver)? $transport->is_deliver:true) == false) checked @endif disabled>
                                                <label class="form-check-label">เตรียมการส่งนานกว่าปกติ</label><br>
                                                <div class="d-flex mt-2 ms-2">
                                                    <label class="title__txt me-3">ระบุวัน</label>
                                                    <select class="form-select w-50">
                                                        @for ($i = 1; $i <= 31; $i++)
                                                            <option value="{{ $i }}" @if((isset($transport->estimated_days)? $transport->estimated_days : 0) == $i) selected @endif
                                                            >{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-red">**กำหนดระยะเวลาตรวจสอบสินค้าระหว่างการจัดส่ง ภายใน 3 วัน หลังจากวันที่ได้รับสินค้า**</span>
                                    </div>
                                </div>

                                <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product3">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                            <hr>
                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product4">
                                <div class="row">
                                    <p class="col-5 mb-0">ราคา</p>
                                    <p class="col-7 mb-0">ประมาณการรายรับสุทธิของสินค้าชิ้นนี้</p>
                                </div>
                            </button>
                            <div id="data-product4" class="collapse show mb-5">
                                <div class="row form-box-input mb-4">
                                    <div class="col-5">
                                        <div class="col-8">
                                            <label class="title__txt">ราคา <span class="text-red">(รวม VAT)</span></label>
                                            <input type="text" class="form-control" id="" value="{{ old('price')? old('price'): $data->price }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="row">
                                            <div class="col-4">
                                                <label class="title__txt">คอมมิชชั่น </label>
                                                <input type="text" class="form-control" id="" value="{{ old('commission')? old('commission'): $data->commission }}" disabled>
                                            </div>
                                            <div class="col-6">
                                                <label class="title__txt">รายรับสุทธิ </label>
                                                <input type="text" class="form-control" id="" value="{{ old('revenue')? old('revenue'): $data->revenue }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn-shot" data-bs-toggle="collapse" data-bs-target="#data-product4">ย่อ <i class="fas fa-angle-up"></i></button>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <a href="{{route('backend.product')}}" class="btn btn__app px-5">กลับ</a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="box__accordian__edit">
                        <div class="box__filter">
                            <button type="button" class="data-edit txt_box_card" data-bs-toggle="collapse" data-bs-target="#data-product9">
                                <p><span><i class="fas fa-info-circle"></i></span> ข้อมูลสินค้า<span class="btn-shot"><i class="fas fa-angle-up"></i></span></p>
                            </button>
                            <div id="data-product9" class="collapse show">
                                <ul id="progressbar">
                                    <li class="active">
                                        <p class="progress-icon"></p>รายละเอียด
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>การรับประกัน
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>ข้อมูลสำหรับการขนส่ง
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>ราคา
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p>จำนวน
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="box__accordian__edit mt-3">
                        <div class="box__filter">
                            <div class="form-box-input">
                                <p class="title__txt">วันที่สร้าง</p>
                                <p>{{ $data->created_at }}</p>
                                <p class="title__txt">ผู้สร้าง</p>
                                <p>{{ $data->created_by }}</p>
                                <p class="title__txt">สถานะขาย</p>
                                @if ($data->status_code == 'sell')
                                <div class="box__status status-selling">{{ trans('file.Selling') }}</div> 
                                @elseif ($data->status_code == 'sold')
                                    <div class="box__status status-sold">{{ trans('file.Sold') }}</div>
                                @elseif ($data->status_code == 'suspended')
                                    <div class="box__status status-banned">{{ trans('file.Suspended') }}</div>
                                @elseif ($data->status_code == 'cancle')
                                    <div class="box__status status-cancle">{{ trans('file.Cancel') }}</div>
                                @else
                                    <small class="status-process">เปิดใช้งาน</small>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- <div class="box__accordian__edit mt-3">
                        <div class="box__filter">
                            <div class="form-box-input">
                                <label class="title__txt">Promotion CODE</label>
                                <input type="text" class="form-control" id="" placeholder="ระบุ">
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="form-box-input mt-3">
                        <button class="btn btn__app btn__noapproval w-100 text-light" data-bs-toggle="modal" data-bs-target="#confirm"><i class="fas fa-times-circle"></i> ระงับการขาย</button>
                        <!-- The Modal -->
                        <div class="modal fade" id="confirm">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="{{asset('backends/assets/img/request-form/conf-noapprov.png')}}">
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer text-center">
                                        <p class="text-conf mb-3">คุณแน่ใจที่จะระงับการขาย!</p>
                                        <button class="btn btn__app px-5" data-bs-dismiss="modal">ยกเลิก</button>
                                        <button class="btn btn__app btn__waitapproval px-5" data-bs-toggle="modal" data-bs-target="#complete">ตกลง</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="complete">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="{{asset('backends/assets/img/request-form/comp-noapprov.png')}}">
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer text-center">
                                        <p class="text-conf mb-3">ระงับการขายสำเร็จ</p>
                                        <button class="btn btn__app px-5" data-bs-dismiss="modal">ยกเลิก</button>
                                        <button class="btn btn__app btn__waitapproval px-5" data-bs-dismiss="modal">ตกลง</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> --}}
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