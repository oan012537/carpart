@extends('supplier.auth.layouts.template')

@section('title', 'Register')

@section('style')
<link href="{{asset('assets/css/login2.css')}}" rel="stylesheet">
<style>
    .dot__color {
        color: rgb(224, 91, 91);
        margin-left: 5px;
    }
</style>
@endsection

@section('content')
<section id="sec-login1">
    <div class="container">
        <div class="box-b-login">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="img-img-log">
                        <img src="{{ asset('assets/img/login/ln1.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="pdlogin-sup">
                        <form action="{{ route('supplier.register.verifyOtp') }}" method="get">
                            <div class="h-text-log">
                                <p>
                                    {{ trans('file.Verify phone number') }}
                                </p>
                            </div>
                            <div class="text-tt-hd">
                                {{ trans('file.Please provide your phone number.') }}
                            </div>
                            <br>
                            <div class="tt-text-log">
                                <p>
                                    {{ trans('file.Mobile Number') }} <span class="dot__color"> *</span>
                                </p>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="01xx-xxx-xxxxx" aria-label="Username" name="phone" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="tt-text-log mb-3">
                                @if($errors->has('phone'))
                                <span class="dot__color">{{ $errors->first('phone') }}</span>
                                @endif

                                @if(session()->has('not_varify'))
                                <span class="dot__color">{{ session()->get('not_varify') }}</span>
                                @endif
                            </div>

                            <br>
                            <div class='but-bb-log'>
                                <button type="submit" class="button button1"> {{ trans('file.Next') }} &nbsp; <i class='fas fa-angle-right'></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
