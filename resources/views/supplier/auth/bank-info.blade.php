@extends('supplier.auth.layouts.template')

@section('title', 'Register')

@section('style')
    <link href="{{asset('assets/css/regis8.css')}}" rel="stylesheet">
    <style>
        .dot__color {
            color: rgb(224, 91, 91);
            margin-left: 5px;
        }
    </style>
@endsection

@section('content')
    <section id="sec-regis5">
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
                            <p>{{ trans('file.Register') }}</p>
                        </div>
                        <div class="img-send-img">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/login/se5.png') }}" class="img-fluid" alt="..." style="">
                            </div>
                        </div>
                        <div class="tt-text-send">
                            <p>{{ trans('file.Member information') }}</p>
                        </div>
                        <div class="tt-text-send2">
                            <p>{{ trans('file.Contact information') }}</p>
                        </div>
                        <div class="tt-text-send3">
                            <p>{{ trans('file.Bank information') }}</p>
                        </div>
                        <div class="box-b-detail">
                            <form id="frm-register" action="{{route('supplier.register.store')}}" method="post">
                                @csrf
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Bank Account Number') }} <span class="dot__color"> *</span></p>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="123-123456-1" aria-label="Username"
                                       name="bank_account_no" value="{{ old('bank_account_no') }}" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Bank Account Name') }} <span class="dot__color"> *</span></p>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}"
                                      name="bank_account_name" value="{{ old('bank_account_name') }}" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Bank') }} <span class="dot__color"> *</span></p>
                                </div>
                                <div class="input-group mb-3">
                                    <select id="bank-name" class="form-select" aria-label="Default select example" name="bank_name" required>
                                            <option value="">{{ trans('file.Specify') }}</option>
                                        @foreach ($bank_list_data as $bank)
                                            <option value="{{ $bank['name'] }}">{{ $bank['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Branch') }} <span class="dot__color"> *</span></p>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="bank_branch" placeholder="{{ trans('file.Specify') }}" value="{{ old('bank_branch') }}" required>
                                    {{-- <select class="form-select" aria-label="Default select example" name="bank_branch" required>
                                            <option value="">{{ trans('file.Specify') }}</option>
                                        @foreach ($bank_branch_data as $branch)
                                            <option value="{{ $branch['name'] }}">{{ $branch['name'] }}</option>
                                        @endforeach
                                    </select> --}}
                                </div>
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Account Type') }} <span class="dot__color"> *</span></p>
                                </div>
                                <div class="input-group mb-3">
                                    <select id="bank-account-type" class="form-select" aria-label="Default select example" name="bank_account_type" required>
                                            <option value="">{{ trans('file.Specify') }}</option>
                                        @foreach ($bank_type_data as $type)
                                            <option value="{{ $type['name'] }}">{{ $type['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Copy of book bank') }} <span class="dot__color"> *</span></p>
                                </div>
                                <br>
                                {{-- drop image --}}
                                <div class="drop-zone">
                                    <label class="drop-zone__prompt">
                                        <input type="file" class="drop-zone__input" id="upload-bank-book" style="opacity: 0; width:50%;">
                                        <i class="fa fa-plus-circle" style="font-size:35px"></i>
                                        <p> {{ trans('file.Attach an image or PDF') }}</p>
                                        <div class="tt-img-detail">
                                            <p> {{ trans('file.Size does not exceed 5 Mb.') }} </p>
                                        </div>
                                    </label>

                                </div>
                                    @if($errors->has('bank_book_image'))
                                        <span class="dot__color">{{ $errors->first('bank_book_image') }}</span>
                                    @endif

                                {{-- personal --}}
                                <input type="hidden" name="store_name" value="{{ $data['store_name'] }}">
                                <input type="hidden" name="personal_first_name" value="{{ $data['personal_first_name'] }}">
                                <input type="hidden" name="personal_last_name" value="{{ $data['personal_last_name'] }}">
                                <input type="hidden" name="personal_card_id" value="{{ $data['personal_card_id'] }}">
                                <input type="hidden" name="personal_card_id_image" value="{{ $data['personal_card_id_image'] }}">
                                <input type="hidden" name="personal_house_registration" value="{{ $data['personal_house_registration'] }}">

                                <input type="hidden" name="supplier_type" value="{{ $data['supplier_type'] }}">
                                <input type="hidden" name="address" value="{{ $data['address'] }}">
                                <input type="hidden" name="province" value="{{ $data['province'] }}">
                                <input type="hidden" name="amphure" value="{{ $data['amphure'] }}">
                                <input type="hidden" name="district" value="{{ $data['district'] }}">

                                <input type="hidden" name="email" value="{{ $data['email'] }}">
                                <input type="hidden" name="phone" value="{{ $data['phone'] }}">
                                <input type="hidden" name="login_phone" value="{{ $data['login_phone'] }}">
                                <input type="hidden" name="facebook_url" value="{{ $data['facebook_url'] }}">
                                <input type="hidden" name="google_map_url" value="{{ $data['google_map_url'] }}">
                                <input type="hidden" name="store_address" value="{{ $data['store_address'] }}">
                                <input type="hidden" name="store_province" value="{{ $data['store_province'] }}">
                                <input type="hidden" name="store_amphure" value="{{ $data['store_amphure'] }}">
                                <input type="hidden" name="store_district" value="{{ $data['store_district'] }}">
                                <input type="hidden" name="store_postcode" value="{{ $data['store_postcode'] }}">
                                
                                {{-- company --}}
                                <input type="hidden" name="company_name" value="{{ $data['company_name'] }}">
                                <input type="hidden" name="contact_name" value="{{ $data['contact_name'] }}">
                                <input type="hidden" name="contact_last_name" value="{{ $data['contact_last_name'] }}">
                                <input type="hidden" name="branch" value="{{ $data['branch'] }}">
                                <input type="hidden" name="vat_registration_number" value="{{ $data['vat_registration_number'] }}">
                                <input type="hidden" name="postcode" value="{{ $data['postcode'] }}">
                                <input type="hidden" name="company_certificate" value="{{ $data['company_certificate'] }}">
                                <input type="hidden" name="vat_registration_doc" value="{{ $data['vat_registration_doc'] }}">

                            <br>

                            <div class='but-bb-log2'>
                                <button type="submit" class="button button1" id="submit-btn"> {{ trans('file.Next') }} &nbsp; <i
                                        class='fas fa-angle-right'></i>
                                </button>
                                {{-- <div id="myModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <div class="modal-body">
                                            <img src="assets/img/login/sc.png" class="img-fluid" alt=""
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
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            let oldBankName = "{{ old('bank_name') }}";
            let bankName = oldBankName ? oldBankName : '';
            $('#bank-name option[value="' + bankName + '"]').attr('selected', 'selected');

            let oldBankAccountType = "{{ old('bank_account_type') }}";
            let bankAccountType = oldBankAccountType ? oldBankAccountType : '';
            $('#bank-account-type option[value="' + bankAccountType + '"]').attr('selected', 'selected');

            // attach doc
            $('#upload-bank-book').on('change', function(){
                let event = $(this);
                uploadImage(event);
            });

            function uploadImage(event) {
                var imageUrl = '';
                var htmlText = '';
                var file_data = event.prop('files')[0];   
                var form_data = new FormData(); 
                form_data.append('_token', '{{ csrf_token() }}');
                form_data.append('file', file_data);
                $.ajax({
                    url: 'register/upload-file',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function(data){
                        $('.drop-zone__prompt').addClass('d-none');
                        imageUrl = "{{ asset('suppliers/document') }}" + '/' + data;
                        htmlText = '<div>'
                                        +'<input type="hidden" name="bank_book_image" value="'+ data +'">'
                                        +'<a href="javascript:void(0)" data-image="'+ data +'" class="btn__trash" >'
                                        +'<img src="'+ imageUrl +'" class="img-fluid" alt="product image">'
                                        +'<i class="fa-solid fa-trash-can"></i> {{ trans('file.Remove') }}'
                                        +'</a></div>';
                        $('.drop-zone').append(htmlText);
                    }
                });
            }

            // remove doc
            $(document).on('click', '.btn__trash', function(e){
                var imageName = $(e.currentTarget).data('image');

                $.ajax({
                    url: 'register/remove-file',
                    dataType: 'text',
                    data: {
                        'imageName': imageName,
                        '_token': '{{ csrf_token() }}'
                    },
                    type: 'post',
                    success: function(data) {
                        $(e.currentTarget).parent().remove();
                        $('.drop-zone__prompt').removeClass('d-none');
                        e.preventDefault();
                    }
                });
                
            });

        }); 

    </script>
    
@endsection
