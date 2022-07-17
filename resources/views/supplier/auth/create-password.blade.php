@extends('supplier.auth.layouts.template')

@section('title', 'Register')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="{{ asset('assets/css/regis3.css') }}" rel="stylesheet">
    <style>
        .dot__color {
            color: rgb(224, 91, 91);
            margin-left: 5px;
        }
    </style>
@endsection

@section('content')

<section id="sec-regis3">
    <div class="container">
        <div class="box-b-login">
            <div class="row">
                <div class="col-lg-8">
                    <div class="img-img-log">
                        <img src="{{ asset('assets/img/login/ln1.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="{{ route('supplier.register.storePassword') }}" method="POST">
                        @csrf

                        <div class="h-text-log">
                            <p>{{ trans('file.Create Password') }}</p>
                        </div>
                        <div class="tt-text-log">
                            <p>{{ trans('file.Password') }}</p>
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password"
                               aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="tt-text-log mb-3">
                            @if($errors->has('password'))
                                <span class="dot__color">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="tt-text-log2">
                            <p>{{ trans('file.Confirm Password') }}</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password_confirmation"    
                                aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <input type="checkbox" name="toggle_password"> 
                        <span class="text-white">{{ trans('file.Show Password') }}</span>

                        <input type="hidden" name="id" value="{{ $user_id }}">

                        <br><br>
                        
                        <div class='but-bb-log'>
                            <a href="regiscon-buy.php">
                                <button type="button" class="button button1"> {{ trans('file.Back') }}
                                </button>
                            </a>
                            &nbsp;
                            <button type="submit" class="button button2" id="btn-confirm"> {{ trans('file.Next') }} &nbsp; <i class='fas fa-angle-right'></i>
                            </button>
                            
                    </form>

                        {{-- <div id="modalAlert" class="modal">
                            <div class="modal-content">
                                <span class="close-confirm">&times;</span>
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
                        </div> --}}

                        <!-- The Modal -->
                        <div id="mySucces" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="modal-body">
                                    <img src="{{ asset('assets/img/login/sf.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="modal-footer">
                                    <div class="tt-text-con">
                                        <p>{{ trans('file.Successful registration') }}</p>
                                    </div>
                                    <br>
                                    <div class="but-bb">
                                        <button id="btn-agree" class="button button3"> {{ trans('file.Agree') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>

    $(document).ready(()=> {

        $('#btn-confirm').on('click', function() {
            $('#modalAlert').modal('show');
        });

        $(document).on('click', '#btn-agree', function() {
            
            $('#modalAlert').modal('hide');
        });

        $('input[name="toggle_password"]').on('click', function(){
            var inputType = $('input[name="password"]').attr('type');
            
            if (inputType === 'password') {
                $('input[name="password"]').attr('type', 'text');
                $('input[name="password_confirmation"]').attr('type', 'text');
            } else {
                $('input[name="password"]').attr('type', 'password');
                $('input[name="password_confirmation"]').attr('type', 'password');
            }
        });

    });
    
</script>

{{-- <script>
     var modal = document.getElementById("myModal");
    var btn = document.getElementById("btn-confirm");
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
</script> --}}
    
@endsection

