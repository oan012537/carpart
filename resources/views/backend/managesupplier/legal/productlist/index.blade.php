@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="managesupplier">
<input type="hidden" id="pageName2" name="pageName2" value="managesupplierlegal">
<input type="hidden" id="navpageName" name="navpageName" value="productlist">
<div class="content">

    <div class="content">

        <div class="boxbox__approvel">
            <div class="box__approvel">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="txt__page">จัดการผู้ขาย : นิติบุคคล</h2>
                        </div>

                        <div class="col-12">
                            <div class="box__head">
                                <form>

                                    <div class="text_name_t">
                                        <p>
                                            เฮงเฮงอะไหล่ยนต์
                                        </p>
                                    </div>
                                    <div class="text_id_t">
                                        <p>
                                            รหัสสมาชิก : 1234567
                                        </p>
                                    </div>

                                </form>
                            </div>
                        </div>



                        <div class="row">
                            @include('backend.managesupplier.legal.inc_nav')

                            <div class="col-md-9">

                                <div class="col-12">
                                    <div class="box__filter">
                                        <form class="form-box-input px-2">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title__txt">ชื่อสินค้า/SKU</label>
                                                    <input type="text" class="form-control" id="" placeholder="ระบุ">
                                                </div>

                                                <div class="col-4">
                                                    <label class="title__txt">หมวดหมู่หลัก (ประเภท)</label>
                                                    <input type="text" class="form-control" id=""
                                                        placeholder="Auto complete search">
                                                </div>

                                                <div class="col-4">
                                                    <label for="" class="title__txt">แบรนด์</label>
                                                    <input type="text" class="form-control" id=""
                                                        placeholder="Auto complete search">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title__txt">ประเภทผู้ชาย</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected=""> ระบุ</option>
                                                    </select>
                                                </div>

                                                <div class="col-4">
                                                    <label class="title__txt">ยอดขาย</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="ระบุ">
                                                        <span class="mx-3">-</span>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="ระบุ">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label class="title__txt">คุณภาพสินค้า</label>
                                                    <div class="d-flex mt-2">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check1"
                                                                name="option1" value="something" checked>
                                                            <label class="form-check-label" for="check1">แท้</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input type="checkbox" class="form-check-input" id="check2"
                                                                name="option2" value="something">
                                                            <label class="form-check-label" for="check2">OEM</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input type="checkbox" class="form-check-input" id="check3"
                                                                name="option3" value="something">
                                                            <label class="form-check-label" for="check2">ใหม่</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input type="checkbox" class="form-check-input" id="check4"
                                                                name="option4" value="something">
                                                            <label class="form-check-label" for="check2">มือสอง</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="">
                                                        <button class="btn btn-search" type="button"
                                                            id="">ค้นหา</button>
                                                        <button class="btn btn-reset ms-2" type="button"
                                                            id="">รีเซต</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <br>
                                <div class="box__table p-4">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#all">ทั้งหมด <span
                                                    class="circle"> 2</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#process">กำลังขาย<span
                                                    class="circle"> 2</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#sold">ขายแล้ว<span
                                                    class="circle"> 2</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#suspended">ถูกระงับ<span
                                                    class="circle"> 2</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#cancle">ยกเลิก<span
                                                    class="circle"> 2</span></a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="all" class="tab-pane active"><br>
                                            <div class="d-flex justify-content-between">
                                                <div class="col-5 d-flex">
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-download"></i> นำข้อมูลเข้า</a>
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-upload"></i> นำข้อมูลออก</a>
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-print"></i> พิมพ์ข้อมูล</a>
                                                </div>
                                                <div class="col-3">
                                                    <div class="">
                                                        <input type="text" class="form-control"
                                                            placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="table-responsive form-box-input">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><input type="checkbox" class="form-check-input"
                                                                        id="check1" name="option1" value="something">
                                                                </th>
                                                                <th>รหัสสินค้าในร้าน</th>
                                                                <th>รูปภาพ</th>
                                                                <th>ชื่อรายการ</th>
                                                                <th>หมวดสินค้า /หมวดย่อย
                                                                    <button class="btn btn-sort active"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงบางรายการ</button>
                                                                </th>
                                                                <th>แบรนด์
                                                                    <button class="btn btn-sort"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงทั้งหมด</button>
                                                                </th>
                                                                <th>รุ่น
                                                                    <button class="btn btn-sort"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงทั้งหมด</button>
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
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check2" name="option2" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-success">ขายแล้ว</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check3" name="option3" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-process">กำลังขาย</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check4" name="option4" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-cancle">ยกเลิก</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check5" name="option5" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-suspended">ถูกระงับ</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i><a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check6" name="option6" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-success">ขายแล้ว</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check7" name="option7" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-success">ขายแล้ว</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check8" name="option8" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-success">ขายแล้ว</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i></a></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="view-all">
                                                    <div>
                                                        <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                                    </div>
                                                    <ul class="pagination justify-content-end">
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);"><i
                                                                    class="fas fa-chevron-left"></i></a></li>
                                                        <li class="page-item">1/11</li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);"><i
                                                                    class="fas fa-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="process" class="tab-pane fade"><br>
                                            <div class="d-flex justify-content-between">
                                                <div class="col-5 d-flex">
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-download"></i> นำข้อมูลเข้า</a>
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-upload"></i> นำข้อมูลออก</a>
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-print"></i> พิมพ์ข้อมูล</a>
                                                </div>
                                                <div class="col-3">
                                                    <div class="">
                                                        <input type="text" class="form-control"
                                                            placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="table-responsive form-box-input">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><input type="checkbox" class="form-check-input"
                                                                        id="check1" name="option1" value="something">
                                                                </th>
                                                                <th>รหัสสินค้าในร้าน</th>
                                                                <th>รูปภาพ</th>
                                                                <th>ชื่อรายการ</th>
                                                                <th>หมวดสินค้า /หมวดย่อย
                                                                    <button class="btn btn-sort active"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงบางรายการ</button>
                                                                </th>
                                                                <th>แบรนด์
                                                                    <button class="btn btn-sort"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงทั้งหมด</button>
                                                                </th>
                                                                <th>รุ่น
                                                                    <button class="btn btn-sort"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงทั้งหมด</button>
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
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check3" name="option3" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-process">กำลังขาย</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check3" name="option3" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-process">กำลังขาย</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i></a></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="view-all">
                                                    <div>
                                                        <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                                    </div>
                                                    <ul class="pagination justify-content-end">
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);"><i
                                                                    class="fas fa-chevron-left"></i></a></li>
                                                        <li class="page-item">1/11</li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);"><i
                                                                    class="fas fa-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="sold" class="tab-pane fade"><br>
                                            <div class="d-flex justify-content-between">
                                                <div class="col-5 d-flex">
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-download"></i> นำข้อมูลเข้า</a>
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-upload"></i> นำข้อมูลออก</a>
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-print"></i> พิมพ์ข้อมูล</a>
                                                </div>
                                                <div class="col-3">
                                                    <div class="">
                                                        <input type="text" class="form-control"
                                                            placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="table-responsive form-box-input">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><input type="checkbox" class="form-check-input"
                                                                        id="check1" name="option1" value="something">
                                                                </th>
                                                                <th>รหัสสินค้าในร้าน</th>
                                                                <th>รูปภาพ</th>
                                                                <th>ชื่อรายการ</th>
                                                                <th>หมวดสินค้า /หมวดย่อย
                                                                    <button class="btn btn-sort active"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงบางรายการ</button>
                                                                </th>
                                                                <th>แบรนด์
                                                                    <button class="btn btn-sort"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงทั้งหมด</button>
                                                                </th>
                                                                <th>รุ่น
                                                                    <button class="btn btn-sort"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงทั้งหมด</button>
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
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check6" name="option6" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-success">ขายแล้ว</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check6" name="option6" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-success">ขายแล้ว</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i></a></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="view-all">
                                                    <div>
                                                        <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                                    </div>
                                                    <ul class="pagination justify-content-end">
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);"><i
                                                                    class="fas fa-chevron-left"></i></a></li>
                                                        <li class="page-item">1/11</li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);"><i
                                                                    class="fas fa-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="suspended" class="tab-pane fade"><br>
                                            <div class="d-flex justify-content-between">
                                                <div class="col-5 d-flex">
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-download"></i> นำข้อมูลเข้า</a>
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-upload"></i> นำข้อมูลออก</a>
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-print"></i> พิมพ์ข้อมูล</a>
                                                </div>
                                                <div class="col-3">
                                                    <div class="">
                                                        <input type="text" class="form-control"
                                                            placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="table-responsive form-box-input">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><input type="checkbox" class="form-check-input"
                                                                        id="check1" name="option1" value="something">
                                                                </th>
                                                                <th>รหัสสินค้าในร้าน</th>
                                                                <th>รูปภาพ</th>
                                                                <th>ชื่อรายการ</th>
                                                                <th>หมวดสินค้า /หมวดย่อย
                                                                    <button class="btn btn-sort active"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงบางรายการ</button>
                                                                </th>
                                                                <th>แบรนด์
                                                                    <button class="btn btn-sort"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงทั้งหมด</button>
                                                                </th>
                                                                <th>รุ่น
                                                                    <button class="btn btn-sort"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงทั้งหมด</button>
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
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check5" name="option5" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-suspended">ถูกระงับ</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i><a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check5" name="option5" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-suspended">ถูกระงับ</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i><a></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="view-all">
                                                    <div>
                                                        <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                                    </div>
                                                    <ul class="pagination justify-content-end">
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);"><i
                                                                    class="fas fa-chevron-left"></i></a></li>
                                                        <li class="page-item">1/11</li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);"><i
                                                                    class="fas fa-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="cancle" class="tab-pane fade"><br>
                                            <div class="d-flex justify-content-between">
                                                <div class="col-5 d-flex">
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-download"></i> นำข้อมูลเข้า</a>
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-upload"></i> นำข้อมูลออก</a>
                                                    <a href="#" class="btn btn__viewdetail me-3"><i
                                                            class="fas fa-print"></i> พิมพ์ข้อมูล</a>
                                                </div>
                                                <div class="col-3">
                                                    <div class="">
                                                        <input type="text" class="form-control"
                                                            placeholder="ค้นหารหัสสินค้า / ค้นหาจากชื่อสินค้า / ขนาดบรรจุ">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="table-responsive form-box-input">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><input type="checkbox" class="form-check-input"
                                                                        id="check1" name="option1" value="something">
                                                                </th>
                                                                <th>รหัสสินค้าในร้าน</th>
                                                                <th>รูปภาพ</th>
                                                                <th>ชื่อรายการ</th>
                                                                <th>หมวดสินค้า /หมวดย่อย
                                                                    <button class="btn btn-sort active"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงบางรายการ</button>
                                                                </th>
                                                                <th>แบรนด์
                                                                    <button class="btn btn-sort"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงทั้งหมด</button>
                                                                </th>
                                                                <th>รุ่น
                                                                    <button class="btn btn-sort"><i
                                                                            class="fas fa-filter"></i>
                                                                        แสดงทั้งหมด</button>
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
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check4" name="option4" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-cancle">ยกเลิก</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox" class="form-check-input"
                                                                        id="check4" name="option4" value="something">
                                                                </td>
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
                                                                <td class="text-center"><small
                                                                        class="status-cancle">ยกเลิก</small></td>
                                                                <td>สมบูรณ์ อิ่มเอม</td>
                                                                <td><button class="btn btn-table-search"><i
                                                                            class="fas fa-search"></i></button></td>
                                                                <td><a class="btn btn-table-edit"
                                                                        href="manage-productEdit.php"><i
                                                                            class="fas fa-pencil-alt"></i></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="view-all">
                                                    <div>
                                                        <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                                    </div>
                                                    <ul class="pagination justify-content-end">
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);"><i
                                                                    class="fas fa-chevron-left"></i></a></li>
                                                        <li class="page-item">1/11</li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);"><i
                                                                    class="fas fa-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="box__accordian mb-5">
                                        <button class="accordion">ประวัติเอกสาร</button>
                                        <div class="panel" style="max-height: 256px;">
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
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
<script>
</script>
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
    </script>
@stop