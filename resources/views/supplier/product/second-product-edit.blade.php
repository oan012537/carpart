@extends('supplier.layouts.template')

@section('style')
<style>
    .dot__color {
        color: rgb(224, 91, 91);
        margin-left: 5px;
    }
</style>
@endsection

@section('content')

<input type="hidden" id="pageName" name="pageName" value="setting-product">
<div class="content" id="setting-createproductresult">
    {{-- @if(session()->has('message')) --}}
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong> {!! session()->get('message') !!}
    </div>
    {{-- @endif --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__titlepage">
                    <h3>{{ trans('file.Add Second Hand') }}</h3>
                </div>
            </div>

            <div class="col-lg-9">
                @for ($o = 1; $o <= 1; $o++) <form id="msform" action="{{route('products.update', $data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="accordion" id="acctab{{ $o }}">
                        <div class="accordion-item">
                            {{-- collapsed button --}}
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button @if ($o == 2) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#contentdetail{{ $o }}" aria-expanded="true" aria-controls="contentdetail{{ $o }}">
                                    <p class="txt__title"><i class="fa-solid fa-circle-exclamation"></i> {{ trans('file.Product Information') }} </p>
                                </button>
                            </h2>
                            {{-- collapsed button --}}

                            {{-- product form --}}
                            <div id="contentdetail{{ $o }}" class="accordion-collapse collapse @if ($o == 1) show @endif" aria-labelledby="headingOne" data-bs-parent="#acctab{{ $o }}">

                                <div class="accordion-body">
                                    <div class="box__itemslist">
                                        <div class="box__allstep">
                                            <div class="box__contentdetail">

                                                {{-- header --}}
                                                <div class="box__forminput">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="product_code">{{ trans('file.ID') }}</label>
                                                                <input type="text" id="product_code" class="form-control" name="product_code" placeholder="Auto Generate" value="{{ old('product_code')? old('product_code'): $data->product_code }}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="name_th">{{ trans('file.Product Name') }} (TH) <span>*</span></label>
                                                                <input type="text" id="name_th" class="form-control" name="name_th" placeholder="{{ trans('file.Specify') }}" value="{{ old('name_th')? old('name_th'): $data->name_th }}">
                                                                @if($errors->has('name_th'))
                                                                <span class="dot__color">{{ $errors->first('name_th') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="name_en">{{ trans('file.Product Name') }} (EN) <span>*</span></label>
                                                                <input type="text" id="name_en" class="form-control" name="name_en" placeholder="{{ trans('file.Specify') }}" value="{{ old('name_en')? old('name_en'): $data->name_en }}">
                                                                @if($errors->has('name_en'))
                                                                <span class="dot__color">{{ $errors->first('name_en') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>


                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="trading_name">{{ trans('file.Trading Name') }}</label>
                                                                <input type="text" id="trading_name" class="form-control" name="trading_name" placeholder="{{ trans('file.Specify') }}" value="{{ old('trading_name')? old('trading_name'): $data->trading_name }}">
                                                                <span>{{ trans('file.Trading Name Message') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- header --}}

                                                {{-- upload product image --}}
                                                <div class="box__allimage">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <p class="txt__titlebox">{{ trans('file.Product Image') }} <span>*</span></p>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <button class="btn btn__scanqr"><i class="fa-solid fa-qrcode"></i> {{ trans('file.QR Upload') }}</button>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="box__uploadimage">

                                                                <div class="box__drop">
                                                                    <div class="row" id="show-image">

                                                                        @foreach ($product_image as $key => $value)
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                                                            <input type="hidden" name="image[]" value="{{ $value }}">
                                                                            <a href="javascript:void(0)" data-image="{{ $value }}" class="btn__trash">
                                                                                <img src="{{ asset('product/images/' . $value) }}" class="img-fluid" alt="{{ $data->name_en }}">
                                                                                <i class="fa-solid fa-trash-can"></i> {{ trans('file.Remove') }}
                                                                            </a>
                                                                        </div>
                                                                        @endforeach

                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                                                            <div class="drop-zone">
                                                                                <label class="drop-zone__prompt">
                                                                                    <input type="file" id="upload-image" class="d-block" style="opacity: 0;width: 50%;">
                                                                                    <i class="fa fa-plus-circle" style="font-size:35px"></i>
                                                                                    <p> {{ trans('file.Attach Image') }}</p>
                                                                                    <div class="tt-img-detail">
                                                                                        <p> {{ trans('file.Attach Image Message') }}</p>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($errors->has('image'))
                                                <span class="dot__color">{{ $errors->first('image') }}</span>
                                                @endif
                                                {{-- upload product image --}}

                                                {{-- product details --}}
                                                <div class="box__statusoptions">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="box__grade">
                                                                <p class="txt__titlebox">{{ trans('file.Grade') }} <span>*</span></p>
                                                                <div class="form-check-inline">
                                                                    <label class="form-check-label" for="radio1">
                                                                        <input type="radio" class="form-check-input" id="radio1" name="grade" value="Genuine" @if ($data->grade == 'Genuine') checked @endif>
                                                                        {{ trans('file.Genuine') }}
                                                                    </label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <label class="form-check-label" for="radio2">
                                                                        <input type="radio" class="form-check-input" id="radio2" name="grade" value="OEM" @if ($data->grade == 'OEM') checked @endif>
                                                                        {{ trans('file.OEM') }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box__input2">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="maker">{{ trans('file.Maker') }}</label>
                                                                <input type="text" id="maker" class="form-control" name="maker" placeholder="{{ trans('file.Specify') }}" value="{{ old('maker')? old('maker'): $data->maker }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="sku_code">{{ trans('file.SKU CODE') }}</label>
                                                                <input type="text" id="sku_code" class="form-control" name="sku_code" placeholder="{{ trans('file.Specify') }}" value="{{ old('sku_code')? old('sku_code'): $data->sku_code }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ trans('file.Product Quality') }} <span>*</span></label>
                                                                <select class="form-select" aria-label="Default select example" name="quality">
                                                                    <option>{{ trans('file.Specify') }}</option>
                                                                    @foreach ($product_qualities as $quality)
                                                                    <option value="{{ $quality }}" @if ($quality==$data->quality) selected @endif>{{ trans('file.'. $quality) }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="shop_original_code">{{ trans('file.Shop Original Code') }}</label>
                                                                <input type="text" id="shop_original_code" class="form-control" name="shop_original_code" placeholder="{{ trans('file.Specify') }}" value="{{ old('shop_original_code')? old('shop_original_code'): $data->shop_original_code }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="vin_code">{{ trans('file.VIN Code') }}</label>
                                                                <input type="text" id="vin_code" class="form-control" name="vin_code" placeholder="{{ trans('file.Specify') }}" value="{{ old('vin_code')? old('vin_code'): $data->vin_code }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="full_model_code">{{ trans('file.Full Model Code') }}</label>
                                                                <input type="text" id="full_model_code" class="form-control" name="full_model_code" placeholder="{{ trans('file.Specify') }}" value="{{ old('full_model_code')? old('full_model_code'): $data->full_model_code }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="engine_model_code">{{ trans('file.Engine Model Code') }}</label>
                                                                <input type="text" id="engine_model_code" class="form-control" name="engine_model_code" placeholder="{{ trans('file.Specify') }}" value="{{ old('engine_model_code')? old('engine_model_code'): $data->engine_model_code }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="color">{{ trans('file.Color') }}</label>
                                                                <input type="text" id="color" class="form-control" name="color" placeholder="{{ trans('file.Specify') }}" value="{{ old('color')? old('color'): $data->color }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="trim">{{ trans('file.Trim') }}</label>
                                                                <input type="text" id="trim" class="form-control" name="trim" placeholder="{{ trans('file.Specify') }}" value="{{ old('trim')? old('trim'): $data->trim }}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                {{-- product details --}}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- warranty --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button id="warranty" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contentgaruntee{{ $o }}" aria-expanded="false" aria-controls="contentgaruntee{{ $o }}">
                                    <p class="txt__title">{{ trans('file.Warranty') }}</p>
                                </button>
                            </h2>
                            <div id="contentgaruntee{{ $o }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#acctab{{ $o }}">
                                <div class="accordion-body">
                                    <div class="box__guarantee">
                                        <div class="form-group">
                                            <label for="">{{ trans('file.Warranty') }} <span>*</span></label>
                                            <br>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="Insured">
                                                    <input type="radio" class="form-check-input" id="Insured" name="is_warranty" value="1" @if($data->is_warranty == 1) checked @endif>
                                                    {{ trans('file.Insured') }}
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="no-insurance">
                                                    <input type="radio" class="form-check-input" id="no-insurance" name="is_warranty" value="0" @if($data->is_warranty == 0) checked @endif>
                                                    {{ trans('file.No Insurance') }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" name="duration" placeholder="{{ trans('file.Specify') }}" value="{{ old('duration')? old('duration'): isset($warranty->duration)? $warranty->duration : '' }}">
                                                        <select class="btn btn__garuntee" aria-label="Default select example" name="year_month_day">
                                                            @foreach ($day_month_year as $timeType)
                                                            <option value="{{ $timeType }}" @if($timeType==(isset($warranty->year_month_day)? $warranty->year_month_day : '')) selected @endif>
                                                                {{ trans('file.' . $timeType) }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <span>{{ trans('file.Warranty Message1') }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-conditions">
                                            <div class="row">
                                                <div class="col-9">
                                                    <p class="txt__title">{{ trans('file.Warranty Message2') }}</p>
                                                    <p class="txt__small"> {{ trans('file.Warranty Message3') }}</p>
                                                </div>
                                                <div class="col-3">
                                                    <p class="txt__number">0/800</p>
                                                </div>

                                                <div class="col-12">
                                                    <div class="box__text">
                                                        <textarea name="term_and_condition" placeholder="{{ trans('file.Specify') }}" class="form-control">
                                                        {{ old('term_and_condition')? old('term_and_condition'): ltrim($data->term_and_condition, " ")   }}
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- warranty --}}

                        {{-- transportion --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button id="transportion" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contenttransport{{ $o }}" aria-expanded="false" aria-controls="contenttransport{{ $o }}">
                                    <p class="txt__title">{{ trans('file.Transport Information') }}</p>
                                </button>
                            </h2>

                            <div id="contenttransport{{ $o }}" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#acctab{{ $o }}">
                                <div class="accordion-body">
                                    <div class="box__transportation">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="txt__title">{{ trans('file.Transport Information') }}</p>
                                                {{-- weight --}}
                                                <div class="box__weight">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                                            <p class="txt__label">{{ trans('file.Weight') }}</p>
                                                        </div>

                                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                            <div class="input-group">
                                                                <input type="number" class="form-control" name="weight" value="{{ old('weight')? old('weight'): isset($transport->weight)? $transport->weight : 0 }}">
                                                                <select class="btn btn__weight" name="unit">
                                                                    @foreach ($units as $unit)
                                                                    <option value="{{ $unit }}" @if($unit==(isset($transport->unit)? $transport->unit : '')) selected @endif>
                                                                        {{ $unit }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box__size">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                                            <p class="txt__label">{{ trans('file.Product Size') }}</p>
                                                        </div>

                                                        <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                            <div class="input-group">
                                                                <input type="number" class="form-control" name="width" placeholder="{{ trans('file.Width') }}" value="{{ old('width')? old('width'): isset($transport->width)? $transport->width : '' }}">

                                                                <input type="number" class="form-control" name="length" placeholder="{{ trans('file.Length') }}" value="{{ old('length')? old('length'): isset($transport->length)? $transport->length : '' }}">

                                                                <input type="number" class="form-control" name="height" placeholder="{{ trans('file.Height') }}" value="{{ old('height')? old('height'): isset($transport->height)? $transport->height : '' }}">

                                                                <span>{{ trans('file.UOM') }}</span>
                                                                <select class="btn btn__unit" name="uom">
                                                                    @foreach ($uoms as $uom)
                                                                    <option value="{{ $uom }}" @if($uom==(isset($transport->uom)? $transport->uom : '')) selected @endif>
                                                                        {{ $uom }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- weight --}}

                                                {{-- delivery info --}}
                                                <div class="box__transport">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                                            <p class="txt__label">{{ trans('file.Transportation') }}</p>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-10 col-md-10 col-12">
                                                            @for ($i = 1; $i <= 3; $i++) <div class="accordion" id="accordionExample">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingOne">
                                                                        <button class="accordion-button  @if ($i != 1) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#acco-tab{{ $i }}" aria-expanded="true" aria-controls="acco-tab{{ $i }}">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                    @if ($i == 1)
                                                                                    {{ trans("file.Shipments supported by CPN") }}
                                                                                    @elseif ($i == 2)
                                                                                    {{ trans("file.Private transport company (large parcels)") }}
                                                                                    @else
                                                                                    {{ trans("file.Show the shipping name that the Supplier setting is.") }}
                                                                                    @endif
                                                                                </label>
                                                                            </div>
                                                                        </button>
                                                                    </h2>
                                                                    {{-- specify transport company via API --}}
                                                                    <div id="acco-tab{{ $i }}" class="accordion-collapse collapse @if ($i == 1) show @endif" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                        @if ($i == 1)
                                                                        <div class="accordion-body">
                                                                            <div class="box__type">
                                                                                <div class="row">
                                                                                    @foreach ($transport_type_array as $transport_type)
                                                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                                                        <p class="txt__type">{{ trans('file.Shipping Type') }} <span class="label__success">{{ $transport_type['name'] }}</span></p>
                                                                                    </div>
                                                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                                                        <div class="itemstype">
                                                                                            <p class="txt__price">฿ {{ $transport_type['estimate_fee'] }}
                                                                                                @if ($i != 1)
                                                                                                {{-- manage transport company by supplier --}}
                                                                                                <a href="javascript:void(0)"><i class="fa-solid fa-pencil"></i></a>
                                                                                                @endif
                                                                                            </p>
                                                                                            <div class="form-check form-switch">
                                                                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="transport_type_id[]" value="{{ $transport_type['id'] }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        {{-- specify 2 and 3 here --}}
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- transport status --}}
                                            <div class="box__settransport">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                                        <p class="txt__label">{{ trans('file.Delivery Preparation') }}</p>
                                                    </div>

                                                    <div class="col-xl-10 col-lg-10 col-md-10 col-12">
                                                        <div class="wrapper__checkbox">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" id="ready-to-ship" name="is_deliver" value="1" @if((isset($transport->is_deliver)? $transport->is_deliver : '' != '0')) checked @endif>
                                                                <label class="form-check-label">
                                                                    {{ trans('file.Ready to Ship') }}
                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" id="longer-than-usual" name="is_deliver" value="0" @if((isset($transport->is_deliver)? $transport->is_deliver : '' == '0')) checked @endif>
                                                                <label class="form-check-label">
                                                                    {{ trans('file.Prepare to deliver longer than usual.') }}
                                                                </label>
                                                            </div>

                                                            {{-- specify days --}}
                                                            <div class="form-group">
                                                                <span class="label__setdate">{{ trans('file.Specify Day') }}</span>
                                                                <select class="form-select" name="estimated_days" aria-label="Default select example">
                                                                    @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}" @if((isset($transport->estimated_days)? $transport->estimated_days : 0) == $i) selected @endif
                                                                        >{{ $i }}
                                                                        </option>
                                                                        @endfor
                                                                </select>
                                                            </div>

                                                            <span class="txt__red">{{ trans('file.Specify Day Message') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- delivery info --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- transportion --}}

                    {{-- Price --}}
                    <div class="accordion-item  box__priceitems">
                        <h2 class="accordion-header" id="headingThree">
                            <button id="price" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contentprice{{ $o }}" aria-expanded="false" aria-controls="contentprice{{ $o }}">
                                <p class="txt__title">{{ trans('file.Price') }}</p>
                            </button>
                        </h2>
                        <div id="contentprice{{ $o }}" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="box__price">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                            <div class="box__itemsprice">
                                                <p class="txt__title">{{ trans('file.Price') }}</p>

                                                <div class="form-group">
                                                    <label for="product-price">{{ trans('file.Amount') }} <span>{{ trans('file.Including VAT') }}</span></label>
                                                    <input type="number" id="product-price" class="form-control" name="price" placeholder="{{ trans('file.Specify') }}" value="{{ old('price')? old('price'): $data->price }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-6 col-md-6 col-12">
                                            <div class="box__itemstotal">
                                                <p class="txt__title">{{ trans('file.Amount Message') }}</p>

                                                <div class="wrapper__form">
                                                    <div class="form-group">
                                                        <label for="commission">{{ trans('file.Commission') }} </label>
                                                        <input type="text" class="form-control" name="commission" placeholder="{{ trans('file.Specify') }}" value="{{ old('commission')? old('commission'): $data->commission }}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="revenue">{{ trans('file.Net Income') }}</label>
                                                        <input type="text" class="form-control" name="revenue" placeholder="{{ trans('file.Specify') }}" value="{{ old('revenue')? old('revenue'): $data->revenue }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Price --}}
            </div>

            {{-- hidden input --}}
            <input type="hidden" name="product_type" value="{{ $data->product_type }}">
            <input type="hidden" name="brand_id" value="{{ old('brand_id')? old('brand_id'): $data->brand_id }}">
            <input type="hidden" name="model_id" value="{{ old('model_id')? old('model_id'): $data->model_id }}">
            <input type="hidden" name="sub_model_id" value="{{ old('sub_model_id')? old('sub_model_id'): $data->sub_model_id }}">
            <input type="hidden" name="issue_year_id" value="{{ old('issue_year_id')? old('issue_year_id'): $data->issue_year_id }}">
            <input type="hidden" name="category_id" value="{{ old('category_id')? old('category_id'): $data->category_id }}">
            <input type="hidden" name="sub_category_id" value="{{ old('sub_category_id')? old('sub_category_id'): $data->sub_category_id }}">
            <input type="hidden" name="sub_sub_category_id" value="{{ old('sub_sub_category_id')? old('sub_sub_category_id'): $data->sub_sub_category_id }}">
            <input type="hidden" name="salesman_code" value="{{ old('salesman_code')? old('salesman_code'): $data->salesman_code }}">


            </form>
            <hr />
            @endfor

            {{-- back and submit button --}}
            <div class="col-lg-12">
                <div class="box__btn">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="javascript:void(0)" class="btn btn-secondary d-block">{{ trans('file.Back') }}</a>
                        </div>
                        <div class="col-md-6">
                            <a href="javascript:document.getElementById('msform').submit();" class="btn btn-primary d-block">{{ trans('file.Submit') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- back and submit button --}}

            {{-- copy product --}}
            <div class="box__condition">
                <div class="box__title">
                    <p class="txt__title">{{ trans('file.Copy Product Message1') }} <span>{{ trans('file.Copy Product Message2') }}</span></p>
                </div>

                <form id="frm-copy-same-category" action="{{ route('supplier.product.copyProduct', $data->id) }}" method="get">
                    <input type="hidden" name="copyType" value="same_category">
                </form>
                <form id="frm-copy-diff-category" action="{{ route('supplier.product.copyProduct', $data->id) }}" method="get">
                    <input type="hidden" name="copyType" value="diff_category">
                </form>

                <div class="box__wrapperbutton">
                    {{-- copy by same category --}}
                    <a href="javascript:document.getElementById('frm-copy-same-category').submit();" id="copy-same-category" class="btn btn__copyproduct">
                        <img src="{{ asset('assets/img/icon/icon__copyproduct.svg') }}" class="img-fluid" alt="icon__copyproduct.svg">
                        <p>{{ trans('file.Copy Product') }}</p>
                        <span>{{ trans('file.Product name, brand and model') }} </span>
                        <span class="txt__red">{{ trans('file.same category but the quality is different') }}</span>
                    </a>
                    {{-- copy by difference category --}}
                    <a href="javascript:document.getElementById('frm-copy-diff-category').submit();" class="btn btn__searchcat" data-bs-toggle="modal" data-bs-target="#modlapdcatdiffrence">
                        <img src="{{ asset('assets/img/icon/icon__searchcat.svg') }}" class="img-fluid" alt="icon__searchcat.svg">
                        <p>{{ trans('file.different product categories') }}</p>
                        <span>{{ trans('file.same brand and model') }}</span>
                    </a>
                </div>
            </div>
            {{-- copy product --}}
        </div>

        <div class="col-lg-3">
            {{-- product process bar --}}
            <div class="accordion" id="accordionExample">
                @for ($x = 1; $x <= 1; $x++) <div class="accordion-item">
                    {{-- collapsed --}}
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button @if ($x == 2) collapsed @endif" type=" button" data-bs-toggle="collapse" data-bs-target="#stepcondition{{ $x }}" aria-expanded="false" aria-controls="stepcondition{{ $x }}">
                            <p class="txt__title"><i class="fa-solid fa-circle-exclamation"></i> {{ trans('file.Product Information') }}</p>
                        </button>
                    </h2>
                    {{-- collapsed --}}
                    <div id="stepcondition{{ $x }}" class="accordion-collapse collapse @if ($x == 1) show @endif" aria-labelledby=" headingTwo" data-bs-parent="#acctabstepcondition{{ $x }}">
                        <div class="accordion-body">
                            <nav>
                                <ul>
                                    <li id="progress-details" class="activenav"><a href="javascript:void(0)">{{ trans('file.Details') }}</a></li>
                                    <li id="progress-warranty"><a href="javascript:void(0)">{{ trans('file.Warranty') }}</a></li>
                                    <li id="progress-transport"><a href="javascript:void(0)">{{ trans('file.Transport Information') }}</a></li>
                                    <li id="progress-amount"><a href="javascript:void(0)">{{ trans('file.Amount') }} </a></li>
                                    <li id="progress-quantity"><a href="javascript:void(0)">{{ trans('file.Quantity') }}</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
        {{-- product process bar --}}

        {{-- create log --}}
        <div class="box__datecreate">
            <form>
                <div class="form-group">
                    <label for="">{{ trans('file.Created Date') }}</label>
                    <p id="created-at" class="txt__detail">{{ $data->created_at }}</p>
                </div>
                <div class="form-group">
                    <label for="">{{ trans('file.Created By') }}</label>
                    <p id="created-by" class="txt__detail">{{ $data->created_by }}</p>
                </div>
                <div class="form-group">
                    <label for="">{{ trans('file.Sell Status') }}</label>
                    @if ($data->status_code == 'sell')
                    <div class="box__status status-selling">{{ trans('file.Selling') }}</div>
                    @elseif ($data->status_code == 'sold')
                    <div class="box__status status-sold">{{ trans('file.Sold') }}</div>
                    @elseif ($data->status_code == 'suspended')
                    <div class="box__status status-banned">{{ trans('file.Suspended') }}</div>
                    @else
                    <div class="box__status status-cancle">{{ trans('file.Cancel') }}</div>
                    @endif
                </div>
            </form>
        </div>
        {{-- create log --}}

        {{-- sales code --}}
        <div class="box__salecode">
            <form>
                <div class="form-group">
                    <label for="salesman_code">{{ trans('file.SALE CODE') }}</label>
                    <input id="salesman-code" type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" value="{{ old('salesman_code')? old('salesman_code'): $data->salesman_code }}">
                </div>
            </form>
        </div>
        {{-- sales code --}}
    </div>
</div>
</div>
</div>


{{-- Modal for copy brand, model, category, etc.. --}}
<div class="modal fade" id="modlapdcatdiffrence" tabindex="-1" aria-labelledby="modlapdcatdiffrenceLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <form id="msform">
                    <div class="box__allstep">
                        <div class="box__step">
                            <p class="txt__titlestep">เลือกแบรนด์</p>
                            <div class="box__stepdetail">
                                <a href="javascript:void(0)" class="btn__label step1 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__brands"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                <a href="javascript:void(0)" class="btn__label step2 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__series"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                <a href="javascript:void(0)" class="btn__label step3 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__subseries"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                <a href="javascript:void(0)" class="btn__label step4 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__years"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                <a href="javascript:void(0)" class="btn__label step5 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__cat"></span> </a>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-md-12 col-12">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" aria-describedby="button-addon2">
                                        <button class="btn btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12 col-12">
                                    <?php
                                    foreach (range('A', 'Z') as $letter) {
                                        echo "<a href='javascript:void(0)' class='letter__az'>$letter</a>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>


                        <div class="box__contentdetail">
                            <div class="row box__scroll" id="fieldset1">
                                <?php
                                $name = array(
                                    '1' => 'Aston Martin',
                                    '2' => 'Toyota',
                                    '3' => 'Hyundai',
                                    '4' => 'Nissan',
                                    '5' => 'Isuzu',
                                    '6' => 'Toyota',
                                    '7' => 'Aston Martin',
                                    '8' => 'Nissan',
                                    '9' => 'Isuzu',
                                    '10' => 'Hyundai',
                                    '11' => 'Aston Martin',
                                    '12' => 'Toyota',
                                    '13' => 'Hyundai',
                                    '14' => 'Nissan',
                                    '15' => 'Isuzu',
                                    '16' => 'Toyota',
                                    '17' => 'Aston Martin',
                                    '18' => 'Nissan',
                                    '19' => 'Isuzu',
                                    '20' => 'Hyundai',
                                );
                                for ($i = 1; $i <= 20; $i++) {
                                ?>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-6 next">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="image-option" id="image-options<?php echo $i; ?>" value="option<?php echo $i; ?>">
                                            <label class="form-check-label" for="image-options<?php echo $i; ?>">
                                                <img src="assets/img/logobrands/img-logo<?php echo $i; ?>.png" class="img-fluid img-circleimg" alt="">
                                                <?php echo $name[$i]; ?>
                                            </label>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <fieldset attr-id="1">
                                <div class="row box__scroll" id="fieldset2">
                                    <?php $name = array(
                                        '1' => 'Revo',
                                        '2' => 'Alphard',
                                        '3' => 'Avanza',
                                        '4' => 'Camry',
                                        '5' => 'Corlla',
                                        '6' => 'Revo',
                                        '7' => 'Alphard',
                                        '8' => 'Avanza',
                                        '9' => 'Camry',
                                        '10' => 'Corlla',
                                        '11' => 'Revo',
                                        '12' => 'Alphard',
                                        '13' => 'Avanza',
                                        '14' => 'Camry',
                                        '15' => 'Corlla',
                                        '16' => 'Revo',
                                        '17' => 'Alphard',
                                        '18' => 'Avanza',
                                        '19' => 'Camry',
                                        '20' => 'Corlla',

                                    );
                                    for ($i = 1; $i <= 20; $i++) {
                                    ?>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-6 next">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <?php echo $name[$i]; ?>
                                                </label>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>

                                <!--  -->
                                <fieldset attr-id="2">
                                    <div class="row box__scroll" id="fieldset3">
                                        <?php $name = array(
                                            '1' => '2.4 E',
                                            '2' => '2.4 E Plus 4WD',
                                            '3' => '2.4 J',
                                            '4' => '2.4 E 4WD',
                                            '5' => '2.4 Entry',
                                            '6' => '2.4 E',
                                            '7' => '2.4 E Plus 4WD',
                                            '8' => '2.4 J',
                                            '9' => '2.4 E 4WD',
                                            '10' => '2.4 Entry',
                                            '11' => '2.4 E',
                                            '12' => '2.4 E Plus 4WD',
                                            '13' => '2.4 J',
                                            '14' => '2.4 E 4WD',
                                            '15' => '2.4 Entry',
                                            '16' => '2.4 E',
                                            '17' => '2.4 E Plus 4WD',
                                            '18' => '2.4 J',
                                            '19' => '2.4 E 4WD',
                                            '20' => '2.4 Entry',

                                        );
                                        for ($i = 1; $i <= 20; $i++) {
                                        ?>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-6 next">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        <?php echo $name[$i]; ?>
                                                    </label>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <!--  -->
                                    <fieldset attr-id="3">
                                        <div class="row box__scroll" id="fieldset4">
                                            <?php $years = array(
                                                '1' => '2022',
                                                '2' => '2022',
                                                '3' => '2022',
                                                '4' => '2022',
                                                '5' => '2022',
                                                '6' => '2022 ',
                                                '7' => '2022',
                                                '8' => '2022',
                                                '9' => '2022',
                                                '10' => '2022',
                                                '11' => '2022 ',
                                                '12' => '2022',
                                                '13' => '2022',
                                                '14' => '2022',
                                                '15' => '2022',
                                            );
                                            for ($i = 1; $i <= 15; $i++) {
                                            ?>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-6 next">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            <?php echo $years[$i]; ?>
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <!--  -->
                                        <fieldset attr-id="4">
                                            <div class="row box__scroll" id="fieldset5">
                                                <?php $content = array(
                                                    '1' => 'ถังน้ำสำรอง',
                                                    '2' => 'ชุดสายไฟ',
                                                    '3' => 'กล่องฟิวส์',
                                                    '4' => 'ถังน้ำมัน',
                                                    '5' => 'ออยล์คูเลอร์',
                                                    '6' => 'ออยล์คูเลอร์ ',
                                                    '7' => 'ถังน้ำสำรอง',
                                                    '8' => 'ชุดสายไฟ',
                                                    '9' => 'กล่องฟิวส์',
                                                    '10' => 'ถังน้ำมัน',
                                                    '11' => 'ถังน้ำสำรอง ',
                                                    '12' => 'ชุดสายไฟ',
                                                    '13' => 'กล่องฟิวส์',
                                                    '14' => 'ถังน้ำมัน',
                                                    '15' => 'ออยล์คูเลอร์',
                                                    '16' => 'ถังน้ำมัน',
                                                    '17' => 'ถังน้ำสำรอง ',
                                                    '18' => 'ชุดสายไฟ',
                                                    '19' => 'กล่องฟิวส์',
                                                    '20' => 'ถังน้ำมัน',
                                                );
                                                for ($i = 1; $i <= 15; $i++) {
                                                ?>
                                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12 ">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                <?php echo $content[$i]; ?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </fieldset>
                                        <!--  -->
                                    </fieldset>
                                    <!--  -->

                                </fieldset>
                                <!--  -->
                            </fieldset>
                            <!--  -->
                        </div>
                    </div>
                </form>
                <!--  -->

                <div class="box__btn">
                    <a href="javascript:void(0)" class="btn btn__back">{{ trans('file.Back') }}</a>
                    <a href="javascript:void(0)" class="btn btn__save">{{ trans('file.Submit') }}</a>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
</div>
{{-- Modal for copy brand, model, category, etc.. --}}

@endsection

@section('script')
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<script type="text/javascript">
    $(".nav_list #product #product-list-menu").addClass("active");
    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;
    var isWarranty = "{{ $data->is_warranty }}";
    var isDeliver = "{{ isset($transport->is_deliver)? $transport->is_deliver : 1 }}";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // auto close alert
    setTimeout(() => {
        $('.alert').alert('close');
    }, 2000);
    // auto close alert

    // specify initilize option data
    setDuration(isWarranty);
    setEstimateDays(isDeliver);
    // specify initilize option data

    // control brand, model, category event
    $(".next").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        next_fs.show();
        const attr__value = next_fs.attr('attr-id');
        // alert(attr__value);
        if (attr__value == 1) {
            $('.txt__titlestep').addClass('d-none');
            $('.step1').removeClass('d-none');
            $('.txt__brands').html('แบรนด์');
            $('.step2').removeClass('d-none');
            $('.txt__series').html('รุ่น');
        } else if (attr__value == 2) {
            $('.step3').removeClass('d-none');
            $('.txt__subseries').html('รุ่นย่อย');
        } else if (attr__value == 3) {
            $('.step4').removeClass('d-none');
            $('.txt__years').html('ปี');
        } else if (attr__value == 4) {
            $('.step5').removeClass('d-none');
            $('.txt__cat').html('หมวดหมู่');
        }

        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        previous_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 0.8 + (1 - now) * 0.2;
                left = ((1 - now) * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function() {
        return false;
    })
    // control brand, model, category event


    // upload image
    $(document).on('change', '#upload-image', function() {
        var event = $(this);
        uploadImage(event);
    });

    function uploadImage(event) {
        var imageUrl = '';
        var htmlText = '';
        var file_data = event.prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        $.ajax({
            url: '../dropzone/store',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(data) {
                imageUrl = "{{ asset('product/images') }}" + '/' + data;
                htmlText = '<div class="col-xl-3 col-lg-4 col-md-6 col-12">' +
                    '<input type="hidden" name="image[]" value="' + data + '">' +
                    '<a href="javascript:void(0)" data-image="' + data + '" class="btn__trash" >' +
                    '<img src="' + imageUrl + '" class="img-fluid" alt="product image">' +
                    '<i class="fa-solid fa-trash-can"></i> {{ trans('
                file.Remove ') }}' +
                    '</a></div>';
                $('#show-image').prepend(htmlText);
            }
        });
    }
    // upload image

    // remove image
    $(document).on('click', '.btn__trash', function(e) {
        var imageName = $(e.currentTarget).data('image');

        $.ajax({
            url: '../dropzone/remove',
            dataType: 'text',
            data: {
                'imageName': imageName
            },
            type: 'post',
            success: function(data) {
                $(e.currentTarget).parent().remove();
                e.preventDefault();
            }
        });

    });
    // remove image

    // control warranty option
    $('input[name="is_warranty"]').on('change', function() {
        var value = $(this).val();
        setDuration(value);
    });

    function setDuration(value) {
        if (value == 0) {
            $('input[name="duration"]').prop('required', false);
            $('input[name="duration"]').prop('readonly', true);
            $('input[name="duration"]').val('');
        } else {
            $('input[name="duration"]').prop('required', true);
            $('input[name="duration"]').prop('readonly', false);
        }
    }
    // control warranty option

    // control transport status
    $('input[name="is_deliver"]').on('change', function() {
        var value = $(this).val();
        setEstimateDays(value);
    });

    function setEstimateDays(value) {
        if (value == 1) {
            $('select[name="estimated_days"]').prop('required', false);
            $('select[name="estimated_days"]').prop('disabled', true);
            $('select[name="estimated_days"]').val('');
        } else {
            $('select[name="estimated_days"]').prop('required', true);
            $('select[name="estimated_days"]').prop('disabled', false);
        }
    }
    // control transport status

    // calculate commission and revenue
    $('#product-price').on('input', function() {
        const price = $(this).val();
        const vatAmt = price - (price * (100 / (100 + 7)));
        const basicAmt = price - vatAmt;
        const commission = (price * 15) / 100;
        const revenue = basicAmt - commission;
        $('input[name="commission"]').val(commission.toFixed(2));
        $('input[name="revenue"]').val(revenue.toFixed(2));
    })
    // calculate commission and revenue

    // active progress bar
    $('#warranty').on('click', function() {
        $('#progress-warranty').addClass('activenav');
    });

    $('#transportion').on('click', function() {
        $('#progress-transport').addClass('activenav');
    });

    $('#price').on('click', function() {
        $('#progress-amount').addClass('activenav');
    });
    // active progress bar

    // insert salesman code
    $('#salesman-code').on('input', function() {
        $('input[name="salesman_code"]').val($(this).val());
    });
    // insert salesman code

    $(document).on('click', '#submit-btnxx', function(e) {
        $('#msform').submit();
        // e.preventDefault();
        // if ( $("#msform").valid() ) {
        // $.ajax({
        //     type:'POST',
        //     url:'{{route('products.store')}}',
        //     data: $("#msform").serialize(),
        //     success: function(data){
        //        console.log(data);
        //         $('input[name="product_code"]').val(data.product_code);
        //         $('input[name="product_type"]').val(data.id);
        //         $('#created-at').html(data.created_at);
        //         $('#created-by').html(data.created_by);

        //         alert(data.message);
        //         // location.href = '/products';
        //     },
        //     error: function(error) {
        //        console.log(error);
        //     },
        // });
        // }

    });

    // validation
    function validate() {

        var name_th = $('input[name="name_th"]').val();
        var name_th = $('input[name="name_en"]').val();
        if (name_th == '')
            $('#name-th-error').html('product name is require')

        if (name_en == '')
            $('#name-th-error').html('product name is require')

        // var product_code = $("input[name='code']").val();
        // var barcode_symbology = $('select[name="barcode_symbology"]').val();
        // var exp = /^\d+$/;

        // if(!(product_code.match(exp)) && (barcode_symbology == 'UPCA' || barcode_symbology == 'UPCE' || barcode_symbology == 'EAN8' || barcode_symbology == 'EAN13') ) {
        //     alert('Product code must be numeric.');
        //     return false;
        // }
        // else if(product_code.match(exp)) {
        //     if(barcode_symbology == 'UPCA' && product_code.length > 11){
        //         alert('Product code length must be less than 12');
        //         return false;
        //     }
        //     else if(barcode_symbology == 'EAN8' && product_code.length > 7){
        //         alert('Product code length must be less than 8');
        //         return false;
        //     }
        //     else if(barcode_symbology == 'EAN13' && product_code.length > 12){
        //         alert('Product code length must be less than 13');
        //         return false;
        //     }
        // }

        // if( $("#type").val() == 'combo' ) {
        //     var rownumber = $('table.order-list tbody tr:last').index();
        //     if (rownumber < 0) {
        //         alert("Please insert product to table!")
        //         return false;
        //     }
        // }
        // if($("#is-variant").is(":checked")) {
        //     rowindex = $("table#variant-table tbody tr:last").index();
        //     if (rowindex < 0) {
        //         alert('This product has variant. Please insert variant to table');
        //         return false;
        //     }
        // }
        // $("input[name='price']").prop('disabled',false);
        // return true;
    }
    // validation
</script>

@endsection
