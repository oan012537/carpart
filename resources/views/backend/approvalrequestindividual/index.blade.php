@extends('backend.layouts.templates')
@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
<style>
    .btn__back {
        color: var(--clrwhites) !important;
        background-color: var(--clrdarks5) !important;
        border-radius: 4px;
        border: 1px solid var(--clrdarks5) !important;
        padding: 7px 2rem;
        @extend %transition-3;
        &:hover {
            @extend %transition-3;
            background-color: transparent !important;
            color: var(--clrwhites) !important;
        }
    }
</style>
<input type="hidden" id="pagemenuName" name="pagemenuName" value="approval">
<input type="hidden" id="pagemenuName2" name="pagemenuName2" value="approval-individual">

<div class="content">

    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">คำขออนุมัติ : ผู้ขายบุคคลธรรมดา</h2>
                </div>

                <div class="col-12">
                    <div class="box__filter">
                        <form>
                            <div class="wrapper__form">
                                <div class="box__search">
                                    <label for="">ค้นหา</label>


                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="ระบุ...." aria-describedby="button-search" name="search" id="search">
                                        <button class="btn btn__search" type="button" id="button-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>

                                <div class="box__radio">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radiodate" id="flexRadioDefault1" value="1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            วันที่สมัคร
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radiodate" id="flexRadioDefault2" checked value="2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            วันที่อนุมัติ
                                        </label>
                                    </div>
                                </div>

                                <div class="box__search">
                                    <label for="">ช่วงวัน-เวลา</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="button-yes"  name="date" id="date" readonly>
                                        <input type="hidden"   name="dates" id="dates" readonly value="{{date("Y-m-d")}},{{date("Y-m-d")}}">
                                    </div>
                                </div>

                                <div class="box__btn">
                                    <button id="btnsearch" class="btn btn__search2" type="button" id="button-yes">ค้นหา</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <div class="box__table">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="total-tab" data-bs-toggle="tab" data-bs-target="#total" type="button" role="tab" aria-controls="total" aria-selected="true">ทั้งหมด <span class="circle" id="alerttotal" style="display: none;"> </span></button>
                                <button class="nav-link" id="wait-tab" data-bs-toggle="tab" data-bs-target="#wait" type="button" role="tab" aria-controls="wait" aria-selected="false">รออนุมัติ <span class="circle" id="alertwait" style="display: none;"> </span></button>
                                <button class="nav-link" id="approval-tab" data-bs-toggle="tab" data-bs-target="#approvals" type="button" role="tab" aria-controls="approvals" aria-selected="false">อนุมัติแล้ว <span class="circle" id="alertapproval" style="display: none;"> </span></button>
                                <button class="nav-link" id="approval-tab" data-bs-toggle="tab" data-bs-target="#disapproved" type="button" role="tab" aria-controls="disapproved" aria-selected="false">ไม่อนุมัติ <span class="circle" id="alertdisapproved" style="display: none;"> </span></button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="total" role="tabpanel" aria-labelledby="total-tab">
                                <div class="table-responsive">
                                    <table id="datatables" class="table table-striped display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <td>รหัสสมาชิก</td>
                                                <td>ชื่อร้าน</td>
                                                <td>ชื่อผู้ขาย</td>
                                                <td>เลขบัตรประชาชน</td>
                                                <td>วันที่สมัคร</td>
                                                <td>วันที่อนุมัติ</td>
                                                <td>สถานะรายการ</td>
                                                <td>หมายเหตุ</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wait" role="tabpanel" aria-labelledby="wait-tab">
                                <div class="table-responsive">
                                    <table id="datatables_wait" class="table table-striped display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <td>รหัสสมาชิก</td>
                                                <td>ชื่อร้าน</td>
                                                <td>ชื่อผู้ขาย</td>
                                                <td>เลขบัตรประชาชน</td>
                                                <td>วันที่สมัคร</td>
                                                <td>วันที่อนุมัติ</td>
                                                <td>สถานะรายการ</td>
                                                <td>หมายเหตุ</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="approvals" role="tabpanel" aria-labelledby="approval-tab">
                                <div class="table-responsive">
                                    <table id="datatables_approval" class="table table-striped display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <td>รหัสสมาชิก</td>
                                                <td>ชื่อร้าน</td>
                                                <td>ชื่อผู้ขาย</td>
                                                <td>เลขบัตรประชาชน</td>
                                                <td>วันที่สมัคร</td>
                                                <td>วันที่อนุมัติ</td>
                                                <td>สถานะรายการ</td>
                                                <td>หมายเหตุ</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>

                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="disapproved" role="tabpanel" aria-labelledby="disapproved-tab">
                                <div class="table-responsive">
                                    <table id="datatables_disapproved" class="table table-striped display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <td>รหัสสมาชิก</td>
                                                <td>ชื่อร้าน</td>
                                                <td>ชื่อผู้ขาย</td>
                                                <td>เลขบัตรประชาชน</td>
                                                <td>วันที่สมัคร</td>
                                                <td>วันที่อนุมัติ</td>
                                                <td>สถานะรายการ</td>
                                                <td>หมายเหตุ</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalapproval" tabindex="-1" aria-labelledby="modalapprovalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modalapprovalLabel">อนุมัติแบบเร่งด่วน</h3>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" id="approve" action="{{route('backend.approval.individual.approve')}}">
                    @csrf
                    <input type="hidden" id="supplierid" name="supplierid">
                    <div class="box__result">
                        <p class="txt__result">ผลการพิจารณา :<span>อนุมัติ</span></p>
                    </div>
                    <div class="form-group">
                        <label for="">สถานะ <span>*</span></label>
                        <select class="form-select" aria-label="Default select example" name="approvestatus" id="approvestatus" required>
                            {{-- <option  >อนุมัติ</option> --}}
                            <option value="approved">อนุมัติ</option>
                            <option value="request_approval">รออนุมัติ</option>
                            <option value="un_approve">ไม่อนุมัติ</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">หมายเหตุ</label>
                        <textarea name="txt__note" class="form-control" id="txt__note"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn__back" data-bs-dismiss="modal">ยกเลิก</button>
                <button form="approve" type="submit" class="btn btn__yes">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- Modal -->
<div class="modal fade" id="modalviewdetailapp" tabindex="-1" aria-labelledby="modalviewdetailappLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <div class="wrapper__title">
                    <div class="box__title">
                        <h3 class="modal-title" id="modalviewdetailappLabel">ข้อมูลผู้ขาย บุคคลธรรมดา</h3>
                    </div>

                    <div class="box__codenumber">
                        <p>รหัสสมาชิก <span id="showcodemember">12434345</span></p>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" id="formapprove" action="{{route('backend.approval.individual.update')}}">
                    @csrf
                    <input type="hidden" id="supplierid" name="supplierid">
                    <div class="box__detail">
                        <?php
                        $txtleft = array(
                            '1' => 'ชื่อร้าน',
                            '2' => 'ชื่อ',
                            '3' => 'นามสกุล',
                            '4' => 'อีเมล',
                            '5' => 'โทรศัพท์',
                            '6' => 'เลขบัตรประชาชน',
                            '7' => 'ที่อยู่ตามบัตรประชาชน',
                            '8' => 'ที่อยู่ร้าน',
                            '9' => 'สำเนาบัตรประชาชน',
                            '10' => 'Page Url/Facebook Url',
                            '11' => 'Google Map',
                        );

                        $txtright = array(
                            '1' => 'อะไหล่',
                            '2' => 'สมมติ',
                            '3' => 'แซ่ตัน',
                            '4' => 'emily@sample.com',
                            '5' => '012345678',
                            '6' => '12345678901234',
                            '7' => '123 หมู่ 0 ถนน เจริญกรุง ซอย 5  ตำบล ทุ่งสุลา อำเภอ ศรีราชา จังหวัด ชลบุรี 12345',
                            '8' => '123 หมู่ 0 ถนน เจริญกรุง ซอย 5  ตำบล ทุ่งสุลา อำเภอ ศรีราชา จังหวัด ชลบุรี 12345',
                            '9' => 'ดูรูปภาพ <a data-fancybox="gallery" class="btn__viewimage" href="https://lipsum.app/id/46/1600x1200"><i class="fa-solid fa-image"></i></a>',
                            '10' => 'www.facebook.com',
                            '11' => 'www.google.com ',
                        );
                        $txtid = array(
                            '1' => 'shop',
                            '2' => 'name',
                            '3' => 'surname',
                            '4' => 'email',
                            '5' => 'phone',
                            '6' => 'idcard',
                            '7' => 'addresstoidcard',
                            '8' => 'addressshop',
                            '9' => 'copyidcard',
                            '10' => 'pageurl',
                            '11' => 'gps',
                        );
                        for ($i = 1; $i <= 11; $i++) { ?>
                            <div class="itemsdetail">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="txt__left"> <?php echo $txtleft[$i]; ?> </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="txt__right" id="<?php echo $txtid[$i]; ?>"><?php echo $txtright[$i]; ?></p>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="box__status">
                        <h2 class="txt__titlestatus">ข้อมูลผู้ขาย บุคคลธรรมดา</h2>
                        <div class="form-group">
                            <label for="">สถานะ <span>*</span></label>
                            <select class="form-select" aria-label="Default select example" name="approvestatus" id="approvestatus" required>
                                {{-- <option  >อนุมัติ</option> --}}
                                <option value="approved">อนุมัติ</option>
                                <option value="request_approval">รออนุมัติ</option>
                                <option value="un_approve">ไม่อนุมัติ</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">หมายเหตุ</label>
                            <textarea name="txt__note" id="txt__note" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="wrapper__approvaldate">
                                <div class="box__date">
                                    <p>อนุมัติเมื่อ <span>dd/mm/yyyy hh:mm</span></p>
                                </div>

                                <div class="box__userapproval">
                                    <p>ผู้อนุมัติ <span>แอดมิน</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <div class="box__btn">
                    <button type="button" class="btn btn__back" data-bs-dismiss="modal">กลับ</button>
                </div>
                <div class="box__btn">
                    <button type="submit" form="formapprove" class="btn btn__yes">ยืนยัน</button>
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
				url : "{{url('backend/approvalrequest/individual/datatables')}}",
				data: function (d) {
					d.search = $('#search').val();
					d.radiodate = $('input[name="radiodate"]:checked').val();
					d.date = $('#dates').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'code', name: 'code' },
				{ 'className': "text-center", data: 'store_name', name: 'store_name' },
				{ 'className': "text-center", data: 'supplir_name', name: 'supplir_name' },
				{ 'className': "text-center", data: 'card_id', name: 'card_id' },
				{ 'className': "text-center", data: 'created_at', name: 'created_at',searchable: false },
				{ 'className': "text-center", data: 'approve_at', name: 'suppliers.approve_at',searchable: false },
				{ 'className': "text-center", data: 'status_code', name: 'suppliers.status_code',orderable: false,searchable: false },
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
		
		$('#btnsearch').click(function(e){
			oTable.draw();
			e.preventDefault();
            $("#alerttotal").text(oTable.data().count());
            if(oTable.data().count() > 0){
                $("#alerttotal").show();
            }

            oTablewait.draw();
			e.preventDefault();
            $("#alertwait").text(oTablewait.data().count());
            if(oTablewait.data().count() > 0){
                $("#alertwait").show();
            }

            oTableapproval.draw();
			e.preventDefault();
            $("#alertapproval").text(oTableapproval.data().count());
            if(oTableapproval.data().count() > 0){
                $("#alertapproval").show();
            }

            oTabledisapproved.draw();
			e.preventDefault();
            $("#alertdisapproved").text(oTabledisapproved.data().count());
            if(oTabledisapproved.data().count() > 0){
                $("#alertdisapproved").show();
            }
		});
        
		// $("#noorder").keyup(function(e){
		// 	oTable.draw();
		// 	e.preventDefault();
		// });

        var oTablewait = $('#datatables_wait').DataTable({
			processing: true,
			serverSide: true,
			searching: false,
			lengthChange: false,
            responsive: true,
            scrollX: true,
			ajax:{ 
				url : "{{url('backend/approvalrequest/individual/datatables/wait')}}",
				data: function (d) {
					d.search = $('#search').val();
					d.radiodate = $('input[name="radiodate"]:checked').val();
					d.date = $('#dates').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'code', name: 'code' },
				{ 'className': "text-center", data: 'store_name', name: 'store_name' },
				{ 'className': "text-center", data: 'supplir_name', name: 'supplir_name' },
				{ 'className': "text-center", data: 'card_id', name: 'card_id' },
				{ 'className': "text-center", data: 'created_at', name: 'created_at',searchable: false },
				{ 'className': "text-center", data: 'approve_at', name: 'suppliers.approve_at',searchable: false },
				{ 'className': "text-center", data: 'status_code', name: 'suppliers.status_code',orderable: false,searchable: false },
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
                $("#alertwait").text(oTablewait.data().count());
                if(oTablewait.data().count() > 0){
                    $("#alertwait").show();
                }
            }
		});


        var oTableapproval = $('#datatables_approval').DataTable({
			processing: true,
			serverSide: true,
			searching: false,
			lengthChange: false,
            responsive: true,
            scrollX: true,
			ajax:{ 
				url : "{{url('backend/approvalrequest/individual/datatables/approval')}}",
				data: function (d) {
					d.search = $('#search').val();
					d.radiodate = $('input[name="radiodate"]:checked').val();
					d.date = $('#dates').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'code', name: 'code' },
				{ 'className': "text-center", data: 'store_name', name: 'store_name' },
				{ 'className': "text-center", data: 'supplir_name', name: 'supplir_name' },
				{ 'className': "text-center", data: 'card_id', name: 'card_id' },
				{ 'className': "text-center", data: 'created_at', name: 'created_at',searchable: false },
				{ 'className': "text-center", data: 'approve_at', name: 'suppliers.approve_at',searchable: false },
				{ 'className': "text-center", data: 'status_code', name: 'suppliers.status_code',orderable: false,searchable: false },
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
                $("#alertapproval").text(oTableapproval.data().count());
                if(oTableapproval.data().count() > 0){
                    $("#alertapproval").show();
                }
            }
		});

        var oTabledisapproved = $('#datatables_disapproved').DataTable({
			processing: true,
			serverSide: true,
			searching: false,
			lengthChange: false,
            responsive: true,
            scrollX: true,
			ajax:{ 
				url : "{{url('backend/approvalrequest/individual/datatables/disapproved')}}",
				data: function (d) {
					d.search = $('#search').val();
					d.radiodate = $('input[name="radiodate"]:checked').val();
					d.date = $('#dates').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'code', name: 'code' },
				{ 'className': "text-center", data: 'store_name', name: 'store_name' },
				{ 'className': "text-center", data: 'supplir_name', name: 'supplir_name' },
				{ 'className': "text-center", data: 'card_id', name: 'card_id' },
				{ 'className': "text-center", data: 'created_at', name: 'created_at',searchable: false },
				{ 'className': "text-center", data: 'approve_at', name: 'suppliers.approve_at',searchable: false },
				{ 'className': "text-center", data: 'status_code', name: 'suppliers.status_code',orderable: false,searchable: false },
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
                $("#alertdisapproved").text(oTabledisapproved.data().count());
                if(oTabledisapproved.data().count() > 0){
                    $("#alertdisapproved").show();
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

            oTablewait.draw();
			e.preventDefault();
            $("#alertwait").text(oTablewait.data().count());
            if(oTablewait.data().count() > 0){
                $("#alertwait").show();
            }

            oTableapproval.draw();
			e.preventDefault();
            $("#alertapproval").text(oTableapproval.data().count());
            if(oTableapproval.data().count() > 0){
                $("#alertapproval").show();
            }

            oTabledisapproved.draw();
			e.preventDefault();
            $("#alertdisapproved").text(oTabledisapproved.data().count());
            if(oTabledisapproved.data().count() > 0){
                $("#alertdisapproved").show();
            }

        });
	});

    function viewdetail(id) {
        $.get('{{route("backend.approval.individual.getdetails")}}',{'id':id},function (result) {
            
            $('.box__codenumber #showcodemember').html(result.code); //อนุมัตเมื่อ
            $('#supplierid').val(result.id); //ID

            $('.itemsdetail #shop').html(result.store_name); //ชื่อร้าน
            $('.itemsdetail #name').html(result.personal_first_name); //ชื่อ
            $('.itemsdetail #surname').html(result.personal_last_name); //นามสกุล
            $('.itemsdetail #email').html(result.email); //อีเมล
            $('.itemsdetail #phone').html(result.phone); //โทรศัพท์
            $('.itemsdetail #idcard').html(result.personal_card_id); //เลขบัตรประชาชน
            $('.itemsdetail #addresstoidcard').html(result.personal_card_id_image); //ที่อยู่ตามบัตรประชาชน
            $('.itemsdetail #addressshop').html(result.code); //ที่อยู่ร้าน
            $('.itemsdetail #copyidcard').html(result.code); //สำเนาบัตรประชาชน
            $('.itemsdetail #pageurl').html(result.facebook_url); //Page Url/Facebook Url
            $('.itemsdetail #gps').html(result.google_map_url); //Google Map
            $('#modalviewdetailapp #approvestatus').val(result.status_code); //สถานะ
            $('#modalviewdetailapp #txt__note').val(result.comment); //หมายเหตุ
            if(result.status_code == 'approved'){
                $('.wrapper__approvaldate .box__date span').html(result.approve_at); //อนุมัตเมื่อ
                $('.wrapper__approvaldate .box__userapproval span').html(result.approve_by); //ผู้อนุมัติ
            }else{
                $('.wrapper__approvaldate').hide();
            }
            // $("#approvestatus").val(result.status_code);
            $('#modalviewdetailapp').modal('show');
            
        });
    }
    $('input[name="date"]').daterangepicker({
        // "startDate": moment().subtract(1, 'months'),
        "startDate": moment(),
        "endDate": moment(),
        locale: {
            format: 'DD/MM/Y'
        }
    }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
        $("#dates").val(start.format('YYYY-MM-DD')+','+end.format('YYYY-MM-DD'));
    });

    function approval(id) {
        var id = $(".suppliers"+id).data('id');
        var status = $(".suppliers"+id).data('status');
        var comments = $(".suppliers"+id).data('comment');
        $("#modalapproval #supplierid").val(id);
        $("#modalapproval #approvestatus").val(status);
        $("#modalapproval #txt__note").val(comments);
        var text = $("#modalapproval #approvestatus option:selected").text();
        $("#modalapproval .txt__result").html('ผลการพิจารณา :<span>'+text+'</span>');
        
        
        $('#modalapproval').modal('show');
    }
</script>
@stop