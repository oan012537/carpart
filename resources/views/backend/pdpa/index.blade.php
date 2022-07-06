@extends('backend.layouts.templates')
@section('content')
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
                                <div class="col-3">
                                    <label class="title__txt">ค้นหา</label>
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control" placeholder="ระบุ" name="search">
                                        <div class="btn-icon-search">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <label class="title__txt">ประเภทผู้ใช้งาน</label>
                                    <select class="form-select">
                                        <option>ทั้งหมด</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label class="title__txt">ประเภทสมาชิก</label>
                                    <select class="form-select">
                                        <option>ทั้งหมด</option>
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
                                        <table class="table table-bordered" id="datatables">
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
                                        <table class="table table-bordered" id="datatables_expired">
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
                                    <div class="col-12 mb-3" id="formheaderpdpa">
                                        <label class="title__txt">หัวข้อ PDPA</label>
                                        <input type="text" class="form-control" id="headerpdpa" placeholder="ระบุ" name="headerpdpa" maxlength="120" required>
                                        <span class="text-red">พิมพ์ข้อความได้ไม่เกิน 120 ตัวอักษร (0/120)</span>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label class="title__txt">ประเภทผู้ใช้งาน</label>
                                        <select class="form-select" required required name="typeaccount" id="typeaccount">
                                            <option value="">ทั้งหมด</option>
                                        </select>
                                    </div>

                                    <div class="col-4 mb-3">
                                        <label class="title__txt">ประเภทสมาชิก</label>
                                        <select class="form-select" required name="typemember" id="typemember">
                                            <option value="">ทั้งหมด</option>
                                        </select>
                                    </div>

                                    <div class="col-4 mb-3">
                                        <label class="title__txt">กำหนดวันเผยแพร่</label>
                                        <input type="date" class="form-control" id="date" name="date" required>
                                    </div>

                                    <div class="col-12 mb-3" id="formdetail">
                                        <label class="title__txt">เนื้อหา</label>
                                        <textarea class="form-control" placeholder="ระบุ" rows="3" id="detail" name="detail" required maxlength="120"></textarea>
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
    $(document).ready(function(){
        $('.nav-link').on('shown.bs.tab', function (e) {
            console.log('tab');
            $.fn.dataTable.tables({ visible: true, api: true }).columns.adjust();
        });
		var oTable = $('#datatables').DataTable({
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
					// d.lastname = $('#lastname').val();
					d.radiodate = $('input[name="radiodate"]:checked').val();
					d.date = $('#date').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'id', name: 'id' },
				{ 'className': "text-center", data: 'store_name', name: 'store_name' },
				{ 'className': "text-center", data: 'first_name', name: 'first_name' },
				{ 'className': "text-center", data: 'card_id', name: 'card_id' },
				{ 'className': "text-center", data: 'created_at', name: 'created_at' },
				{ 'className': "text-center", data: 'updated_at', name: 'updated_at' },
				{ 'className': "text-center", data: 'active', name: 'status',orderable: false,searchable: false },
				{ 'className': "text-center", data: 'comment', name: 'comment' },
				{ 'className': "text-center", data: 'btnview', name: 'btnview',orderable: false,searchable: false },
				{ 'className': "text-center", data: 'btnaction', name: 'btnaction',orderable: false,searchable: false },
			],
			order: [[0, 'asc']],
			rowCallback: function(row,data,index ){
				$('td:eq(0)', row).html(index+1);
				var status = '';
				// if(data['product_status'] > 0){ //อันเก่า
				if(data['status'] == 1){
					// var status = '<span class="label bg-success-400">ใช้งาน</span>';
				}else if(data['status'] == 0){
					var status = '<span class="label bg-warning-400">ยกเลิก</span>';
				}
				
				// $('td:eq(5)', row).html( '<i class="icon-mailbox" data-popup="tooltip" title="Mail" onclick="mail('+data['export_id']+');"></i> <i class="icon-magazine" data-popup="tooltip" title="Bill" onclick="openbill('+data['export_id']+');"></i> <a href="{{url("export-update")}}/'+data['export_id']+'"><i class="icon-pencil7" data-popup="tooltip" title="Update"></i></a> <i class="icon-trash" onclick="del('+data['export_id']+');" data-popup="tooltip" title="Delete"></i>' );
				
				
			},
            initComplete:function( settings, json){
                // console.log(json);
                $("#alerttotal").text(oTable.data().count());
                if(oTable.data().count() > 0){
                    $("#alerttotal").show();
                }
                
            }
		});
        
		// $("#noorder").keyup(function(e){
		// 	oTable.draw();
		// 	e.preventDefault();
		// });

        var oTableexpired = $('#datatables_expired').DataTable({
			processing: true,
			serverSide: true,
			searching: false,
			lengthChange: false,
            responsive: true,
            scrollX: true,
			ajax:{ 
				url : "{{url('backend/pdpa/consentlist/datatables/expired')}}",
				data: function (d) {
					d.name = $('#name').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'id', name: 'id' },
				{ 'className': "text-center", data: 'store_name', name: 'store_name' },
				{ 'className': "text-center", data: 'first_name', name: 'first_name' },
				{ 'className': "text-center", data: 'card_id', name: 'card_id' },
				{ 'className': "text-center", data: 'created_at', name: 'created_at' },
				{ 'className': "text-center", data: 'updated_at', name: 'updated_at' },
				{ 'className': "text-center", data: 'active', name: 'status',orderable: false,searchable: false },
				{ 'className': "text-center", data: 'comment', name: 'comment' },
				{ 'className': "text-center", data: 'btnview', name: 'btnview',orderable: false,searchable: false },
				{ 'className': "text-center", data: 'btnaction', name: 'btnaction',orderable: false,searchable: false },
			],
			order: [[0, 'asc']],
			rowCallback: function(row,data,index ){
				$('td:eq(0)', row).html(index+1);
				var status = '';
				// if(data['product_status'] > 0){ //อันเก่า
				if(data['status'] == 1){
					// var status = '<span class="label bg-success-400">ใช้งาน</span>';
				}else if(data['status'] == 0){
					var status = '<span class="label bg-warning-400">ยกเลิก</span>';
				}
				
				// $('td:eq(5)', row).html( '<i class="icon-mailbox" data-popup="tooltip" title="Mail" onclick="mail('+data['export_id']+');"></i> <i class="icon-magazine" data-popup="tooltip" title="Bill" onclick="openbill('+data['export_id']+');"></i> <a href="{{url("export-update")}}/'+data['export_id']+'"><i class="icon-pencil7" data-popup="tooltip" title="Update"></i></a> <i class="icon-trash" onclick="del('+data['export_id']+');" data-popup="tooltip" title="Delete"></i>' );
				
				
			},
            initComplete:function( settings, json){
                console.log(json);
                $("#alertwait").text(oTableexpired.data().count());
                if(oTableexpired.data().count() > 0){
                    $("#alertwait").show();
                }
            }
		});


        $("#search").keyup(function (e) { 
            oTable.draw();
			e.preventDefault();
            $("#alerttotal").text(oTable.data().count());
            if(oTable.data().count() > 0){
                $("#alerttotal").show();
            }

            oTableexpired.draw();
			e.preventDefault();
            $("#alertwait").text(oTableexpired.data().count());
            if(oTableexpired.data().count() > 0){
                $("#alertwait").show();
            }
        });
        
		
		$('#btnsearch').click(function(e){
			oTable.draw();
			e.preventDefault();
            $("#alerttotal").text(oTable.data().count());
            if(oTable.data().count() > 0){
                $("#alerttotal").show();
            }

            oTableexpired.draw();
			e.preventDefault();
            $("#alertwait").text(oTableexpired.data().count());
            if(oTableexpired.data().count() > 0){
                $("#alertwait").show();
            }
		});
	});
    $("#headerpdpa").keyup(function () {
        var len = $(this).val().length ;
        console.log(len);
        $("#formheaderpdpa .text-red").html('พิมพ์ข้อความได้ไม่เกิน 120 ตัวอักษร ('+len+'/120)')
    });

    $("#detail").keyup(function () {
        var len = $(this).val().length ;
        console.log(len);
        $("#formdetail .text-red").html('พิมพ์ข้อความได้ไม่เกิน 120 ตัวอักษร ('+len+'/120)')
    });
</script>
@stop