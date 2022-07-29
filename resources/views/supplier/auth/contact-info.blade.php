@extends('supplier.auth.layouts.template')

@section('title', 'Register')

@section('style')
<link href="{{asset('assets/css/regis7.css')}}" rel="stylesheet">
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
        <div class="box-b-login pdlogin-sup">
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
                            <img src="{{ asset('assets/img/login/se4.png') }}" class="img-fluid" alt="...">
                        </div>
                    </div>

                    <div class="flex-center">
                        <div class="tt-text-send">
                            <p>
                                {{ trans('file.Member information') }}
                            </p>
                        </div>
                        <div class="tt-text-send2">
                            <p>
                                {{ trans('file.Contact information') }}
                            </p>
                        </div>
                        <div class="tt-text-send3">
                            <p>
                                {{ trans('file.Bank information') }}
                            </p>
                        </div>
                    </div>

                    <div class="box-b-detail pdlogin-sup">
                        <form action="{{ route('supplier.register.bankInfo') }}" method="get">

                            <div class="tt-text-log">
                                <p>{{ trans('file.Email') }} <span class="dot__color"> *</span></p>
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="sample@gmail.com" name="email" value="{{ old('email') }}" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="tt-text-log mb-3">
                                @if($errors->has('email'))
                                <span class="dot__color">{{ $errors->first('email') }}</span>
                                @endif
                                {{-- contact name for company --}}
                                
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Phone Number') }} <span class="dot__color"> *</span></p>
                                </div>
                                <div class="input-group">
                                    <input type="text" 
                                        class="form-control" 
                                        placeholder="{{ trans('file.Specify') }}" 
                                        aria-label="Username"
                                        name="phone" 
                                        value="{{ old('phone') }}" 
                                        aria-describedby="basic-addon1"
                                        maxlength="13"
                                    >
                                </div>
                                <div class="tt-text-log mb-3">
                                    @if($errors->has('phone'))
                                        <span class="dot__color">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>

                            {{-- contact name for company --}}
                            @if ($data['supplier_type'] == 'corporate')
                            <div class="tt-text-log">
                                <p>{{ trans('file.Contact Name') }} <span class="dot__color"> *</span></p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" name="contact_name" value="{{ old('contact_name') }}" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="tt-text-log">
                                <p>{{ trans('file.Surname') }} <span class="dot__color"> *</span></p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" name="contact_last_name" value="{{ old('contact_last_name') }}" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            @endif
                            {{-- contact name for company --}}

                            <div class="tt-text-log">
                                <p>{{ trans('file.Phone Number') }} <span class="dot__color"> *</span></p>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="0123456789" aria-label="Username" name="phone" value="{{ old('phone') }}" aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log mb-3">
                                @if($errors->has('phone'))
                                <span class="dot__color">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                            <div class="tt-text-log">
                                <p>{{ trans('file.Page URL/Facebook Page') }} <span class="dot__color"> *</span></p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Sample Name" aria-label="Username" name="facebook_url" value="{{ old('facebook_url') }}" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="tt-text-log">
                                <p>{{ trans('file.GoogleMapsURL') }} <span class="dot__color"> *</span></p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="www.sample.com" name="google_map_url" value="{{ old('google_map_url') }}" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            {{-- option --}}
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="store-location" name="is_different_location" value="true">
                                <label class="form-check-label" for="store-location">
                                    {{ trans('file.Store address as on the ID card') }}
                                </label>
                            </div>
                            {{-- option --}}
                            <br>
                            <div class="tt-text-log">
                                <p>{{ trans('file.Store address') }} <span class="dot__color"> *</span></p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username" name="store_address" value="{{ old('store_address') }}" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    {{ trans('file.Province') }} <span class="dot__color"> *</span>
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select id="province-id" class="form-select" aria-label="Default select example" name="store_province" required>
                                    <option value="">{{ trans('file.Specify') }}</option>
                                    @foreach ($province_list_data as $province)
                                    <option value="{{ $province->id }}">{{ $province->name_th }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>{{ trans('file.Amphure') }} <span class="dot__color"> *</span></p>
                            </div>
                            <div class="input-group mb-3">
                                <select id="amphure-id" class="form-select" aria-label="Default select example" name="store_amphure" required>
                                    <option value="">{{ trans('file.Specify') }}</option>
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    {{ trans('file.District') }} <span class="dot__color"> *</span>
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select id="district-id" class="form-select" aria-label="Default select example" name="store_district" required>
                                    <option value="">{{ trans('file.Specify') }}</option>
                                </select>
                            </div>

                            <div class="tt-text-log">
                                <p>
                                    {{ trans('file.Postal Code') }} <span class="dot__color"> *</span>
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select id="postcode" class="form-select" aria-label="Default select example" name="store_postcode" required>
                                    <option value="">{{ trans('file.Specify') }}</option>
                                </select>
                            </div>

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
                            <input type="hidden" name="postcode" value="{{ $data['postcode'] }}">
                            <input type="hidden" name="login_phone" value="{{ $data['login_phone'] }}">

                            {{-- company --}}
                            <input type="hidden" name="company_name" value="{{ $data['company_name'] }}">
                            <input type="hidden" name="branch" value="{{ $data['branch'] }}">
                            <input type="hidden" name="vat_registration_number" value="{{ $data['vat_registration_number'] }}">
                            <input type="hidden" name="company_certificate" value="{{ $data['company_certificate'] }}">
                            <input type="hidden" name="vat_registration_doc" value="{{ $data['vat_registration_doc'] }}">
                            <br>
                            <div class='but-bb-log2'>
                                <a href="{{ route('supplier.register.bankInfo') }}">
                                    <button type="submit" class="button button1"> {{ trans('file.Next') }} &nbsp; <i class='fas fa-angle-right'></i>
                                    </button>
                                </a>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" 
            integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" 
            crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js" 
            integrity="sha512-yVcJYuVlmaPrv3FRfBYGbXaurHsB2cGmyHr4Rf1cxAS+IOe/tCqxWY/EoBKLoDknY4oI1BNJ1lSU2dxxGo9WDw==" 
            crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script>

    $(document).ready(function() {

        var specify = "{{ trans('file.Specify') }}";
        var isChkLocation = $('#store-location').prop('checked');
        var amphureName = "{{ $data['amphure_name'] }}";
        var districtName = "{{ $data['district_name'] }}";

        $('input[name="phone"]').mask("999-999-9999");

        // re-initilize old value for option
        // let oldProvinceId = "{{ old('store_province') }}";
        // let provinceId = oldProvinceId ? oldProvinceId : '';
        // $('#province-id option[value="' + provinceId + '"]').attr('selected', 'selected');

        // let oldAmphureId = "{{ old('store_amphure') }}";
        // let amphureId = oldAmphureId ? oldAmphureId : '';
        // $('#amphure-id option[value="' + amphureId + '"]').attr('selected', 'selected');

        // let oldDistrictId = "{{ old('store_district') }}";
        // let districtId = oldDistrictId ? oldDistrictId : '';
        // $('#district-id option[value="' + districtId + '"]').attr('selected', 'selected');

        // let oldPostcode = "{{ old('store_postcode') }}";
        // let postcode = oldPostcode ? oldPostcode : '';
        // $('#postcode option[value="' + postcode + '"]').attr('selected', 'selected');
        // re-initilize old value for option

        // event control address
        $('#store-location').on('click', function() {
            isChkLocation = $(this).prop('checked');
            if (!isChkLocation) {
                $('input[name="store_address"]').val('');
                $('select[name="store_province"]').prop('selectedIndex', 0);
                $('select[name="store_amphure"]').html('<option value="">' + specify + '</option>');
                $('select[name="store_district"]').html('<option value="">' + specify + '</option>');
                $('select[name="store_postcode"]').html('<option value="">' + specify + '</option>');

                $('input[name="store_address"]').prop('readonly', false);
                $('select[name="store_province"]').prop('disabled', false);
                $('select[name="store_amphure"]').prop('readonly', false);
                $('select[name="store_district"]').prop('readonly', false);
                $('select[name="store_postcode"]').prop('readonly', false);
            } else {
                let address = $('input[name="address"]').val();
                let amphure = $('input[name="amphure"]').val();
                let district = $('input[name="district"]').val();
                let postcode = $('input[name="postcode"]').val();

                $('input[name="store_address"]').val(address);
                $('select[name="store_province"]').val($('input[name="province"]').val());
                $('select[name="store_amphure"]').html(' <option value="' + amphure + '">' + amphureName + '</option>');
                $('select[name="store_district"]').html(' <option value="' + district + '">' + districtName + '</option>');
                $('select[name="store_postcode"]').html(' <option value="' + postcode + '">' + postcode + '</option>');

                $('input[name="store_address"]').prop('readonly', true);
                $('select[name="store_province"]').prop('disabled', true);
                $('select[name="store_province"]').attr('style', 'background-color:#333333;');
                $('select[name="store_amphure"]').prop('readonly', true);
                $('select[name="store_district"]').prop('readonly', true);
                $('select[name="store_postcode"]').prop('readonly', true);
            }
        });

        // select amphure by province id
        $('select[name="store_province"]').on('change', function() {
            let provinceId = $('select[name="store_province"]').val();
            getAddress(provinceId, 'amphure');
        })

        // select district by amphure id
        $('select[name="store_amphure"]').on('change', function() {
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
                success: function(data) {
                    var index = 0;
                    var option = '';
                    if (type === 'amphure') {
                        $('select[name="store_amphure"]').html('');
                        data.forEach(amphure => {
                            console.log(amphure.id);
                            if (index === 0) {
                                option = '<option value="">' + specify + '</option><option value="' + amphure.id + '">' + amphure.name_th + '</option>';
                            } else {
                                option = '<option value="' + amphure.id + '">' + amphure.name_th + '</option>';
                            }

                            $('select[name="store_amphure"]').append(option);

                            index++;
                        });
                    } else if (type === 'district') {
                        $('select[name="store_district"]').html('');
                        $('select[name="store_postcode"]').html('');

                        data.district_list.forEach(district => {
                            if (index === 0) {
                                option = '<option value="">' + specify + '</option><option value="' + district.id + '">' + district.name_th + '</option>';

                            } else {
                                option = '<option value="' + district.id + '">' + district.name_th + '</option>';
                            }

                            $('select[name="store_district"]').append(option);

                            index++;
                        });
                        index = 0;
                        option = '';
                        data.zip_code_list.forEach(zip_code => {
                            if (index === 0) {
                                option = '<option value="">' + specify + '</option><option value="' + zip_code.zip_code + '">' + zip_code.zip_code + '</option>';
                            } else {
                                option = '<option value="' + zip_code.zip_code + '">' + zip_code.zip_code + '</option>';
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
