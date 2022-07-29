@extends('backend.layouts.templates')
@section('content')
<style>
    .img-product {
        width: 100%;
        height: 30px;
    }

    .btn__viewdetail {
        display: none;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />

<input type="hidden" id="pageName" name="pageName" value="manageproduct">
<input type="hidden" id="pageName2" name="pageName2" value="manageproduct">

<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="txt__page">จัดการสินค้า</h2>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="box__filter">
                        <form class="form-box-input px-2">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                    <label class="title__txt">ชื่อสินค้า/SKU</label>
                                    <input type="text" class="form-control" id="productname" name="productname" placeholder="ระบุ">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                    <label class="title__txt">หมวดหมู่หลัก (ประเภท)</label>
                                    <input type="text" class="form-control" id="category" name="category" placeholder="Auto complete search">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                    <label for="" class="title__txt">แบรนด์</label>
                                    <input type="text" class="form-control" id="brand" name="brand" placeholder="Auto complete search">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-12 tablet-hidden">
                                    <div class="">
                                        <button type="button" class="btn btn-search" id="">ค้นหา</button>
                                        <button type="reset" class="btn btn-reset ms-2" id="">รีเซต</button>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                    <label class="title__txt">ยอดขาย</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control number" id="minsell" name="minsell" placeholder="ระบุ">
                                        <span class="mx-3">-</span>
                                        <input type="text" class="form-control number" id="maxsell" name="maxsell" placeholder="ระบุ">
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                    <label class="title__txt">ผู้ขาย</label>
                                    <input type="text" class="form-control" id="seller" name="seller" placeholder="ระบุ">
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <label class="title__txt">คุณภาพสินค้า</label>
                                    <div class="d-flex justify-content-start mt-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="quality1" name="quality[]" value="1">
                                            <label class="form-check-label" for="quality1">แท้</label>
                                        </div>
                                        <div class="form-check ms-3">
                                            <input type="checkbox" class="form-check-input" id="quality2" name="quality[]" value="1">
                                            <label class="form-check-label" for="quality2">OEM</label>
                                        </div>
                                        <div class="form-check ms-3">
                                            <input type="checkbox" class="form-check-input" id="quality3" name="quality[]" value="1">
                                            <label class="form-check-label" for="quality3">ใหม่</label>
                                        </div>
                                        <div class="form-check ms-3">
                                            <input type="checkbox" class="form-check-input" id="quality4" name="quality[]" value="1">
                                            <label class="form-check-label" for="quality4">มือสอง</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-md-6 col-12 tablet-show2">
                                    <div class="">
                                        <button type="button" class="btn btn-search" id="">ค้นหา</button>
                                        <button type="reset" class="btn btn-reset ms-2" id="">รีเซต</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <div class="box__table p-4">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#all">ทั้งหมด <span class="circle"> 2</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#process">กำลังขาย<span class="circle"> 2</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#sold">ขายแล้ว<span class="circle"> 2</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#suspended">ถูกระงับ<span class="circle"> 2</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#cancle">ยกเลิก<span class="circle"> 2</span></a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="all" class="tab-pane active"><br>
                                <div class="d-flex justify-content-between">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 d-flex">
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-download"></i> นำข้อมูลเข้า</a>
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-upload"></i> นำข้อมูลออก</a>
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-print"></i> พิมพ์ข้อมูล</a>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                                        <div class="">
                                            <input type="text" class="form-control" placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="table-responsive form-box-input">
                                        <table id="datatables" class="table table-bordered display nowrap" style="width:200%">
                                            <thead>
                                                <tr>
                                                    <th width="50px">
                                                        <input type="checkbox" class="form-check-input" id="checkall" name="checkall" value="1">
                                                    </th>
                                                    <th>รูปภาพ</th>
                                                    <th>รหัสสินค้าในร้าน</th>
                                                    <th>ชื่อรายการ</th>
                                                    <th>หมวดสินค้า /หมวดย่อย
                                                        <button class="btn btn-sort active"><i class="fas fa-filter"></i> แสดงบางรายการ</button>
                                                    </th>
                                                    <th>แบรนด์
                                                        <button class="btn btn-sort"><i class="fas fa-filter"></i> แสดงทั้งหมด</button>
                                                    </th>
                                                    <th>รุ่น
                                                        <button class="btn btn-sort"><i class="fas fa-filter"></i> แสดงทั้งหมด</button>
                                                    </th>
                                                    <th>ราคาขาย</th>
                                                    <th>สถานะ
                                                        <select class="form-select">
                                                            <option>ทั้งหมด</option>
                                                        </select>
                                                    </th>
                                                    <th>แก้ไขโดย</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <tr>
                                                    <td><input type="checkbox" class="form-check-input" id="check2" name="option2" value="something"></td>
                                                    <td>ATCB-1000-01</td>
                                                    <td></td>
                                                    <td>กรองน้ำมัน
                                                        <span>Barcode : 8885299937</span>
                                                    </td>
                                                    <td>เครื่องยนต์
                                                        <span>เจลแอลกอออล์</span>
                                                    </td>
                                                    <td>TOYOTA</td>
                                                    <td>Revo</td>
                                                    <td>฿ 240.00 / ลัง</td>
                                                    <td class="text-center"><small class="status-success">ขายแล้ว</small></td>
                                                    <td>สมบูรณ์ อิ่มเอม</td>
                                                    <td><button class="btn btn-table-search"><i class="fas fa-search"></i></button></td>
                                                    <td><a class="btn btn-table-edit" href="{{url('backend/manageproduct/edit/1')}}"><i class="fas fa-pencil-alt"></i></a></td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- <div class="view-all">
                                        <div>
                                            <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                        </div>
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                                            <li class="page-item">1/11</li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                            <div id="process" class="tab-pane fade"><br>
                                <div class="d-flex justify-content-between">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12d-flex">
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-download"></i> นำข้อมูลเข้า</a>
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-upload"></i> นำข้อมูลออก</a>
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-print"></i> พิมพ์ข้อมูล</a>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                                        <div class="">
                                            <input type="text" class="form-control" placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="table-responsive form-box-input">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"></th>
                                                    <th>รหัสสินค้าในร้าน</th>
                                                    <th>รูปภาพ</th>
                                                    <th>ชื่อรายการ</th>
                                                    <th>หมวดสินค้า /หมวดย่อย
                                                        <button class="btn btn-sort active"><i class="fas fa-filter"></i> แสดงบางรายการ</button>
                                                    </th>
                                                    <th>แบรนด์
                                                        <button class="btn btn-sort"><i class="fas fa-filter"></i> แสดงทั้งหมด</button>
                                                    </th>
                                                    <th>รุ่น
                                                        <button class="btn btn-sort"><i class="fas fa-filter"></i> แสดงทั้งหมด</button>
                                                    </th>
                                                    <th>ราคาขาย</th>
                                                    <th>สถานะ
                                                        <select class="form-select">
                                                            <option>ทั้งหมด</option>
                                                        </select>
                                                    </th>
                                                    <th>แก้ไขโดย</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" class="form-check-input" id="check3" name="option3" value="something"></td>
                                                    <td>ATCB-1000-01</td>
                                                    <td></td>
                                                    <td>กรองน้ำมัน
                                                        <span>Barcode : 8885299937</span>
                                                    </td>
                                                    <td>เครื่องยนต์
                                                        <span>เจลแอลกอออล์</span>
                                                    </td>
                                                    <td>TOYOTA</td>
                                                    <td>Revo</td>
                                                    <td>฿ 240.00 / ลัง</td>
                                                    <td class="text-center"><small class="status-process">กำลังขาย</small></td>
                                                    <td>สมบูรณ์ อิ่มเอม</td>
                                                    <td><button class="btn btn-table-search"><i class="fas fa-search"></i></button></td>
                                                    <td><a class="btn btn-table-edit" href="{{url('backend/manageproduct/edit/1')}}"><i class="fas fa-pencil-alt"></i></a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- <div class="view-all">
                                        <div>
                                            <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                        </div>
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                                            <li class="page-item">1/11</li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                            <div id="sold" class="tab-pane fade"><br>
                                <div class="d-flex justify-content-between">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 d-flex">
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-download"></i> นำข้อมูลเข้า</a>
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-upload"></i> นำข้อมูลออก</a>
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-print"></i> พิมพ์ข้อมูล</a>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                                        <div class="">
                                            <input type="text" class="form-control" placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="table-responsive form-box-input">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"></th>
                                                    <th>รหัสสินค้าในร้าน</th>
                                                    <th>รูปภาพ</th>
                                                    <th>ชื่อรายการ</th>
                                                    <th>หมวดสินค้า /หมวดย่อย
                                                        <button class="btn btn-sort active"><i class="fas fa-filter"></i> แสดงบางรายการ</button>
                                                    </th>
                                                    <th>แบรนด์
                                                        <button class="btn btn-sort"><i class="fas fa-filter"></i> แสดงทั้งหมด</button>
                                                    </th>
                                                    <th>รุ่น
                                                        <button class="btn btn-sort"><i class="fas fa-filter"></i> แสดงทั้งหมด</button>
                                                    </th>
                                                    <th>ราคาขาย</th>
                                                    <th>สถานะ
                                                        <select class="form-select">
                                                            <option>ทั้งหมด</option>
                                                        </select>
                                                    </th>
                                                    <th>แก้ไขโดย</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" class="form-check-input" id="check6" name="option6" value="something"></td>
                                                    <td>ATCB-1000-01</td>
                                                    <td></td>
                                                    <td>กรองน้ำมัน
                                                        <span>Barcode : 8885299937</span>
                                                    </td>
                                                    <td>เครื่องยนต์
                                                        <span>เจลแอลกอออล์</span>
                                                    </td>
                                                    <td>TOYOTA</td>
                                                    <td>Revo</td>
                                                    <td>฿ 240.00 / ลัง</td>
                                                    <td class="text-center"><small class="status-success">ขายแล้ว</small></td>
                                                    <td>สมบูรณ์ อิ่มเอม</td>
                                                    <td><button class="btn btn-table-search"><i class="fas fa-search"></i></button></td>
                                                    <td><a class="btn btn-table-edit" href="{{url('backend/manageproduct/edit/1')}}"><i class="fas fa-pencil-alt"></i></a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- <div class="view-all">
                                        <div>
                                            <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                        </div>
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                                            <li class="page-item">1/11</li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>

                            <div id="suspended" class="tab-pane fade"><br>
                                <div class="d-flex justify-content-between">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 d-flex">
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-download"></i> นำข้อมูลเข้า</a>
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-upload"></i> นำข้อมูลออก</a>
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-print"></i> พิมพ์ข้อมูล</a>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                                        <div class="">
                                            <input type="text" class="form-control" placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="table-responsive form-box-input">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"></th>
                                                    <th>รหัสสินค้าในร้าน</th>
                                                    <th>รูปภาพ</th>
                                                    <th>ชื่อรายการ</th>
                                                    <th>หมวดสินค้า /หมวดย่อย
                                                        <button class="btn btn-sort active"><i class="fas fa-filter"></i> แสดงบางรายการ</button>
                                                    </th>
                                                    <th>แบรนด์
                                                        <button class="btn btn-sort"><i class="fas fa-filter"></i> แสดงทั้งหมด</button>
                                                    </th>
                                                    <th>รุ่น
                                                        <button class="btn btn-sort"><i class="fas fa-filter"></i> แสดงทั้งหมด</button>
                                                    </th>
                                                    <th>ราคาขาย</th>
                                                    <th>สถานะ
                                                        <select class="form-select">
                                                            <option>ทั้งหมด</option>
                                                        </select>
                                                    </th>
                                                    <th>แก้ไขโดย</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" class="form-check-input" id="check5" name="option5" value="something"></td>
                                                    <td>ATCB-1000-01</td>
                                                    <td></td>
                                                    <td>กรองน้ำมัน
                                                        <span>Barcode : 8885299937</span>
                                                    </td>
                                                    <td>เครื่องยนต์
                                                        <span>เจลแอลกอออล์</span>
                                                    </td>
                                                    <td>TOYOTA</td>
                                                    <td>Revo</td>
                                                    <td>฿ 240.00 / ลัง</td>
                                                    <td class="text-center"><small class="status-suspended">ถูกระงับ</small></td>
                                                    <td>สมบูรณ์ อิ่มเอม</td>
                                                    <td><button class="btn btn-table-search"><i class="fas fa-search"></i></button></td>
                                                    <td><a class="btn btn-table-edit" href="{{url('backend/manageproduct/edit/1')}}"><i class="fas fa-pencil-alt"></i><a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- <div class="view-all">
                                        <div>
                                            <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                        </div>
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                                            <li class="page-item">1/11</li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                            <div id="cancle" class="tab-pane fade"><br>
                                <div class="d-flex justify-content-between">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 d-flex">
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-download"></i> นำข้อมูลเข้า</a>
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-upload"></i> นำข้อมูลออก</a>
                                        <a href="#" class="btn btn__viewdetail me-3"><i class="fas fa-print"></i> พิมพ์ข้อมูล</a>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                                        <div class="">
                                            <input type="text" class="form-control" placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="table-responsive form-box-input">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"></th>
                                                    <th>รหัสสินค้าในร้าน</th>
                                                    <th>รูปภาพ</th>
                                                    <th>ชื่อรายการ</th>
                                                    <th>หมวดสินค้า /หมวดย่อย
                                                        <button class="btn btn-sort active"><i class="fas fa-filter"></i> แสดงบางรายการ</button>
                                                    </th>
                                                    <th>แบรนด์
                                                        <button class="btn btn-sort"><i class="fas fa-filter"></i> แสดงทั้งหมด</button>
                                                    </th>
                                                    <th>รุ่น
                                                        <button class="btn btn-sort"><i class="fas fa-filter"></i> แสดงทั้งหมด</button>
                                                    </th>
                                                    <th>ราคาขาย</th>
                                                    <th>สถานะ
                                                        <select class="form-select">
                                                            <option>ทั้งหมด</option>
                                                        </select>
                                                    </th>
                                                    <th>แก้ไขโดย</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" class="form-check-input" id="check4" name="option4" value="something"></td>
                                                    <td>ATCB-1000-01</td>
                                                    <td></td>
                                                    <td>กรองน้ำมัน
                                                        <span>Barcode : 8885299937</span>
                                                    </td>
                                                    <td>เครื่องยนต์
                                                        <span>เจลแอลกอออล์</span>
                                                    </td>
                                                    <td>TOYOTA</td>
                                                    <td>Revo</td>
                                                    <td>฿ 240.00 / ลัง</td>
                                                    <td class="text-center"><small class="status-cancle">ยกเลิก</small></td>
                                                    <td>สมบูรณ์ อิ่มเอม</td>
                                                    <td><button class="btn btn-table-search"><i class="fas fa-search"></i></button></td>
                                                    <td><a class="btn btn-table-edit" href="{{url('backend/manageproduct/edit/1')}}"><i class="fas fa-pencil-alt"></i></a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- <div class="view-all">
                                        <div>
                                            <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                        </div>
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                                            <li class="page-item">1/11</li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="box__accordian mb-5">
                        <button class="accordion">ประวัติเอกสาร</button>
                        <div class="panel">
                            <ul class="no-list-style">
                                <li>15-01-2564 21:14:06 Thanatcha Singsomboon เพิ่มสินค้า PRO001</li>
                                <li>15-01-2564 21:14:05 Thanatcha Singsomboon ส่งออกข้อมูลสินค้า</li>
                                <li>15-01-2564 21:14:05 Thanatcha Singsomboon แก้ไขสินค้า PRO001</li>
                                <li>15-01-2564 21:13:28 Thanatcha Singsomboon เปิดดสินค้า PRO001</li>
                                <li>15-01-2564 21:13:24 Thanatcha Singsomboon เปิดดสินค้า PRO001</li>
                                <li>14-01-2564 21:13:24 Thanatcha Singsomboon เปิดดสินค้า PRO001</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@stop

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> --}}
<script src="{{asset('daterangepicker-master/daterangepicker.js')}}"></script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
    $(document).ready(function() {
        $('.nav-link').on('shown.bs.tab', function(e) {
            console.log('tab');
            $.fn.dataTable.tables({
                visible: true,
                api: true
            }).columns.adjust();
        });
        var oTable = $('#datatables').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            lengthChange: false,
            responsive: true,
            scrollX: true,
            ajax: {
                url: "{{url('backend/manageproduct/datatables')}}",
                data: function(d) {
                    // d.search = $('#search').val();
                    // d.radiodate = $('input[name="radiodate"]:checked').val();
                    // d.date = $('#dates').val();
                },
            },
            columns: [{
                    'className': "text-center",
                    data: 'checkboxs',
                    name: 'checkboxs',
                    orderable: false,
                    searchable: false
                },
                {
                    'className': "text-center",
                    data: 'images',
                    name: 'images',
                    orderable: false,
                    searchable: false
                },
                {
                    'className': "text-center",
                    data: 'name_th',
                    name: 'name_th',
                    orderable: false,
                    searchable: false
                },
                {
                    'className': "text-center",
                    data: 'name_th',
                    name: 'name_th'
                },
                {
                    'className': "text-center",
                    data: 'categoryname',
                    name: 'categoryname'
                },
                {
                    'className': "text-center",
                    data: 'brandname',
                    name: 'brandname'
                },
                {
                    'className': "text-center",
                    data: 'modelname',
                    name: 'modelname'
                },
                {
                    'className': "text-center",
                    data: 'price',
                    name: 'price'
                },
                {
                    'className': "text-center",
                    data: 'status_code',
                    name: 'status_code'
                },
                {
                    'className': "text-center",
                    data: 'updated_by',
                    name: 'updated_by'
                },
                {
                    'className': "text-center",
                    data: 'btnview',
                    name: 'btnview',
                    orderable: false,
                    searchable: false
                },
                {
                    'className': "text-center",
                    data: 'btnaction',
                    name: 'btnaction',
                    orderable: false,
                    searchable: false
                },
            ],
            // order: [
            //     [1, 'asc']
            // ],
            rowCallback: function(row, data, index) {

            }
        });


        // $("#noorder").keyup(function(e){
        // 	oTable.draw();
        // 	e.preventDefault();
        // });

        var oTableactive = $('#datatables_active').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            lengthChange: false,
            responsive: true,
            scrollX: true,
            ajax: {
                url: "{{url('backend/banner/datatables/active')}}",
                data: function(d) {
                    // d.search = $('#search').val();
                    // d.radiodate = $('input[name="radiodate"]:checked').val();
                    // d.date = $('#dates').val();
                },
            },
            columns: [{
                    'className': "text-center",
                    data: 'name',
                    name: 'name'
                },
                {
                    'className': "text-center",
                    data: 'countimage',
                    name: 'countimage',
                    searchable: false
                },
                {
                    'className': "text-center",
                    data: 'startdate',
                    name: 'startdate'
                },
                {
                    'className': "text-center",
                    data: 'is_active',
                    name: 'is_active',
                    orderable: false,
                    searchable: false
                },
                {
                    'className': "text-center",
                    data: 'btnaction',
                    name: 'btnaction',
                    orderable: false,
                    searchable: false
                },
            ],
            order: [
                [0, 'asc']
            ],
            rowCallback: function(row, data, index) {
                $('td:eq(0)', row).html(index + 1);
                var status = '';
                // if(data['product_status'] > 0){ //อันเก่า
                if (data['status'] == 1) {
                    // var status = '<span class="label bg-success-400">ใช้งาน</span>';
                } else if (data['status'] == 0) {
                    var status = '<span class="label bg-warning-400">ยกเลิก</span>';
                }

                // $('td:eq(5)', row).html( '<i class="icon-mailbox" data-popup="tooltip" title="Mail" onclick="mail('+data['export_id']+');"></i> <i class="icon-magazine" data-popup="tooltip" title="Bill" onclick="openbill('+data['export_id']+');"></i> <a href="{{url("export-update")}}/'+data['export_id']+'"><i class="icon-pencil7" data-popup="tooltip" title="Update"></i></a> <i class="icon-trash" onclick="del('+data['export_id']+');" data-popup="tooltip" title="Delete"></i>' );


            }
        });


        var oTablenotactive = $('#datatables_notactive').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            lengthChange: false,
            responsive: true,
            scrollX: true,
            ajax: {
                url: "{{url('backend/banner/datatables/notactive')}}",
                data: function(d) {
                    // d.search = $('#search').val();
                    // d.radiodate = $('input[name="radiodate"]:checked').val();
                    // d.date = $('#dates').val();
                },
            },
            columns: [{
                    'className': "text-center",
                    data: 'name',
                    name: 'name'
                },
                {
                    'className': "text-center",
                    data: 'countimage',
                    name: 'countimage',
                    searchable: false
                },
                {
                    'className': "text-center",
                    data: 'startdate',
                    name: 'startdate'
                },
                {
                    'className': "text-center",
                    data: 'is_active',
                    name: 'is_active',
                    orderable: false,
                    searchable: false
                },
                {
                    'className': "text-center",
                    data: 'btnaction',
                    name: 'btnaction',
                    orderable: false,
                    searchable: false
                },
            ],
            order: [
                [0, 'asc']
            ],
            rowCallback: function(row, data, index) {
                $('td:eq(0)', row).html(index + 1);
                var status = '';
                // if(data['product_status'] > 0){ //อันเก่า
                if (data['status'] == 1) {
                    // var status = '<span class="label bg-success-400">ใช้งาน</span>';
                } else if (data['status'] == 0) {
                    var status = '<span class="label bg-warning-400">ยกเลิก</span>';
                }

                // $('td:eq(5)', row).html( '<i class="icon-mailbox" data-popup="tooltip" title="Mail" onclick="mail('+data['export_id']+');"></i> <i class="icon-magazine" data-popup="tooltip" title="Bill" onclick="openbill('+data['export_id']+');"></i> <a href="{{url("export-update")}}/'+data['export_id']+'"><i class="icon-pencil7" data-popup="tooltip" title="Update"></i></a> <i class="icon-trash" onclick="del('+data['export_id']+');" data-popup="tooltip" title="Delete"></i>' );


            }
        });


        $("#search").keyup(function(e) {
            oTable.search(this.value).draw();
            oTableactive.search(this.value).draw();
            oTablenotactive.search(this.value).draw();
        });
    });

    $("#checkall").click(function() {
        // alert();
        if ($("#checkall").is(":checked")) {
            $("input[name='productall[]']").prop('checked', true)
        } else {
            $("input[name='productall[]']").prop('checked', false)
        }

    })
</script>
@stop
