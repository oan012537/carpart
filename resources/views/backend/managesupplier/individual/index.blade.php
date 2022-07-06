@extends('backend.layouts.templates')
@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />

<input type="hidden" id="pageName" name="pageName" value="managesupplier">
<input type="hidden" id="pageName2" name="pageName2" value="managesupplierindividual">
<div class="content">

    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">จัดการผู้ขาย : บุคคลธรรมดา</h2>
                </div>

                <div class="col-12">
                    <div class="box__filter2">
                        <form class="form-box-input px-2">
                            <div class="row">
                                <div class="col-4">
                                    <label class="title__txt">ค้นหา</label>
                                    <input type="text" class="form-control" placeholder="ค้นหา"
                                        aria-describedby="button-search" id="search">
                                    <button class="btn btn__search" type="button" id="button-search"></button>

                                </div>

                                <div class="col-3">
                                    <label class="title__txt">สถานะ</label>
                                    <select class="form-select" aria-label="Default select example" id="status">
                                        <option selected=""> ระบุ</option>
                                    </select>
                                </div>
                            </div>
                    </div>


                </div>

                <div class="col-12">
                    <div class="box__table">

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="total" role="tabpanel"
                                aria-labelledby="total-tab">
                                <div class="table-responsive">
                                    <table id="table-user" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <td>รหัสสมาชิก</td>
                                                <td>ชื่อ-นามสกุลผู้ขาย</td>
                                                <td>เลขบัตรประชาชน</td>
                                                <td>ประเภทผูู้ใช้งาน</td>
                                                <td>ประเภทสมาชิก</td>
                                                <td>วันที่สมัคร</td>
                                                <td>วันที่อนุมัติ</td>
                                                <td>สถานะ</td>
                                                <td></td>
                                                <td>หมายเหตุ</td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 1; $i <= 10; $i++) { ?>
                                            <tr>
                                                <td>1234</td>
                                                <td>ชื่อ-นามสกุล</td>
                                                <td>1234567890123</td>
                                                <td>ผู้ชาย</td>
                                                <td>บุคคลธรรมดา</td>
                                                <td>15/12/2565 18.00</td>
                                                <td>15/12/2565 18.00</td>
                                                <td>
                                                    <?php if ($i == 1 || $i == 2 || $i == 4 || $i == 5 
                                                        || $i == 7 || $i == 8 || $i == 9 || $i == 10) { ?>
                                                    <div class="approvel ap-success">
                                                        <p> <i class="fa fa-check-circle"></i> ใช้งาน</p>
                                                    </div>

                                                    <?php } else { ?>
                                                    <div class="approvel ap-no">
                                                        <p>ระงับการใช้งาน</p>
                                                    </div>

                                                    <?php   }  ?>
                                                </td>

                                                <td>
                                                    <?php if ($i == 1 || $i == 2 || $i == 4 || $i == 5 
                                                        || $i == 7 || $i == 8 || $i == 9 || $i == 10) { ?>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckChecked" checked>

                                                        <?php } else { ?>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckDefault">
                                                        </div>

                                                        <?php   }  ?>
                                                </td>

                                                <td>
                                                    <div class="box__btn">

                                                        <div class="box__status <?php if ($i == 1 || $i == 2 || $i == 4 || $i == 5 
                                                        || $i == 7 || $i == 8 || $i == 9 || $i == 10) {
                                                                            echo 'status-success';
                                                                        } else if ($i == 3 || $i == 6) {
                                                                            echo 'status-waiting';
                                                                        } ?>">
                                                            <?php if ($i == 1 || $i == 2 || $i == 4 || $i == 5 
                                                        || $i == 7 || $i == 8 || $i == 9 || $i == 10) {
                                                        echo '<p> - </p>';
                                                    } else if ($i == 3 || $i == 6) {
                                                        echo '<p> ผิดกฏ </p>';
                                                    } ?>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="bux-bb-but">
                                                        <a class="btn btn-table-edit" href="{{url('backend/manage/supplier/individual/profile/1')}}">
                                                            <i class="fas fa-pencil-alt"></i> </a>
                                                    </div>
                                                </td>



                                            </tr>
                                            <?php } ?>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <br><br><br>
                        <div class="view-all">
                            <div>
                                <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                            </div>
                            <ul class="pagination justify-content-end">
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i
                                            class="fas fa-chevron-left"></i></a></li>
                                <li class="page-item">1/11</li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i
                                            class="fas fa-chevron-right"></i></a></li>
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
{{-- <script src="{{asset('daterangepicker-master/daterangepicker.js')}}"></script> --}}
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
				url : "{{route('backend.manage.supplier.individual.datatables')}}",
				data: function (d) {
					d.search = $('#search').val();
					d.status = $('#status').val();
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
		
		$('#btnsearch').click(function(e){
			oTable.draw();
			e.preventDefault();
            $("#alerttotal").text(oTable.data().count());
            if(oTable.data().count() > 0){
                $("#alerttotal").show();
            }
		});
        
		// $("#noorder").keyup(function(e){
		// 	oTable.draw();
		// 	e.preventDefault();
		// });

        $("#search").keyup(function (e) { 
            oTable.draw();
			e.preventDefault();
            $("#alerttotal").text(oTable.data().count());
            if(oTable.data().count() > 0){
                $("#alerttotal").show();
            }

            
        });
	});

    function viewdetail(id) {
        $.get('{{route("backend.approval.legal.getdetails")}}',{'id':id},function (result) {
            
            $('.box__codenumber #showcodemember').text(); //อนุมัตเมื่อ
            $('.box__codenumber #supplierid').val(); //อนุมัตเมื่อ

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