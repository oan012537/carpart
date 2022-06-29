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
                                                <div class="nav-link" data-bs-toggle="pill" href="#home">
                                                    <div id="box1">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <p class="mb-2">แบรนด์<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement()"><i class="fas fa-pencil-alt"></i></span></p>
                                                            </div>
                                                            <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                                                            <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                                        </div>
                                                    </div>
                                                    <div id="box2">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <input type="text" class="form-control mb-2" id="" placeholder="รุ่น">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 d-flex align-items-center">
                                                                <a class="btn btn__app btn__waitapproval px-4" href="" onclick="saveElement()">บันทึก</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
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
                                            <div id="home" class="tab-pane">
                                                <ul class="nav nav-pills form-box-input no-style-list ps-0">
                                                    <li class="nav-item edit-items-product">
                                                        <div class="nav-link" data-bs-toggle="pill" href="#main2">
                                                            <div id="box1">
                                                                <div class="d-flex justify-content-between">
                                                                    <div>
                                                                        <p class="mb-2">รุ่น<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement()"><i class="fas fa-pencil-alt"></i></span></p>
                                                                    </div>
                                                                    <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                                                                    <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                                                </div>
                                                            </div>
                                                            <div id="box2">
                                                                <div class="row">
                                                                    <div class="col-9">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <input type="text" class="form-control mb-2" id="" placeholder="รุ่น">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3 d-flex align-items-center">
                                                                        <a class="btn btn__app btn__waitapproval px-4" href="" onclick="saveElement()">บันทึก</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item edit-items-product">
                                                        <div class="nav-link" data-bs-toggle="pill" href="#main3">
                                                            <div id="box1">
                                                                <div class="d-flex justify-content-between">
                                                                    <div>
                                                                        <p class="mb-2">รุ่น<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement()"><i class="fas fa-pencil-alt"></i></span></p>
                                                                    </div>
                                                                    <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                                                                    <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                                                </div>
                                                            </div>
                                                            <div id="box2">
                                                                <div class="row">
                                                                    <div class="col-9">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <input type="text" class="form-control mb-2" id="" placeholder="รุ่น">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3 d-flex align-items-center">
                                                                        <a class="btn btn__app btn__waitapproval px-4" href="" onclick="saveElement()">บันทึก</a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
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
                                            <div id="main2" class="tab-pane">
                                                <ul class="nav nav-pills form-box-input no-style-list ps-0">
                                                    <li class="nav-item edit-items-product">
                                                        <div class="nav-link" data-bs-toggle="pill" href="#main4">
                                                            <div class="d-flex justify-content-between">
                                                                <div>
                                                                    <p class="mb-2">รุ่นย่อย<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement()"><i class="fas fa-pencil-alt"></i></span></p>
                                                                </div>
                                                                <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                                                                <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="main3" class="tab-pane">
                                                <ul class="nav nav-pills form-box-input no-style-list ps-0">
                                                    <li class="nav-item edit-items-product">
                                                        <div class="nav-link" data-bs-toggle="pill" href="#main5">
                                                            <div class="d-flex justify-content-between">
                                                                <div>
                                                                    <p class="mb-2">รุ่นย่อย<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement()"><i class="fas fa-pencil-alt"></i></span></p>
                                                                </div>
                                                                <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                                                                <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item edit-items-product">
                                                        <div class="nav-link" data-bs-toggle="pill" href="#main6">
                                                            <div class="d-flex justify-content-between">
                                                                <div>
                                                                    <p class="mb-2">รุ่นย่อย<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement()"><i class="fas fa-pencil-alt"></i></span></p>
                                                                </div>
                                                                <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                                                                <span id="delete-brand"><i class="fas fa-trash"></i></span>

                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
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
                                            <div id="main4" class="tab-pane">
                                                <ul class="form-box-input no-style-list ps-0">
                                                    <li class="edit-items-product2">
                                                        <p class="mb-2">1991</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="main5" class="tab-pane">
                                                <ul class="form-box-input no-style-list ps-0">
                                                    <li class="edit-items-product2">
                                                        <p class="mb-2">1992</p>
                                                    </li>
                                                    <li class="edit-items-product2">
                                                        <p class="mb-2">1993</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="main6" class="tab-pane">
                                                <ul class="form-box-input no-style-list ps-0">
                                                    <li class="edit-items-product2">
                                                        <p class="mb-2">1994</p>
                                                    </li>
                                                </ul>
                                            </div>
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
                <a class="btn btn__app px-5">กลับ</a>
                <a class="btn btn__app btn__waitapproval px-5">ยืนยัน</a>
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
<script>
</script>
<script>
    function changeElement() {
        document.getElementById("box1").style.display = "none";
        document.getElementById("box2").style.display = "block";
    }

    function updateElement() {
        document.getElementById("box2").style.display = "none";
        document.getElementById("box1").style.display = "block";
    }

    function EditElement() {
        document.getElementById("edit-brand").style.display = "block";
        document.getElementById("delete-brand").style.display = "block";
        document.getElementById("next-brand").style.display = "none";
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