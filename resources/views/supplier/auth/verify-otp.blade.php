@extends('supplier.auth.layouts.template')

@section('title', 'Register')

@section('style')
    <link href="{{asset('assets/css/login3.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection

@section('content')
    <section id="sec-login1">
        <div class="container">
            <div class="box-b-login">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="img-img-log">
                            <img src="{{ asset('assets/img/login/ln1.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="h-text-log">
                            <p>
                                {{ trans('file.Verify OTP Code') }}
                            </p>
                        </div>
                        <div class="text-tt-hd">
                            {{ trans('file.Please enter the OTP sent to the number.') }}
                        </div>
                        <br>
                        <div class="tt-text-log">
                            <p>
                                {{ $phone_number }}
                            </p>
                        </div>
                        <br>
                        <div class="box-bb-num">
                            <form class="form-inline" action="/action_page.php">
                                <input type="text" class="form-control" id="otp1" name="otp[]" style="width:40px;">
                                <input type="text" class="form-control" id="otp2" name="otp[]" style="width:40px;">
                                <input type="text" class="form-control" id="otp3" name="otp[]" style="width:40px;">
                                <input type="text" class="form-control" id="otp4" name="otp[]" style="width:40px;">
                                <input type="text" class="form-control" id="otp5" name="otp[]" style="width:40px;">
                                <input type="text" class="form-control" id="otp6" name="otp[]" style="width:40px;">
                           
                              </form>
                            {{-- <img src="{{ asset('assets/img/login/b.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/login/b.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/login/b.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/login/b.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/login/b.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/login/b.png') }}" class="img-fluid" alt=""> --}}
                        </div>
                        <br>
                        <div class="tt-text-re-num">
                            <p>
                                {{ trans('file.If you do not get your password in 1 minute') }}
                            </p>
                        </div>
                        <div class="tt-text-re-num2">
                            <p>
                                {{ trans('file.Please press') }} <font>{{ trans('file.Resend OTP code') }}</font> &nbsp; <i class='fas fa-sync-alt'></i>
                            </p>
                        </div>

                        <br>
                        <div class='but-bb-log'>
                            <a href="{{ route('supplier.register.smsConfirm') }}">
                                <button class="button button1"> {{ trans('file.Back') }}
                                </button>
                            </a>
                            &nbsp;
                            <a href="{{ route('supplier.register.supplierInfo') }}">
                                <button class="button button2"> {{ trans('file.Next') }} &nbsp; <i class='fas fa-angle-right'></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection
