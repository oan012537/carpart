@extends('supplier.layouts.template')

@section('content')

<input type="hidden" id="pageName" name="pageName" value="setting-product">
<div class="content" id="setting-createproduct">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__titlepage">
                    <h3>{{ trans('file.Add Product')}}</h3>
                </div>
            </div>

            <div class="col-lg-12">
                <p class="txt__title"><i class="fa-solid fa-circle-exclamation"></i> <span class="title__headbox">{{ trans('file.Product Information')}}</span></p>
                <form id="msform" action="" method="post">
                    <div class="box__allstep">

                        <div class="box__step">
                            <p class="txt__titlestep">{{ trans('file.Choose Brand')}}</p>
                            <div class="box__stepdetail">
                                <a href="javascript:void(0)" class="btn__label step1 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__brands"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                <a href="javascript:void(0)" class="btn__label step2 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__series"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                <a href="javascript:void(0)" class="btn__label step3 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__subseries"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                <a href="javascript:void(0)" class="btn__label step4 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__years"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                <a href="javascript:void(0)" class="btn__label step5 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__cat"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span></a>
                                <a href="javascript:void(0)" class="btn__label step6 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__sub_cat"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span></a>
                                <a href="javascript:void(0)" class="btn__label step7 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__sub_sub_cat"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span></a></a>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-describedby="button-addon2">
                                        <button class="btn btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    @foreach (range('A', 'Z') as $letter)
                                      <a href='javascript:void(0)' class='letter__az'>{{ $letter }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                        <div class="box__contentdetail">
                            {{-- brand --}}
                            <div class="row box__scroll" id="fieldset1">
                                @foreach ($brand_list_data as $brand)
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 next">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="brand" id="image-options{{ $brand->id }}" value="{{ $brand->id }}">
                                            <label class="form-check-label" for="image-options{{ $brand->id }}">
                                                <img src="{{ asset('brand_logo').'/'. $brand->image }}" class="img-fluid img-circleimg" alt="{{ $brand->name_th }}">
                                                {{-- concat id is for test --}}
                                                {{ $brand->name_th . ' ('. $brand->id }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            {{-- model   --}}
                            <fieldset attr-id="1">
                                <div class="row box__scroll" id="fieldset2">
                                </div>

                                {{-- sub model --}}
                                <fieldset attr-id="2">
                                    <div class="row box__scroll" id="fieldset3">
                                    </div>
                                    {{-- issue year --}}
                                    <fieldset attr-id="3">
                                        <div class="row box__scroll" id="fieldset4">
                                        </div>

                                        {{-- category --}}
                                        <fieldset attr-id="4">
                                            <div class="row box__scroll" id="fieldset5">
                                            </div>

                                            {{-- sub category --}}
                                            <fieldset attr-id="5">
                                                <div class="row box__scroll" id="fieldset6">
                                                </div>

                                                {{-- sub sub category --}}
                                                <fieldset attr-id="6">
                                                    <div class="row box__scroll" id="fieldset7">
                                                    </div>

                                                </fieldset>
                                                <!--  -->
                                            </fieldset>
                                            <!--  -->

                                        </fieldset>
                                        <!--  -->
                                    </fieldset>

                                    <!--  -->
                        </div>
                    </div>
                </form>
                

                {{-- select product type --}}
                <div class="box__condition">
                    <div class="box__title">
                        <p class="txt__title"><i class="fa-solid fa-circle-exclamation"></i> {{ trans('file.Product Quality') }}</p>
                    </div>

                    <form id="frm-product-info" action="{{ route('products.create_product_info') }}" method="get">
                        <input type="hidden" name="brand_id" >
                        <input type="hidden" name="model_id" >
                        <input type="hidden" name="sub_model_id" >
                        <input type="hidden" name="issue_year_id" >
                        <input type="hidden" name="category_id" >
                        <input type="hidden" name="sub_category_id" >
                        <input type="hidden" name="sub_sub_category_id" >
                    </form>

                    <div class="box__wrapperbutton">
                        <a href="javascript:document.getElementById('frm-product-info').submit();" class="btn btn__producttwohand">
                            <img src="{{ asset('assets/img/icon/icon__mdicar.svg') }}" class="img-fluid" alt="second hand">
                            <p>{{ trans('file.Second Hand') }}</p>
                            <span>{{ trans('file.The product has been used') }}</span>
                        </a>

                        <a href="javascript:document.getElementById('frm-product-info').submit();" class="btn btn__productnew">
                            <img src="{{ asset('assets/img/icon/icon__new.svg') }}" class="img-fluid" alt="new product">
                            <p>{{ trans('file.New Product') }}</p>
                            <span>{{ trans('file.First-hand products have not been used.') }}</span>
                        </a>
                    </div>
                </div>
                {{-- select product type --}}

                <div class="box__btn">
                    <a href="javascript:void(0)" class="btn btn__back">{{ trans('file.Back') }}</a>
                    <a href="javascript:void(0)" class="btn btn__next">{{ trans('file.Next') }}</a>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection

@section('script')
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script>
    $(".nav_list #product #product-list-menu").addClass("active");
    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;
    var itemId;
    
    $(document).on('click', '.next', function() {

        itemId  = $(this).children().children().val();
        
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        next_fs.show();
        const attr__value = next_fs.attr('attr-id');
        
        // alert(attr__value);
        if (attr__value == 1) {
            $('#frm-product-info input[name="brand_id"]').val(itemId);
            getSub(itemId, 'models');

            $('.txt__titlestep').addClass('d-none');
            $('.step1').removeClass('d-none');
            $('.txt__brands').html('{{ trans("file.Brand") }}');
            $('.step2').removeClass('d-none');
            $('.txt__series').html('{{ trans("file.Model") }}');
            $('.title__headbox').html('{{ trans("file.Model") }}')
        } else if (attr__value == 2) {
            $('#frm-product-info input[name="model_id"]').val(itemId);
            getSub(itemId, 'sub_models');

            $('.step3').removeClass('d-none');
            $('.txt__subseries').html('{{ trans("file.Sub Model") }}');
            $('.title__headbox').html('{{ trans("file.Sub Model") }}')
        } else if (attr__value == 3) {
            $('#frm-product-info input[name="sub_model_id"]').val(itemId);
            getSub(itemId, 'issue_years');

            $('.step4').removeClass('d-none');
            $('.txt__years').html('{{ trans("file.Year") }}');
            $('.title__headbox').html('{{ trans("file.Year") }}')
        } else if (attr__value == 4) {
            $('#frm-product-info input[name="issue_year_id"]').val(itemId);
            getSub(itemId, 'categories');

            $('.step5').removeClass('d-none');
            $('.txt__cat').html('{{ trans("file.Category") }}');
            $('.title__headbox').html('{{ trans("file.Category") }}')
        } else if (attr__value == 5) {
            $('#frm-product-info input[name="category_id"]').val(itemId);
            getSub(itemId, 'sub_categories');

            $('.step6').removeClass('d-none');
            $('.txt__sub_cat').html('{{ trans("file.Sub Category") }}');
            $('.title__headbox').html('{{ trans("file.Sub Category") }}')
        } else if (attr__value == 6) {
            $('#frm-product-info input[name="sub_category_id"]').val(itemId);
            getSub(itemId, 'sub_sub_categories');

            $('.step7').removeClass('d-none');
            $('.txt__sub_sub_cat').html('{{ trans("file.Sub Sub Category") }}');
            $('.title__headbox').html('{{ trans("file.Sub Sub Category") }}')
        } else {
            $('#frm-product-info input[name="sub_sub_category_id"]').val(itemId);
        }

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


    // helper function
        function getSub(id, tableName) {
            $.ajax({
                type: 'GET',
                url: 'get_sub_items',
                data: {
                    'id': id,
                    'tableName': tableName
                },
                success: function(data){
                    var htmltext;

                    if (tableName === 'models') {
                        if (data.length === 0) {
                            alert('Model not found');
                        } else {
                            data.forEach(model => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                    +'<div class="form-check">'
                                        +'<input class="form-check-input" type="checkbox" value="'+ model.id +'" id="flexCheckDefault">'
                                        +'<label class="form-check-label" for="flexCheckDefault">'
                                        + model.name_en + ' ('+ model.id // concat id is for test
                                        +'</label>'
                                    +'</div></div>';
                                $('#fieldset2').append(htmltext);
                            });
                        }       
                    } 
                    else if (tableName === 'sub_models') {
                        if (data.length === 0) {
                            alert('Sub Model not found');
                        } else {
                            data.forEach(subModel => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                    +'<div class="form-check">'
                                        +'<input class="form-check-input" type="checkbox" value="'+ subModel.id +'" id="flexCheckDefault">'
                                        +'<label class="form-check-label" for="flexCheckDefault">'
                                        + subModel.name_en + ' ('+ subModel.id // concat id is for test
                                        +'</label>'
                                    +'</div></div>';
                                $('#fieldset3').append(htmltext);
                            });
                        }
                    }     
                    else if (tableName === 'issue_years') {
                        if (data.length === 0) {
                            alert('Issue year not found');
                        } else {
                            data.forEach(issueYear => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                    +'<div class="form-check">'
                                        +'<input class="form-check-input" type="checkbox" value="'+ issueYear.id +'" id="flexCheckDefault">'
                                        +'<label class="form-check-label" for="flexCheckDefault">'
                                        + issueYear.from_year + ' ('+ issueYear.id // concat id is for test
                                        +'</label>'
                                    +'</div></div>';
                                $('#fieldset4').append(htmltext);
                            });
                        }       
                    }  
                    else if (tableName === 'categories') {
                        if (data.length === 0) {
                            alert('Category not found');
                        } else {
                            data.forEach(category => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                    +'<div class="form-check">'
                                        +'<input class="form-check-input" type="checkbox" value="'+ category.id +'" id="flexCheckDefault">'
                                        +'<label class="form-check-label" for="flexCheckDefault">'
                                        + category.name_en + ' ('+ category.id // concat id is for test
                                        +'</label>'
                                    +'</div></div>';
                                $('#fieldset5').append(htmltext);
                            });
                        }       
                    }  
                    else if (tableName === 'sub_categories') {
                        if (data.length === 0) {
                            alert('Sub Category not found');
                        } else {
                            data.forEach(subCategory => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                    +'<div class="form-check">'
                                        +'<input class="form-check-input" type="checkbox" value="'+ subCategory.id +'" id="flexCheckDefault">'
                                        +'<label class="form-check-label" for="flexCheckDefault">'
                                        + subCategory.name_en + ' ('+ subCategory.id // concat id is for test
                                        +'</label>'
                                    +'</div></div>';
                                $('#fieldset6').append(htmltext);
                            });
                        }       
                    }  
                    else if (tableName === 'sub_sub_categories') {
                        if (data.length === 0) {
                            alert('Sub Sub Category not found');
                        } else {
                            data.forEach(subSubCategory => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                    +'<div class="form-check">'
                                        +'<input class="form-check-input" type="checkbox" value="'+ subSubCategory.id +'" id="flexCheckDefault">'
                                        +'<label class="form-check-label" for="flexCheckDefault">'
                                        + subSubCategory.name_en + ' ('+ subSubCategory.id // concat id is for test
                                        +'</label>'
                                    +'</div></div>';
                                $('#fieldset7').append(htmltext);
                            });
                        }       
                    }  
                  
                },
                error: function(error) {
                    console.log(error);
                }

            })
        }

    // helper function
</script>
@endsection