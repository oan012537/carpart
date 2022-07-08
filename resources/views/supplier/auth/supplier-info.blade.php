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
                                <img src="{{ asset('assets/img/login/se3.png') }}" class="img-fluid" alt="...">
                            </div>
                        </div>
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

                        <div class="box-b-detailradio">
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
                            <div class="contenttab">
                                <fieldset>
                                    <form id="frm-personal" action="{{ route('supplier.register.contactInfo') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="supplier_type" value="personal">
                                        <div class="box-b-detail">
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.Store Name') }} *
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username"
                                                  name="store_name"  aria-describedby="basic-addon1">
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.Name') }} *
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username"
                                                   name="personal_first_name" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.Surname') }} *
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username"
                                                  name="personal_last_name"  aria-describedby="basic-addon1">
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.ID card number') }} *
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username"
                                                  name="personal_card_id"  aria-describedby="basic-addon1">
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.Address (according to ID card)') }} *
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username"
                                                   name="address" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.Province') }} *
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example" name="province">
                                                    <option value="">{{ trans('file.Specify') }}</option>
                                                    @foreach ($province_list_data as $province)
                                                        <option value="{{ $province->id }}">{{ $province->name_th }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.Amphure') }} *
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example" name="amphure">
                                                    <option value="">{{ trans('file.Specify') }}</option>
                                                </select>
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.District') }} *
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example" name="district">
                                                    <option value="">{{ trans('file.Specify') }}</option>
                                                </select>
                                            </div>
                                            {{-- attach doc --}}
                                            <div class="tt-text-log">
                                                <p>{{ trans('file.Copy of ID card') }} *</p>
                                                <div class="text-t-log">
                                                    <p>{{ trans('file.accept file extension') }}</p>
                                                </div>
                                            </div>
                                            <div class="drop-zone">
                                                <span class="drop-zone__prompt"> 
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
                                                    <input type="file" name="personal_card_id_image" class="drop-zone__input">
                                                </span>
                                            </div>
                                            <br>
                                            <div class="tt-text-log">
                                                <p>{{ trans('file.Copy of house registration') }} *</p>
                                                <div class="text-t-log">
                                                    <p>{{ trans('file.accept file extension') }}</p>
                                                </div>
                                            </div>
                                            <div class="drop-zone">
                                                <span class="drop-zone__prompt"> 
                                                    <i class="fa fa-plus-circle" style="font-size:35px"></i>
                                                    <p> {{ trans('file.Attach a Jpeg Image') }}</p>
                                                    <div class="tt-img-detail">
                                                        <div class="text-size-t">
                                                            <p> {{ trans('file.Size does not exceed 5 Mb.') }} </p>
                                                        </div>
                                                    </div>
                                                    <input type="file" name="personal_house_registration" class="drop-zone__input">
                                                </span>
                                            </div>
                                            {{-- attach doc --}}
                                        </div>
                                    </form>
                                </fieldset>
                                <br>
                            </div>
                            {{-- company --}}
                            <div class="contenttab">
                                <fieldset>
                                    <form id="frm-company" action="{{ route('supplier.register.contactInfo') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="supplier_type" value="corporate">
                                        <div class="box-b-detail">
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.Company Name') }} <span class="dot__color">*</span>
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username"
                                                  name="company_name"  aria-describedby="basic-addon1">
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.Branch') }} <span class="dot__color">*</span>
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username"
                                                  name="branch"  aria-describedby="basic-addon1">
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.VAT Registration Number') }} <span class="dot__color">*</span>
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username"
                                                  name="vat_registration_number"  aria-describedby="basic-addon1">
                                            </div>
                                            {{-- attach doc --}}
                                            <div class="tt-text-log">
                                                <p>{{ trans('file.Company certificate not older than 6 months') }} *</p>
                                                <div class="text-t-log">
                                                    <p>{{ trans('file.accept file extension') }}</p>
                                                </div>
                                            </div>

                                            <div class="drop-zone">
                                                <span class="drop-zone__prompt">
                                                    <i class="fa fa-plus-circle" style="font-size:35px"></i>
                                                    <p> {{ trans('file.Attach a Jpeg Image') }}</p>
                                                    <div class="tt-img-detail">
                                                        <div class="text-size-t">
                                                            <p>{{ trans('file.Size does not exceed 5 Mb.') }} </p>
                                                        </div>
                                                    </div>
                                                    <input type="file" name="company_certificate" class="drop-zone__input">
                                                </span>
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
                                                <span class="drop-zone__prompt"> 
                                                    <i class="fa fa-plus-circle" style="font-size:35px"></i>
                                                    <p> {{ trans('file.Attach a Jpeg Image') }}</p>
                                                    <div class="tt-img-detail">
                                                        <div class="text-size-t">
                                                            <p> {{ trans('file.Size does not exceed 5 Mb.') }} </p>
                                                        </div>
                                                    </div>
                                                    <input type="file" name="vat_registration_doc" class="drop-zone__input">
                                                </span>
                                            </div>
                                            {{-- attach doc --}}
                                            <br>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.Address (according to the certificate)') }} <span class="dot__color">*</span>
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-label="Username"
                                                 name="address"  aria-describedby="basic-addon1">
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.Province') }} <span class="dot__color">*</span>
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example" name="province">
                                                    <option value="">{{ trans('file.Specify') }}</option>
                                                    @foreach ($province_list_data as $province)
                                                        <option value="{{ $province->id }}">{{ $province->name_th }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.Amphure') }} <span class="dot__color">*</span>
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example" name="amphure">
                                                    <option value="">{{ trans('file.Specify') }}</option>
                                                </select>
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.District') }} <span class="dot__color">*</span>
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example" name="district">
                                                    <option value="">{{ trans('file.Specify') }}</option>
                                                </select>
                                            </div>
                                            <div class="tt-text-log">
                                                <p>
                                                    {{ trans('file.Postal Code') }} <span class="dot__color">*</span>
                                                </p>
                                            </div>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example" name="postcode">
                                                    <option value="">{{ trans('file.Specify') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </fieldset>
                                <br>
                            </div>
                            <div class='but-bb-log2'>
                                <button id="btn-submit" type="button" class="button button1"> {{ trans('file.Next') }} &nbsp; 
                                    <i class='fas fa-angle-right'></i>
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

@section('script')

<script>
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        const dropZoneElement = inputElement.closest(".drop-zone");

        dropZoneElement.addEventListener("click", (e) => {
            inputElement.click();
        });

        inputElement.addEventListener("change", (e) => {
            if (inputElement.files.length) {
                updateThumbnail(dropZoneElement, inputElement.files[0]);
            }
        });

        dropZoneElement.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZoneElement.classList.add("drop-zone--over");
        });

        ["dragleave", "dragend"].forEach((type) => {
            dropZoneElement.addEventListener(type, (e) => {
                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        dropZoneElement.addEventListener("drop", (e) => {
            e.preventDefault();

            if (e.dataTransfer.files.length) {
                inputElement.files = e.dataTransfer.files;
                updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
            }

            dropZoneElement.classList.remove("drop-zone--over");
        });
    });

    /**
     * Updates the thumbnail on a drop zone element.
     *
     * @param {HTMLElement} dropZoneElement
     * @param {File} file
     */
    function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

        // First time - remove the prompt
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
            dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }

        // First time - there is no thumbnail element, so lets create it
        if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("drop-zone__thumb");
            dropZoneElement.appendChild(thumbnailElement);
        }

        thumbnailElement.dataset.label = file.name;

        // Show thumbnail for image files
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = () => {
                thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
            };
        } else {
            thumbnailElement.style.backgroundImage = null;
        }
    }
</script>

<script>

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

    $('#btn-submit').on('click', function(){
        if (supplierType === 'personal') {
            $('#frm-personal').submit();
        } else {
            $('#frm-company').submit();
        }
    })

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
    $('select[name="province"]').on('change', function(){
        let provinceId = ''
        if (supplierType === 'personal') {
            provinceId = $('#frm-personal select[name="province"]').val();
        } else {
            provinceId = $('#frm-company select[name="province"]').val();
        }
        getAddress(provinceId, 'amphure', supplierType);
    })

    // select district by amphure id
    $('select[name="amphure"]').on('change', function(){
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
            success: function(data){
                var index = 0;
                var option = '';
                if (type === 'amphure') {
                    $('select[name="amphure"]').html('');
                    data.forEach(amphure => {
                        if (index === 0) {
                            option = '<option value="">'+ specify +'</option><option value="'+ amphure.id + '">'+ amphure.name_th +'</option>';
                        } else {
                            option = '<option value="'+ amphure.id + '">'+ amphure.name_th +'</option>';
                        }
                        if (supplierType === 'personal') {
                            $('#frm-personal select[name="amphure"]').append(option);
                        } else {
                            $('#frm-company select[name="amphure"]').append(option);
                        }
                        index++;
                    });
                } 
                else if (type === 'district') {
                    $('select[name="district"]').html('');
                    $('select[name="postcode"]').html('');
                    
                    data.district_list.forEach(district => {
                        if (index === 0) {
                            option = '<option value="">'+ specify +'</option><option value="'+ district.name_en + '">'+ district.name_th +'</option>';
                            
                        } else {
                            option = '<option value="'+ district.name_th + '">'+ district.name_th +'</option>';
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
                            option = '<option value="">'+ specify +'</option><option value="'+ zip_code.zip_code + '">'+ zip_code.zip_code +'</option>';
                        } else {
                            option = '<option value="'+ zip_code.zip_code + '">'+ zip_code.zip_code +'</option>';
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
</script>
    
@endsection
