@extends('supplier.auth.layouts.template')

@section('title', 'Register')

@section('style')
    <link href="{{asset('assets/css/regis7.css')}}" rel="stylesheet">
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
                            <p>
                                {{ trans('file.Register') }}
                            </p>
                        </div>
                        <div class="img-send-img">
                            <div class="text-center">
                                <img src="{{ asset('assets/img/login/se4.png') }}" class="img-fluid" alt="...">
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
                            <div class="tt-text-log">
                                <p>{{ trans('file.Email') }}</p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="sample@gmail.com"
                                  name="email" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>{{ trans('file.Phone Number') }} *</p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="0123456789" aria-label="Username"
                                  name="phone" aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>{{ trans('file.Page URL/Facebook Page') }} *</p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Sample Name" aria-label="Username"
                                  name="facebook_url" aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>{{ trans('file.GoogleMapsURL') }} *</p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="www.sample.com"
                                   name="google_map_url" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            {{-- option --}}
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="store-location" checked>
                                <label class="form-check-label" for="store-location">
                                    {{ trans('file.Store address as on the ID card') }}
                                </label>
                            </div>
                            {{-- option --}}
                            <br>
                            <div class="tt-text-log">
                                <p>{{ trans('file.Store address') }} *</p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ระบุ" aria-label="Username"
                                   name="store_address" aria-describedby="basic-addon1" value="{{ $data['address'] }}">
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    {{ trans('file.Province') }} *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example" name="store_province">
                                    <option value="">{{ trans('file.Specify') }}</option>
                                    @foreach ($province_list_data as $province)
                                        <option value="{{ $province->id }}">{{ $province->name_th }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>{{ trans('file.Amphure') }} *</p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example" name="store_amphure">
                                    <option value="{{ $data['amphure'] }}">{{ $data['amphure'] }}</option>
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    {{ trans('file.District') }} *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example" name="store_district">
                                    <option value="{{ $data['district'] }}">{{ $data['district'] }}</option>
                                </select>
                            </div>
                            
                            <div class="tt-text-log">
                                <p>
                                    {{ trans('file.Postal Code') }} *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example" name="store_postcode">
                                    <option value="{{ $data['postcode'] }}">{{ $data['postcode'] }}</option>
                                </select>
                            </div>

                            {{-- personal --}}
                            <input type="hidden" name="store_name" value="{{ $data['store_name'] }}">
                            <input type="hidden" name="personal_first_name" value="{{ $data['personal_first_name'] }}">
                            <input type="hidden" name="personal_last_name" value="{{ $data['personal_last_name'] }}">
                            <input type="hidden" name="personal_card_id" value="{{ $data['personal_card_id'] }}">
                            <input type="hidden" name="personal_cardId_img_name" value="{{ $personal_cardId_img_name }}">
                            <input type="hidden" name="personal_house_reg_name" value="{{ $personal_house_reg_name }}">

                            <input type="hidden" name="address" value="{{ $data['address'] }}">
                            <input type="hidden" name="province" value="{{ $data['province'] }}">
                            <input type="hidden" name="amphure" value="{{ $data['amphure'] }}">
                            <input type="hidden" name="district" value="{{ $data['district'] }}">
                            
                            {{-- company --}}
                            <input type="hidden" name="company_name" value="{{ $data['company_name'] }}">
                            <input type="hidden" name="branch" value="{{ $data['branch'] }}">
                            <input type="hidden" name="vat_registration_number" value="{{ $data['vat_registration_number'] }}">
                            <input type="hidden" name="postcode" value="{{ $data['postcode'] }}">
                            <input type="hidden" name="company_cert_img_name" value="{{ $company_cert_img_name }}">
                            <input type="hidden" name="vat_reg_doc_name" value="{{ $vat_reg_doc_name }}">

                            <br>
                            <div class='but-bb-log2'>
                                <a href="{{ route('supplier.register.bankInfo') }}">
                                    <button class="button button1"> {{ trans('file.Next') }} &nbsp; <i class='fas fa-angle-right'></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script>

    $(document).ready(()=> {

        var specify = "{{ trans('file.Specify') }}";
        var isChkLocation = $('#store-location').prop('checked');

        $('select[name="store_province"]').val($('input[name="province"]').val());

        $('select[name="store_province"]').prop('disabled', true);
        $('select[name="store_province"]').attr('style', 'background-color:#333333;');
        $('select[name="store_amphure"]').prop('readonly', true);
        $('select[name="store_district"]').prop('readonly', true);
        $('select[name="store_postcode"]').prop('readonly', true);

        // eveent control address
        $('#store-location').on('click', function(){
            isChkLocation = $(this).prop('checked');
            if (!isChkLocation) {
                $('select[name="store_province"]').prop('selectedIndex', 0);
                $('select[name="store_amphure"]').html('<option value="">' + specify + '</option>');
                $('select[name="store_district"]').html('<option value="">' + specify + '</option>');
                $('select[name="store_postcode"]').html('<option value="">' + specify + '</option>');

                $('select[name="store_province"]').prop('disabled', false);
                $('select[name="store_amphure"]').prop('readonly', false);
                $('select[name="store_district"]').prop('readonly', false);
                $('select[name="store_postcode"]').prop('readonly', false);
            } else {
                $('select[name="store_province"]').prop('readonly', true);
                $('select[name="store_amphure"]').prop('readonly', true);
                $('select[name="store_district"]').prop('readonly', true);
                $('select[name="store_postcode"]').prop('readonly', true);

                let amphure = $('input[name="amphure"]').val();
                let district = $('input[name="district"]').val();
                let postcode = $('input[name="postcode"]').val();

                $('select[name="store_province"]').val($('input[name="province"]').val());
                $('select[name="store_amphure"]').html(' <option value="'+ amphure +'">' + amphure + '</option>');
                $('select[name="store_district"]').html(' <option value="'+ district +'">' + district + '</option>');
                $('select[name="store_postcode"]').html(' <option value="'+ postcode +'">' + postcode + '</option>');

                $('select[name="store_province"]').prop('disabled', true);
                $('select[name="store_province"]').attr('style', 'background-color:#333333;');
                $('select[name="store_amphure"]').prop('readonly', true);
                $('select[name="store_district"]').prop('readonly', true);
                $('select[name="store_postcode"]').prop('readonly', true);
            }
        });

        // select amphure by province id
        $('select[name="store_province"]').on('change', function(){
            let provinceId = $('select[name="store_province"]').val();
            getAddress(provinceId, 'amphure');
        })

        // select district by amphure id
        $('select[name="store_amphure"]').on('change', function(){
            let amphureId = $('select[name="store_amphure"]').val();
            getAddress(amphureId, 'district');
        })

        function getAddress(id, type) {
            $.ajax({
                type: 'get',
                url: 'get_address',
                content_type: 'json',
                data: {
                    'id': id,
                    'type': type
                },
                success: function(data){
                    var index = 0;
                    var option = '';
                    if (type === 'amphure') {
                        $('select[name="store_amphure"]').html('');
                        data.forEach(amphure => {
                            console.log(amphure.id);
                            if (index === 0) {
                                option = '<option value="">'+ specify +'</option><option value="'+ amphure.id + '">'+ amphure.name_th +'</option>';
                            } else {
                                option = '<option value="'+ amphure.id + '">'+ amphure.name_th +'</option>';
                            }
                            
                            $('select[name="store_amphure"]').append(option);
                            
                            index++;
                        });
                    }
                    else if (type === 'district') {
                        $('select[name="store_district"]').html('');
                        $('select[name="store_postcode"]').html('');
        
                        data.district_list.forEach(district => {
                            if (index === 0) {
                                option = '<option value="">'+ specify +'</option><option value="'+ district.id + '">'+ district.name_th +'</option>';
        
                            } else {
                                option = '<option value="'+ district.name_en + '">'+ district.name_th +'</option>';
                            }
                            
                            $('select[name="store_district"]').append(option);
        
                            index++;
                        });
                        index = 0;
                        option = '';
                        data.zip_code_list.forEach(zip_code => {
                            if (index === 0) {
                                option = '<option value="">'+ specify +'</option><option value="'+ zip_code.zip_code + '">'+ zip_code.zip_code +'</option>';
                            } else {
                                option = '<option value="'+ zip_code.zip_code + '">'+ zip_code.zip_code +'</option>';
                            }
                            
                            $('select[name="store_postcode"]').append(option);
                            
                            index++;
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            })
        }
    });
    </script>
    
@endsection
