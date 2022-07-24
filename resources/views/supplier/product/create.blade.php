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
                <p class="txt__title"><i class="fa-solid fa-circle-exclamation"></i> 
                    <span class="title__headbox">{{ trans('file.Product Information')}}</span>
                </p>
                <form id="msform" action="" method="post">
                    <div class="box__allstep">

                        <div class="box__step">
                            <p class="txt__titlestep">{{ trans('file.Choose Brand')}}</p>
                            <div class="box__stepdetail">
                                {{-- brand --}}
                                <a href="javascript:void(0)" class="btn__label step1 d-none">
                                    <i class="fa-solid fa-xmark"></i>
                                    <span class="txt__brands"></span>
                                    <span class="icon__symbol">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                </a>
                                {{-- model --}}
                                <a href="javascript:void(0)" class="btn__label step2 d-none">
                                    <i class="fa-solid fa-xmark"></i>
                                    <span class="txt__series"></span>
                                    <span class="icon__symbol">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                </a>
                                {{-- sub model --}}
                                <a href="javascript:void(0)" class="btn__label step3 d-none">
                                    <i class="fa-solid fa-xmark"></i>
                                    <span class="txt__subseries"></span>
                                    <span class="icon__symbol">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                </a>
                                {{-- issue year --}}
                                <a href="javascript:void(0)" class="btn__label step4 d-none">
                                    <i class="fa-solid fa-xmark"></i>
                                    <span class="txt__years"></span>
                                    <span class="icon__symbol">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                </a>
                                {{-- category --}}
                                <a href="javascript:void(0)" class="btn__label step5 d-none">
                                    <i class="fa-solid fa-xmark"></i>
                                    <span class="txt__cat"></span>
                                    <span class="icon__symbol">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                </a>
                                {{-- sub category --}}
                                <a href="javascript:void(0)" class="btn__label step6 d-none">
                                    <i class="fa-solid fa-xmark"></i> 
                                    <span class="txt__sub_cat"></span> 
                                    <span id="is-finish" class="icon__symbol">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                </a>
                                {{-- sub sub category --}}
                                <a href="javascript:void(0)" class="btn__label step7 d-none">
                                    <i class="fa-solid fa-xmark"></i>
                                    <span class="txt__sub_sub_cat"></span>
                                </a>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-md-12">
                                    <div class="input-group mb-3">
                                        <input type="text" id="search-value" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-describedby="button-addon2">
                                        <button class="btn btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12">
                                    @foreach (range('A', 'Z') as $letter)
                                    <a href='javascript:void(0)' class='letter__az' data-id="{{ $letter }}">{{ $letter }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- select product main categories --}}
                        <div class="box__contentdetail">
                            {{-- brand --}}
                            <fieldset attr-id="1" class="d-block">
                                <div class="row box__scroll" id="fieldset1">
                                    @foreach ($brand_list_data as $brand)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 next-brand">
                                            <div class="form-check">
                                                <input type="hidden" name="brand" id="image-options{{ $brand->id }}" value="{{ $brand->id }}">
                                                <label for="image-options{{ $brand->id }}">
                                                    <img src="{{ asset($brand->image) }}" class="img-fluid img-circleimg" alt="{{ $brand->name_th }}">
                                                    {{ $brand->name_en }}
                                                </label>
                                                <input type="hidden" class="item-name" value="{{ $brand->name_en }}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </fieldset>

                                {{-- model   --}}
                                <fieldset attr-id="2">
                                    <div class="row box__scroll d-none" id="fieldset2">
                                    </div>
                                </fieldset>

                                {{-- sub model --}}
                                <fieldset attr-id="3">
                                    <div class="row box__scroll d-none" id="fieldset3">
                                    </div>
                                </fieldset>

                                {{-- issue year --}}
                                <fieldset attr-id="4">
                                    <div class="row box__scroll d-none" id="fieldset4">
                                    </div>
                                </fieldset>

                                {{-- category --}}
                                <fieldset attr-id="5">
                                    <div class="row box__scroll d-none" id="fieldset5">
                                    </div>
                                </fieldset>

                                {{-- sub category --}}
                                <fieldset attr-id="6">
                                    <div class="row box__scroll d-none" id="fieldset6">
                                    </div>
                                </fieldset>

                                {{-- sub sub category --}}
                                <fieldset attr-id="7">
                                    <div class="row box__scroll d-none" id="fieldset7">
                                    </div>
                                </fieldset>
                                
                        </div>
                        {{-- select product main categories --}}
                    </div>
                </form>



                 {{-- select product type --}}
                <div class="box__condition d-none">
                    <div class="box__title">
                        <p class="txt__title"><i class="fa-solid fa-circle-exclamation"></i> {{ trans('file.Product Quality') }}</p>
                    </div>

                    <form id="frm-second-product-info" action="{{ route('products.create_product_info') }}" method="get">
                        <input type="hidden" name="brand_id">
                        <input type="hidden" name="model_id">
                        <input type="hidden" name="sub_model_id">
                        <input type="hidden" name="issue_year_id">
                        <input type="hidden" name="category_id">
                        <input type="hidden" name="sub_category_id">
                        <input type="hidden" name="sub_sub_category_id">
                        <input type="hidden" name="product_type" value="second">
                    </form>
                    <form id="frm-new-product-info" action="{{ route('products.create_product_info') }}" method="get">
                        <input type="hidden" name="brand_id">
                        <input type="hidden" name="model_id">
                        <input type="hidden" name="sub_model_id">
                        <input type="hidden" name="issue_year_id">
                        <input type="hidden" name="category_id">
                        <input type="hidden" name="sub_category_id">
                        <input type="hidden" name="sub_sub_category_id">
                        <input type="hidden" name="product_type" value="new">
                    </form>
                
                     {{-- create product button --}}
                     <div class="box__wrapperbutton">
                        
                        <a href="javascript:document.getElementById('frm-second-product-info').submit();" class="btn btn__producttwohand">
                            <img src="{{ asset('assets/img/icon/icon__mdicar.svg') }}" class="img-fluid" alt="second hand">
                            <p>{{ trans('file.Second Hand') }}</p>
                            <span>{{ trans('file.The product has been used') }}</span>
                        </a>
                        
                        <a href="javascript:document.getElementById('frm-new-product-info').submit();" class="btn btn__productnew">
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
    $(".nav_list #product #product-list-menu").addClass("activemenumain");
    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;
    var itemId;
    var itemName;
    var table_name = 'brands';
    var parent_id;
    var next;
    var previous;
    var attr__value;
    var brand_id, model_id, sub_model_id, category_id, sub_category_id;

    $(document).on('click', '.choose', function(){
            let event = $(this);
            itemId = event.val();
            itemName  = event.data('name');

            current_fs = event.parent().parent().parent().parent();
            attr__value = current_fs.attr('attr-id');
    });

    $(document).on('click', '.btn__next', function(){
        nextEvent(true);
        $('input[type="radio"]').prop('checked', false);
        $('#search-value').val('');
    });
    
    $(document).on('click', '.next-brand', function() {

        itemId  = $(this).children().children().val();
        itemName  = $(this).children().children('input.item-name').val();
        current_fs = $(this).parent().parent();
        attr__value = current_fs.attr('attr-id');
        nextEvent(true);
    });
       

    function nextEvent(isNextButton) {

        next = parseInt(attr__value)+1;
        
        $('#fieldset'+attr__value).addClass('d-none');
        $('#fieldset'+next).removeClass('d-none');
        $('#fieldset'+next).parent().show();
        
        if (attr__value == 1) {
            $('#frm-second-product-info input[name="brand_id"]').val(itemId);
            $('#frm-new-product-info input[name="brand_id"]').val(itemId);

            brand_id = itemId;
            table_name = 'models';
            getSub(brand_id, table_name);
            
            $('.txt__titlestep').addClass('d-none');
            $('.step1').removeClass('d-none');
            $('.txt__brands').html(itemName);
            $('.title__headbox').html('{{ trans("file.Model") }}');

        } else if (attr__value == 2) {
            $('#frm-second-product-info input[name="model_id"]').val(itemId);
            $('#frm-new-product-info input[name="model_id"]').val(itemId);

            model_id = itemId;
            table_name = 'sub_models';
            getSub(model_id, table_name);
         
            $('.step2').removeClass('d-none');
            $('.txt__series').html(itemName);
            $('.title__headbox').html('{{ trans("file.Sub Model") }}');

        } else if (attr__value == 3) {
            $('#frm-second-product-info input[name="sub_model_id"]').val(itemId);
            $('#frm-new-product-info input[name="sub_model_id"]').val(itemId);

            sub_model_id = itemId;
            table_name = 'issue_years';
            getSub(sub_model_id, table_name);
           
            $('.step3').removeClass('d-none');
            $('.txt__subseries').html(itemName);
            $('.title__headbox').html('{{ trans("file.Year") }}');

        } else if (attr__value == 4) {
            if (isNextButton) {
                $('#frm-second-product-info input[name="issue_year_id"]').val(itemId);
                $('#frm-new-product-info input[name="issue_year_id"]').val(itemId);
                $('.step4').removeClass('d-none');
                $('.txt__years').html(itemName);
            }

            table_name = 'categories';
            getSub(1, table_name);

            $('.title__headbox').html('{{ trans("file.Category") }}');

        } else if (attr__value == 5) {
            $('#frm-second-product-info input[name="category_id"]').val(itemId);
            $('#frm-new-product-info input[name="category_id"]').val(itemId);

            category_id = itemId;
            table_name = 'sub_categories';
            getSub(category_id, table_name);
          
            $('.step5').removeClass('d-none');
            $('.txt__cat').html(itemName);
            $('.title__headbox').html('{{ trans("file.Sub Category") }}');

        } else if (attr__value == 6) {
            $('#frm-second-product-info input[name="sub_category_id"]').val(itemId);
            $('#frm-new-product-info input[name="sub_category_id"]').val(itemId);

            sub_category_id = itemId;
            table_name = 'sub_sub_categories';
            getSub(sub_category_id, table_name);
          
            $('.step6').removeClass('d-none');
            $('.txt__sub_cat').html(itemName);
            
        } else {
            if (isNextButton) {
                $('#frm-second-product-info input[name="sub_sub_category_id"]').val(itemId);
                $('#frm-new-product-info input[name="sub_sub_category_id"]').val(itemId);
                $('.step7').removeClass('d-none');
                $('.txt__sub_sub_cat').html(itemName);
            }
            $('.box__condition').removeClass('d-none');
            $('.btn__next').addClass('d-none');

        }
    }   

    $(document).on('click', '.btn__back', function(){
        backEvent();
        $('#search-value').val('');
        $('.btn__next').removeClass('d-none');
        $('.box__condition').addClass('d-none');
    });
   
    function backEvent() {

        previous = parseInt(attr__value);
        let current = parseInt(attr__value)+1;
       
        $('#fieldset'+current).addClass('d-none');
        $('#fieldset'+previous).removeClass('d-none');
        $('#fieldset'+previous).parent().show();

        $('.step'+attr__value).addClass('d-none');

        if (attr__value == 1) {
            $('.txt__titlestep').removeClass('d-none');
            $('.title__headbox').html('{{ trans("file.Brand") }}');
        } else if (attr__value == 2) {
            $('.title__headbox').html('{{ trans("file.Model") }}');
        } else if (attr__value == 3) {
            $('.title__headbox').html('{{ trans("file.Sub Model") }}');
        } else if (attr__value == 4) {
            $('.title__headbox').html('{{ trans("file.Year") }}');
        } else if (attr__value == 5) {
            $('.title__headbox').html('{{ trans("file.Category") }}');
        } else if (attr__value == 6) {
            $('.title__headbox').html('{{ trans("file.Sub Category") }}');
        } else if (attr__value == 7) {
            $('.title__headbox').html('{{ trans("file.Sub Sub Category") }}');
        }

        attr__value -= 1;

    }  

    // query filter
    $('#search-value').keyup(function() {
        let searchValue = $(this).val();
        alert(searchValue);
        queryProductModel(searchValue, table_name, parent_id);        
    });
    $('.letter__az').on('click', function() {
        let searchValue = $(this).data('id');
        $('#search-value').val(searchValue);
        queryProductModel(searchValue, table_name, parent_id);   
    });
    // query filter

    // $(document).on('click', '.btn__search', function() {        
    //     searchValue = $('#search-value').val();
    //     tableName = $('#search-value').data('id');      
    //     queryProductModel(searchValue, tableName);
    // });


    // helper function
    function getSub(id, tableName) {
        $.ajax({
            type: 'GET',
            url: 'get_sub_items',
            data: {
                'id': id,
                'tableName': tableName
            },
            success: function(data) {
                var htmltext;

                    if (tableName === 'models') {
                        $('#fieldset2').children().remove();

                    if (data.length === 0) {
                        htmltext = '<div style="text-align: center;">' +
                            '<br><br>' +
                            '<h4>{{ trans("file.Not Found") }}</h4>' +
                            '<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>' +
                            '</div>';
                        $('#fieldset2').append(htmltext);
                    } else {
                        data.forEach(model => {
                            htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-6 next">' +
                                '<div class="form-check">' +
                                '<input class="form-check-input" type="checkbox" value="' + model.id + '" id="flexCheckDefault">' +
                                '<label class="form-check-label" for="flexCheckDefault">' +
                                model.name_en +
                                '</label>' +
                                '<input type="hidden" class="item-name" value="' + model.name_en + '">' +
                                '</div></div>';
                            $('#fieldset2').append(htmltext);
                        } else {
                            data.forEach(model => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                                +'<div class="form-check">'
                                                    +'<input type="radio" class="form-check-input choose" id="model'+model.id+'"'
                                                    +'value="'+ model.id +'" name="model_id" data-name="'+model.name_en+'" >'
                                                    +'<label class="form-check-label" for="model'+model.id+'">'
                                                    + model.name_en
                                                    +'</label>'
                                                +'</div>'
                                            +'</div>';
                                $('#fieldset2').append(htmltext);
                            });
                        }       
                    } 
                    else if (tableName === 'sub_models') {
                        $('#fieldset3').children().remove();

                    if (data.length === 0) {
                        htmltext = '<div style="text-align: center;">' +
                            '<br><br>' +
                            '<h4>{{ trans("file.Not Found") }}</h4>' +
                            '<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>' +
                            '</div>';
                        $('#fieldset3').append(htmltext);
                    } else {
                        data.forEach(subModel => {
                            htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-6 next">' +
                                '<div class="form-check">' +
                                '<input class="form-check-input" type="checkbox" value="' + subModel.id + '" id="flexCheckDefault">' +
                                '<label class="form-check-label" for="flexCheckDefault">' +
                                subModel.name_en +
                                '</label>' +
                                '<input type="hidden" class="item-name" value="' + subModel.name_en + '">' +
                                '</div></div>';
                            $('#fieldset3').append(htmltext);
                        } else {
                            data.forEach(subModel => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                                +'<div class="form-check">'
                                                    +'<input type="radio" class="form-check-input choose" id="sub-model'+subModel.id+'"'
                                                    +'value="'+ subModel.id +'" name="sub_model_id" data-name="'+subModel.name_en+'">'
                                                    +'<label class="form-check-label" for="sub-model'+subModel.id+'">'
                                                    + subModel.name_en
                                                    +'</label>'
                                                +'</div>'
                                            +'</div>';
                                $('#fieldset3').append(htmltext);
                            });
                        }
                    }     
                    else if (tableName === 'issue_years') {
                        $('#fieldset4').children().remove();
                        if (data.length === 0) {
                            
                            attr__value = 4;

                            nextEvent(false);
                            $('input[type="radio"]').prop('checked', false);
                            $('#search-value').val('');
                           
                        } else {
                            data.forEach(issueYear => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                                +'<div class="form-check">'
                                                    +'<input type="radio" class="form-check-input choose" id="issue-year'+issueYear.id+'"'
                                                    +'value="'+ issueYear.id +'" data-name="'+issueYear.from_year+'">'
                                                    +'<label class="form-check-label" for="issue-year'+issueYear.id+'">'
                                                    + issueYear.from_year
                                                    +'</label>'
                                                +'</div>'
                                            +'</div>';
                                $('#fieldset4').append(htmltext);
                            });
                        }       
                    }  
                    else if (tableName === 'categories') {
                        $('#fieldset5').children().remove();
                        if (data.length === 0) {
                            htmltext = '<div style="text-align: center;">'
                                        +'<br><br>'
                                        +'<h4>{{ trans("file.Not Found") }}</h4>'
                                        +'<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>'
                                        +'</div>';
                            $('#fieldset5').append(htmltext);
                        } else {
                            data.forEach(category => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                                +'<div class="form-check">'
                                                    +'<input type="radio" class="form-check-input choose" id="category'+category.id+'"'
                                                    +'value="'+ category.id +'" name="category_id" data-name="'+category.name_en+'">'
                                                    +'<label class="form-check-label" for="category'+category.id+'">'
                                                    + category.name_en
                                                    +'</label>'
                                                +'</div>'
                                            +'</div>';
                                $('#fieldset5').append(htmltext);
                            });
                        }       
                    }  
                    else if (tableName === 'sub_categories') {
                        $('#fieldset6').children().remove();

                    if (data.length === 0) {
                        htmltext = '<div style="text-align: center;">' +
                            '<br><br>' +
                            '<h4>{{ trans("file.Not Found") }}</h4>' +
                            '<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>' +
                            '</div>';
                        $('#fieldset6').append(htmltext);
                    } else {
                        data.forEach(subCategory => {
                            htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-6 next">' +
                                '<div class="form-check">' +
                                '<input class="form-check-input" type="checkbox" value="' + subCategory.id + '" id="flexCheckDefault">' +
                                '<label class="form-check-label" for="flexCheckDefault">' +
                                subCategory.name_en +
                                '</label>' +
                                '<input type="hidden" class="item-name" value="' + subCategory.name_en + '">' +
                                '</div></div>';
                            $('#fieldset6').append(htmltext);
                        } else {
                            data.forEach(subCategory => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                                +'<div class="form-check">'
                                                    +'<input type="radio" class="form-check-input choose" id="sub-category'+subCategory.id+'"'
                                                    +'value="'+ subCategory.id +'" name="sub_category_id" data-name="'+subCategory.name_en+'">'
                                                    +'<label class="form-check-label" for="sub-category'+subCategory.id+'">'
                                                    + subCategory.name_en
                                                    +'</label>'
                                                +'</div>'
                                            +'</div>';
                                $('#fieldset6').append(htmltext);
                            });
                        }       
                    }  
                    else if (tableName === 'sub_sub_categories') {
                        $('#fieldset7').children().remove();

                        if (data.length === 0) {
                            attr__value = 7;

                            nextEvent(false);
                            $('input[type="radio"]').prop('checked', false);
                            $('#search-value').val('');
                            $('#is-finish').addClass('d-none');
                        } else {
                            $('.title__headbox').html('{{ trans("file.Sub Sub Category") }}');
                            data.forEach(subSubCategory => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                                +'<div class="form-check">'
                                                    +'<input type="radio" class="form-check-input choose" id="sub-sub-category'+subSubCategory.id+'"'
                                                    +'value="'+ subSubCategory.id +'" name="sub_sub_category_id" data-name="'+subSubCategory.name_en+'">'
                                                    +'<label class="form-check-label" for="sub-sub-category'+subSubCategory.id+'">'
                                                    + subSubCategory.name_en
                                                    +'</label>'
                                                +'</div>'
                                            +'</div>';
                                $('#fieldset7').append(htmltext);
                            });
                        }       
                    }  
                  
                },
                error: function(error) {
                    console.log(error);
                }

            },
            error: function(error) {
                console.log(error);
            }

        })
    }

    function queryProductModel(searchValue, table_name, parent_id) {
        $.ajax({
            type: 'GET',
            url: 'query_product_model',
            data: {
                'searchValue': searchValue,
                'table_name': table_name,
                'parent_id': parent_id
            },
            success: function(data) {
                var htmltext;

                if (table_name === 'brands') {
                    $('#fieldset1').children().remove();
                    if (data.length === 0) {
                        htmltext = '<div style="text-align: center;">' +
                            '<br><br>' +
                            '<h4>{{ trans("file.Not Found") }}</h4>' +
                            '<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>' +
                            '</div>';
                        $('#fieldset1').append(htmltext);
                    } else {
                        data.forEach(brand => {
                            let imageUrl = "{{  asset('brand_logo') }}" + '/' + brand.image.replace('brand_logo', '');
                            htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">' +
                                '<div class="form-check">' +
                                '<input class="form-check-input" type="radio" name="brand" id="image-options' + brand.id + '" value="' + brand.id + '">' +
                                '<label class="form-check-label" for="image-options' + brand.id + '">' +
                                '<img src="' + imageUrl + '" class="img-fluid img-circleimg" alt="' + brand.name_en + '">' +
                                brand.name_th +
                                '</label>' +
                                '<input type="hidden" class="item-name" value="' + brand.name_en + '">' +
                                '</div>';
                            $('#fieldset1').append(htmltext);
                        } else {
                            data.forEach(brand => {
                                let imageUrl = "{{  asset('brand_logo') }}" + '/' + brand.image.replace('brand_logo', '');
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next-brand">'
                                        +'<div class="form-check">'
                                            +'<input type="hidden" name="brand" id="image-options'+ brand.id +'" value="'+ brand.id +'">'
                                            +'<label class="form-check-label" for="image-options'+ brand.id +'">'
                                                +'<img src="'+ imageUrl +'" class="img-fluid img-circleimg" alt="'+ brand.name_en +'">'
                                                + brand.name_th
                                            +'</label>'
                                            +'<input type="hidden" class="item-name" value="'+ brand.name_en +'">'
                                        +'</div>';
                                $('#fieldset1').append(htmltext);
                            });
                        }
                        
                    } else  if (table_name == 'models') {
                        $('#fieldset2').children().remove();
                        if (data.length === 0) {
                            htmltext = '<div style="text-align: center;">'
                                        +'<br><br>'
                                        +'<h4>{{ trans("file.Not Found") }}</h4>'
                                        +'<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>'
                                        +'</div>';
                            $('#fieldset2').append(htmltext);
                        } else {
                            data.forEach(model => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                                +'<div class="form-check">'
                                                    +'<input type="radio" class="form-check-input choose" id="model'+model.id+'"'
                                                    +'value="'+ model.id +'" name="model_id" data-name="'+model.name_en+'" >'
                                                    +'<label class="form-check-label" for="model'+model.id+'">'
                                                    + model.name_en
                                                    +'</label>'
                                                +'</div>'
                                            +'</div>';
                                $('#fieldset2').append(htmltext);
                            });
                        }
                    } else  if (table_name == 'sub_models') {
                        $('#fieldset3').children().remove();
                        if (data.length === 0) {
                            htmltext = '<div style="text-align: center;">'
                                        +'<br><br>'
                                        +'<h4>{{ trans("file.Not Found") }}</h4>'
                                        +'<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>'
                                        +'</div>';
                            $('#fieldset3').append(htmltext);
                        } else {
                            data.forEach(subModel => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                                +'<div class="form-check">'
                                                    +'<input type="radio" class="form-check-input choose" id="sub-model'+subModel.id+'"'
                                                    +'value="'+ subModel.id +'" name="sub_model_id" data-name="'+subModel.name_en+'">'
                                                    +'<label class="form-check-label" for="sub-model'+subModel.id+'">'
                                                    + subModel.name_en
                                                    +'</label>'
                                                +'</div>'
                                            +'</div>';
                                $('#fieldset3').append(htmltext);
                            });
                        }
                    } else  if (table_name == 'issue_years') {
                        $('#fieldset4').children().remove();
                        if (data.length === 0) {
                            htmltext = '<div style="text-align: center;">'
                                        +'<br><br>'
                                        +'<h4>{{ trans("file.Not Found") }}</h4>'
                                        +'<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>'
                                        +'</div>';
                            $('#fieldset4').append(htmltext);
                        } else {
                            data.forEach(issueYear => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                    htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                                    +'<div class="form-check">'
                                                        +'<input type="radio" class="form-check-input choose" id="issue-year'+issueYear.id+'"'
                                                        +'value="'+ issueYear.id +'" data-name="'+issueYear.from_year+'">'
                                                        +'<label class="form-check-label" for="issue-year'+issueYear.id+'">'
                                                        + issueYear.from_year
                                                        +'</label>'
                                                    +'</div>'
                                            +'</div>';
                                $('#fieldset4').append(htmltext);
                            });
                        }
                    } else  if (table_name == 'categories') {
                        $('#fieldset5').children().remove();
                        if (data.length === 0) {
                            htmltext = '<div style="text-align: center;">'
                                        +'<br><br>'
                                        +'<h4>{{ trans("file.Not Found") }}</h4>'
                                        +'<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>'
                                        +'</div>';
                            $('#fieldset5').append(htmltext);
                        } else {
                            data.forEach(category => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                                +'<div class="form-check">'
                                                    +'<input type="radio" class="form-check-input choose" id="category'+category.id+'"'
                                                    +'value="'+ category.id +'" name="category_id" data-name="'+category.name_en+'">'
                                                    +'<label class="form-check-label" for="category'+category.id+'">'
                                                    + category.name_en
                                                    +'</label>'
                                                +'</div>'
                                            +'</div>';
                                $('#fieldset5').append(htmltext);
                            });
                        }
                    } else  if (table_name == 'sub_categories') {
                        $('#fieldset6').children().remove();
                        if (data.length === 0) {
                            htmltext = '<div style="text-align: center;">'
                                        +'<br><br>'
                                        +'<h4>{{ trans("file.Not Found") }}</h4>'
                                        +'<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>'
                                        +'</div>';
                            $('#fieldset6').append(htmltext);
                        } else {
                            data.forEach(subCategory => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                                +'<div class="form-check">'
                                                    +'<input type="radio" class="form-check-input choose" id="sub-category'+subCategory.id+'"'
                                                    +'value="'+ subCategory.id +'" name="sub_category_id" data-name="'+subCategory.name_en+'">'
                                                    +'<label class="form-check-label" for="sub-category'+subCategory.id+'">'
                                                    + subCategory.name_en
                                                    +'</label>'
                                                +'</div>'
                                            +'</div>';
                                $('#fieldset6').append(htmltext);
                            });
                        }
                    } else  if (table_name == 'sub_sub_categories') {
                        $('#fieldset7').children().remove();
                        if (data.length === 0) {
                            htmltext = '<div style="text-align: center;">'
                                        +'<br><br>'
                                        +'<h4>{{ trans("file.Not Found") }}</h4>'
                                        +'<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>'
                                        +'</div>';
                            $('#fieldset7').append(htmltext);
                        } else {
                            data.forEach(subSubCategory => {
                                htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">'
                                                +'<div class="form-check">'
                                                    +'<input type="radio" class="form-check-input choose" id="sub-sub-category'+subSubCategory.id+'"'
                                                    +'value="'+ subSubCategory.id +'" name="sub_sub_category_id" data-name="'+subSubCategory.name_en+'">'
                                                    +'<label class="form-check-label" for="sub-sub-category'+subSubCategory.id+'">'
                                                    + subSubCategory.name_en
                                                    +'</label>'
                                                +'</div>'
                                            +'</div>';
                                $('#fieldset7').append(htmltext);
                            });
                        }
                    }

                } else if (table_name == 'models') {
                    $('#fieldset2').children().remove();
                    if (data.length === 0) {
                        htmltext = '<div style="text-align: center;">' +
                            '<br><br>' +
                            '<h4>{{ trans("file.Not Found") }}</h4>' +
                            '<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>' +
                            '</div>';
                        $('#fieldset2').append(htmltext);
                    } else {
                        data.forEach(model => {
                            htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">' +
                                '<div class="form-check">' +
                                '<input class="form-check-input" type="checkbox" value="' + model.id + '" id="flexCheckDefault">' +
                                '<label class="form-check-label" for="flexCheckDefault">' +
                                model.name_en +
                                '</label>' +
                                '<input type="hidden" class="item-name" value="' + model.name_en + '">' +
                                '</div></div>';
                            $('#fieldset2').append(htmltext);
                        });
                    }
                } else if (table_name == 'sub_models') {
                    $('#fieldset3').children().remove();
                    if (data.length === 0) {
                        htmltext = '<div style="text-align: center;">' +
                            '<br><br>' +
                            '<h4>{{ trans("file.Not Found") }}</h4>' +
                            '<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>' +
                            '</div>';
                        $('#fieldset3').append(htmltext);
                    } else {
                        data.forEach(subModel => {
                            htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">' +
                                '<div class="form-check">' +
                                '<input class="form-check-input" type="checkbox" value="' + subModel.id + '" id="flexCheckDefault">' +
                                '<label class="form-check-label" for="flexCheckDefault">' +
                                subModel.name_en +
                                '</label>' +
                                '<input type="hidden" class="item-name" value="' + subModel.name_en + '">' +
                                '</div></div>';
                            $('#fieldset3').append(htmltext);
                        });
                    }
                } else if (table_name == 'issue_years') {
                    $('#fieldset4').children().remove();
                    if (data.length === 0) {
                        htmltext = '<div style="text-align: center;">' +
                            '<br><br>' +
                            '<h4>{{ trans("file.Not Found") }}</h4>' +
                            '<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>' +
                            '</div>';
                        $('#fieldset4').append(htmltext);
                    } else {
                        data.forEach(issueYear => {
                            htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">' +
                                '<div class="form-check">' +
                                '<input class="form-check-input" type="checkbox" value="' + issueYear.id + '" id="flexCheckDefault">' +
                                '<label class="form-check-label" for="flexCheckDefault">' +
                                issueYear.from_year +
                                '</label>' +
                                '<input type="hidden" class="item-name" value="' + issueYear.from_year + '">' +
                                '</div></div>';
                            $('#fieldset4').append(htmltext);
                        });
                    }
                } else if (table_name == 'categories') {
                    $('#fieldset5').children().remove();
                    if (data.length === 0) {
                        htmltext = '<div style="text-align: center;">' +
                            '<br><br>' +
                            '<h4>{{ trans("file.Not Found") }}</h4>' +
                            '<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>' +
                            '</div>';
                        $('#fieldset5').append(htmltext);
                    } else {
                        data.forEach(category => {
                            htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">' +
                                '<div class="form-check">' +
                                '<input class="form-check-input" type="checkbox" value="' + category.id + '" id="flexCheckDefault">' +
                                '<label class="form-check-label" for="flexCheckDefault">' +
                                category.name_en +
                                '</label>' +
                                '<input type="hidden" class="item-name" value="' + category.name_en + '">' +
                                '</div></div>';
                            $('#fieldset5').append(htmltext);
                        });
                    }
                } else if (table_name == 'sub_categories') {
                    $('#fieldset6').children().remove();
                    if (data.length === 0) {
                        htmltext = '<div style="text-align: center;">' +
                            '<br><br>' +
                            '<h4>{{ trans("file.Not Found") }}</h4>' +
                            '<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>' +
                            '</div>';
                        $('#fieldset6').append(htmltext);
                    } else {
                        data.forEach(subCategory => {
                            htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">' +
                                '<div class="form-check">' +
                                '<input class="form-check-input" type="checkbox" value="' + subCategory.id + '" id="flexCheckDefault">' +
                                '<label class="form-check-label" for="flexCheckDefault">' +
                                subCategory.name_en +
                                '</label>' +
                                '<input type="hidden" class="item-name" value="' + subCategory.name_en + '">' +
                                '</div></div>';
                            $('#fieldset6').append(htmltext);
                        });
                    }
                } else if (table_name == 'sub_sub_categories') {
                    $('#fieldset7').children().remove();
                    if (data.length === 0) {
                        htmltext = '<div style="text-align: center;">' +
                            '<br><br>' +
                            '<h4>{{ trans("file.Not Found") }}</h4>' +
                            '<i class="fa-solid fa-magnifying-glass text-center" style="width:30px;height:30px;" ></i>' +
                            '</div>';
                        $('#fieldset7').append(htmltext);
                    } else {
                        data.forEach(subSubCategory => {
                            htmltext = '<div class="col-xl-3 col-lg-4 col-md-4 col-12 next">' +
                                '<div class="form-check">' +
                                '<input class="form-check-input" type="checkbox" value="' + subSubCategory.id + '" id="flexCheckDefault">' +
                                '<label class="form-check-label" for="flexCheckDefault">' +
                                subSubCategory.name_en +
                                '</label>' +
                                '<input type="hidden" class="item-name" value="' + subCategory.name_en + '">' +
                                '</div></div>';
                            $('#fieldset7').append(htmltext);
                        });
                    }
                }

            },
            error: function(error) {
                console.log(error);
            },
        });
    }

    // helper function
</script>
@endsection