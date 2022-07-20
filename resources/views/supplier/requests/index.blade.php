@extends('supplier.layouts.template')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="spareparts-card">
<div class="content" id="spareparts-card">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__titlepage">
                    <h3>ใบคำขอหาอะไหล่</h3>
                </div>
            </div>


            <div class="col-lg-12">
                <div class="box__filter">
                    <form>
                        <div class="row">
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">ค้นหาตามแบรนด์</label>
                                    <select class="form-select" aria-label="Default select example" name="brand">
                                        <option selected value="">ไม่ระบุ </option>
                                        @if(!empty($brand))
                                        @foreach($brand as $item)
                                        <option value="{{$item->brand_id}}">{{$item->brand_name_th}} </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <!--  -->
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">ค้นหาตามประเภทอะไหล่</label>
                                    <select class="form-select" aria-label="Default select example" name="category">
                                        <option selected value="">ไม่ระบุ </option>
                                        @if(!empty($category))
                                        @foreach($category as $item)
                                        <option value="{{$item->category_id}}">{{$item->category_name_th}} </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <!--  -->
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">ช่วงวัน - เวลา</label>
                                    <input type="text" name="date" class="form-control">
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="box__allresult">
            <div class="row">
                <div class="col-6">
                    <div class="box__result">
                        <p class="txt__result">17 รายการ</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="box__btn">
                        <button class="btn btn__remove"><i class="fa-solid fa-trash-can"></i> ลบทั้งหมด</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="box__alltab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="allresult-tab" data-bs-toggle="tab" data-bs-target="#allresult" type="button" role="tab" aria-controls="allresult" aria-selected="true">ทั้งหมด <span class="circle">1234</span></button>
                    <button class="nav-link" id="waiting-tab" data-bs-toggle="tab" data-bs-target="#waiting" type="button" role="tab" aria-controls="waiting" aria-selected="false">รอตรวจสอบ <span class="circle">4</span></button>
                    <button class="nav-link" id="sendtome-tab" data-bs-toggle="tab" data-bs-target="#sendtome" type="button" role="tab" aria-controls="sendtome" aria-selected="false">ส่งข้อเสนอแล้ว <span class="circle">5</span></button>
                    <button class="nav-link" id="close-tab" data-bs-toggle="tab" data-bs-target="#close" type="button" role="tab" aria-controls="close" aria-selected="false">ปิดรับคำขอแล้ว <span class="circle">3</span></button>
                    <button class="nav-link" id="del-tab" data-bs-toggle="tab" data-bs-target="#del" type="button" role="tab" aria-controls="del" aria-selected="false">ลบ <span class="circle">122</span></button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabsparepart">
                <div class="tab-pane fade show active" id="allresult" role="tabpanel" aria-labelledby="allresult-tab">
                    @if(!empty($dataall))
                    @foreach($dataall as $key => $item)
                    <div class="box__contenttab">
                        <div class="box__heading">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            หมายเลขคำสั่งซื้อ : W123467845123
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="box__date">
                                        <p>วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box__contentproduct">
                            <div class="box__image">
                                <img src="{{asset('assets/img/img-null.png')}}" class="img-fluid" alt="">
                            </div>

                            <div class="box__contentimage">
                                <h4 class="txt__title">กรองน้ำมันเครื่อง VIOS YARIS ALTIS <br> AVANZA AE80 , AE90 , AE101 16V</h4>
                                <p class="txt__numberproduct">รหัสสินค้า 1234</p>
                            </div>
                        </div>

                        <hr />

                        <div class="box__allfooter">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <?php if ($key == 2) { ?>
                                        <div class="wrapper__viewdetail">
                                            <div class="box__text">
                                                <p class="txt__text">ข้อเสนอทั้งหมด (20)</p>
                                            </div>

                                            <div class="box__btn">
                                                <a href="{{url('supplier/requests/view')}}/1" class="btn btn__view">ดูรายละเอียด</a>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn__del">ลบ</button>
                                    <?php } ?>

                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="wrapper__status">
                                        <?php if ($key == 1) { ?>
                                            <div class="box__status status-wait">สถานะ : รอตรวจสอบ</div>
                                        <?php } else if ($key == 2) { ?>
                                            <div class="box__status status-sendsuccess">สถานะ : ส่งคำขอแล้ว</div>
                                        <?php } else if ($key == 3) { ?>
                                            <div class="box__status status-close">สถานะ : ปิดรับคำขอแล้ว</div>
                                        <?php } else {  ?>
                                            <div class="box__status status-del">สถานะ : ลบ</div>
                                        <?php } ?>
                                        <div class="box__btn">
                                            <a href="{{url('supplier/requests/offer')}}/1" class="btn btn__send">ส่งข้อเสนอ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="box__allpagination">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <p class="txt__viewtxt">แสดงทั้งหมด 20 จาก 214 รายการ</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                {{ $dataall->links() }}
                                <div class="pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="fa-solid fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="fa-solid fa-chevron-right"></i> </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                        <div class="box__contenttab">
                            <div class="box__heading">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                หมายเลขคำสั่งซื้อ : W123467845123
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="box__date">
                                            <p>วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box__contentproduct">
                                <div class="box__image">
                                    <img src="{{asset('assets/img/img-null.png')}}" class="img-fluid" alt="">
                                </div>

                                <div class="box__contentimage">
                                    <h4 class="txt__title">กรองน้ำมันเครื่อง VIOS YARIS ALTIS <br> AVANZA AE80 , AE90 , AE101 16V</h4>
                                    <p class="txt__numberproduct">รหัสสินค้า 1234</p>
                                </div>
                            </div>

                            <hr />

                            <div class="box__allfooter">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <?php if ($i == 2) { ?>
                                            <div class="wrapper__viewdetail">
                                                <div class="box__text">
                                                    <p class="txt__text">ข้อเสนอทั้งหมด (20)</p>
                                                </div>

                                                <div class="box__btn">
                                                    <a href="{{url('supplier/requests/view')}}/1" class="btn btn__view">ดูรายละเอียด</a>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <button type="button" class="btn btn__del">ลบ</button>
                                        <?php } ?>

                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="wrapper__status">
                                            <?php if ($i == 1) { ?>
                                                <div class="box__status status-wait">สถานะ : รอตรวจสอบ</div>
                                            <?php } else if ($i == 2) { ?>
                                                <div class="box__status status-sendsuccess">สถานะ : ส่งคำขอแล้ว</div>
                                            <?php } else if ($i == 3) { ?>
                                                <div class="box__status status-close">สถานะ : ปิดรับคำขอแล้ว</div>
                                            <?php } else {  ?>
                                                <div class="box__status status-del">สถานะ : ลบ</div>
                                            <?php } ?>
                                            <div class="box__btn">
                                                <a href="{{url('supplier/requests/offer')}}/1" class="btn btn__send">ส่งข้อเสนอ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="box__allpagination">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <p class="txt__viewtxt">แสดงทั้งหมด 20 จาก 214 รายการ</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="fa-solid fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="fa-solid fa-chevron-right"></i> </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="tab-pane fade" id="waiting" role="tabpanel" aria-labelledby="waiting-tab">
                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                        <div class="box__contenttab">
                            <div class="box__heading">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                หมายเลขคำสั่งซื้อ : W123467845123
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="box__date">
                                            <p>วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box__contentproduct">
                                <div class="box__image">
                                    <img src="{{asset('assets/img/img-null.png')}}" class="img-fluid" alt="">
                                </div>

                                <div class="box__contentimage">
                                    <h4 class="txt__title">กรองน้ำมันเครื่อง VIOS YARIS ALTIS <br> AVANZA AE80 , AE90 , AE101 16V</h4>
                                    <p class="txt__numberproduct">รหัสสินค้า 1234</p>
                                </div>
                            </div>

                            <hr />

                            <div class="box__allfooter">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <button type="button" class="btn btn__del">ลบ</button>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="wrapper__status">
                                            <div class="box__status status-wait">สถานะ : รอตรวจสอบ</div>
                                            <div class="box__btn">
                                                <a href="{{url('supplier/requests/offer')}}/1" class="btn btn__send">ส่งข้อเสนอ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="box__allpagination">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <p class="txt__viewtxt">แสดงทั้งหมด 20 จาก 214 รายการ</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="fa-solid fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="fa-solid fa-chevron-right"></i> </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sendtome" role="tabpanel" aria-labelledby="sendtome-tab">
                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                        <div class="box__contenttab">
                            <div class="box__heading">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                หมายเลขคำสั่งซื้อ : W123467845123
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="box__date">
                                            <p>วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box__contentproduct">
                                <div class="box__image">
                                    <img src="{{asset('assets/img/img-null.png')}}" class="img-fluid" alt="">
                                </div>

                                <div class="box__contentimage">
                                    <h4 class="txt__title">กรองน้ำมันเครื่อง VIOS YARIS ALTIS <br> AVANZA AE80 , AE90 , AE101 16V</h4>
                                    <p class="txt__numberproduct">รหัสสินค้า 1234</p>
                                </div>
                            </div>

                            <hr />

                            <div class="box__allfooter">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="wrapper__viewdetail">
                                            <div class="box__text">
                                                <p class="txt__text">ข้อเสนอทั้งหมด (20)</p>
                                            </div>

                                            <div class="box__btn">
                                                <a href="spareparts-detail.php" class="btn btn__view">ดูรายละเอียด</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="wrapper__status">
                                            <div class="box__status status-sendsuccess">สถานะ : ส่งคำขอแล้ว</div>
                                            <div class="box__btn">
                                                <a href="{{url('supplier/requests/offer')}}/1" class="btn btn__send">ส่งข้อเสนอ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="box__allpagination">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <p class="txt__viewtxt">แสดงทั้งหมด 20 จาก 214 รายการ</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="fa-solid fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="fa-solid fa-chevron-right"></i> </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="close" role="tabpanel" aria-labelledby="close-tab">
                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                        <div class="box__contenttab">
                            <div class="box__heading">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                หมายเลขคำสั่งซื้อ : W123467845123
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="box__date">
                                            <p>วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box__contentproduct">
                                <div class="box__image">
                                    <img src="{{asset('assets/img/img-null.png')}}" class="img-fluid" alt="">
                                </div>

                                <div class="box__contentimage">
                                    <h4 class="txt__title">กรองน้ำมันเครื่อง VIOS YARIS ALTIS <br> AVANZA AE80 , AE90 , AE101 16V</h4>
                                    <p class="txt__numberproduct">รหัสสินค้า 1234</p>
                                </div>
                            </div>

                            <hr />

                            <div class="box__allfooter">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <button type="button" class="btn btn__del">ลบ</button>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="wrapper__status">
                                            <div class="box__status status-close">สถานะ : ปิดรับคำขอแล้ว</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="box__allpagination">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <p class="txt__viewtxt">แสดงทั้งหมด 20 จาก 214 รายการ</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="fa-solid fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="fa-solid fa-chevron-right"></i> </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="del" role="tabpanel" aria-labelledby="del-tab">
                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                        <div class="box__contenttab">
                            <div class="box__heading">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                หมายเลขคำสั่งซื้อ : W123467845123
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="box__date">
                                            <p>วันที่ลงประกาศ dd/mm/yyyy hh:mm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box__contentproduct">
                                <div class="box__image">
                                    <img src="{{asset('assets/img/img-null.png')}}" class="img-fluid" alt="">
                                </div>

                                <div class="box__contentimage">
                                    <h4 class="txt__title">กรองน้ำมันเครื่อง VIOS YARIS ALTIS <br> AVANZA AE80 , AE90 , AE101 16V</h4>
                                    <p class="txt__numberproduct">รหัสสินค้า 1234</p>
                                </div>
                            </div>

                            <hr />

                            <div class="box__allfooter">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <button type="button" class="btn btn__del">ลบ</button>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="wrapper__status">
                                            <div class="box__status status-del">สถานะ : ลบ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="box__allpagination">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <p class="txt__viewtxt">แสดงทั้งหมด 20 จาก 214 รายการ</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="fa-solid fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="fa-solid fa-chevron-right"></i> </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    @media screen and (min-width:375px) and (max-width:413px) {
        #spareparts-card .box__allresult .box__btn .btn__remove {
            padding: 7px 0.5rem;
        }

        #spareparts-card .box__alltab .box__contenttab .box__contentproduct {
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px;
        }

        #spareparts-card .box__alltab nav {
            overflow: scroll;
        }
    }

    @media screen and (min-width:414px) and (max-width:424px) {
        #spareparts-card .box__allresult .box__btn .btn__remove {
            padding: 7px 0.5rem;
        }

        #spareparts-card .box__alltab .box__contenttab .box__contentproduct {
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px;
        }

        #spareparts-card .box__alltab nav {
            overflow: scroll;
        }
    }

    @media screen and (min-width:425px) and (max-width:767px) {
        #spareparts-card .box__allresult .box__btn .btn__remove {
            padding: 7px 0.5rem;
        }

        #spareparts-card .box__alltab .box__contenttab .box__contentproduct {
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px;
        }

        #spareparts-card .box__alltab nav {
            overflow: scroll;
        }

    }

    @media screen and (min-width:768px) and (max-width:1023px) {
        #spareparts-card .box__allresult .box__btn .btn__remove {
            padding: 7px 0.5rem;
        }

        #spareparts-card .box__alltab .box__contenttab .box__contentproduct {
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px;
        }

        #spareparts-card .box__alltab nav {
            overflow: scroll;
        }

        #spareparts-card .box__alltab .box__contenttab .box__allfooter .wrapper__status .status-sendsuccess {
            margin-right: 10px;
            margin-top: 0.5rem;
        }

        #spareparts-card .box__alltab .box__contenttab .box__allfooter .wrapper__status .box__btn {
            margin-top: 1em;
        }
    }

    @media screen and (min-width:1024px) and (max-width:1279px) {}

    @media screen and (min-width:1280px) and (max-width:1359px) {}

    @media screen and (min-width:1360px) and (max-width:1439px) {}

    @media screen and (min-width:1440px) and (max-width:1599px) {}

    @media screen and (min-width:1600px) and (max-width:1919px) {}

    @media screen and (min-width:1920px) and (max-width:2559px) {}

    @media screen and (min-width:2560px) {}
</style>
@stop

@section('script')
<script src="{{asset('daterangepicker-master/daterangepicker.js')}}"></script>
<script>
    $('input[name="date"]').daterangepicker({
        "startDate": moment().subtract(1, 'months'),
        "endDate": moment(),
        locale: {
            format: 'DD/MM/Y'
        }
    }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });
</script>
@stop