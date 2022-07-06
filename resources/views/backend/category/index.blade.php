@extends('backend.layouts.templates')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
<input type="hidden" id="pageName" name="pageName" value="setting-category">

<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row form-box-input">
                <div class="col-12">
                    <h2 class="txt__page">ตั้งค่าหมวดหมู่สินค้า</h2>
                </div>
                <div class="col-12 text-end mb-3">
                    <button class="btn btn__app px-4" type="button" onclick="EditElement();">แก้ไข</button>
                </div>
                <div class="col-4">
                    <div class="text-end">
                        <a class="btn btn__app btn__waitapproval px-4" href="#"><i class="fas fa-plus-square"></i> เพิ่ม</a>
                    </div>
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" placeholder="หมวดหมู่" name="searchcategory" id="searchcategory" autocomplete="off">
                        <div class="btn-icon-search">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <div class="box__accordian__edit">
                        <div class="box__edit__cate p-0">
                            <ul class="nav nav-pills form-box-input">
                                <li class="nav-item edit-items-product">
                                    @foreach($category as $item)
                                    <div class="nav-link category category{{$item->id}}" data-id="{{$item->id}}" data-bs-toggle="pill" href="#category{{$item->id}}">
                                        <div id="box1" class="category_{{$item->id}}" data-name-th="{{$item->name_th}}" data-name-en="{{$item->name_en}}" data-code="{{$item->code}}">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="mb-2">{{$item->name_th}} (TH)<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement('{{$item->id}}')"><i class="fas fa-pencil-alt"></i></span></p>
                                                    <p class="title__txt mb-0">{{$item->name_en}} (EN)</p>
                                                </div>
                                                <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                                                <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                            </div>
                                        </div>
                                        <div id="box2">
                                            <div class="row">
                                                <div class="col-9">
                                                    <form method="POST" action="{{ route('backend.category.update') }}" id="formupdate{{$item->id}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="categoryid" value="{{$item->id}}">
                                                        <div class="row">
                                                            <div class="col-1">
                                                                <label class="me-2">ไทย</label>
                                                            </div>
                                                            <div class="col-11">
                                                                <input type="text" class="form-control mb-2" id="editnameth" placeholder="อะไหล่" name="editnameth" value="{{$item->name_th}}">
                                                            </div>
                                                            <div class="col-1">
                                                                <label class="me-2">EN</label>
                                                            </div>
                                                            <div class="col-11">
                                                                <input type="text" class="form-control" id="editnameen" placeholder="Parts" name="editnameen" value="{{$item->name_en}}">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-3 d-flex align-items-center">
                                                    <button type="submit" class="btn btn__app btn__waitapproval px-4"  onclick="saveElement('formupdate{{$item->id}}')">บันทึก</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="text-end">
                        <a class="btn btn__app btn__waitapproval px-4" href=""><i class="fas fa-plus-square"></i> เพิ่ม</a>
                    </div>
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" placeholder="หมวดหมู่ย่อย 1" name="search">
                        <div class="btn-icon-search">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <div class="box__accordian__edit">
                        <div class="box__edit__cate p-0">
                            <div class="tab-content">
                                @foreach($categorysub as $key => $item)
                                <div id="category{{$key}}" class="tab-pane">
                                    <ul class="nav nav-pills form-box-input no-style-list ps-0">
                                        @foreach($item as $value)
                                        <li class="nav-item edit-items-product">
                                            <div class="nav-link categorysub categorysub{{$value->id}}" data-id="{{$value->id}}" data-bs-toggle="pill" href="#categorysub{{$value->id}}">
                                                <div id="box1" class="categorysub_{{$value->id}}">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p class="mb-2">{{$value->name_th}} (TH)<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement('{{$value->id}}')"><i class="fas fa-pencil-alt"></i></span></p>
                                                            <p class="title__txt mb-0">{{$value->name_en}} (EN)</p>
                                                        </div>
                                                        <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                                                        <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                                    </div>
                                                </div>
                                                <div id="box2">
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <form method="POST" action="{{ route('backend.categorysub.update') }}" id="formupdatesub{{$value->id}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="categorysubid" value="{{$value->id}}">
                                                                <div class="row">
                                                                    <div class="col-1">
                                                                        <label class="me-2">ไทย</label>
                                                                    </div>
                                                                    <div class="col-11">
                                                                        <input type="text" class="form-control mb-2" id="" placeholder="อะไหล่" name="editcategorysubth" value="{{$value->name_th}}" required>
                                                                    </div>
                                                                    <div class="col-1">
                                                                        <label class="me-2">EN</label>
                                                                    </div>
                                                                    <div class="col-11">
                                                                        <input type="text" class="form-control" id="" placeholder="Parts" name="editcategorysuben" value="{{$value->name_en}}" required>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-3 d-flex align-items-center">
                                                            <button type="submit" class="btn btn__app btn__waitapproval px-4" onclick="saveElement('formupdatesub{{$value->id}}')">บันทึก</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="text-end">
                        <a class="btn btn__app btn__waitapproval px-4" href=""><i class="fas fa-plus-square"></i> เพิ่ม</a>
                    </div>
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" placeholder="หมวดหมู่ย่อย 2" name="search">
                        <div class="btn-icon-search">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <div class="box__accordian__edit">
                        <div class="box__edit__cate p-0">
                            <div class="tab-content">
                                @foreach($categorysubs as $key => $item)
                                <div id="categorysub{{$key}}" class="tab-pane">
                                    <ul class="form-box-input no-style-list ps-0">
                                    {{-- <ul class="nav nav-pills form-box-input no-style-list ps-0"> --}}
                                        @foreach($item as $key => $value)
                                        <li class="edit-items-product">
                                            {{-- <p class="mb-2">{{$value->name_th}} (TH)</p> --}}
                                            {{-- <p class="title__txt mb-0">{{$value->name_en}} (EN)</p> --}}
                                            <div class="nav-link categorysubs categorysubs{{$value->id}}"  data-id="{{$value->id}}" data-bs-toggle="pill" >
                                                <div id="box1" class="categorysubs_{{$value->id}}">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p class="mb-2">{{$value->name_th}} (TH)<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement('{{$value->id}}')"><i class="fas fa-pencil-alt"></i></span></p>
                                                            <p class="title__txt mb-0">{{$value->name_en}} (EN)</p>
                                                        </div>
                                                        {{-- <span id="next-brand"><i class="fas fa-angle-right"></i></span> --}}
                                                        <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                                    </div>
                                                </div>
                                                <div id="box2">
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <form method="POST" action="{{ route('backend.categorysubs.update') }}" id="formupdatesubs{{$value->id}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="categorysubid" value="{{$value->id}}">
                                                                <div class="row">
                                                                    <div class="col-1">
                                                                        <label class="me-2">ไทย</label>
                                                                    </div>
                                                                    <div class="col-11">
                                                                        <input type="text" class="form-control mb-2" id="" placeholder="อะไหล่" name="editcategorysubth" value="{{$value->name_th}}" required>
                                                                    </div>
                                                                    <div class="col-1">
                                                                        <label class="me-2">EN</label>
                                                                    </div>
                                                                    <div class="col-11">
                                                                        <input type="text" class="form-control" id="" placeholder="Parts" name="editcategorysuben" value="{{$value->name_en}}" required>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-3 d-flex align-items-center">
                                                            <button type="submit" class="btn btn__app btn__waitapproval px-4" onclick="saveElement('formupdatesubs{{$value->id}}')">บันทึก</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br><br><br><br><br>
            <div class="text-center">
                <a class="btn btn__app px-5">กลับ</a>
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
        console.log(id)
        console.log(selectdata)
        // document.getElementById("box1").style.display = "none";
        // document.getElementById("box2").style.display = "block";
        if(selectdata != ''){
            $(".category #box1").show();
            // $(".category #box1 #edit-brand").show();
            // $(".category #box1 #delete-brand").show();
            // $(".category #box1 #next-brand").hide();
            $(".category #box2").hide();
            $(".categorysub #box1").show();
            // $(".categorysub #box1 #edit-brand").show();
            // $(".categorysub #box1 #delete-brand").show();
            // $(".categorysub #box1 #next-brand").hide();
            $(".categorysub #box2").hide();
            $(".categorysubs #box1").show();
            // $(".categorysubs #box1 #edit-brand").show();
            // $(".categorysubs #box1 #delete-brand").show();
            // $(".categorysubs #box1 #next-brand").hide();
            $(".categorysubs #box2").hide();
            var pointer = selectdataclass.replace('_','');
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

            // $(".category #box1").show();
            $(".category #box1 #edit-brand").hide();
            $(".category #box1 #delete-brand").hide();
            $(".category #box1 #next-brand").show();
            // $(".category #box2").hide();
            // $(".categorysub #box1").show();
            $(".categorysub #box1 #edit-brand").hide();
            $(".categorysub #box1 #delete-brand").hide();
            $(".categorysub #box1 #next-brand").show();
            // $(".categorysub #box2").hide();
            // $(".categorysubs #box1").show();
            $(".categorysubs #box1 #edit-brand").hide();
            $(".categorysubs #box1 #delete-brand").hide();
            $(".categorysubs #box1 #next-brand").show();
            // $(".categorysubs #box2").hide();

            // $(".category #edit-brand").hide();
            // $(".categorysub #delete-brand").hide();
            // $(".categorysubs #next-brand").show();

            $("."+selectdataclass+selectdata+' #edit-brand').show();
            $("."+selectdataclass+selectdata+' #delete-brand').show();
            $("."+selectdataclass+selectdata+' #next-brand').hide();
            console.log(selectdata);
        }
    }
    $(".category").click(function (e) { 
        selectdata = $(this).data('id');
        selectdataclass = 'category_';
        e.preventDefault();
    });
    $(".categorysub").click(function (e) { 
        selectdata = $(this).data('id');
        selectdataclass = 'categorysub_';
        e.preventDefault();
    });
    $(".categorysubs").click(function (e) { 
        selectdata = $(this).data('id');
        selectdataclass = 'categorysubs_';
        e.preventDefault();
    });
    function saveElement(id){
        $("#"+id).submit();
    }
</script>
@stop