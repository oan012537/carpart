@extends('supplier.auth.layouts.template')

@section('title', 'Register')

@section('style')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="{{ asset('assets/css/regis.css') }}" rel="stylesheet">
<style>
    input[type="checkbox"][readonly] {
        pointer-events: none;
    }
</style>
@endsection

@section('content')

<section id="sec-login1">
    <div class="container">
        <div class="box-b-login">
            <form id="frm-pdpa" action="{{ route('supplier.register.smsConfirm') }}">
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="img-img-log">
                            <img src="{{ asset('assets/img/login/ln1.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="b-box-big">
                            <a href="#" class="w3-btn w3-block w3-black w3-left-align">
                                <div class="t-text-s">
                                    <p onclick="switchpdpa('Demo1')">
                                        {{ trans('file.Strictly Necessary Cookies') }} &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                    </p>
                                    <div class="s-switch">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        </div>
                                    </div>
                                    <hr class="new1">
                                </div>
                            </a>
                            <div id="Demo1" class="w3-container w3-hide">
                                <div class="ko-text-t">
                                    <p>
                                        {{ trans('file.Terms / Conditions') }}
                                    </p>
                                </div>
                                <div class="b-text-t-b">
                                    <div class="d-detail">
                                        {!! $pdpa->details !!}
                                    </div>
                                </div>
                            </div>


                            <div class="t-text-s2">
                                <div class="s-switch2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="strictly_necessary_cookies" value="1" checked readonly>
                                    </div>
                                </div>
                                <p>
                                    {{ trans('file.Accept/Reject') }}
                                </p>
                            </div>
                            <div class="t-text-s3">
                                <p>
                                    {{ trans('file.Strictly Necessary Cookies') }} &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch3">
                                    <p>
                                        {{ trans('file.Always accept') }}
                                    </p>
                                </div>
                                <hr class="new3">
                            </div>
                            <a href="#" class="w3-btn w3-block w3-black w3-left-align">
                                <div class="t-text-s4">
                                    <p onclick="switchpdpa('Demo2')">
                                        {{ trans('file.Analytics Cookies') }} &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                    </p>
                                    <div class="s-switch4">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="analytics_cookies" value="1" checked>
                                        </div>
                                    </div>
                                    <hr class="new4">
                                </div>
                            </a>
                            <div id="Demo2" class="w3-container w3-hide">
                                <div class="ko-text-t">
                                    <p>
                                        {{ trans('file.Terms / Conditions') }}
                                    </p>
                                </div>

                                <div class="d-detail2">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book.
                                        It
                                        has
                                        survived not only five centuries, but also the leap into electronic
                                        typesetting,
                                        remaining essentially unchanged. </p>
                                </div>

                            </div>


                            <div class="t-text-s5">
                                <p>
                                    {{ trans('file.Functional Cookies') }} &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch5">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="functional_cookies" value="1" checked>
                                    </div>
                                </div>
                                <hr class="new5">
                            </div>
                            <div class="t-text-s6">
                                <p>
                                    {{ trans('file.Targeting Cookies') }} &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch5">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="targeting_cookies" value="1" checked>
                                    </div>
                                </div>
                                <hr class="new5">
                            </div>
                        </div>
                        <br>
                        <div class='but-bb-log'>
                            <div class="pdrightlogin pdleftlogin">
                                <a href="javascript:document.getElementById('frm-pdpa').submit();">
                                    <button type="button" class="button button1"> {{ trans('file.Accept the terms & conditions') }} &nbsp; <i class='fas fa-angle-right'></i> </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

@section('script')
<script>
    function switchpdpa(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            // alert('ok')
        } else {
            x.className = x.className.replace(" w3-hide", "");
            x.classList.remove('w3-show');
            x.classList.add('w3-hide');

            // alert('nok')

        }
    }
</script>
@endsection
