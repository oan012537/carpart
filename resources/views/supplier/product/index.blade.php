@extends('supplier.layouts.template')

@section('content')
    <input type="hidden" id="pageName" name="pageName" value="setting-product">
    <div class="content" id="setting-product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="box__titlepage">
                        <h3>{{ trans('file.Manage Product')}}</h3>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box__btnadd">
                        <a href="{{ route('products.create') }}" class="btn btn__add"><i class="fa-solid fa-circle-plus"></i>{{ trans('file.Add Product')}} </a>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="box__filter">
                        <form>
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">{{ trans('file.Product Name')}}</label>
                                        <input type="text" name="nameproduct" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>

                                <!--  -->
                                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">{{ trans('file.Category')}}</label>
                                        <input type="text" name="catagories" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>

                                <!--  -->
                                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="">{{ trans('file.Brand')}}</label>
                                        <input type="text" name="brands" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <!--  -->

                                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                    <div class="bot__btn">
                                        <button class="btn btn__search">{{ trans('file.Search')}}</button>
                                        <button class="btn btn__reset">{{ trans('file.Reset')}}</button>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                        </form>
                    </div>

                    <!--  -->


                    <div class="box__tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="total-tab" data-bs-toggle="tab" data-bs-target="#total" type="button" role="tab" aria-controls="total" aria-selected="true">{{ trans('file.All')}} <span>2</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="selling-tab" data-bs-toggle="tab" data-bs-target="#selling" type="button" role="tab" aria-controls="selling" aria-selected="false">{{ trans('file.Selling')}} <span>2</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sold-tab" data-bs-toggle="tab" data-bs-target="#sold" type="button" role="tab" aria-controls="sold" aria-selected="false">{{ trans('file.Sold')}} <span>2</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="banned-tab" data-bs-toggle="tab" data-bs-target="#banned" type="button" role="tab" aria-controls="banned" aria-selected="false">{{ trans('file.Suspended')}} <span>2</span></button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="cancle-tab" data-bs-toggle="tab" data-bs-target="#cancle" type="button" role="tab" aria-controls="cancle" aria-selected="false">{{ trans('file.Cancel')}} <span>2</span></button>
                            </li>
                        </ul>
                        <div class="tab-content" id="contentproduct">
                            <div class="tab-pane fade show active" id="total" role="tabpanel" aria-labelledby="total-tab">
                                <div class="box__options">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-6 col-md-6 col-12">
                                            <div class="wrapper__btn">
                                                <button class="btn btn__import"><i class="fa-solid fa-download"></i> {{ trans('file.Import')}}</button>
                                                <button class="btn btn__export"><i class="fa-solid fa-upload"></i> {{ trans('file.Export')}}</button>
                                                <button class="btn btn__print"><i class="fa-solid fa-print"></i> {{ trans('file.Print')}}</button>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="{{ trans('file.Search By')}}" aria-describedby="button-addon2">
                                                <button class="btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td scope="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </td>
                                                <td scope="col">{{ trans('file.Store Product Code')}}</td>
                                                <td scope="col">{{ trans('file.Image')}}</td>
                                                <td scope="col">{{ trans('file.Item Name')}}</td>
                                                <td scope="col">{{ trans('file.Category / Sub Category')}}
                                                    <p class="filter active-filter"><i class="fa-solid fa-filter"></i> {{ trans('file.Filter')}}</p>
                                                </td>
                                                <td scope="col">{{ trans('file.Brand')}}
                                                    <p class="filter"><i class="fa-solid fa-filter"></i> {{ trans('file.Show All')}}</p>
                                                </td>
                                                <td scope="col">{{ trans('file.Model')}}
                                                    <p class="filter"><i class="fa-solid fa-filter"></i> {{ trans('file.Show All')}}</p>
                                                </td>
                                                <td scope="col">{{ trans('file.Sell Price')}}</td>
                                                <td scope="col">{{ trans('file.Status')}} <p class="filter"><i class="fa-solid fa-filter"></i> {{ trans('file.All')}} <i class="fa-solid fa-chevron-down"></i></p>
                                                </td>
                                                <td scope="col">{{ trans('file.Updated By')}}</td>
                                                <td scope="col"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 1; $i <= 8; $i++) { ?>
                                                <tr>
                                                    <td scope="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        </div>
                                                    </td>
                                                    <td scope="col">ATCB-1000-01</td>
                                                    <td scope="col"> <img src="assets/img/img-null.png" class="img-fluid" alt=""> </td>
                                                    <td scope="col">กรองน้ำมัน
                                                        <p class="txt__number">Barcode : 8885299937</p>
                                                    </td>
                                                    <td scope="col">เครื่องยนต์
                                                        <p class="txt__detail">เจลแอลกอออล์</p>
                                                    </td>
                                                    <td scope="col">TOYOTA</td>
                                                    <td scope="col">Revo</td>
                                                    <td scope="col">฿ 240.00 / ลัง</td>
                                                    <td scope="col">
                                                        <?php if ($i == 1) { ?>
                                                            <div class="box__status status-sold">ขายแล้ว</div>
                                                        <?php } else if ($i == 2) { ?>
                                                            <div class="box__status status-selling">กำลังขาย</div>
                                                        <?php } else if ($i == 3) { ?>
                                                            <div class="box__status status-cancle">ยกเลิก</div>
                                                        <?php } else if ($i == 4) { ?>
                                                            <div class="box__status status-banned">ถูกระงับ</div>
                                                        <?php } else { ?>
                                                            <div class="box__status status-sold">ขายแล้ว</div>
                                                        <?php } ?>

                                                    </td>
                                                    <td scope="col">สมบูรณ์ อิ่มเอม</td>
                                                    <td scope="col">
                                                        <div class="box__wrapperbutton">
                                                            <a href="javascript:void(0)" class="btn btn__edit"> <i class="fa-solid fa-pencil"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>


                                        </tbody>
                                    </table>


                                    <div class="box__allpagination">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="txt__viewtxt">แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                            </div>

                                            <div class="col-6">
                                                <div class="box__paginate">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item ">
                                                                <a class="page-link " href="#" aria-label="Previous">
                                                                    <i class="fa-solid fa-chevron-left"></i>
                                                                </a>
                                                            </li>
                                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
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
                                <!--  -->
                            </div>
                            <div class="tab-pane fade" id="selling" role="tabpanel" aria-labelledby="selling-tab">
                                <div class="box__options">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-6 col-md-6 col-12">
                                            <div class="wrapper__btn">
                                                <button class="btn btn__import"><i class="fa-solid fa-download"></i> นำข้อมูลเข้า</button>
                                                <button class="btn btn__export"><i class="fa-solid fa-upload"></i> นำข้อมูลออก</button>
                                                <button class="btn btn__print"><i class="fa-solid fa-print"></i> พิมพ์ข้อมูล</button>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ" aria-describedby="button-addon2">
                                                <button class="btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td scope="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </td>
                                                <td scope="col">รหัสสินค้าในร้าน</td>
                                                <td scope="col">รูปภาพ</td>
                                                <td scope="col">ชื่อรายการ</td>
                                                <td scope="col">หมวดสินค้า /หมวดย่อย
                                                    <p class="filter active-filter"><i class="fa-solid fa-filter"></i> แสดงบางรายการ</p>
                                                </td>
                                                <td scope="col">แบรนด์
                                                    <p class="filter"><i class="fa-solid fa-filter"></i> แสดงทั้งหมด</p>
                                                </td>
                                                <td scope="col">รุ่น
                                                    <p class="filter"><i class="fa-solid fa-filter"></i> แสดงทั้งหมด</p>
                                                </td>
                                                <td scope="col">ราคาขาย</td>
                                                <td scope="col">สถานะ <p class="filter"><i class="fa-solid fa-filter"></i> ทั้งหมด <i class="fa-solid fa-chevron-down"></i></p>
                                                </td>
                                                <td scope="col">แก้ไขโดย</td>
                                                <td scope="col"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 1; $i <= 8; $i++) { ?>
                                                <tr>
                                                    <td scope="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        </div>
                                                    </td>
                                                    <td scope="col">ATCB-1000-01</td>
                                                    <td scope="col"> <img src="assets/img/img-null.png" class="img-fluid" alt=""> </td>
                                                    <td scope="col">กรองน้ำมัน
                                                        <p class="txt__number">Barcode : 8885299937</p>
                                                    </td>
                                                    <td scope="col">เครื่องยนต์
                                                        <p class="txt__detail">เจลแอลกอออล์</p>
                                                    </td>
                                                    <td scope="col">TOYOTA</td>
                                                    <td scope="col">Revo</td>
                                                    <td scope="col">฿ 240.00 / ลัง</td>
                                                    <td scope="col">
                                                        <div class="box__status status-selling">กำลังขาย</div>
                                                    </td>
                                                    <td scope="col">สมบูรณ์ อิ่มเอม</td>
                                                    <td scope="col">
                                                        <div class="box__wrapperbutton">
                                                            <a href="javascript:void(0)" class="btn btn__edit"> <i class="fa-solid fa-pencil"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>


                                        </tbody>
                                    </table>


                                    <div class="box__allpagination">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="txt__viewtxt">แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                            </div>

                                            <div class="col-6">
                                                <div class="box__paginate">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item ">
                                                                <a class="page-link " href="#" aria-label="Previous">
                                                                    <i class="fa-solid fa-chevron-left"></i>
                                                                </a>
                                                            </li>
                                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
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
                                <!--  -->
                            </div>
                            <div class="tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-tab">
                                <div class="box__options">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-6 col-md-6 col-12">
                                            <div class="wrapper__btn">
                                                <button class="btn btn__import"><i class="fa-solid fa-download"></i> นำข้อมูลเข้า</button>
                                                <button class="btn btn__export"><i class="fa-solid fa-upload"></i> นำข้อมูลออก</button>
                                                <button class="btn btn__print"><i class="fa-solid fa-print"></i> พิมพ์ข้อมูล</button>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ" aria-describedby="button-addon2">
                                                <button class="btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td scope="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </td>
                                                <td scope="col">รหัสสินค้าในร้าน</td>
                                                <td scope="col">รูปภาพ</td>
                                                <td scope="col">ชื่อรายการ</td>
                                                <td scope="col">หมวดสินค้า /หมวดย่อย
                                                    <p class="filter active-filter"><i class="fa-solid fa-filter"></i> แสดงบางรายการ</p>
                                                </td>
                                                <td scope="col">แบรนด์
                                                    <p class="filter"><i class="fa-solid fa-filter"></i> แสดงทั้งหมด</p>
                                                </td>
                                                <td scope="col">รุ่น
                                                    <p class="filter"><i class="fa-solid fa-filter"></i> แสดงทั้งหมด</p>
                                                </td>
                                                <td scope="col">ราคาขาย</td>
                                                <td scope="col">สถานะ <p class="filter"><i class="fa-solid fa-filter"></i> ทั้งหมด <i class="fa-solid fa-chevron-down"></i></p>
                                                </td>
                                                <td scope="col">แก้ไขโดย</td>
                                                <td scope="col"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 1; $i <= 8; $i++) { ?>
                                                <tr>
                                                    <td scope="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        </div>
                                                    </td>
                                                    <td scope="col">ATCB-1000-01</td>
                                                    <td scope="col"> <img src="assets/img/img-null.png" class="img-fluid" alt=""> </td>
                                                    <td scope="col">กรองน้ำมัน
                                                        <p class="txt__number">Barcode : 8885299937</p>
                                                    </td>
                                                    <td scope="col">เครื่องยนต์
                                                        <p class="txt__detail">เจลแอลกอออล์</p>
                                                    </td>
                                                    <td scope="col">TOYOTA</td>
                                                    <td scope="col">Revo</td>
                                                    <td scope="col">฿ 240.00 / ลัง</td>
                                                    <td scope="col">
                                                        <div class="box__status status-sold">ขายแล้ว</div>
                                                    </td>
                                                    <td scope="col">สมบูรณ์ อิ่มเอม</td>
                                                    <td scope="col">
                                                        <div class="box__wrapperbutton">
                                                            <a href="javascript:void(0)" class="btn btn__edit"> <i class="fa-solid fa-pencil"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>


                                        </tbody>
                                    </table>


                                    <div class="box__allpagination">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="txt__viewtxt">แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                            </div>

                                            <div class="col-6">
                                                <div class="box__paginate">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item ">
                                                                <a class="page-link " href="#" aria-label="Previous">
                                                                    <i class="fa-solid fa-chevron-left"></i>
                                                                </a>
                                                            </li>
                                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
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
                                <!--  -->
                            </div>
                            <div class="tab-pane fade" id="banned" role="tabpanel" aria-labelledby="banned-tab">
                                <div class="box__options">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-6 col-md-6 col-12">
                                            <div class="wrapper__btn">
                                                <button class="btn btn__import"><i class="fa-solid fa-download"></i> นำข้อมูลเข้า</button>
                                                <button class="btn btn__export"><i class="fa-solid fa-upload"></i> นำข้อมูลออก</button>
                                                <button class="btn btn__print"><i class="fa-solid fa-print"></i> พิมพ์ข้อมูล</button>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ" aria-describedby="button-addon2">
                                                <button class="btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td scope="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </td>
                                                <td scope="col">รหัสสินค้าในร้าน</td>
                                                <td scope="col">รูปภาพ</td>
                                                <td scope="col">ชื่อรายการ</td>
                                                <td scope="col">หมวดสินค้า /หมวดย่อย
                                                    <p class="filter active-filter"><i class="fa-solid fa-filter"></i> แสดงบางรายการ</p>
                                                </td>
                                                <td scope="col">แบรนด์
                                                    <p class="filter"><i class="fa-solid fa-filter"></i> แสดงทั้งหมด</p>
                                                </td>
                                                <td scope="col">รุ่น
                                                    <p class="filter"><i class="fa-solid fa-filter"></i> แสดงทั้งหมด</p>
                                                </td>
                                                <td scope="col">ราคาขาย</td>
                                                <td scope="col">สถานะ <p class="filter"><i class="fa-solid fa-filter"></i> ทั้งหมด <i class="fa-solid fa-chevron-down"></i></p>
                                                </td>
                                                <td scope="col">แก้ไขโดย</td>
                                                <td scope="col"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 1; $i <= 8; $i++) { ?>
                                                <tr>
                                                    <td scope="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        </div>
                                                    </td>
                                                    <td scope="col">ATCB-1000-01</td>
                                                    <td scope="col"> <img src="assets/img/img-null.png" class="img-fluid" alt=""> </td>
                                                    <td scope="col">กรองน้ำมัน
                                                        <p class="txt__number">Barcode : 8885299937</p>
                                                    </td>
                                                    <td scope="col">เครื่องยนต์
                                                        <p class="txt__detail">เจลแอลกอออล์</p>
                                                    </td>
                                                    <td scope="col">TOYOTA</td>
                                                    <td scope="col">Revo</td>
                                                    <td scope="col">฿ 240.00 / ลัง</td>
                                                    <td scope="col">
                                                        <div class="box__status status-banned">ถูกระงับ</div>
                                                    </td>
                                                    <td scope="col">สมบูรณ์ อิ่มเอม</td>
                                                    <td scope="col">
                                                        <div class="box__wrapperbutton">
                                                            <a href="javascript:void(0)" class="btn btn__edit"> <i class="fa-solid fa-pencil"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>


                                        </tbody>
                                    </table>


                                    <div class="box__allpagination">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="txt__viewtxt">แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                            </div>

                                            <div class="col-6">
                                                <div class="box__paginate">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item ">
                                                                <a class="page-link " href="#" aria-label="Previous">
                                                                    <i class="fa-solid fa-chevron-left"></i>
                                                                </a>
                                                            </li>
                                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
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
                                <!--  -->
                            </div>
                            <div class="tab-pane fade" id="cancle" role="tabpanel" aria-labelledby="cancle-tab">
                                <div class="box__options">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-6 col-md-6 col-12">
                                            <div class="wrapper__btn">
                                                <button class="btn btn__import"><i class="fa-solid fa-download"></i> นำข้อมูลเข้า</button>
                                                <button class="btn btn__export"><i class="fa-solid fa-upload"></i> นำข้อมูลออก</button>
                                                <button class="btn btn__print"><i class="fa-solid fa-print"></i> พิมพ์ข้อมูล</button>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ" aria-describedby="button-addon2">
                                                <button class="btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td scope="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </td>
                                                <td scope="col">รหัสสินค้าในร้าน</td>
                                                <td scope="col">รูปภาพ</td>
                                                <td scope="col">ชื่อรายการ</td>
                                                <td scope="col">หมวดสินค้า /หมวดย่อย
                                                    <p class="filter active-filter"><i class="fa-solid fa-filter"></i> แสดงบางรายการ</p>
                                                </td>
                                                <td scope="col">แบรนด์
                                                    <p class="filter"><i class="fa-solid fa-filter"></i> แสดงทั้งหมด</p>
                                                </td>
                                                <td scope="col">รุ่น
                                                    <p class="filter"><i class="fa-solid fa-filter"></i> แสดงทั้งหมด</p>
                                                </td>
                                                <td scope="col">ราคาขาย</td>
                                                <td scope="col">สถานะ <p class="filter"><i class="fa-solid fa-filter"></i> ทั้งหมด <i class="fa-solid fa-chevron-down"></i></p>
                                                </td>
                                                <td scope="col">แก้ไขโดย</td>
                                                <td scope="col"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 1; $i <= 8; $i++) { ?>
                                                <tr>
                                                    <td scope="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        </div>
                                                    </td>
                                                    <td scope="col">ATCB-1000-01</td>
                                                    <td scope="col"> <img src="assets/img/img-null.png" class="img-fluid" alt=""> </td>
                                                    <td scope="col">กรองน้ำมัน
                                                        <p class="txt__number">Barcode : 8885299937</p>
                                                    </td>
                                                    <td scope="col">เครื่องยนต์
                                                        <p class="txt__detail">เจลแอลกอออล์</p>
                                                    </td>
                                                    <td scope="col">TOYOTA</td>
                                                    <td scope="col">Revo</td>
                                                    <td scope="col">฿ 240.00 / ลัง</td>
                                                    <td scope="col">
                                                        <div class="box__status status-cancle">ยกเลิก</div>
                                                    </td>
                                                    <td scope="col">สมบูรณ์ อิ่มเอม</td>
                                                    <td scope="col">
                                                        <div class="box__wrapperbutton">
                                                            <a href="javascript:void(0)" class="btn btn__edit"> <i class="fa-solid fa-pencil"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>


                                        </tbody>
                                    </table>


                                    <div class="box__allpagination">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="txt__viewtxt">แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                            </div>

                                            <div class="col-6">
                                                <div class="box__paginate">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item ">
                                                                <a class="page-link " href="#" aria-label="Previous">
                                                                    <i class="fa-solid fa-chevron-left"></i>
                                                                </a>
                                                            </li>
                                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
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
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="box__history">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        ประวัติเอกสาร
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>15-01-2564 21:14:06 Thanatcha Singsomboon เพิ่มสินค้า PRO001</p>
                                        <p>15-01-2564 21:14:05 Thanatcha Singsomboon ส่งออกข้อมูลสินค้า</p>
                                        <p>15-01-2564 21:14:05 Thanatcha Singsomboon แก้ไขสินค้า PRO001</p>
                                        <p>15-01-2564 21:13:28 Thanatcha Singsomboon เปิดดสินค้า PRO001</p>
                                        <p> 15-01-2564 21:13:24 Thanatcha Singsomboon เปิดดสินค้า PRO001</p>
                                        <p>14-01-2564 21:13:24 Thanatcha Singsomboon เปิดดสินค้า PRO001 </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
<script>
    $(".nav_list #product #product-list-menu").addClass("active");

    $(document).ready(()=> {

    });

</script>
@endsection 

