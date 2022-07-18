@extends('supplier.auth.layouts.template')

@section('title', 'Register')

@section('style')
<link href="{{asset('assets/css/login3.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                            {{ $phone }}
                        </p>
                    </div>
                    <br>

                    <div class="box-bb-num">
                        <form id="frm-confirm" method="POST" class="form-inline digit-group" action="{{ route('supplier.register.confirmOtp') }}" data-group-name="digits" data-autosubmit="false" autocomplete="off">

                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <input type="text" id="digit-1" class="form-control text-center bg-dark text-white" name="otp_digit[]" data-next="digit-2" style="width:60px;height:50px;font-size:25px;" />
                            <input type="text" id="digit-2" class="form-control text-center bg-dark text-white" name="otp_digit[]" data-next="digit-3" data-previous="digit-1" style="width:60px;height:50px;font-size:25px;" />
                            <input type="text" id="digit-3" class="form-control text-center bg-dark text-white" name="otp_digit[]" data-next="digit-4" data-previous="digit-2" style="width:60px;height:50px;font-size:25px;" />
                            <input type="text" id="digit-4" class="form-control text-center bg-dark text-white" name="otp_digit[]" data-next="digit-5" data-previous="digit-3" style="width:60px;height:50px;font-size:25px;" />
                            <input type="text" id="digit-5" class="form-control text-center bg-dark text-white" name="otp_digit[]" data-next="digit-6" data-previous="digit-4" style="width:60px;height:50px;font-size:25px;" />
                            <input type="text" id="digit-6" class="form-control text-center bg-dark text-white" name="otp_digit[]" data-previous="digit-5" style="width:60px;height:50px;font-size:25px;" />

                            <div class="tt-text-log mb-3">
                                @if($errors->has('otp_digit.*'))
                                <span class="dot__color">{{ $errors->first('otp_digit.*') }}</span>
                                @endif
                            </div>
                            {{-- Please confirm OTP again. --}}

                        </form>
                    </div>
                    <br>
                    <div class="tt-text-re-num">
                        <p>
                            {{ trans('file.If you do not get your password in 1 minute') }}
                        </p>
                    </div>
                    <div class="tt-text-re-num2">
                        <p>
                            {{ trans('file.Please press') }}
                            <font>{{ trans('file.Resend OTP code') }}</font> &nbsp;
                            <a id="request-otp" href="#"><i class='fas fa-sync-alt'></i></a>
                        </p>
                    </div>
                    <br>
                    <div class='but-bb-log'>
                        <a href="{{ route('supplier.register.smsConfirm') }}">
                            <button class="button button1"> {{ trans('file.Back') }}
                            </button>
                        </a>
                        &nbsp;
                        <button id="btn-submit" class="button button2"> {{ trans('file.Next') }} &nbsp; <i class='fas fa-angle-right'></i></button>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection

@section('script')
<script type='text/javascript'>
    $(document).ready(() => {

        var phone = "{{ $phone }}";

        // control otp digit
        $('.digit-group').find('input').each(function() {
            $(this).attr('maxlength', 1);
            $(this).on('keyup', function(e) {
                var parent = $($(this).parent());

                if (e.keyCode === 8 || e.keyCode === 37) {
                    var prev = parent.find('input#' + $(this).data('previous'));

                    if (prev.length) {
                        $(prev).select();
                    }
                } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
                    var next = parent.find('input#' + $(this).data('next'));

                    if (next.length) {
                        $(next).select();
                    } else {
                        if (parent.data('autosubmit')) {
                            parent.submit();
                        }
                    }
                }
            });
        });

        // submit otp
        $('#btn-submit').on('click', function() {
            $('#frm-confirm').submit();
        });

        $('#request-otp').on('click', function() {
            $.ajax({
                type: 'GET',
                url: 'register/request-otp',
                data: {
                    'phone': phone
                },
                dataType: 'text',
                success: function(data) {
                    $('input[name="token"]').val(data);
                },
                error: function(error) {
                    console.log(error);
                },
            });
        });

    });
</script>

@endsection
