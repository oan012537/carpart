@extends('supplier.auth.layouts.template')

@section('title', 'Register')

@section('style')
<link href="{{asset('assets/css/regis4.css')}}" rel="stylesheet">
@endsection

@section('content')
<section id="sec-regis4">
    <div class="container">
        <div class="box-b-login">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="img-img-log">
                        <img src="{{ asset('assets/img/login/ln1.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 ">
                    <div class="h-text-log">
                        <p>
                            {{ trans('file.Register') }}
                        </p>
                    </div>
                    <div class="img-send-img">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/login/se3.png') }}" class="img-fluid" alt="...">
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

                    <div class="box-b-detailradio pdlogin-sup">
                        <div class="tt-text-log">
                            <p>{{ trans('file.Type') }}</p>
                        </div>
                        <div class="box-check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tabs" id="onetab" checked value="personal">
                                <label class=" form-check-label" for="one"> {{ trans('file.Personal') }} </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tabs" id="twotab" value="corporate">
                                <label class="form-check-label" for="two"> {{ trans('file.Corporate') }} </label>
                            </div>
                        </div>
                    </div>

                    <br>
                    {{-- personal --}}
                    <div class="contenttab pdlogin-sup">
                        <fieldset>
                            <form id="frm-personal" action="{{ route('supplier.register.contactInfo') }}" method="get" enctype="multipart/form-data">

                                <input type="hidden" name="supplier_type" value="personal">
                                <input type="hidden" name="login_phone" value="{{ $login_phone }}">

                                <div class="box-b-detail">
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Store Name') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username" name="store_name" value="{{ old('store_name') }}" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Name') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username" name="personal_first_name" value="{{ old('personal_first_name') }}" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Surname') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username" name="personal_last_name" value="{{ old('personal_last_name') }}" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.ID card number') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username" name="personal_card_id" value="{{ old('personal_card_id') }}" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Address (according to ID card)') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username" name="address" value="{{ old('address') }}" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Province') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select province-id" aria-label="Default select example" name="province" required>
                                            <option value="">{{ trans('file.Specify') }}</option>
                                            @foreach ($province_list_data as $province)
                                            <option value="{{ $province->id }}">{{ $province->name_th }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Amphure') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select amphure-id" aria-label="Default select example" name="amphure" required>
                                            <option value="">{{ trans('file.Specify') }}</option>
                                        </select>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.District') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select district-id" aria-label="Default select example" name="district" required>
                                            <option value="">{{ trans('file.Specify') }}</option>
                                        </select>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Postal Code') }} <span class="dot__color">*</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select postcode" aria-label="Default select example" name="postcode">
                                            <option value="">{{ trans('file.Specify') }}</option>
                                        </select>
                                    </div>
                                    {{-- attach doc --}}
                                    <div class="tt-text-log">
                                        <p>{{ trans('file.Copy of ID card') }} <span class="dot__color"> *</span></p>
                                        <div class="text-t-log">
                                            <p>{{ trans('file.accept file extension') }}</p>
                                        </div>
                                    </div>
                                    <div class="drop-zone">
                                        <label class="drop-zone__prompt">
                                            <input type="file" id="personal-card-id-image" class="drop-zone__input" style="opacity: 0; width: 50%;">
                                            <i class="fa fa-plus-circle" style="font-size:35px"></i>
                                            <p> {{ trans('file.Attach a Jpeg Image') }}</p>
                                            <div class="tt-img-detail">
                                                <div class="text-size-tt">
                                                    <p> {{ trans('file.Size up to 5 images') }} </p>
                                                </div>
                                                <div class="text-size-t">
                                                    <p> {{ trans('file.Size does not exceed 5 Mb.') }} </p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <br>
                                    <div class="tt-text-log">
                                        <p>{{ trans('file.Copy of house registration') }} <span class="dot__color"> *</span></p>
                                        <div class="text-t-log">
                                            <p>{{ trans('file.accept file extension') }}</p>
                                        </div>
                                    </div>
                                    <div class="drop-zone">
                                        <label class="drop-zone__prompt">
                                            <input type="file" id="personal-house-registration" class="drop-zone__input" style="opacity: 0;width: 50%;">
                                            <i class="fa fa-plus-circle" style="font-size:35px"></i>
                                            <p> {{ trans('file.Attach a Jpeg Image') }}</p>
                                            <div class="tt-img-detail">
                                                <div class="text-size-t">
                                                    <p> {{ trans('file.Size does not exceed 5 Mb.') }} </p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    {{-- attach doc --}}

                                    <div class='but-bb-log2 mt-3'>
                                        <button type="submit" class="button button1"> {{ trans('file.Next') }} &nbsp;
                                            <i class='fas fa-angle-right'></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </fieldset>
                        <br>
                    </div>
                    {{-- company --}}
                    <div class="contenttab pdlogin-sup">
                        <fieldset>
                            <form id="frm-company" action="{{ route('supplier.register.contactInfo') }}" method="get" enctype="multipart/form-data">

                                <input type="hidden" name="supplier_type" value="corporate">
                                <input type="hidden" name="login_phone" value="{{ $login_phone }}">

                                <div class="box-b-detail">
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Company Name') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username" name="company_name" value="{{ old('company_name') }}" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Branch') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username" name="branch" value="{{ old('branch') }}" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.VAT Registration Number') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username" name="vat_registration_number" value="{{ old('vat_registration_number') }}" aria-describedby="basic-addon1" required>
                                    </div>
                                    {{-- attach doc --}}
                                    <div class="tt-text-log">
                                        <p>{{ trans('file.Company certificate not older than 6 months') }} <span class="dot__color"> *</span></p>
                                        <div class="text-t-log">
                                            <p>{{ trans('file.accept file extension') }}</p>
                                        </div>
                                    </div>

                                    <div class="drop-zone">
                                        <label class="drop-zone__prompt">
                                            <input type="file" id="company-certificate" class="drop-zone__input">
                                            <i class="fa fa-plus-circle" style="font-size:35px"></i>
                                            <p> {{ trans('file.Attach a Jpeg Image') }}</p>
                                            <div class="tt-img-detail">
                                                <div class="text-size-t">
                                                    <p>{{ trans('file.Size does not exceed 5 Mb.') }} </p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="tt-text-log">
                                        <p>{{ trans('file.Copy of VAT Registration Certificate') }}</p>
                                        <div class="text-t-log">
                                            <p>{{ trans('file.accept file extension') }}</p>
                                        </div>
                                    </div>

                                    <div class="text-tt-img-detail">
                                        <p>
                                            <a href="{{ asset('doc/pp20.jpg') }}" target="_blank">
                                                <i class='far fa-file-alt'></i> &nbsp; {{ trans('file.Press to preview the document.') }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="drop-zone">
                                        <label class="drop-zone__prompt">
                                            <input type="file" id="vat-registration-doc" class="drop-zone__input">
                                            <i class="fa fa-plus-circle" style="font-size:35px"></i>
                                            <p> {{ trans('file.Attach a Jpeg Image') }}</p>
                                            <div class="tt-img-detail">
                                                <div class="text-size-t">
                                                    <p> {{ trans('file.Size does not exceed 5 Mb.') }} </p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    {{-- attach doc --}}
                                    <br>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Address (according to the certificate)') }} <span class="dot__color">*</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username" name="address" value="{{ old('address') }}" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Province') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select province-id" aria-label="Default select example" name="province" required>
                                            <option value="">{{ trans('file.Specify') }}</option>
                                            @foreach ($province_list_data as $province)
                                            <option value="{{ $province->id }}">{{ $province->name_th }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Amphure') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select amphure-id" aria-label="Default select example" name="amphure" required>
                                            <option value="">{{ trans('file.Specify') }}</option>
                                        </select>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.District') }} <span class="dot__color"> *</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select district-id" aria-label="Default select example" name="district" required>
                                            <option value="">{{ trans('file.Specify') }}</option>
                                        </select>
                                    </div>
                                    <div class="tt-text-log">
                                        <p>
                                            {{ trans('file.Postal Code') }} <span class="dot__color">*</span>
                                        </p>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select postcode" aria-label="Default select example" name="postcode">
                                            <option value="">{{ trans('file.Specify') }}</option>
                                        </select>
                                    </div>

                                    <div class='but-bb-log2'>
                                        <button type="submit" class="button button1"> {{ trans('file.Next') }} &nbsp;
                                            <i class='fas fa-angle-right'></i>
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </fieldset>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

@section('script')

<script type="text/javascript">
    $(document).ready(function() {

        // re-initilize old value for option
        // let oldSupType = "{{ old('supplier_type') }}";
        // let supType = oldSupType ? oldSupType : '';

        // if (supType == 'personal') {
        //     $('#onetab').prop(checked, true);
        //     $('#twotab').prop(checked, false);
        // } else if (supType == 'corporate') {
        //     $('#onetab').prop(checked, false);
        //     $('#twotab').prop(checked, true);
        // }

        let oldProvinceId = "{{ old('province') }}";
        let provinceId = oldProvinceId ? oldProvinceId : '';
        $('.province-id option[value="' + provinceId + '"]').attr('selected', 'selected');


        let oldAmphureId = "{{ old('amphure') }}";
        let amphureId = oldAmphureId ? oldAmphureId : '';
        $('.amphure-id option[value="' + amphureId + '"]').attr('selected', 'selected');

        let oldDistrictId = "{{ old('district') }}";
        let districtId = oldDistrictId ? oldDistrictId : '';
        $('.district-id option[value="' + districtId + '"]').attr('selected', 'selected');

        let oldPostcode = "{{ old('postcode') }}";
        let postcode = oldPostcode ? oldPostcode : '';
        $('.postcode option[value="' + postcode + '"]').attr('selected', 'selected');
        // re-initilize old value for option


        var supplierType = '';

        $('[name=tabs]').each(function(i, d) {
            var p = $(this).prop('checked');
            if (p) {
                $('.contenttab').eq(i)
                    .addClass('on');
            }
            supplierType = $('input[name=tabs]:checked').val();

        });

        $('[name=tabs]').on('change', function() {
            var p = $(this).prop('checked');
            var i = $('[name=tabs]').index(this);
            $('.contenttab').removeClass('on');
            $('.contenttab').eq(i).addClass('on');
            supplierType = $('input[name=tabs]:checked').val();

            $('select[name="province"]').prop('selectedIndex', 0);
            $('select[name="amphure"]').html('<option value="">{{ trans("file.Specify") }}</option>');
            $('select[name="district"]').html('<option value="">{{ trans("file.Specify") }}</option>');
            $('select[name="postcode"]').html('<option value="">{{ trans("file.Specify") }}</option>');

        });

        var current_fs, next_fs, previous_fs;
        var left, opacity, scale;
        var animating;
        var specify = "{{ trans('file.Specify') }}";



        $(".next").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            next_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    scale = 1 - (1 - now) * 0.2;
                    left = (now * 50) + "%";
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'position': 'absolute'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            previous_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    scale = 0.8 + (1 - now) * 0.2;
                    left = ((1 - now) * 50) + "%";
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                easing: 'easeInOutBack'
            });
        });

        $(".submit").click(function() {
            return false;
        })


        // select amphure by province id
        $('select[name="province"]').on('change', function() {
            let provinceId = ''
            if (supplierType === 'personal') {
                provinceId = $('#frm-personal select[name="province"]').val();
            } else {
                provinceId = $('#frm-company select[name="province"]').val();
            }
            getAddress(provinceId, 'amphure', supplierType);
        })

        // select district by amphure id
        $('select[name="amphure"]').on('change', function() {
            let amphureId = '';
            if (supplierType === 'personal') {
                amphureId = $('#frm-personal select[name="amphure"]').val();
            } else {
                amphureId = $('#frm-company select[name="amphure"]').val();
            }

            getAddress(amphureId, 'district', supplierType);
        })

        // function get sub
        function getAddress(id, type, supplierType) {
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
                        $('select[name="amphure"]').html('');
                        data.forEach(amphure => {
                            if (index === 0) {
                                option = '<option value="">' + specify + '</option><option value="' + amphure.id + '">' + amphure.name_th + '</option>';
                            } else {
                                option = '<option value="' + amphure.id + '">' + amphure.name_th + '</option>';
                            }
                            if (supplierType === 'personal') {
                                $('#frm-personal select[name="amphure"]').append(option);
                            } else {
                                $('#frm-company select[name="amphure"]').append(option);
                            }
                            index++;
                        });
                    } else if (type === 'district') {
                        $('select[name="district"]').html('');
                        $('select[name="postcode"]').html('');

                        data.district_list.forEach(district => {
                            if (index === 0) {
                                option = '<option value="">' + specify + '</option><option value="' + district.id + '">' + district.name_th + '</option>';

                            } else {
                                option = '<option value="' + district.id + '">' + district.name_th + '</option>';
                            }
                            if (supplierType === 'personal') {
                                $('#frm-personal select[name="district"]').append(option);
                            } else {
                                $('#frm-company select[name="district"]').append(option);
                            }

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
                            if (supplierType === 'personal') {
                                $('#frm-personal select[name="postcode"]').append(option);
                            } else {
                                $('#frm-company select[name="postcode"]').append(option);
                            }

                            index++;
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            })
        }

        // attach doc
        $('#personal-card-id-image').on('change', function() {
            let event = $(this);
            let fieldName = 'personal_card_id_image';
            uploadImage(event, fieldName);
        });

        $('#personal-house-registration').on('change', function() {
            let event = $(this);
            let fieldName = 'personal_house_registration';
            uploadImage(event, fieldName);
        });

        $('#company-certificate').on('change', function() {
            let event = $(this);
            let fieldName = 'company_certificate';
            uploadImage(event, fieldName);
        });

        $('#vat-registration-doc').on('change', function() {
            let event = $(this);
            let fieldName = 'vat_registration_doc';
            uploadImage(event, fieldName);
        });

        function uploadImage(event, fieldName) {
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
                success: function(data) {
                    event.parent().addClass('d-none');
                    imageUrl = "{{ asset('suppliers/document') }}" + '/' + data;
                    htmlText = '<div>' +
                        '<input type="hidden" name="' + fieldName + '" value="' + data + '">' +
                        '<a href="javascript:void(0)" data-image="' + data + '" class="btn__trash" >' +
                        '<img src="' + imageUrl + '" class="img-fluid" alt="Attachment" style="width:115px;height:106px;">' +
                        '<i class="fa-solid fa-trash-can"></i> {{ trans('
                    file.Remove ') }}' + '</a></div>';
                    event.parent().parent().append(htmlText);
                }
            });
        }

        // remove doc
        $(document).on('click', '.btn__trash', function(e) {
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
                    $(e.currentTarget).parent().parent().children().removeClass('d-none');
                    $(e.currentTarget).parent().remove();
                    e.preventDefault();
                }
            });
        });

    });
</script>

@endsection
