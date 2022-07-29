@extends('supplier.auth.layouts.template')

@section('title', 'Login')

@section('style')
<link href="{{asset('assets/css/login1.css')}}" rel="stylesheet">
<style>
    .dot__color {
        color: rgb(224, 91, 91);
        margin-left: 5px;
    }
    
    /* Modal Content */
    #modal-regis3 .modal-content {  
        background-color: #fefefe;
        margin: auto;
        /* padding: 20px;
        border: 1px solid #888;*/
        /* width: 35%; */
    }

    /* The Close Button */
    #sec-regis5 .close {
        color: #c1c1c1f2;
        float: right;
        font-size: 48px;
        font-weight: bold;
        margin-left: 497px;
        margin-top: 4px;
    }

    #modal-regis3 .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    #modal-regis3 .tt-text-con p {
        color: white;
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 36px;
        text-align: center;
    }

    #modal-regis3 .tt-text-con2 p {
        color: rgb(195, 195, 195);
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 36px;
        text-align: center;
        margin-top: -20px;
    }

    #modal-regis3 .tt-text-con3 p {
        color: #FF7B7B;
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 36px;
        text-align: center;
    }

    #modal-regis3 .modal-footer {
        background-color: #282828;
        padding: 25px;
        justify-content: center;
    }
</style>
@endsection

@section('content')
<section id="sec-login1">
    <div class="container">
        <div class="box-b-login">
            <form method="POST" action="{{ route('supplier.login') }}">
                @csrf
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="img-img-log">
                            <img src="{{asset('assets/img/login/ln1.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 ">
                        <div class="pdlogin-sup">
                            <div class="h-text-log">
                                <p>{{ trans('file.Sign In') }}</p>
                            </div>

                            <div class="tt-text-log">
                                <p>{{ trans('file.Mobile number / email') }}</p>
                            </div>
                            <div class="input-group box-border">
                                <input type="text" 
                                        class="form-control" 
                                        name="phone" 
                                        placeholder="01xx-xxx-xxxxx" 
                                        aria-label="Username" 
                                        aria-describedby="basic-addon1" 
                                        required autofocus 
                                        value="{{old('phone')}}"
                                        maxlength="13"
                                >
                            </div>
                            <div class="tt-text-log mb-3">
                                @if(session()->has('error'))
                                <span class="dot__color">{{ session()->get('error') }}</span>
                                @endif
                            </div>

                            <div class="tt-text-log2">
                                <p>{{ trans('file.Password') }}</p>
                            </div>
                            <div class="input-group box-border">
                                <input type="password" 
                                        name="password" 
                                        class="form-control" 
                                        id="password" 
                                        placeholder="*************" 
                                        required>
                            </div>
                            <div class="tt-text-log mb-3">
                                @if(session()->has('error'))
                                <span class="dot__color">{{ session()->get('error') }}</span>
                                @endif
                            </div>

                            <div class="t-pass-t">
                                <p>{{ trans('file.Forgot Password') }}</p>
                            </div>

                            <br>

                            <div class='but-bb-log'>
                                <button class="button button1" type="submit"> {{ trans('file.Sign In') }} </button>
                            </div>

                            <div class="text-or-t">
                                <p>{{ trans('file.Or') }}</p>
                            </div>

                            <div class='but-bb-log2'>
                                <a href="{{ route('supplier.register') }}">
                                    <button class="button button2" type="button"> {{ trans('file.Register') }} </button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                @if ($errors->has('success'))
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <div class="modal-body">
                                <img src="assets/img/login/sf.png" class="img-fluid" alt="">
                            </div>
                            <div class="modal-footer">
                                <div class="tt-text-con">
                                    <p>{{ trans('file.Successful registration') }}</p>
                                </div>
                                <br>
                                <div class="but-bb">
                                    <button class="button button3"> {{ trans('file.Agree') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </form>
        </div>
    </div>
</section>

<section id="modal-regis3">
    @if(session()->has('register'))
        <?php 
            $display_class = 'd-block';
        ?>
    @else
        <?php 
            $display_class = '';
        ?>
    @endif
    <!-- The Modal -->
    <div class="modal {{ $display_class }}" id="modalAlert">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/img/login/sc.png') }}" class="img-fluid" alt=""
                    style="margin-left: 28px;">
                </div>
                <div class="modal-footer">
                    <div class="tt-text-con">
                        <p>{{ trans('file.Waiting for approval from the staff') }}</p>
                    </div>
                    <div class="tt-text-con2">
                        <p>
                            {{ trans('file.approval info1') }}
                            {{ trans('file.approval info2') }}
                        </p>
                    </div>
                    <div class="tt-text-con3">
                        <p>{{ trans('file.within 24 hours.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
    <script>
        $(document).ready(function(){

            $(document).on('click', '.btn-close', function(){
                
                $('#modalAlert').removeClass('d-block');
            });

        });

    </script>
    
@endsection
