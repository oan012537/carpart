@extends('backend.layouts.templates')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
<!-- slide card -->
<!-- ---------------------JAVASCRIPT------------------------ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
<!-- --------------------------CSS------------------------------------- -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
<link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.0-rc.4/dist/css/tom-select.css" rel="stylesheet">
<!-- slide card -->
<input type="hidden" id="pageName" name="pageName" value="setting-brand">

<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row form-box-input">
                <div class="col-12">
                    <h2 class="txt__page">ตั้งค่าแบรนด์</h2>
                </div>
                <div class="col-12 text-end mb-3">
                    <button class="btn btn__app px-4" onclick="EditElement()">แก้ไข</button>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="mt-2">
                                <div class="text-end">
                                    <a class="btn btn__app btn__waitapproval px-4" href=""><i class="fas fa-plus-square"></i> เพิ่ม</a>
                                </div>
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" placeholder="แบรนด์" name="search">
                                    <div class="btn-icon-search">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="box__accordian__edit">
                                    <div class="box__edit__cate p-0">
                                        <ul class="nav nav-pills form-box-input">
                                            <li class="nav-item edit-items-product">
                                                @foreach($brands as $item)
                                                <div class="nav-link brands brand{{$item->id}}" data-id="{{$item->id}}" data-bs-toggle="pill" href="#brand{{$item->id}}">
                                                    <div id="box1" class="brand_{{$item->id}}">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <p class="mb-2">{{$item->name_th}}<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement('{{$item->id}}')"><i class="fas fa-pencil-alt"></i></span></p>
                                                            </div>
                                                            <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                                                            <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                                        </div>
                                                    </div>
                                                    <div id="box2">
                                                        <form method="POST" action="{{ route('backend.brand.update') }}" enctype="multipart/form-data" id="formupdatebrand{{$item->id}}">
                                                            @csrf
                                                            <input type="hidden" name="brandid" value="{{$item->id}}">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <input type="text" class="form-control mb-2" id="editbrand" placeholder="รุ่น" value="{{$item->name_th}}" name="editbrand">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3 d-flex align-items-center">
                                                                    <button type="submit" class="btn btn__app btn__waitapproval px-4" onclick="saveElement('formupdatebrand{{$item->id}}')">บันทึก</button>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mt-2">
                                <div class="text-end">
                                    <a class="btn btn__app btn__waitapproval px-4" href=""><i class="fas fa-plus-square"></i> เพิ่ม</a>
                                </div>
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" placeholder="รุ่น" name="search">
                                    <div class="btn-icon-search">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="box__accordian__edit">
                                    <div class="box__edit__cate p-0">
                                        <div class="tab-content">
                                            @if(!empty($brandmodel))
                                            @foreach($brandmodel as $key => $item)
                                            <div id="brand{{$key}}" class="tab-pane">
                                                <ul class="nav nav-pills form-box-input no-style-list ps-0">
                                                    @foreach($item as $value)
                                                    <li class="nav-item edit-items-product">
                                                        <div class="nav-link brandmodels brandmodels{{$value->id}}" data-id="{{$value->id}}" data-bs-toggle="pill" href="#brandmodel{{$value->id}}">
                                                            <div id="box1" class="brandmodel_{{$value->id}}">
                                                                <div class="d-flex justify-content-between">
                                                                    <div>
                                                                        <p class="mb-2">{{$value->name_th}}<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement('{{$value->id}}')"><i class="fas fa-pencil-alt"></i></span></p>
                                                                    </div>
                                                                    <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                                                                    <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                                                </div>
                                                            </div>
                                                            <div id="box2">
                                                                <form method="POST" action="{{ route('backend.brandmodel.update') }}" enctype="multipart/form-data" id="formupdatebrandmodel{{$item->id}}">
                                                                    @csrf
                                                                    <input type="hidden" name="modelid" value="{{$value->id}}">
                                                                    <div class="row">
                                                                        <div class="col-9">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <input type="text" class="form-control mb-2" id="editmodel" name="editmodel" placeholder="รุ่น" value="{{$value->name_th}}" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3 d-flex align-items-center">
                                                                            <button type="submit" class="btn btn__app btn__waitapproval px-4"  onclick="saveElement('formupdatebrandmodel{{$item->id}}')">บันทึก</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endforeach
                                            @else
                                            {{-- <div id="brand" class="tab-pane"> --}}
                                                <ul class="nav nav-pills form-box-input no-style-list ps-0" id="showbrandmodel">
                                                </ul>
                                            {{-- </div> --}}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mt-2">
                                <div class="text-end">
                                    <a class="btn btn__app btn__waitapproval px-4" href=""><i class="fas fa-plus-square"></i> เพิ่ม</a>
                                </div>
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" placeholder="รุ่นย่อย" name="search">
                                    <div class="btn-icon-search">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="box__accordian__edit">
                                    <div class="box__edit__cate p-0">
                                        <div class="tab-content">
                                            @if(!empty($brandmodelsub))
                                            @foreach($brandmodelsub as $key => $item)
                                            <div id="brandmodelsub{{$key}}" class="tab-pane">
                                                <ul class="nav nav-pills form-box-input no-style-list ps-0">
                                                    @foreach($item as $key => $value)
                                                    <li class="nav-item edit-items-product">
                                                        <div class="nav-link brandmodelsubs brandmodelsub{{$value->id}}" data-id="{{$value->id}}" data-bs-toggle="pill" href="#brandmodelsub{{$value->id}}">
                                                            <div id="box1" class="brandmodelsub_{{$value->id}}">
                                                                <div class="d-flex justify-content-between">
                                                                    <div>
                                                                        <p class="mb-2">{{$value->name_th}}<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement('{{$value->id}}')"><i class="fas fa-pencil-alt"></i></span></p>
                                                                    </div>
                                                                    <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                                                                    <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                                                </div>
                                                            </div>
                                                            <div id="box2">
                                                                <form method="POST" action="{{ route('backend.brandmodelsub.update') }}" enctype="multipart/form-data" id="formupdatebrandmodelsub{{$item->id}}">
                                                                    @csrf
                                                                    <input type="hidden" name="modelsubid" value="{{$value->id}}">
                                                                    <div class="row">
                                                                        <div class="col-9">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <input type="text" class="form-control mb-2" id="editmodelsub" name="editmodelsub" placeholder="รุ่น" value="{{$value->name_th}}" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3 d-flex align-items-center">
                                                                            <button type="submit" class="btn btn__app btn__waitapproval px-4"  onclick="saveElement('formupdatebrandmodelsub{{$item->id}}')">บันทึก</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endforeach
                                            @else
                                            <ul class="nav nav-pills form-box-input no-style-list ps-0" id="showbrandmodelsub">
                                            </ul>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mt-2">
                                <div class="text-end">
                                    <a class="btn btn__app btn__waitapproval px-4" href=""><i class="fas fa-plus-square"></i> เพิ่ม</a>
                                </div>
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" placeholder="ปี" name="search">
                                    <div class="btn-icon-search">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="box__accordian__edit">
                                    <div class="box__edit__cate p-0">
                                        <div class="tab-content">
                                            @if(!empty($brandyear))
                                            @foreach($brandyear as $key => $item)
                                            <div id="brandmodelsub{{$key}}" class="tab-pane">
                                                <ul class="form-box-input no-style-list ps-0">
                                                    @foreach($item as $key => $value)
                                                    <li class="edit-items-product2">
                                                        <div class="nav-link brandyears brandyears{{$value->id}}"  data-id="{{$value->id}}" data-bs-toggle="pill" >
                                                            <div id="box1" class="brandyear_{{$value->id}}">
                                                                <div class="d-flex justify-content-between">
                                                                    <div>
                                                                        <p class="mb-2">{{$value->year_from}}<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement('{{$value->id}}')"><i class="fas fa-pencil-alt"></i></span></p>
                                                                    </div>
                                                                    <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                                                                    <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                                                </div>
                                                            </div>
                                                            <div id="box2">
                                                                <form method="POST" action="{{ route('backend.brandyear.update') }}" enctype="multipart/form-data" id="formupdatebrandyear{{$item->id}}">
                                                                    @csrf
                                                                    <input type="hidden" name="yearid" value="{{$value->id}}">
                                                                    <div class="row">
                                                                        <div class="col-9">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <input type="text" class="form-control mb-2" id="edityear" placeholder="ปี" value="{{$value->year_from}}" name="edityear">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3 d-flex align-items-center">
                                                                            <button type="submit" class="btn btn__app btn__waitapproval px-4"  onclick="saveElement('formupdatebrandyear{{$item->id}}')">บันทึก</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
        
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endforeach
                                            @else
                                            <ul class="nav nav-pills form-box-input no-style-list ps-0" id="showbrandmodelyear">
                                            </ul>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-prev"><i class="fas fa-angle-left"></i></div>
                    <div class="swiper-button-next"><i class="fas fa-angle-right"></i></div>
                </div>

            </div>
            <br><br><br><br><br>
            <div class="text-center">
                <a class="btn btn__app px-5" href="{{route('backend.brand')}}">กลับ</a>
                <a class="btn btn__app btn__waitapproval px-5">ยืนยัน</a>
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
<script>
    var selectdata = '';
    var selectdataclass = '';
    function changeElement(id) {
        console.log('id ' +id)
        console.log('selectdata ' +selectdata)
        console.log('selectdataclass ' +selectdataclass)
        // document.getElementById("box1").style.display = "none";
        // document.getElementById("box2").style.display = "block";
        if(selectdata != ''){
            $(".brands #box1").show();
            $(".brands #box2").hide();

            $(".brandmodels #box1").show();
            $(".brandmodels #box2").hide();

            $(".brandmodelsubs #box1").show();
            $(".brandmodelsubs #box2").hide();
            
            $(".brandyears #box1").show();
            $(".brandyears #box2").hide();

            var pointer = selectdataclass.replace('_','');

            console.log('pointer ' +pointer)

            $("."+pointer+selectdata+" #box1").hide();
            $("."+pointer+selectdata+" #box2").show();
        }
    }

    function updateElement() {
        document.getElementById("box2").style.display = "none";
        document.getElementById("box1").style.display = "block";
    }

    function EditElement() {
        if(selectdata != ''){
            // document.getElementById("edit-brand").style.display = "block";
            // document.getElementById("delete-brand").style.display = "block";
            // document.getElementById("next-brand").style.display = "none";

            // $(".brand #box1").show();
            $(".brands #box1 #edit-brand").hide();
            $(".brands #box1 #delete-brand").hide();
            $(".brands #box1 #next-brand").show();
            
            $(".brandmodels #box1 #edit-brand").hide();
            $(".brandmodels #box1 #delete-brand").hide();
            $(".brandmodels #box1 #next-brand").show();
            
            $(".brandmodelsubs #box1 #edit-brand").hide();
            $(".brandmodelsubs #box1 #delete-brand").hide();
            $(".brandmodelsubs #box1 #next-brand").show();

            $(".brandyears #box1 #edit-brand").hide();
            $(".brandyears #box1 #delete-brand").hide();
            // $(".brandyears #box1 #next-brand").show();
            

            $("."+selectdataclass+selectdata+' #edit-brand').show();
            $("."+selectdataclass+selectdata+' #delete-brand').show();
            $("."+selectdataclass+selectdata+' #next-brand').hide();
            console.log(selectdata,selectdataclass);
        }
    }
    $(".brands").click(function (e) { 
        selectdata = $(this).data('id');
        selectdataclass = 'brand_';
        getbrandmodel(selectdata);
        e.preventDefault();
    });
    $(".brandmodels").click(function (e) { 
        selectdata = $(this).data('id');
        selectdataclass = 'brandmodel_';
        getbrandmodelsub(selectdata);
        e.preventDefault();
    });
    $(".brandmodelsubs").click(function (e) { 
        selectdata = $(this).data('id');
        selectdataclass = 'brandmodelsub_';
        getbrandmodelyear(selectdata);
        e.preventDefault();
    });
    $(".brandyears").click(function (e) { 
        selectdata = $(this).data('id');
        selectdataclass = 'brandyear_';
        e.preventDefault();
    });
    function saveElement(id){
        $("#"+id).submit();
    }
    function getbrandmodel(id){
        $.get("{{route('backend.brand.getbrandmodel')}}",{'id':id},function (result) {
            var txt = '';
            $.each(result, function (key, value) { 
                txt += value;
            });
            $("#showbrandmodel").empty().append(txt);
            $("#showbrandmodelsub").empty();
            $("#showbrandmodelyear").empty();
            if(txt != ''){
                $(".brandmodels").click(function (e) { 
                    selectdata = $(this).data('id');
                    selectdataclass = 'brandmodel_';
                    getbrandmodelsub(selectdata);
                    e.preventDefault();
                });
            }
        });
    }

    function getbrandmodelsub(id){
        $.get("{{route('backend.brand.getbrandmodelsub')}}",{'id':id},function (result) {
            var txt = '';
            $.each(result, function (key, value) { 
                txt += value;
            });
            $("#showbrandmodelsub").empty().append(txt);
            $("#showbrandmodelyear").empty();
            if(txt != ''){
                $(".brandmodelsubs").click(function (e) { 
                    selectdata = $(this).data('id');
                    selectdataclass = 'brandmodelsub_';
                    getbrandmodelyear(selectdata);
                    e.preventDefault();
                });
            }
        });
    }

    function getbrandmodelyear(id){
        $.get("{{route('backend.brand.getbrandmodelyear')}}",{'id':id},function (result) {
            var txt = '';
            $.each(result, function (key, value) { 
                txt += value;
            });
            $("#showbrandmodelyear").empty().append(txt);
            if(txt != ''){
                $(".brandyears").click(function (e) { 
                    selectdata = $(this).data('id');
                    selectdataclass = 'brandyear_';
                    e.preventDefault();
                });
            }
        });
    }
</script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 10,
        centeredSlides: false,
        loop: false,
        slideToClickedSlide: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: false,
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            '480': {
                slidesPerView: 1,
                spaceBetween: 40,
            },
            '640': {
                slidesPerView: 2,
                spaceBetween: 50,
            },
            '1024': {
                slidesPerView: 3,
                spaceBetween: 50,
            }
        }
    });
</script>
@stop