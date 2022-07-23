@extends('backend.layouts.templates')
@section('content')
<style>
    .status-danger{
        background-color: #f2562a2b;
        text-align: center;
        padding: 0.375rem 1rem;
        border-radius: 8px;
        color: red;
    }
</style>
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
{{-- <input type="hidden" id="pageName" name="pageName" value="pdpa"> --}}
<input type="hidden" id="pagemenuName" name="pagemenuName" value="pdpa">
<input type="hidden" id="pagemenuName2" name="pagemenuName2" value="settingpdpa">
<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="txt__page">ตั้งค่า PDPA</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="box__filter">
                        <form class="form-box-input px-2">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="title__txt">ค้นหา</label>
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control" placeholder="ระบุ" name="search" id="search">
                                        <div class="btn-icon-search">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <label class="title__txt">ประเภทผู้ใช้งาน</label>
                                    <select class="form-select" id="searchtype">
                                        <option value="">ทั้งหมด</option>
                                        <option value="buyer">ผู้ซื้อ</option>
                                        <option value="supplier">ผู้ขาย</option>
                                    </select>
                                </div>

                                <div class="col-lg-3">
                                    <label class="title__txt">ประเภทสมาชิก</label>
                                    <select class="form-select" id="searchgrouptype">
                                        <option value="">ทั้งหมด</option>
                                        <option value="personal">บุคคลธรรมดา</option>
                                        <option value="corporate">นิติบุคคล</option>
                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <div class="box__table p-4">
                        <div class="d-flex justify-content-between">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#using">กำลังใช้งาน</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#expired">หมดอายุการใช้งาน</a>
                                </li>
                            </ul>
                            <div class="form-box-input">
                                <button class="btn btn-search mt-0" type="button" id="" data-bs-toggle="modal" data-bs-target="#addpdpa"><i class="fas fa-plus-circle"></i> เพิ่ม PDPA</button>
                            </div>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="using" class="tab-pane active"><br>

                                <div class="col-12">
                                    <div class="table-responsive form-box-input">
                                        <table class="table table-bordered display nowrap" style="width:100%" id="datatables">
                                            <thead>
                                                <tr>
                                                    <th>หมายเลข PDPA</th>
                                                    <th>หัวข้อ PDPA</th>
                                                    <th>จำนวนผู้รับ</th>
                                                    <th>ประเภทผู้ใช้งาน</th>
                                                    <th>ประเภทสมาชิก</th>
                                                    <th>วันที่สร้าง</th>
                                                    <th>วันที่เผยแพร่</th>
                                                    <th>เวอร์ชั่น</th>
                                                    <th>สถานะ</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            {{-- <tbody>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ขาย</td>
                                                    <td>บุคคลธรรมดา</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="status-success"><i class="fas fa-check-circle"></i> กำลังใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ซื้อ</td>
                                                    <td>นิติบุคคล</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="status-success"><i class="fas fa-check-circle"></i> กำลังใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ขาย</td>
                                                    <td>บุคคลธรรมดา</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="status-success"><i class="fas fa-check-circle"></i> กำลังใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ซื้อ</td>
                                                    <td>นิติบุคคล</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="status-success"><i class="fas fa-check-circle"></i> กำลังใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ขาย</td>
                                                    <td>บุคคลธรรมดา</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="status-success"><i class="fas fa-check-circle"></i> กำลังใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ซื้อ</td>
                                                    <td>นิติบุคคล</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="status-success"><i class="fas fa-check-circle"></i> กำลังใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ขาย</td>
                                                    <td>บุคคลธรรมดา</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="status-success"><i class="fas fa-check-circle"></i> กำลังใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody> --}}
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
                            <div id="expired" class="tab-pane fade"><br>
                                <div class="col-12">
                                    <div class="table-responsive form-box-input">
                                        <table class="table table-bordered display nowrap" style="width:100%"  id="datatables_expired">
                                            <thead>
                                                <tr>
                                                    <th>หมายเลข PDPA</th>
                                                    <th>หัวข้อ PDPA</th>
                                                    <th>จำนวนผู้รับ</th>
                                                    <th>ประเภทผู้ใช้งาน</th>
                                                    <th>ประเภทสมาชิก</th>
                                                    <th>วันที่สร้าง</th>
                                                    <th>วันที่เผยแพร่</th>
                                                    <th>เวอร์ชั่น</th>
                                                    <th>สถานะ</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            {{-- <tbody>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ซื้อ</td>
                                                    <td>บุคคลธรรมดา</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="title__txt"><i class="fas fa-history"></i> หมดอายุการใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ซื้อ</td>
                                                    <td>นิติบุคคล</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="title__txt"><i class="fas fa-history"></i> หมดอายุการใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ซื้อ</td>
                                                    <td>บุคคลธรรมดา</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="title__txt"><i class="fas fa-history"></i> หมดอายุการใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ซื้อ</td>
                                                    <td>นิติบุคคล</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="title__txt"><i class="fas fa-history"></i> หมดอายุการใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ซื้อ</td>
                                                    <td>บุคคลธรรมดา</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="title__txt"><i class="fas fa-history"></i> หมดอายุการใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ซื้อ</td>
                                                    <td>นิติบุคคล</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="title__txt"><i class="fas fa-history"></i> หมดอายุการใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456789</td>
                                                    <td>PDPA สำหรับผู้ซื้อบุคคลธรรมดา</td>
                                                    <td>500 คน</td>
                                                    <td>ผู้ซื้อ</td>
                                                    <td>บุคคลธรรมดา</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>15/12/2565 18.00</td>
                                                    <td>1.1.1</td>
                                                    <td><small class="title__txt"><i class="fas fa-history"></i> หมดอายุการใช้งาน</small></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody> --}}
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

            </div>
        </div>
        <!-- The Modal -->
        <div class="box__accordian__edit">
            <div class="modal fade" id="addpdpa">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h6 class="modal-title">เพิ่ม PDPA</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="POST" action="{{ route('backend.pdpa.store') }}" id="formpdpa">
                                @csrf
                                <div class="row box__filter">
                                    <div class="col-12 mb-3" id="formtitle">
                                        <label class="title__txt" for="title">หัวข้อ PDPA</label>
                                        <input type="text" class="form-control" id="title" placeholder="ระบุ" name="title" maxlength="120" required>
                                        <span class="text-red">พิมพ์ข้อความได้ไม่เกิน 120 ตัวอักษร (0/120)</span>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label class="title__txt" for="type">ประเภทผู้ใช้งาน</label>
                                        <select class="form-select" required required name="type" id="type">
                                            <option value="buyer">ผู้ซื้อ</option>
                                            <option value="supplier">ผู้ขาย</option>
                                        </select>
                                    </div>

                                    <div class="col-4 mb-3">
                                        <label class="title__txt" for="grouptypecpn">ประเภทสมาชิก</label>
                                        <select class="form-select" required name="grouptypecpn" id="typemember">
                                            {{-- <option value="">ทั้งหมด</option> --}}
                                            <option value="personal">บุคคลธรรมดา</option>
                                            <option value="corporate">นิติบุคคล</option>
                                        </select>
                                    </div>

                                    <div class="col-4 mb-3">
                                        <label class="title__txt" for="datestart">กำหนดวันเผยแพร่</label>
                                        <input type="date" class="form-control" id="datestart" name="datestart" required>
                                    </div>

                                    <div class="col-12 mb-3" id="formdetail">
                                        <label class="title__txt">เนื้อหา</label>
                                        <textarea class="form-control" id="details" name="details" style="display: none !important;"></textarea>
                                        <span class="text-red">พิมพ์ข้อความได้ไม่เกิน 120 ตัวอักษร (0/120)</span>
                                    </div>
                                
                                </div>
                            </form>
                        </div>


                        <!-- Modal footer -->
                        <div class="modal-footer justify-content-center align-items-start form-box-input">
                            <button type="button" class="btn btn__app px-5" data-bs-dismiss="modal">ยกเลิก</button>
                            <button type="submit" form="formpdpa" class="btn btn-search px-5 mt-0">บันทึก</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
<script src="{{asset('vendor/midium/laravel-ckeditor/ckeditor.js')}}"></script>
<script>
    var editor = CKEDITOR.replace( 'details', {
        height: 500,
        // baseFloatZIndex: 10005,
        removeButtons: 'PasteFromWord'
    } );
    editor.on( 'change', function( evt ) {
        console.log( 'Total bytes: ' + evt.editor.getData().length );
        var data = CKEDITOR.instances.detail.getData();
        // console.log(data);
        // $("#term").val(data);
    });
    editor.on("keydown", function(event) 
    {
        var data = CKEDITOR.instances.detail.getData();
        // $("#term").val(data);
    });
    
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> --}}
<script src="{{asset('daterangepicker-master/daterangepicker.js')}}"></script>
<script>
    var oTable;
    var oTableexpired;
    $(document).ready(function(){
        $('.nav-link').on('shown.bs.tab', function (e) {
            // console.log('tab');
            $.fn.dataTable.tables({ visible: true, api: true }).columns.adjust();
        });
		oTable = $('#datatables').DataTable({
			processing: true,
			serverSide: true,
			searching: false,
			lengthChange: false,
            responsive: true,
            scrollX: true,
			ajax:{ 
				url : "{{url('backend/pdpa/datatables')}}",
				data: function (d) {
					d.search = $('#search').val();
					d.searchtype = $('#searchtype').val();
					d.searchgrouptype = $('#searchgrouptype').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'code', name: 'code' },
				{ 'className': "text-center", data: 'title', name: 'title' },
				{ 'className': "text-center", data: 'id', name: 'id' },
				{ 'className': "text-center", data: 'type', name: 'type' },
				{ 'className': "text-center", data: 'grouptypecpn', name: 'grouptypecpn' },
				{ 'className': "text-center", data: 'created_at', name: 'created_at' },
				{ 'className': "text-center", data: 'datestart', name: 'datestart' },
				{ 'className': "text-center", data: 'verions', name: 'verions' },
				{ 'className': "text-center", data: 'is_active', name: 'is_active',orderable: false,searchable: false },
				{ 'className': "text-center", data: 'btnaction', name: 'btnaction',orderable: false,searchable: false },
			],
			order: [[0, 'asc']],
			rowCallback: function(row,data,index ){
				
			},
            initComplete:function( settings, json){
                
                
            }
		});
        
		// $("#noorder").keyup(function(e){
		// 	oTable.draw();
		// 	e.preventDefault();
		// });

        oTableexpired = $('#datatables_expired').DataTable({
			processing: true,
			serverSide: true,
			searching: false,
			lengthChange: false,
            responsive: true,
            scrollX: true,
			ajax:{ 
				url : "{{url('backend/pdpa/datatables/expired')}}",
				data: function (d) {
					d.search = $('#search').val();
					d.searchtype = $('#searchtype').val();
					d.searchgrouptype = $('#searchgrouptype').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'code', name: 'code' },
				{ 'className': "text-center", data: 'title', name: 'title' },
				{ 'className': "text-center", data: 'id', name: 'id' },
				{ 'className': "text-center", data: 'type', name: 'type' },
				{ 'className': "text-center", data: 'grouptypecpn', name: 'grouptypecpn' },
				{ 'className': "text-center", data: 'created_at', name: 'created_at' },
				{ 'className': "text-center", data: 'datestart', name: 'datestart' },
				{ 'className': "text-center", data: 'verions', name: 'verions' },
				{ 'className': "text-center", data: 'is_active', name: 'is_active',orderable: false,searchable: false },
				{ 'className': "text-center", data: 'btnaction', name: 'btnaction',orderable: false,searchable: false },
			],
			order: [[0, 'asc']],
			rowCallback: function(row,data,index ){
				
				
			},
            initComplete:function( settings, json){
            }
		});


        $("#search").keyup(function (e) { 
            oTable.draw();
            oTableexpired.draw();
			e.preventDefault();

        });
        
		
		$('#btnsearch').click(function(e){
			oTable.draw();
            oTableexpired.draw();
			e.preventDefault();
		});
	});
    $("#title").keyup(function () {
        var len = $(this).val().length ;
        console.log(len);
        $("#formtitle .text-red").html('พิมพ์ข้อความได้ไม่เกิน 120 ตัวอักษร ('+len+'/120)')
    });

    $("#detail").keyup(function () {
        var len = $(this).val().length ;
        console.log(len);
        $("#formdetail .text-red").html('พิมพ์ข้อความได้ไม่เกิน 120 ตัวอักษร ('+len+'/120)')
    });

    function switchstatus(id){
        var flexSwitch = $("#mySwitch"+id).is(":checked");
        // return  false;
        if(flexSwitch){
            flexSwitch = '1';
        }else{
            flexSwitch = '0';
        }
        $.get("{{route('backend.pdpa.changestatus')}}", {'id':id,'status':flexSwitch},function (data, textStatus, jqXHR) {
            oTable.draw( false );
            oTableexpired.draw( false );
        });
    }
</script>
@stop