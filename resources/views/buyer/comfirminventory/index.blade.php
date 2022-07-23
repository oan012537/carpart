@extends('buyer.layouts.template')

@section('matavendor')
<link href="{{ asset('assets/css/confirm.css') }}" rel="stylesheet">
@stop

@section('content')


<section id="sec-confirm">

    <form id="form_confirmInventory" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="h-text-confirm">
                <p>
                    ใบคำขอยืนยันความพร้อมของสินค้า
                </p>
            </div>
            <div class="d-text-confirm">
                <p>
                    คุณสามารถเช็คสต็อกกับผู้ขายพร้อมไปกับการสอบถามข้อมูลเพิ่มเติมกรณีมีข้อสงสัยได้ที่นี่
                </p>
            </div>
            <div class="but-but-button6">
                @php
                    $link_id = $product->id;
                    $link_product_name = $product->name_th;
                    $product_name = $link_product_name;
                    $link_product_name = str_replace(' ', '-', $product_name);
                    $link_url = 'product/'.$link_product_name;
                @endphp
                <a href="{{ url($link_url, $link_id) }}">
                    <button type="button" class="button button6"> <i class='fas fa-angle-left'></i> กลับไปหน้าสินค้า </button>
                </a>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <input type="text" id="supplier_id" name="supplier_id" value="{{ $product->supplier_id }}"> <!-- input supplier_id -->
                    <p> Shop ID: {{ $product->supplier->id }} </p>
                    <div class="img-lo-iconniti">
                        <img src="{{ asset('assets/img/confirm/lo1.png') }}" class="img-fluid" alt="shoe image">
                    </div>
                </div>
                <div class="tt-text-niti">
                    <!-- corporate , personal -->
                    @php 
                        $supplier_type_th = "";
                        switch($product->supplier->supplier_type){
                            case "corporate" : $supplier_type_th = "นิติบุคคล";
                                break;
                            case "personal" : $supplier_type_th = "บุคคลธรรมดา";
                                break;   
                        }
                    @endphp
                    <p>
                        {{ $supplier_type_th }}
                    </p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="{{ asset('assets/img/prodetail/pr1.png') }}" class="img-fluid" alt="shoe image">
                        </div>
                        <div class="col-lg-7">
                            <input type="text" id="product_id" name="product_id" value="{{ $product->id }}"> <!-- input product_id -->
                            <input type="text" id="product_name" name="product_name" value="{{ $product->name_th }}"> <!-- input product_name -->
                            <p class="card-title"> {{ $product->name_th }}</p>
                            <p class="card-text"> รหัสสินค้า {{ $product->product_code }} </p>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="product_price" name="product_price" value="{{ $product->price }}"> <!-- input product_price -->
                            <p class="card-title">{{ number_format($product->price) }} ฿</p>
                        </div>
                    </div>
                </div>
            </div>

            <br> <br> <br>
            <div class="card2">
                <div class="card-body">
                    <p class="card-title"> วิดีโอไม่เพียงพอต่อการตัดสินใจหรือ? คุณสามารถร้องขอเพิ่มจากผู้ขายได้ </p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="yes" id="request_vdo" name="request_vdo" checked><!-- input request_vdo -->
                        <label class="form-check-label" for="request_vdo">
                            ต้องการวีดีโอเพิ่มเติม (ไม่บังคับ)
                        </label>
                    </div>
                </div>
            </div>

            <br>
            <div class="card3">
                <div class="card-body">
                    <p class="card-title"> ไม่มั่นใจว่าสามารถใช้ร่วมกันกับรถหรือ? คุณสามารถร้องขอการตรวจสอบจากผู้ขายได้</p>
                    <p class="card-detail"> คุณสามารถแนบรูป Caution Plate หรือ ระบุ VIN Code ด้านล่าง (ไม่บังคับ) </p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="div1">
                            <div class="drop-zone">
                                <span class="drop-zone__prompt">
                                    <p> อัพโหลดรูปภาพ</p>
                                    <button type="button" class="button button1"> อัพโหลด </button>
                                </span>
                                <input type="file" id="image" name="image" class="drop-zone__input"><!-- input image -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="div1">
                            <div class="tt-text-log">
                                <p>
                                    VIN Code
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="vincode" name="vincode" class="form-control" placeholder="ระบุ" aria-label="Username"
                                    aria-describedby="basic-addon1"> <!-- input vincode -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="card4">
                <div class="card-body">
                    <p class="card-title"> <i class='fas fa-map-marker-alt' style='font-size:20px'></i> &nbsp;
                        ที่อยู่ในการจัดส่ง
                    </p>
                    @php 
                        $destination = "";
                        $buyer_profile_id = "";
                    @endphp
                    @if(!is_null($address_delivery))
                        <p class="card-detail"> 
                                @php 
                                    $name_user = $address_delivery->first_name." ".$address_delivery->last_name;
                                    $buyer_profile_id = $address_delivery->id;
                                    $destination = $name_user." ".$address_delivery->address." ".$address_delivery->District->name_th." ".$address_delivery->Amphure->name_th." ".$address_delivery->Province->name_th." ".$address_delivery->postcode;
                                    $destination_phone = $address_delivery->phone;
                                @endphp
                                {{ ($name_user == "" || $name_user == null) ? '-' : $name_user }}
                                &nbsp;&nbsp;
                                {{ (is_null($address_delivery->address) ? '-' : $address_delivery->address) }}
                                {{ (is_null($address_delivery->District) ? '-' : $address_delivery->District->name_th) }}
                                {{ (is_null($address_delivery->Amphure) ? '-' : $address_delivery->Amphure->name_th) }}
                                {{ (is_null($address_delivery->Province) ? '-' : $address_delivery->Province->name_th) }}
                                {{ (is_null($address_delivery->postcode) ? '-' : $address_delivery->postcode) }}
                        </p>
                        <p class="card-detail2"> เบอร์โทร {{ (is_null($address_delivery->phone) ? '-' : $address_delivery->phone) }} 
                            อีเมล   {{ (is_null($user_buyer->email) ? '-' : $user_buyer->email) }}</p>
                    @else
                        <p class="card-detail2">-</P>
                    @endif
                    <input type="text" id="buyer_profile_id" name="buyer_profile_id" value="{{ $buyer_profile_id }}"> <!-- input buyer_profile_id -->
                    <input type="text" id="destination" name="destination" value="{{ $destination }}"> <!-- input destination -->
                    <input type="text" id="destination_phone" name="destination_phone" value="{{ $destination_phone }}"> <!-- input destination_phone -->
                    <input type="text" id="destination_email" name="destination_email" value="{{ $user_buyer->email }}"> <!-- input destination_email -->

                    <div class="text-edit">
                        <p onclick="document.getElementById('Modeldelivery').style.display='block'"
                            class="w3-button w3-black"> <i class='fas fa-pen' style='font-size:18px'></i> &nbsp;
                            แก้ไขที่อยู่ </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="card5">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="h-text-h">
                            <p>
                                การจัดส่ง
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="h-text-h2">
                            <p>
                                ราคาประมาณขนส่ง
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="img-lo-icon">
                            <img src="assets/img/confirm/logof.png" class="img-fluid" alt="shoe image">
                        </div>
                        <div class="detail-text-t">
                            <p>
                                <i class="fa fa-exclamation-circle" style="font-size:14px"></i> &nbsp;
                                เงื่อนไขการรับประกัน
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hh-text-h">
                            <p>
                                Flash Express
                            </p>
                        </div>
                        <div class="img-lo-icon2">
                            <img src="assets/img/confirm/logoc.png" class="img-fluid" alt="shoe image">
                        </div>
                        <div class="date-detail-text-t">
                            <p>
                                (ระยะเวลาจัดส่งโดยประมาณ 2-3 วัน)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="price-text-t">
                            <p>
                                ฿ 29.00
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" id="transport_by" name="transport_by" value=""> <!-- input transport_by -->
                        <!-- <a herf="#"> -->
                            <button type="button" class="button button2"> เลือกใช้บริการ </button>
                        <!-- </a> -->
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="img-lo-icon">
                            <img src="assets/img/confirm/logop.png" class="img-fluid" alt="shoe image">
                        </div>
                        <div class="detail-text-t">
                            <p>
                                <i class="fa fa-exclamation-circle" style="font-size:14px"></i> &nbsp;
                                เงื่อนไขการรับประกัน
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hh-text-h">
                            <p>
                                EMS - Thaipost
                            </p>
                        </div>
                        <div class="img-lo-icon3">
                            <img src="assets/img/confirm/logoc.png" class="img-fluid" alt="shoe image">
                        </div>
                        <div class="date-detail-text-t">
                            <p>
                                (ระยะเวลาจัดส่งโดยประมาณ 2-3 วัน)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="price-text-t">
                            <p>
                                ฿ 29.00
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a herf="#">
                            <button type="button" class="button button4"> เลือกใช้บริการ </button>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="img-lo-icon">
                            <img src="assets/img/confirm/logologi.png" class="img-fluid" alt="shoe image">
                        </div>
                        <div class="detail-text-t">
                            <p>
                                <i class="fa fa-exclamation-circle" style="font-size:14px"></i> &nbsp;
                                เงื่อนไขการรับประกัน
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hh-text-h">
                            <p>
                                CJ Logistics
                            </p>
                        </div>
                        <div class="date-detail-text-t2">
                            <p>
                                (ระยะเวลาจัดส่งโดยประมาณ 2-3 วัน)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="price-text-t">
                            <p>
                                ฿ 29.00
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a herf="#">
                            <button type="button" class="button button4"> เลือกใช้บริการ </button>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="img-lo-icon">
                            <img src="assets/img/confirm/logoni.png" class="img-fluid" alt="shoe image">
                        </div>
                        <div class="detail-text-t">
                            <p>
                                <i class="fa fa-exclamation-circle" style="font-size:14px"></i> &nbsp;
                                เงื่อนไขการรับประกัน
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hh-text-h">
                            <p>
                                Ninjavan
                            </p>
                        </div>
                        <div class="date-detail-text-t2">
                            <p>
                                (ระยะเวลาจัดส่งโดยประมาณ 2-3 วัน)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="price-text-t">
                            <p>
                                ฿ 29.00
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a herf="#">
                            <button type="button" class="button button4"> เลือกใช้บริการ </button>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="img-lo-icon">
                            <img src="assets/img/confirm/logoscg.png" class="img-fluid" alt="shoe image">
                        </div>
                        <div class="detail-text-t">
                            <p>
                                <i class="fa fa-exclamation-circle" style="font-size:14px"></i> &nbsp;
                                เงื่อนไขการรับประกัน
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hh-text-h">
                            <p>
                                SCG Yamato Express
                            </p>
                        </div>
                        <div class="date-detail-text-t2">
                            <p>
                                (ระยะเวลาจัดส่งโดยประมาณ 2-3 วัน)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="price-text-t">
                            <p>
                                ฿ 29.00
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a herf="#">
                            <button type="button" class="button button4"> เลือกใช้บริการ </button>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="img-lo-icon">
                            <p>
                                No logo
                            </p>
                        </div>
                        <div class="detail-text-t">
                            <p>
                                <i class="fa fa-exclamation-circle" style="font-size:14px"></i> &nbsp;
                                เงื่อนไขการรับประกัน
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hh-text-h">
                            <p>
                                จัดส่งโดยผู้ขาย (ไม่มีการรับประกัน และเลขแทร็กกิ้ง)
                            </p>
                        </div>
                        <div class="date-detail-text-t2">
                            <p>
                                (ระยะเวลาจัดส่งโดยประมาณ 2-3 วัน)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="price-text-t">
                            <p>
                                รอผู้ขายแจ้งค่าขนส่ง
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a herf="#">
                            <button type="button" class="button button4"> เลือกใช้บริการ </button>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="img-lo-icon">
                            <p>
                                No logo
                            </p>
                        </div>
                        <div class="detail-text-t">
                            <p>
                                <i class="fa fa-exclamation-circle" style="font-size:14px"></i> &nbsp;
                                เงื่อนไขการรับประกัน
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hh-text-h">
                            <p>
                                จัดส่งโดยผู้ขาย (ไม่มีการรับประกัน และเลขแทร็กกิ้ง)
                            </p>
                        </div>
                        <div class="date-detail-text-t2">
                            <p>
                                (ระยะเวลาจัดส่งโดยประมาณ 2-3 วัน)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="price-text-t">
                            <p>
                                รอผู้ขายแจ้งค่าขนส่ง
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a herf="#">
                            <button type="button" class="button button4"> เลือกใช้บริการ </button>
                        </a>
                    </div>
                </div>

                <br>
                <div class="card6">
                    <div class="h-detail-h-text">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="yes" id="is_tax" name="is_tax" checked> <!-- input is_tax -->
                            <label class="form-check-label" for="is_tax">
                                ต้องการใบเสร็จรับเงิน/ใบกำกับภาษี &nbsp; <font>
                                    (อาจจะมีบางผู้ขายที่ไม่รองรับการออกใบเสร็จ/ใบกำกับภาษี) </font>
                            </label>
                        </div>
                    </div>
                    <div class="d-detail-t-card6">
                        <p>
                            @php 
                                $taxinvoice_address = $buyer_tax_invoices->address." ".$buyer_tax_invoices->District->name_th." ".$buyer_tax_invoices->Amphure->name_th." ".$buyer_tax_invoices->Province->name_th." ".$buyer_tax_invoices->postcode;
                            @endphp
                            {{ (is_null($buyer_tax_invoices->name) ? '-' : $buyer_tax_invoices->name) }}
                            &nbsp;&nbsp;
                            {{ (is_null($buyer_tax_invoices->address) ? '-' : $buyer_tax_invoices->address) }}
                            {{ (is_null($buyer_tax_invoices->District) ? '-' : $buyer_tax_invoices->District->name_th) }}
                            {{ (is_null($buyer_tax_invoices->Amphure) ? '-' : $buyer_tax_invoices->Amphure->name_th) }}
                            {{ (is_null($buyer_tax_invoices->Province) ? '-' : $buyer_tax_invoices->Province->name_th) }}
                            {{ (is_null($buyer_tax_invoices->postcode) ? '-' : $buyer_tax_invoices->postcode) }}
                        </p>
                        <input type="text" id="buyer_tax_invoice_id" name="buyer_tax_invoice_id" value="{{ $buyer_tax_invoices->id }}"> <!-- input buyer_tax_invoice_id -->
                        <input type="text" id="taxinvoice_company" name="taxinvoice_company" value="{{ $buyer_tax_invoices->name }}"> <!-- input taxinvoice_company -->
                        <input type="text" id="taxinvoice_address" name="taxinvoice_address" value="{{ $taxinvoice_address }}"> <!-- input taxinvoice_address -->

                    </div>
                    <div class="d-detail-t2-card6">
                        <input type="text" id="taxinvoice_phone" name="taxinvoice_phone" value="{{ $buyer_tax_invoices->phone }}"> <!-- input taxinvoice_phone -->
                        <p>
                            เบอร์โทร {{ (is_null($buyer_tax_invoices->phone) ? '-' : $buyer_tax_invoices->phone) }}
                        </p>
                    </div>
                    <div class="d-detail-t3-card6">
                    <input type="text" id="taxid" name="taxid" value="{{ $buyer_tax_invoices->texid }}"> <!-- input taxid -->
                        <p>
                            เลขที่ผู้เสียภาษี {{ (is_null($buyer_tax_invoices->texid) ? '-' : $buyer_tax_invoices->texid) }}
                        </p>
                    </div>
                    <div class="text-edit">
                        <a href="#">
                            <p onclick="document.getElementById('id02').style.display='block'"
                                class="w3-button w3-black"> <i class='fas fa-pen' style='font-size:18px'></i> &nbsp;
                                แก้ไขที่อยู่ </p>
                        </a>
                    </div>
                </div>

                <br>
                <div style="text-align:center;">
                    <div class="b-but-confirm">
                            <button type="button" class="button button3"> กลับ
                            </button>
                        &nbsp;
                            <button type="button" class="button buttoncon"
                                onclick="document.getElementById('Modal_term_and_condition').style.display='block'"
                                class="w3-button w3-black"> ยืนยัน
                            </button>
                    </div>
                </div>
            </div>

            <!-- The Modal -->
            <div id="Modal_term_and_condition" class="w3-modal">
                <div class="w3-modal-content">
                    <div class="w3-container">
                        <div class="text-t-haer-pakan">
                            <p>
                                เงื่อนไขการรับประกัน
                            </p>
                        </div>
                        <div class="card-con w-100">
                            <div class="text-t-deail-pakan">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies amet diam
                                    nascetur
                                    lacus.
                                    Lobortis eget orci adipiscing eget at. Dui, donec et sagittis, scelerisque enim
                                    porta
                                    maecenas est. Mattis cursus metus nec quis gravida in dui sit. Volutpat sit et
                                    convallis
                                    mattis est egestas justo, lectus. Eros, in ut massa bibendum. Placerat egestas donec
                                    placerat turpis luctus dignissim vulputate id.

                                    Eget in amet, non enim pellentesque arcu nec. Id urna volutpat lorem bibendum
                                    tortor.
                                    Tristique ac ac morbi posuere sit quisque habitant quam sed. Lacus, egestas felis,
                                    ultricies
                                    a sed nec cras. Varius amet, ultricies eu imperdiet posuere. Platea viverra
                                    pellentesque
                                    sit
                                    sed eget vehicula volutpat sit. Est nibh sed nibh hendrerit aliquet purus sed ut.
                                    Sollicitudin ut consectetur donec in nibh pellentesque vulputate. Venenatis quam leo
                                    amet
                                    viverra purus eu. Proin eu senectus integer est et. Ullamcorpe
                                </p>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies amet diam
                                    nascetur
                                    lacus.
                                    Lobortis eget orci adipiscing eget at. Dui, donec et sagittis, scelerisque enim
                                    porta
                                    maecenas est. Mattis cursus metus nec quis gravida in dui sit. Volutpat sit et
                                    convallis
                                    mattis est egestas justo, lectus. Eros, in ut massa bibendum. Placerat egestas donec
                                    placerat turpis luctus dignissim vulputate id. Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipiscing elit. Ultricies amet diam nascetur lacus. Lobortis eget orci adipiscing
                                    eget
                                    at.
                                    Dui, donec et sagittis, scelerisque enim porta maecenas est. Mattis cursus metus nec
                                    quis
                                    gravida in dui sit. Volutpat sit et convallis mattis est egestas justo, lectus.
                                    Eros, in
                                    ut
                                    massa bibendum. Placerat egestas donec placerat turpis luctus dignissim vulputate
                                    id.
                                </p>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies amet diam
                                    nascetur
                                    lacus.
                                    Lobortis eget orci adipiscing eget at. Dui, donec et sagittis, scelerisque enim
                                    porta
                                    maecenas est. Mattis cursus metus nec quis gravida in dui sit. Volutpat sit et
                                    convallis
                                    mattis est egestas justo, lectus. Eros, in ut massa bibendum. Placerat egestas donec
                                    placerat turpis luctus dignissim vulputate id. Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipiscing elit. Ultricies amet diam nascetur lacus. Lobortis eget orci adipiscing
                                    eget
                                    at.
                                    Dui, donec et sagittis, scelerisque enim porta maecenas est. Mattis cursus metus nec
                                    quis
                                    gravida in dui sit. Volutpat sit et convallis mattis est egestas justo, lectus.
                                    Eros, in
                                    ut
                                    massa bibendum. Placerat egestas donec placerat turpis luctus dignissim vulputate
                                    id.
                                </p>
                            </div>
                        </div>
                        <br>
                        
                        <div style="text-align:center;">
                            <div class="b-but-concon">
                                <button type="submit" class="button button1" class="w3-button w3-display-topright"> เข้าใจแล้ว </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    

    <!-- =================== Modal =================== -->

    <!-- The Modal -->
    <div id="Modeldelivery" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-body">
                <div class="t-body-text">
                    <p>
                        ระบุที่อยู่
                    </p>
                </div>
                @foreach($buyer_profiles as $buyer_profile)
                <div class="card7">
                    <div class="card-body">
                        <div class="card-tadail7">
                            <div class="row">
                                <div class="text-edit7">
                                    <a href="#">
                                        <p id="myBtn"> <i class='fas fa-pen' style='font-size:18px'></i>
                                            &nbsp; แก้ไขที่อยู่ </p>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <div class="text-t-detail">
                                        <p>
                                            ชื่อ-นามสกุล
                                        </p>
                                        <p>
                                            โทรศัพท์
                                        </p>
                                        <p>
                                            อีเมล
                                        </p>
                                        <p>
                                            ที่อยู่
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-9">
                                    <div class="box_txtaddress">
                                        <div class="txt_confirm_address1">
                                            <p> 
                                                @php 
                                                    $name_user = $buyer_profile->first_name." ".$buyer_profile->last_name;
                                                @endphp
                                                {{ ($name_user == "" || $name_user == null) ? '-' : $name_user }}
                                            </p>
                                        </div>
                                        <div class="txt_confirm_address2">
                                            <p> {{ (is_null($buyer_profile->phone) ? '-' : $buyer_profile->phone) }} </p>
                                        </div>
                                        <div class="txt_confirm_address3">
                                            <p> {{ (is_null($user_buyer->email) ? '-' : $user_buyer->email) }} </p>
                                        </div>
                                        <div class="txt_confirm_address4">
                                            <p> 
                                                {{ (is_null($buyer_profile->address) ? '-' : $buyer_profile->address) }}
                                                {{ (is_null($buyer_profile->District) ? '-' : $buyer_profile->District->name_th) }}
                                                {{ (is_null($buyer_profile->Amphure) ? '-' : $buyer_profile->Amphure->name_th) }}
                                                {{ (is_null($buyer_profile->Province) ? '-' : $buyer_profile->Province->name_th) }}
                                                {{ (is_null($buyer_profile->postcode) ? '-' : $buyer_profile->postcode) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                @endforeach
                <br>
                <div class="b-but-addplus">
                    <button class="button button-inadd"
                        onclick="document.getElementById('id04').style.display='block'"
                        class="btn-lg btn-block"> <i class="fa fa-plus-circle"></i> เพิ่มที่อยู่จัดส่ง
                    </button>

                    <div class="text-center">
                        <button class="button-c" onclick="document.getElementById('Modeldelivery').style.display='none'"
                            class="w3-button w3-display-topright"> ยกเลิก </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- The Modal -->
    <div id="id04" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <div class="text-t-haer-pakan">
                    <p>
                        เพิ่มที่อยู่ใหม่
                    </p>
                </div>
                <div class="card-con w-100">
                    <div class="text-t-deail-add-edit">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> ชื่อผู้ติดต่อ <span> + </span>
                                </label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label"> เบอร์โทรศัพท์ <span> + </span>
                                </label>
                                <input type="password" class="form-control" id="inputPassword4">
                            </div>
                        </form>
                        <br>
                        <form class="row g-3">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label"> ที่อยู่ <span> +
                                    </span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                        </form>
                        <br>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> จังหวัด <span> + </span>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ระบุ </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label"> เขต/อำเภอ <span> + </span>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ระบุ </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                </select>
                            </div>
                        </form>
                        <br>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> แขวง/ตำบล <span> + </span>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ระบุ </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label"> รหัสไปรษณีย์ <span> + </span>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ระบุ </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                </select>
                            </div>
                        </form>


                    </div>
                </div>
                <br>
                <div style="text-align:center;">
                    <div class="b-but-concon">
                        <button class="button button3"
                            onclick="document.getElementById('id04').style.display='none'"
                            class="w3-button w3-display-topright"> ยกเลิก </button>
                        <button class="button button2"
                            onclick="document.getElementById('id04').style.display='none'"
                            class="w3-button w3-display-topright"> อัพเดท </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>

    <!-- =================== End The Modalodal =================== -->        



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




    <!-- <script>
    $("div[id^='myModal']").each(function() {

        var currentModal = $(this);

        //click next
        currentModal.find('.btn-next').click(function() {
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal(
                'show');
        });

        //click prev
        currentModal.find('.btn-prev').click(function() {
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal(
                'show');
        });

    });
    </script>-->



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
    $(document).on("submit","#form_confirmInventory", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        console.log(formData);
        $.ajax({
            type:'POST',
            url: '{{ url("buyer/confirminventory") }}' ,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                console.log(response);
                if(response.status == 200){ 
                    alert(response.message);
                }else{
                    alert(response.message);
                }
                $('#Modal_term_and_condition').hide();
                window.location.href='{{ url("buyer/myaccount/confirminventory") }}'
            },
            error: function(response){
                console.log("error");
                console.log(response);
            }
        });
    });
    
</script>

@stop