<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{url("")}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARPARTSNAVI </title>
    <meta name="keywords" content="" />
    <meta name=" description" content="" />
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="brackets">
    <meta name='copyright' content='orange technology solution co.,ltd.'>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link type="image/ico" rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link modal -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- link modal -->
    <!-- link navbar -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- link navbar -->
    <link href="{{asset('assets/css/home-seach1.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('assets/css/home-request.css')}}" rel="stylesheet"> -->

    @include('buyer.layouts.inc_stylesheet')
</head>

<body>

    @include('buyer.layouts.inc_headerlogin')


    <section id="sec-home-seach">
        <div class="container">
            <div class="img-img-ban">
                <img src="{{asset('assets/img/home-seach/b1.png')}}" class="img-fluid" alt="shoe image">
                <div class="head-text-ban">
                    <p>
                        Banner
                    </p>
                </div>
                <div class="detail-text-ban">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section id="sec-roon-seach">
        <div class="container">
            <div class="box-roon-box">
                <div class="text-h-roon">
                    <p>
                        ?????????????????????????????????
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group box__search">
                            <input type="text" class="form-control" id="search-brand" aria-describedby="button-addon2">
                            <button class="btn btn__search" type="button" onclick="searchBrands()" id="button-addon2"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="text-tt-roon">
                            <a onclick="filterBrands('A')"><span> A </span></a>
                            <a onclick="filterBrands('B')"><span> B </span></a>
                            <a onclick="filterBrands('C')"><span> C </span></a>
                            <a onclick="filterBrands('D')"><span> D </span></a>
                            <a onclick="filterBrands('E')"><span> E </span></a>
                            <a onclick="filterBrands('F')"><span> F </span></a>
                            <a onclick="filterBrands('G')"><span> G </span></a>
                            <a onclick="filterBrands('H')"><span> H </span></a>
                            <a onclick="filterBrands('I')"><span> I </span></a>
                            <a onclick="filterBrands('J')"><span> J </span></a>
                            <a onclick="filterBrands('K')"><span> K </span></a>
                            <a onclick="filterBrands('L')"><span> L </span></a>
                            <a onclick="filterBrands('M')"><span> M </span></a>
                            <a onclick="filterBrands('N')"><span> N </span></a>
                            <a onclick="filterBrands('O')"><span> O </span></a>
                            <a onclick="filterBrands('P')"><span> P </span></a>
                            <a onclick="filterBrands('Q')"><span> Q </span></a>
                            <a onclick="filterBrands('R')"><span> R </span></a>
                            <a onclick="filterBrands('S')"><span> S </span></a>
                            <a onclick="filterBrands('T')"><span> T </span></a>
                            <a onclick="filterBrands('U')"><span> U </span></a>
                            <a onclick="filterBrands('V')"><span> V </span></a>
                            <a onclick="filterBrands('W')"><span> W </span></a>
                            <a onclick="filterBrands('X')"><span> X </span></a>
                            <a onclick="filterBrands('Y')"><span> Y </span></a>
                            <a onclick="filterBrands('Z')"><span> Z </span></a>
                        </div>
                    </div>
                </div>

                <br><br>
                <div class="box-scoll-roon">
                    <div class="brands-all">
                        @php 
                            $count_brands = DB::table('brands')->count();
                            $checkcolumn = ceil($count_brands/5); //???????????????????????????
                            $checkcount = $count_brands%5; //??????????????????????????????
                        @endphp

                        @for($i=0;$i<$checkcolumn;$i++)
                        @php
                            if($i==0){
                                $store_id[] = '';
                            }
                            $brands = DB::table('brands')->whereNotIn('id',$store_id)->limit(5)->get();
                        @endphp
                        <div class="row">
                            @if($i == $checkcolumn-1)
                                @if(!empty($checkcount))
                                    @php $check = 5 - $checkcount; @endphp
                                    @foreach($brands as $brand)
                                    @php $store_id[] = $brand->id; @endphp
                                    <div class="col-sm">
                                        <a onclick="selectBrands({{$brand->id}})">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="box_imgroonimg">
                                                    <img src="{{$brand->image}}" class="img-fluid img-circleimg" alt="shoe image">
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="text-detail-roon">
                                                    <p>
                                                        {{$brand->name_en}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    @endforeach
                                    @for($x=0;$x<$check;$x++)
                                    <div class="col-sm"></div>
                                    @endfor
                                @endif
                            @else
                                @foreach($brands as $brand)
                                @php $store_id[] = $brand->id; @endphp
                                <div class="col-sm">
                                    <a onclick="selectBrands({{$brand->id}})">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="box_imgroonimg">
                                                <img src="{{$brand->image}}" class="img-fluid img-circleimg" alt="shoe image">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="text-detail-roon">
                                                <p>
                                                    {{$brand->name_en}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                @endforeach
                            @endif
                        </div>
                        <br>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec-fi-seach">
        <div class="container">
            <div class="head-text-fi-seach">
                <p>
                    ?????????????????????????????? <span> 6 ?????????????????? </span>
                </p>
            </div>

            <div class="row">
                <div class="col-lg-10">
                    <button class="button button3">
                        ?????????????????????
                    </button>
                    <button class="button button3">
                        ???????????????
                    </button>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> ???????????????????????? </option>
                        <option value="1"> ... </option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <div class="pagination">
                        <a href="#" class="active">&laquo;</a>
                        <a href="#">1/11</a>
                        <a href="#" class="active">&raquo;</a>
                    </div>
                </div>
            </div>


            <br><br>
            <div class="row">
                <div class="col-lg-3">
                    <form action="{{url('buyer/search-product')}}" method="post" style="margin:0;" enctype="multipart/form-data">
                    @csrf
                    <div class="sidenav">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tt-seach-text">
                                    <p> ????????????????????????</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tt-seach-text2">
                                    <i class="fa fa-close"></i>
                                    <a href="{{url('buyer/home-search')}}" style="padding:0;"><p> ???????????? </p></a>
                                </div>
                            </div>
                        </div>
                        <hr class="new1">
                        <span> ?????????????????? </span>
                        <input type="hidden" name="brand" id="brand-search">
                        <button type="button" class="dropdown-btn" id="text-brands">??????????????????
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container" id="dropdown-brand">
                            @foreach($brands_select as $bs)
                            <a class="dropdown" onclick="searchnavBrands({{$bs->id}})">{{$bs->name_en}}</a>
                            @endforeach
                        </div>
                        <hr class="new1">
                        <span> ???????????? </span>
                        <input type="hidden" name="model" id="model-search">
                        <button type="button" class="dropdown-btn" id="text-model"> ???????????????
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container" id="dropdown-model">
                            <!-- <a href="#">Link 1</a> -->
                        </div>
                        <hr class="new1">
                        <span> ???????????????????????? </span>
                        <input type="hidden" name="submodel" id="submodel-search">
                        <button type="button" class="dropdown-btn" id="text-submodel"> ???????????????
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container" id="dropdown-submodel">
                            <!-- <a href="#">Link 1</a> -->
                        </div>
                        <hr class="new1">
                        <span> ???????????? </span>
                        <input type="hidden" name="year" id="year-search">
                        <button type="button" class="dropdown-btn" id="text-year"> ???????????????
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container" id="dropdown-year">
                            <!-- <a href="#">Link 1</a> -->
                        </div>
                        <hr class="new1">
                        <span> ?????????????????????????????????????????? </span>
                        <input type="hidden" name="category" id="category-search">
                        <button type="button" class="dropdown-btn" id="text-category"> ???????????????
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container" id="dropdown-category">
                            @foreach($category as $cg)
                            <a class="category{{$cg->id}}" onclick="searchnavCategory({{$cg->id}})">{{$cg->name_th}}</a>
                            @endforeach
                        </div>
                        <hr class="new1">
                        <span> ???????????????????????????????????? 1 </span>
                        <input type="hidden" name="subcategory" id="subcategory-search">
                        <button type="button" class="dropdown-btn" id="text-subcategory"> ???????????????
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container" id="dropdown-subcategory">
                            <!-- <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a> -->
                        </div>
                        <hr class="new1">
                        <span> ???????????????????????????????????? 2 </span>
                        <input type="hidden" name="subsubcategory" id="subsubcategory-search">
                        <button type="button" class="dropdown-btn" id="text-subsubcategory"> ???????????????
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container"  id="dropdown-subsubcategory">
                            <!-- <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a> -->
                        </div>
                        <hr class="new1">
                        <span> ?????????????????????????????? </span>

                        <label class="check"> ????????????
                            <input type="radio" checked="checked" name="condition" value="new">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check"> ??????????????????
                            <input type="radio" name="condition" value="secondhand">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check"> ?????????
                            <input type="radio" name="condition" value="genuine">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check"> OEM
                            <input type="radio" name="condition" value="OEM">
                            <span class="checkmark"></span>
                        </label>

                        <hr class="new1">
                        <span> ???????????????????????? </span>
                        <br><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="box-col-b">
                                    <div class="form-group">
                                        <input type="number" name="minprice" class="form-control" min="0" id="exampleFormControlInput1"
                                            placeholder="????????????">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="box-col-b">
                                    <div class="form-group">
                                        <input type="number" name="maxprice" class="form-control" min="0" id="exampleFormControlInput1"
                                            placeholder="????????????">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="button button2"> ???????????????
                        </button>
                    </div>
                    </form>

                </div>
                @if(count($products) > 0)
                <div class="col-lg-9">
                    <div class="main">
                        <div class="box__productintro">
                            <div class="row">
                                <div class="col-6">
                                </div>
                            </div>
                            <div class="row">
                                @foreach($products as $product)
                                <div class="col-xl-4 col-lg-6 col-6">
                                    <a href="javascript:void(0)">
                                        <div class="box__itemssproductintro">
                                            <div class="box__image">
                                                <img src="assets/img/home/product-intro1.png"
                                                    class="img-fluid" alt="">

                                                <div class="box__status">
                                                    <p>Promotion</p>
                                                </div>

                                                <div class="box__grade">
                                                    <p>{{$product->grade}}</p>
                                                </div>
                                            </div>

                                            <div class="box__content">
                                                <h5 class="intro__title">{{$product->name_en}}
                                                </h5>
                                                <p class="intro__serial">????????????: {{$product->product_code}} </p>
                                                <p class="intro__price">??? <span>{{number_format($product->price)}}</span> /????????????</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                            <div class="img-logo-request">
                                <img src="{{asset('assets/img/home-seach/logo-h.png')}}" class="img-fluid" alt="shoe image">
                            </div>
                            <br>
                            <div class="hexd-text-t-seach">
                                <p>
                                    ?????????????????????????????????????????????
                                </p>
                            </div>
                            <div class="detail-text-t-seach">
                                <p>
                                    ??????????????????????????????????????????????????????????????????????????????????????????????????????
                                </p>
                            </div>
                            <br>
                            <div class="w3-container w3-center">
                                <div class="but-ca">
                                    <a href="{{route('buyer.requestspares.add')}}">
                                        <button class="button button2-2"> ?????????????????????????????????
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3"> </div>
                    </div>
                </div>
                @endif
            </div>

            <br>
            <div class="w3-container w3-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination2 justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">&laquo; ????????????????????????</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item-2">
                            <a class="page-link" href="#">??????????????? &raquo;</a>
                        </li>
                    </ul>
                </nav>


            </div>




        </div>
    </section>

    <br>
    @include('buyer.layouts.inc_footer')
    @include('buyer.layouts.inc_js')
    <script>
        function filterBrands(text){
            text = text;
            // alert(text);
            $('.brands-all').css('display','none');
            $.ajax({
                method: "GET",
                url: "{!! url('/buyer/filterBrands/" + text + "') !!}",
                dataType: "json"
            }).done(function(rec){
                console.log(rec)
                // count = rec.length;

                $('.box-scoll-roon').append(rec);
            });
        }


        //???????????????????????????brand ?????? box search
        $(document).on('keyup','#search-brand',function(){
            name = $('#search-brand').val();
            $('.brands-all').css('display','none');
            if(name != null){
                $.ajax({
                    method: "GET",
                    url: "{!! url('/buyer/searchBrands/" + name + "') !!}",
                    dataType: "json"
                }).done(function(rec){
                    console.log(rec)
                    // count = rec.length;
                    $('.box-scoll-roon').append(rec);
                });
            }
        });

        
        function selectBrands(id){
            location.href = "buyer/home-search2?brand="+id;
            /*$.ajax({
                method: "POST",
                url: "{{url('buyer/GetsearchBox')}}",
                data: {"_token":" {{ csrf_token() }} ",brand:id}
            }).done(function(rec){
                location.href = "buyer/home-search2?brand="+id;
            });*/
        }

    </script>
    <script>
        //????????????????????????????????????????????? search navbar

        function searchnavBrands(id){
            $('#brand-search').val(id);
            $('.dropdown-model').remove();
            //close dropdown
            $('#dropdown-brand').css('display','none');
            $.ajax({
                method: "GET",
                url: "{!! url('/buyer/GetModel/"+id+"') !!}",
                dataType: "json"
            }).done(function(rec){
                $('#text-brands').html(rec.brand['name_en']);
                text = '';
                for(i=0;i<rec.model.length;i++){
                    text += '<a class="dropdown-model" onclick="searchnavModels('+rec.model[i]['id']+')">'+rec.model[i]['name_en']+'</a>'; 
                }
                $('#dropdown-model').append(text);
            });
        }

        function searchnavModels(id){
            $('#model-search').val(id);
            $('.dropdown-submodel').remove();
            $('#dropdown-model').css('display','none');
            $.ajax({
                method: "GET",
                url: "{!! url('/buyer/GetsubModel/"+id+"') !!}",
                dataType: "json"
            }).done(function(rec){
                $('#text-model').html(rec.model['name_en']);

                text = '';
                for(i=0;i<rec.submodel.length;i++){
                    text += '<a class="dropdown-submodel" onclick="searchnavsubModels('+rec.submodel[i]['id']+')">'+rec.submodel[i]['name_en']+'</a>'; 
                }
                $('#dropdown-submodel').append(text);
            });
        }

        function searchnavsubModels(id){
            $('#submodel-search').val(id);
            $('.dropdown-year').remove();
            $('#dropdown-submodel').css('display','none');
            $.ajax({
                method: "GET",
                url: "{!! url('/buyer/GetYear/"+id+"') !!}",
                dataType: "json"
            }).done(function(rec){
                $('#text-submodel').html(rec.submodel['name_en']);

                text = '';
                for(i=0;i<rec.year.length;i++){
                    text += '<a class="dropdown-year" onclick="searchnavYear('+rec.year[i]['id']+')">'+rec.year[i]['from_year']+'</a>'; 
                }
                $('#dropdown-year').append(text);
            });
        }

        function searchnavYear(id){
            $('#year-search').val(id);
            $('#dropdown-year').css('display','none');
            $.ajax({
                method: "GET",
                url: "{!! url('/buyer/GetYearID/"+id+"') !!}",
                dataType: "json"
            }).done(function(rec){
                $('#text-year').html(rec.year['from_year']);
            });
        }

        function searchnavCategory(id){
            $('#category-search').val(id);
            $('.dropdown-subcategory').remove();
            $('#dropdown-category').css('display','none');
            $('#text-category').html($('.category'+id).text());
            $.ajax({
                method: "GET",
                url: "{!! url('/buyer/GetsubCategory/"+id+"') !!}",
                dataType: "json"
            }).done(function(rec){
                text = '';
                // console.log(rec.subcategory.length)
                for(i=0;i<rec.subcategory.length;i++){
                    text += '<a class="dropdown-subcategory" id="subcategory'+rec.subcategory[i]['id']+'" onclick="searchnavSubcate('+rec.subcategory[i]['id']+')">'+rec.subcategory[i]['name_th']+'</a>'; 
                }
                $('#dropdown-subcategory').append(text);
            });
        }

        function searchnavSubcate(id){
            $('#subcategory-search').val(id);
            $('.dropdown-subsubcategory').remove();
            $('#dropdown-subcategory').css('display','none');
            $('#text-subcategory').html($('#subcategory'+id).text());
            $.ajax({
                method: "GET",
                url: "{!! url('/buyer/GetSubsubCategory/"+id+"') !!}",
                dataType: "json"
            }).done(function(rec){
                text = '';
                for(i=0;i<rec.subsubcategory.length;i++){
                    text += '<a class="dropdown-subsubcategory" id="subsubcategory'+rec.subsubcategory[i]['id']+'" onclick="searchnavSub_subcate('+rec.subsubcategory[i]['id']+')">'+rec.subsubcategory[i]['name_th']+'</a>'; 
                }
                console.log(text)
                $('#dropdown-subsubcategory').append(text);
            });
        }

        function searchnavSub_subcate(id){
            $('#subsubcategory-search').val(id);
            // $('.dropdown-subsubcategory').remove();
            $('#dropdown-subsubcategory').css('display','none');
            $('#text-subsubcategory').html($('#subsubcategory'+id).text());
        }


    </script>

    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>

    <!-- JS  modal edit -->
    <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
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
    </script>

    <!-- <script>
    $("div[id^='myModal']").each(function() {

        var currentModal = $(this);

        //click next
        currentModal.find('.btn-next').click(function() {
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal(
                'show');
        });

        //click prev
        currentModal.find('.btn-prev').click(function() {
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal(
                'show');
        });

    });
    </script>-->



    <!-- JS  upload-->
    <!-- <script src="./src/main.js"></script> -->
    <!-- <script src="{{asset('assets/js/main.js')}}"></script> -->
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

</body>

</html>
