@extends('supplier.auth.layouts.template')

@section('title', 'Register')

@section('style')
    <link href="{{asset('assets/css/regis8.css')}}" rel="stylesheet">
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
                            <form id="frm-register" action="">
                                @csrf
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Bank Account Number') }} *</p>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="123-123456-1" aria-label="Username"
                                       name="bank_account_no" aria-describedby="basic-addon1">
                                </div>
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Bank Account Name') }} *</p>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="บริษัท เฮงเฮงอะไหล่ยนต์"
                                      name="bank_account_name"  aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Bank') }} *</p>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="form-select" aria-label="Default select example" name="bank_name">
                                        @foreach ($bank_list_data as $bank)
                                            <option value="{{ $bank['name'] }}">{{ $bank['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Branch') }} *</p>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="form-select" aria-label="Default select example" name="bank_branch">
                                        @foreach ($bank_branch_data as $branch)
                                            <option value="{{ $branch['name'] }}">{{ $branch['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Account Type') }} *</p>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="form-select" aria-label="Default select example" name="bank_account_type">
                                        @foreach ($bank_type_data as $type)
                                            <option value="{{ $type['name'] }}">{{ $type['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="tt-text-log">
                                    <p>{{ trans('file.Copy of book bank') }} *</p>
                                </div>
                                <br>
                                {{-- drop image --}}
                                <div class="drop-zone">
                                    <label class="drop-zone__prompt">
                                        <input type="file" class="drop-zone__input" style="opacity: 0; width:50%;">
                                        <i class="fa fa-plus-circle" style="font-size:35px"></i>
                                        <p> {{ trans('file.Attach an image or PDF') }}</p>
                                        <div class="tt-img-detail">
                                            <p> {{ trans('file.Size does not exceed 5 Mb.') }} </p>
                                        </div>
                                    </label>
                                </div>

                                {{-- personal --}}
                                <input type="hidden" name="store_name" value="{{ $data['store_name'] }}">
                                <input type="hidden" name="personal_first_name" value="{{ $data['personal_first_name'] }}">
                                <input type="hidden" name="personal_last_name" value="{{ $data['personal_last_name'] }}">
                                <input type="hidden" name="personal_card_id" value="{{ $data['personal_card_id'] }}">
                                <input type="hidden" name="personal_cardId_img_name" value="{{ $data['personal_cardId_img_name'] }}">
                                <input type="hidden" name="personal_house_reg_name" value="{{ $data['personal_house_reg_name'] }}">

                                <input type="hidden" name="supplier_type" value="{{ $data['supplier_type'] }}">
                                <input type="hidden" name="address" value="{{ $data['address'] }}">
                                <input type="hidden" name="province" value="{{ $data['province'] }}">
                                <input type="hidden" name="amphure" value="{{ $data['amphure'] }}">
                                <input type="hidden" name="district" value="{{ $data['district'] }}">

                                <input type="hidden" name="email" value="{{ $data['email'] }}">
                                <input type="hidden" name="phone" value="{{ $data['phone'] }}">
                                <input type="hidden" name="facebook_url" value="{{ $data['facebook_url'] }}">
                                <input type="hidden" name="google_map_url" value="{{ $data['google_map_url'] }}">
                                <input type="hidden" name="store_address" value="{{ $data['store_address'] }}">
                                <input type="hidden" name="store_province" value="{{ $data['store_province'] }}">
                                <input type="hidden" name="store_amphure" value="{{ $data['store_amphure'] }}">
                                <input type="hidden" name="store_district" value="{{ $data['store_district'] }}">
                                <input type="hidden" name="store_postcode" value="{{ $data['store_postcode'] }}">
                                
                                {{-- company --}}
                                <input type="hidden" name="company_name" value="{{ $data['company_name'] }}">
                                <input type="hidden" name="branch" value="{{ $data['branch'] }}">
                                <input type="hidden" name="vat_registration_number" value="{{ $data['vat_registration_number'] }}">
                                <input type="hidden" name="postcode" value="{{ $data['postcode'] }}">
                                <input type="hidden" name="company_cert_img_name" value="{{ $data['company_cert_img_name'] }}">
                                <input type="hidden" name="vat_reg_doc_name" value="{{ $data['vat_reg_doc_name'] }}">


                            </form>
                            <br>

                            <div class='but-bb-log2'>
                                <button class="button button1" id="submit-btn"> {{ trans('file.Next') }} &nbsp; <i
                                        class='fas fa-angle-right'></i>
                                </button>

                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <!-- Modal content -->
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
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    {{-- <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("submit-btn");
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

    <script type="text/javascript">
        // document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        //     const dropZoneElement = inputElement.closest(".drop-zone");

        //     dropZoneElement.addEventListener("click", (e) => {
        //         inputElement.click();
        //     });

        //     inputElement.addEventListener("change", (e) => {
        //         if (inputElement.files.length) {
        //             updateThumbnail(dropZoneElement, inputElement.files[0]);
        //         }
        //     });

        //     dropZoneElement.addEventListener("dragover", (e) => {
        //         e.preventDefault();
        //         dropZoneElement.classList.add("drop-zone--over");
        //     });

        //     ["dragleave", "dragend"].forEach((type) => {
        //         dropZoneElement.addEventListener(type, (e) => {
        //             dropZoneElement.classList.remove("drop-zone--over");
        //         });
        //     });

        //     dropZoneElement.addEventListener("drop", (e) => {
        //         e.preventDefault();
        //         if (e.dataTransfer.files.length) {
        //             inputElement.files = e.dataTransfer.files;
        //             updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
        //         }

        //         dropZoneElement.classList.remove("drop-zone--over");
        //     });
        // });

        /**
         * Updates the thumbnail on a drop zone element.
         *
         * @param {HTMLElement} dropZoneElement
         * @param {File} file
         */
        // function updateThumbnail(dropZoneElement, file) {
        //     let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

        //     // First time - remove the prompt
        //     if (dropZoneElement.querySelector(".drop-zone__prompt")) {
        //         dropZoneElement.querySelector(".drop-zone__prompt").remove();
        //     }

        //     // First time - there is no thumbnail element, so lets create it
        //     if (!thumbnailElement) {
        //         thumbnailElement = document.createElement("div");
        //         thumbnailElement.classList.add("drop-zone__thumb");
        //         dropZoneElement.appendChild(thumbnailElement);
        //     }

        //     thumbnailElement.dataset.label = file.name;

        //     // Show thumbnail for image files
        //     if (file.type.startsWith("image/")) {
        //         const reader = new FileReader();

        //         reader.readAsDataURL(file);
        //         reader.onload = () => {
        //             thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
        //         };
        //     } else {
        //         thumbnailElement.style.backgroundImage = null;
        //     }
        // }

        $(document).on('click', '#submit-btn', function (e) {
            e.preventDefault();
            // if ( $("#msform").valid() ) {
                $.ajax({
                    type:'POST',
                    url:'{{route('supplier.register.store')}}',
                    data: $("#frm-register").serialize(),
                    success: function(data){
                    console.log(data);
                    
                    // location.href = '/products';
                    },
                    error: function(error) {
                        console.log(error);
                    },
                });
            // }
        });

        $('input[name="bank_book_image"]').on('change', function(){
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

    </script>
    
@endsection
