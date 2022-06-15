@extends('backend.layouts.templates')
@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
<input type="hidden" id="pageName" name="pageName" value="approval">
<input type="hidden" id="pageName2" name="pageName2" value="approval-individual">

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
                                            <input class="form-check-input" type="radio" name="radiodate" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                วันที่สมัคร
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radiodate" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                วันที่อนุมัติ
                                            </label>
                                        </div>
                                    </div>

                                    <div class="box__search">
                                        <label for="">ช่วงวัน-เวลา</label>
                                        <div class="input-group ">
                                            <input type="date" class="form-control" placeholder="Recipient's username" aria-describedby="button-yes"  name="date" id="date">
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
                                    <button class="nav-link active" id="total-tab" data-bs-toggle="tab" data-bs-target="#total" type="button" role="tab" aria-controls="total" aria-selected="true">ทั้งหมด <span class="circle" id="alerttotal"> 1234</span></button>
                                    <button class="nav-link" id="wait-tab" data-bs-toggle="tab" data-bs-target="#wait" type="button" role="tab" aria-controls="wait" aria-selected="false">รออนุมัติ <span class="circle" id="alertwait"> 14</span></button>
                                    <button class="nav-link" id="approval-tab" data-bs-toggle="tab" data-bs-target="#approval" type="button" role="tab" aria-controls="approval" aria-selected="false">อนุมัติแล้ว <span class="circle" id="alertapproval"> 34</span></button>
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
                                                <?php for ($i = 1; $i <= 35; $i++) { ?>
                                                    <tr>
                                                        <td>A23456781</td>
                                                        <td>ชื่อ</td>
                                                        <td>ชื่อจริง นามสกุล</td>
                                                        <td>12345677889901</td>
                                                        <td>15/15/2560 18.00</td>
                                                        <td>15/15/2560 18.00</td>
                                                        <td>
                                                            <?php if ($i <= 3) { ?>
                                                                <div class="approvel ap-success">
                                                                    <p>อนุมัติ</p>
                                                                </div>
                                                            <?php } elseif ($i > 3 && $i < 6) { ?>
                                                                <div class="approvel ap-wait">
                                                                    <p>รออนุมัติ</p>
                                                                </div>

                                                            <?php } else { ?>
                                                                <div class="approvel ap-no">
                                                                    <p>ไม่อนุมัติ</p>
                                                                </div>

                                                            <?php   }  ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($i <= 3) { ?>
                                                                <p class="txt__note">-</p>
                                                            <?php } else { ?>
                                                                <p class="txt__note">เอกสารไม่ชัด</p>
                                                            <?php   }  ?>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="btn btn__viewdetail" data-bs-toggle="modal" data-bs-target="#modalviewdetailapp">ดูรายละเอียด</a></td>
                                                        <td>
                                                            <div class="box__btn">
                                                                <button class="btn btn__app <?php if ($i == 1) {
                                                                                                echo 'btn__approval';
                                                                                            } ?>" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
                                                                <button class="btn btn__app  <?php if ($i == 1) {
                                                                                                    echo 'btn__waitapproval';
                                                                                                } ?>">รออนุมัติ</button>
                                                                <button class="btn btn__app  <?php if ($i == 1) {
                                                                                                    echo 'btn__noapproval';
                                                                                                } ?>">ไม่อนุมัติ</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

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
                                                <?php for ($i = 1; $i <= 35; $i++) { ?>
                                                    <tr>
                                                        <td>A23456781</td>
                                                        <td>ชื่อ</td>
                                                        <td>ชื่อจริง นามสกุล</td>
                                                        <td>12345677889901</td>
                                                        <td>15/15/2560 18.00</td>
                                                        <td>15/15/2560 18.00</td>
                                                        <td>
                                                            <div class="approvel ap-wait">
                                                                <p>รออนุมัติ</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php if ($i <= 3) { ?>
                                                                <p class="txt__note">-</p>
                                                            <?php } else { ?>
                                                                <p class="txt__note">เอกสารไม่ชัด</p>
                                                            <?php   }  ?>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="btn btn__viewdetail" data-bs-toggle="modal" data-bs-target="#modalviewdetailapp">ดูรายละเอียด</a></td>
                                                        <td>
                                                            <div class="box__btn">
                                                                <button class="btn btn__app <?php if ($i == 1) {
                                                                                                echo 'btn__approval';
                                                                                            } ?>" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
                                                                <button class="btn btn__app  <?php if ($i == 1) {
                                                                                                    echo 'btn__waitapproval';
                                                                                                } ?>">รออนุมัติ</button>
                                                                <button class="btn btn__app  <?php if ($i == 1) {
                                                                                                    echo 'btn__noapproval';
                                                                                                } ?>">ไม่อนุมัติ</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="approval" role="tabpanel" aria-labelledby="approval-tab">
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
                                                <?php for ($i = 1; $i <= 35; $i++) { ?>
                                                    <tr>
                                                        <td>A23456781</td>
                                                        <td>ชื่อ</td>
                                                        <td>ชื่อจริง นามสกุล</td>
                                                        <td>12345677889901</td>
                                                        <td>15/15/2560 18.00</td>
                                                        <td>15/15/2560 18.00</td>
                                                        <td>
                                                            <div class="approvel ap-success">
                                                                <p>อนุมัติ</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php if ($i <= 3) { ?>
                                                                <p class="txt__note">-</p>
                                                            <?php } else { ?>
                                                                <p class="txt__note">เอกสารไม่ชัด</p>
                                                            <?php   }  ?>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="btn btn__viewdetail" data-bs-toggle="modal" data-bs-target="#modalviewdetailapp">ดูรายละเอียด</a></td>
                                                        <td>
                                                            <div class="box__btn">
                                                                <button class="btn btn__app <?php if ($i == 1) {
                                                                                                echo 'btn__approval';
                                                                                            } ?>" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
                                                                <button class="btn btn__app  <?php if ($i == 1) {
                                                                                                    echo 'btn__waitapproval';
                                                                                                } ?>">รออนุมัติ</button>
                                                                <button class="btn btn__app  <?php if ($i == 1) {
                                                                                                    echo 'btn__noapproval';
                                                                                                } ?>">ไม่อนุมัติ</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

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
                    <div class="box__result">
                        <p class="txt__result">ผลการพิจารณา :<span>ไม่ผ่าน</span></p>
                    </div>

                    <div class="form-group">
                        <label for="">หมายเหตุ</label>
                        <textarea name="txt__note" class="form-control" id="txt__note"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn__back" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="button" class="btn btn__yes">ยืนยัน</button>
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
                            <select class="form-select" aria-label="Default select example" name="status" id="status" disabled>
                                {{-- <option  >อนุมัติ</option> --}}
                                <option value="1" selected>อนุมัติ</option>
                                <option value="2">รออนุมัติ</option>
                                <option value="3">ไม่อนุมัติ</option>
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




                    <div class="modal-footer">
                        <div class="box__btn">
                            <button type="button" class="btn btn__back" data-bs-dismiss="modal">กลับ</button>
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
<script>
    $(document).ready(function(){
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
					// d.lastname = $('#lastname').val();
					d.radiodate = $('input[name="radiodate"]:checked').val();
					d.date = $('#date').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'id', name: 'id' },
				{ 'className': "text-center", data: 'name', name: 'name' },
				{ 'className': "text-center", data: 'id', name: 'id' },
				{ 'className': "text-center", data: 'email', name: 'email' },
				{ 'className': "text-center", data: 'phone', name: 'phone' },
				{ 'className': "text-center", data: 'updated_at', name: 'updated_at' },
				{ 'className': "text-center", data: 'status', name: 'status',orderable: false,searchable: false },
				{ 'className': "text-center", data: 'updated_at', name: 'updated_at' },
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
                $("#alerttotal").text(oTable.data().count());
            }
		});
		
		$('#btnsearch').click(function(e){
			oTable.draw();
			e.preventDefault();
            $("#alerttotal").text(oTable.data().count());
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
					d.name = $('#name').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'id', name: 'id' },
				{ 'className': "text-center", data: 'name', name: 'name' },
				{ 'className': "text-center", data: 'id', name: 'id' },
				{ 'className': "text-center", data: 'email', name: 'email' },
				{ 'className': "text-center", data: 'phone', name: 'phone' },
				{ 'className': "text-center", data: 'updated_at', name: 'updated_at' },
				{ 'className': "text-center", data: 'status', name: 'status',orderable: false,searchable: false },
				{ 'className': "text-center", data: 'updated_at', name: 'updated_at' },
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
                $("#alertwait").text(oTable.data().count());
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
					d.name = $('#name').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'id', name: 'id' },
				{ 'className': "text-center", data: 'name', name: 'name' },
				{ 'className': "text-center", data: 'id', name: 'id' },
				{ 'className': "text-center", data: 'email', name: 'email' },
				{ 'className': "text-center", data: 'phone', name: 'phone' },
				{ 'className': "text-center", data: 'updated_at', name: 'updated_at' },
				{ 'className': "text-center", data: 'status', name: 'status',orderable: false,searchable: false },
				{ 'className': "text-center", data: 'updated_at', name: 'updated_at' },
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
                $("#alertapproval").text(oTable.data().count());
            }
		});
	});

    function viewdetail(id) {
        $.get('{{route("backend.approval.legal.getdetails")}}',{'id':id},function (result) {
            
            $('.box__codenumber #showcodemember').text(); //อนุมัตเมื่อ

            $('.itemsdetail .txt__right #shop').text(); //ชื่อร้าน
            $('.itemsdetail .txt__right #name').text(); //ชื่อ
            $('.itemsdetail .txt__right #surname').text(); //นามสกุล
            $('.itemsdetail .txt__right #email').text(); //อีเมล
            $('.itemsdetail .txt__right #phone').text(); //โทรศัพท์
            $('.itemsdetail .txt__right #idcard').text(); //เลขบัตรประชาชน
            $('.itemsdetail .txt__right #addresstoidcard').text(); //ที่อยู่ตามบัตรประชาชน
            $('.itemsdetail .txt__right #addressshop').text(); //ที่อยู่ร้าน
            $('.itemsdetail .txt__right #copyidcard').text(); //สำเนาบัตรประชาชน
            $('.itemsdetail .txt__right #pageurl').text(); //Page Url/Facebook Url
            $('.itemsdetail .txt__right #gps').text(); //Google Map
            $('.box__status #status').text(); //สถานะ
            $('.box__status #txt__note').text(); //หมายเหตุ

            $('.wrapper__approvaldate .box__date span').text(); //อนุมัตเมื่อ
            $('.wrapper__approvaldate .box__userapproval span').text(); //ผู้อนุมัติ
        });
    }
</script>
@stop