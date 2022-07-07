@extends('supplier.layouts.template')

@section('content')
<input type="hidden" id="pageName" name="pageName" value="setting-product">
<div class="content" id="setting-createproductresult">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__titlepage">
                    <h3>{{ trans('file.Add Second Hand') }}</h3>
                </div>
            </div>

            <div class="col-lg-9">
                <?php for ($o = 1; $o <= 2; $o++) { ?>
                    <form id="msform">
                        <div class="accordion" id="acctab<?php echo $o; ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button <?php if ($o == 2) {
                                                                        echo 'collapsed';
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#contentdetail<?php echo $o; ?>" aria-expanded="true" aria-controls="contentdetail<?php echo $o; ?>">
                                        <p class="txt__title"><i class="fa-solid fa-circle-exclamation"></i> {{ trans('file.Product Information') }} <?php echo $o; ?></p>
                                    </button>
                                </h2>
                                <div id="contentdetail<?php echo $o; ?>" class="accordion-collapse collapse <?php if ($o != 2) {
                                                                                                                echo 'show';
                                                                                                            } ?>" aria-labelledby="headingOne" data-bs-parent="#acctab<?php echo $o; ?>">
                                    <div class="accordion-body">
                                        <div class="box__itemslist">



                                            <div class="box__allstep">
                                                <div class="box__contentdetail">

                                                    <div class="box__forminput">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="product_id">{{ trans('file.ID') }}</label>
                                                                    <input type="text" class="form-control" name="product_id" placeholder="{{ trans('file.Specify') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="name_th">{{ trans('file.Product Name') }} (TH) <span>*</span></label>
                                                                    <input type="text" class="form-control" name="name_th" placeholder="{{ trans('file.Specify') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="name_en">{{ trans('file.Product Name') }} (EN) <span>*</span></label>
                                                                    <input type="text" class="form-control" name="name_en" placeholder="{{ trans('file.Specify') }}">
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="trading_name">{{ trans('file.Trading Name') }}</label>
                                                                    <input type="text" class="form-control" name="trading_name" placeholder="{{ trans('file.Specify') }}">
                                                                    <span>{{ trans('file.Trading Name Message') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

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
                                                                        <div class="row">
                                                                            <?php for ($i = 1; $i <= 3; $i++) { ?>
                                                                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                                                                    <a href="javascript:void(0)" class="btn__trash">
                                                                                        <img src="assets/img/img-null.png" class="img-fluid" alt="">
                                                                                        <i class="fa-solid fa-trash-can"></i> {{ trans('file.Remove') }}
                                                                                    </a>
                                                                                </div>
                                                                            <?php } ?>

                                                                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                                                                <div class="drop-zone">
                                                                                    <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"></i>
                                                                                        <p> {{ trans('file.Attach Image') }}</p>
                                                                                        <div class="tt-img-detail">
                                                                                            <p> {{ trans('file.Attach Image Message') }}</p>
                                                                                        </div>
                                                                                    </span>
                                                                                    <input type="file" name="myFile" class="drop-zone__input">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="box__statusoptions">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="box__grade">
                                                                    <p class="txt__titlebox">{{ trans('file.Grade') }} <span>*</span></p>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="grade1">
                                                                        <label class="form-check-label" for="grade1">
                                                                            {{ trans('file.Genuine') }}
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="grade2">
                                                                        <label class="form-check-label" for="grade2">
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
                                                                    <input type="text" class="form-control" name="maker" placeholder="{{ trans('file.Specify') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="sku_code">{{ trans('file.SKU CODE') }}</label>
                                                                    <input type="text" class="form-control" name="sku_code" placeholder="{{ trans('file.Specify') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="">{{ trans('file.Product Quality') }} <span>*</span></label>
                                                                    <select class="form-select" aria-label="Default select example" name="quality">
                                                                        <option selected>{{ trans('file.Excellent') }}</option>
                                                                        <option value="1">{{ trans('file.Excellent') }}</option>
                                                                        <option value="2">{{ trans('file.Good') }}</option>
                                                                        <option value="3">{{ trans('file.Fair') }}</option>
                                                                        <option value="4">{{ trans('file.Poor') }}</option>
                                                                        <option value="5">{{ trans('file.repairable') }} </option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="shop_original_code">{{ trans('file.Shop Original Code') }}</label>
                                                                    <input type="text" class="form-control" name="shop_original_code" placeholder="{{ trans('file.Specify') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="vin_code">{{ trans('file.VIN Code') }}</label>
                                                                    <input type="text" class="form-control" name="vin_code" placeholder="{{ trans('file.Specify') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="full_model_code">{{ trans('file.Full Model Code') }}</label>
                                                                    <input type="text" class="form-control" name="full_model_code" placeholder="{{ trans('file.Specify') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="engine_model_code">{{ trans('file.Engine Model Code') }}</label>
                                                                    <input type="text" class="form-control" name="engine_model_code" placeholder="{{ trans('file.Specify') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="color">{{ trans('file.Color') }}</label>
                                                                    <input type="text" class="form-control" name="color" placeholder="{{ trans('file.Specify') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="trim">{{ trans('file.Trim') }}</label>
                                                                    <input type="text" class="form-control" name="trim" placeholder="{{ trans('file.Specify') }}">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <!--  -->
                                                </div>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contentgaruntee<?php echo $o; ?>" aria-expanded="false" aria-controls="contentgaruntee<?php echo $o; ?>">
                                        <p class="txt__title">{{ trans('file.Warranty') }}</p>
                                    </button>
                                </h2>
                                <div id="contentgaruntee<?php echo $o; ?>" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#acctab<?php echo $o; ?>">
                                    <div class="accordion-body">
                                        <div class="box__guarantee">
                                            <div class="form-group">
                                                <label for="">{{ trans('file.Warranty') }} <span>*</span></label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="is_warranty" id="yesguarantee">
                                                    <label class="form-check-label" for="yesguarantee">
                                                        {{ trans('file.Insured') }}
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="is_warranty" id="nogurantee">
                                                    <label class="form-check-label" for="nogurantee">
                                                        {{ trans('file.No Insurance') }}
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}">
                                                    <button class="btn btn__garuntee dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">{{ trans('file.Month') }}</button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">{{ trans('file.Day') }}</a></li>
                                                        <li><a class="dropdown-item" href="#">{{ trans('file.Month') }}</a></li>
                                                        <li><a class="dropdown-item" href="#">{{ trans('file.Year') }}</a></li>
                                                    </ul>
                                                </div>
                                                <span>{{ trans('file.Warranty Message1') }}</span>
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
                                                            <textarea name="term_and_condition" placeholder="{{ trans('file.Specify') }}" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contenttransport<?php echo $o; ?>" aria-expanded="false" aria-controls="contenttransport<?php echo $o; ?>">
                                        <p class="txt__title">{{ trans('file.Transport Information') }}</p>

                                    </button>
                                </h2>
                                <div id="contenttransport<?php echo $o; ?>" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#acctab<?php echo $o; ?>">
                                    <div class="accordion-body">
                                        <div class="box__transportation">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="txt__title">{{ trans('file.Transport Information') }}</p>

                                                    <div class="box__weight">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                                                <p class="txt__label">{{ trans('file.Weight') }}</p>
                                                            </div>

                                                            <div class="col-xl-10 col-lg-10 col-md-10 col-12">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="weight">
                                                                    <button class="btn btn__weight dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">KG</button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">KG</a></li>
                                                                        <li><a class="dropdown-item" href="#">PCS</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="box__size">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                                                <p class="txt__label">{{ trans('file.Product Size') }}</p>
                                                            </div>

                                                            <div class="col-xl-10 col-lg-10 col-md-10 col-12">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="width" placeholder="กว้าง">
                                                                    <input type="text" class="form-control" name="length" placeholder="ยาว">
                                                                    <input type="text" class="form-control" name="height" placeholder="สูง">
                                                                    <span>{{ trans('file.UOM') }}</span>
                                                                    <button class="btn btn__unit dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">CM</button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#">CM</a></li>
                                                                        <li><a class="dropdown-item" href="#">CM</a></li>
                                                                        <li><a class="dropdown-item" href="#">CM</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="box__transport">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                                                <p class="txt__label">{{ trans('file.Transportation') }}</p>
                                                            </div>
                                                            <div class="col-xl-10 col-lg-10 col-md-10 col-12">

                                                                <?php
                                                                $title = array(
                                                                    '1' => '{{ trans("file.Shipments supported by CPN") }}',
                                                                    '2' => '{{ trans("file.Private transport company (large parcels)") }}',
                                                                    '3' => '{{ trans("file.Show the shipping name that the Supplier setting is.") }}',
                                                                );
                                                                for ($i = 1; $i <= 3; $i++) {
                                                                ?>

                                                                    <div class="accordion" id="accordionExample">
                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header" id="headingOne">
                                                                                <button class="accordion-button  <?php if ($i != 1) {
                                                                                                                        echo 'collapsed';
                                                                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#acco-tab<?php echo $i; ?>" aria-expanded="true" aria-controls="acco-tab<?php echo $i; ?>">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                                            <?php echo $title[$i]; ?>
                                                                                        </label>
                                                                                    </div>
                                                                                </button>
                                                                            </h2>
                                                                            <div id="acco-tab<?php echo $i; ?>" class="accordion-collapse collapse <?php if ($i == 1) {
                                                                                                                                                        echo 'show';
                                                                                                                                                    } ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body">
                                                                                    <div class="box__type">
                                                                                        <div class="row">
                                                                                            <?php for ($z = 1; $z <= 3; $z++) { ?>
                                                                                                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                                                                    <p class="txt__type">ประเภทการจัดส่ง <span class="label__success">การจัดส่งที่รองรับโดย CPN</span></p>
                                                                                                </div>
                                                                                                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                                                                    <div class="itemstype">
                                                                                                        <p class="txt__price">฿ 29.00
                                                                                                            <?php if ($i != 1) { ?>
                                                                                                                <a href="javascript:void(0)"><i class="fa-solid fa-pencil"></i></a>
                                                                                                            <?php } ?>
                                                                                                        </p>
                                                                                                        <div class="form-check form-switch">
                                                                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            <?php } ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--  -->

                                                    <div class="box__settransport">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                                                <p class="txt__label">{{ trans('file.Delivery Preparation') }}</p>
                                                            </div>

                                                            <div class="col-xl-10 col-lg-10 col-md-10 col-12">
                                                                <div class="wrapper__checkbox">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            {{ trans('file.Ready to Ship') }}
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            {{ trans('file.Prepare to deliver longer than usual.') }}
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <span class="label__setdate">{{ trans('file.Specify Day') }}</span>
                                                                        <select class="form-select" aria-label="Default select example">
                                                                            <option selected>1</option>
                                                                            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>

                                                                    <span class="txt__red">{{ trans('file.Specify Day Message') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item  box__priceitems">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contentprice<?php echo $o; ?>" aria-expanded="false" aria-controls="contentprice<?php echo $o; ?>">
                                        <p class="txt__title">{{ trans('file.Price') }}</p>

                                    </button>
                                </h2>
                                <div id="contentprice<?php echo $o; ?>" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="box__price">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                                    <div class="box__itemsprice">
                                                        <p class="txt__title">{{ trans('file.Price') }}</p>

                                                        <div class="form-group">
                                                            <label for="price">{{ trans('file.Amount') }} <span>{{ trans('file.Including VAT') }}</span></label>
                                                            <input type="number" class="form-control" name="price" placeholder="{{ trans('file.Specify') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-6 col-md-6 col-12">
                                                    <div class="box__itemstotal">
                                                        <p class="txt__title">{{ trans('file.Amount Message') }}</p>

                                                        <div class="wrapper__form">
                                                            <div class="form-group">
                                                                <label for="commission">{{ trans('file.Commission') }} </label>
                                                                <input type="text" class="form-control" name="commission" placeholder="{{ trans('file.Specify') }}" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="revenue">{{ trans('file.Net Income') }}</label>
                                                                <input type="text" class="form-control" name="revenue" placeholder="{{ trans('file.Specify') }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                    <hr />
                <?php } ?>


                {{-- copy product --}}

                <div class="box__condition">
                    <div class="box__title">
                        <p class="txt__title">{{ trans('file.Copy Product Message1') }} <span>{{ trans('file.Copy Product Message2') }}</span></p>
                    </div>

                    <div class="box__wrapperbutton">
                        <a href="setting-copyproduct.php" class="btn btn__copyproduct">
                            <img src="{{ asset('assets/img/icon/icon__copyproduct.svg') }}" class="img-fluid" alt="icon__copyproduct.svg">
                            <p>{{ trans('file.Copy Product') }}</p>
                            <span>{{ trans('file.Product name, brand and model') }} </span>
                            <span class="txt__red">{{ trans('file.same category but the quality is different') }}</span>
                        </a>

                        <a href="javascript:void(0)" class="btn btn__searchcat" data-bs-toggle="modal" data-bs-target="#modlapdcatdiffrence">
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

                    <?php for ($x = 1; $x <= 2; $x++) { ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button <?php if ($x == 2) {
                                                                    echo 'collapsed';
                                                                } else {
                                                                    echo '';
                                                                } ?>" type=" button" data-bs-toggle="collapse" data-bs-target="#stepcondition<?php echo $x; ?>" aria-expanded="false" aria-controls="stepcondition<?php echo $x; ?>">
                                    <p class="txt__title"><i class="fa-solid fa-circle-exclamation"></i> {{ trans('file.Product Information') }} <?php echo $x; ?></p>
                                </button>
                            </h2>
                            <div id="stepcondition<?php echo $x; ?>" class="accordion-collapse collapse  <?php if ($x == 1) {
                                                                                                                echo 'show';
                                                                                                            } else {
                                                                                                                echo '';
                                                                                                            } ?>" aria-labelledby=" headingTwo" data-bs-parent="#acctabstepcondition<?php echo $x; ?>">
                                <div class="accordion-body">
                                    <nav>
                                        <ul>
                                            <li class="activenav"><a href="javascript:void(0)">{{ trans('file.Details') }}</a></li>
                                            <li><a href="javascript:void(0)">{{ trans('file.Details') }}</a></li>
                                            <li><a href="javascript:void(0)">{{ trans('file.Warranty') }}</a></li>
                                            <li><a href="javascript:void(0)">{{ trans('file.Transport Information') }}</a></li>
                                            <li><a href="javascript:void(0)">{{ trans('file.Amount') }} </a></li>
                                            <li><a href="javascript:void(0)">{{ trans('file.Quantity') }}</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                {{-- create log --}}
                <div class="box__datecreate">
                    <form>
                        <div class="form-group">
                            <label for="">{{ trans('file.Created Date') }}</label>
                            <p class="txt__detail">01/12/2564</p>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('file.Created By') }}</label>
                            <p class="txt__detail">Thanatcha Singsomboon</p>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('file.Sell Price') }}</label>
                            <div class="box__status status-sold">{{ trans('file.Sold') }}</div>
                            <div class="box__status status-selling">{{ trans('file.Selling') }}</div>
                            <div class="box__status status-cancle">{{ trans('file.Cancel') }}</div>
                            <div class="box__status status-banned">{{ trans('file.Suspended') }}</div>
                        </div>
                    </form>
                </div>
                {{-- create log --}}

                <div class="box__salecode">
                    <form>
                        <div class="form-group">
                            <label for="salesman_code">{{ trans('file.SALE CODE') }}</label>
                            <input type="text" class="form-control" name="salesman_code" placeholder="{{ trans('file.Specify') }}">
                        </div>

                    </form>
                </div>

                <!--  -->
            </div>

            <!--  -->
            <div class="col-lg-12">
                <div class="box__btn">
                    <a href="javascript:void(0)" class="btn btn__back">{{ trans('file.Back') }}</a>
                    <a href="javascript:void(0)" class="btn btn__confirm">{{ trans('file.Submit') }}</a>
                </div>

            </div>
            <!--  -->
        </div>

    </div>
</div>

<!-- Modal for copy brand, model, category, etc.. -->
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
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ระบุ" aria-describedby="button-addon2">
                                        <button class="btn btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                                <div class="col-6">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 next">
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
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12 next">
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
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12 next">
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
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-12 next">
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
@endsection

@section('script')
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/dropzone.js"></script>

<script>
    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;


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
</script>
@endsection