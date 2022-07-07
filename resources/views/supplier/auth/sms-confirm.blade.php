@extends('supplier.auth.layouts.template')

@section('title', 'Register')

@section('style')
    <link href="{{asset('assets/css/login2.css')}}" rel="stylesheet">
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
                                {{ trans('file.Mobile Number') }}
                            </p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="01xx-xxx-xxxxx" aria-label="Username" name="phone_number"
                                aria-describedby="basic-addon1">
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
</section>

@endsection

