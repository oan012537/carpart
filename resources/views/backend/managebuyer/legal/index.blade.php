@extends('backend.layouts.templates')
@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />

<input type="hidden" id="pageName" name="pageName" value="managebuyer">
<input type="hidden" id="pageName2" name="pageName2" value="managebuyerlegal">
<input type="hidden" id="navpageName" name="navpageName" value="profile">
<div class="content">

    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">จัดการผู้ซื้อ : นิติบุคคล</h2>
                </div>

                <div class="col-12">
                    <div class="box__filter2">
                        <form class="form-box-input px-2">
                            <div class="row">
                                <div class="col-4">
                                    <label class="title__txt">ค้นหา</label>
                                    <input type="text" class="form-control" placeholder="ค้นหา"
                                        aria-describedby="button-search">
                                    <button class="btn btn__search" type="button" id="button-search"></button>

                                </div>

                                <div class="col-3">
                                    <label class="title__txt">สถานะ</label>
                                    <select class="form-select" aria-label="Default select example">
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
                                    <table id="datatables" class="table table-striped" style="width:250%">
                                        <thead>
                                            <tr>
                                                <td>รหัสสมาชิก</td>
                                                <td>ชื่อโปรไฟล์</td>
                                                <td>ชื่อนิติบุคคล/บริษัท</td>
                                                <td>เลขประจำตัวผู้เสียภาษี</td>
                                                <td>ชื่อผู้ติดต่อ</td>
                                                <td>อีเมลล์</td>
                                                <td>เบอร์โทรศัพท์</td>
                                                <td>ประเภทผู้ใช้งาน</td>
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

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- <br><br><br>
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
                        </div> --}}

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
    var oTable
    $(document).ready(function(){
        $('.nav-link').on('shown.bs.tab', function (e) {
            console.log('tab');
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
				url : "{{route('backend.manage.buyer.legal.datatables')}}",
				data: function (d) {
					d.search = $('#search').val();
					d.status = $('#status').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'code', name: 'code' },
				{ 'className': "text-center", data: 'profile_name', name: 'profile_name' },
				{ 'className': "text-center", data: 'company_name', name: 'company_name' },
				{ 'className': "text-center", data: 'vat_id', name: 'vat_id' },
				{ 'className': "text-center", data: 'name', name: 'name' },
				{ 'className': "text-center", data: 'email', name: 'email' },
				{ 'className': "text-center", data: 'phone', name: 'phone' },
				{ 'className': "text-center", data: 'usertype', name: 'usertype',orderable: false,searchable: false  },
				{ 'className': "text-center", data: 'type', name: 'type' },
				{ 'className': "text-center", data: 'created_at', name: 'created_at',searchable: false },
				{ 'className': "text-center", data: 'approve_at', name: 'suppliers.approve_at',searchable: false },
				{ 'className': "text-center", data: 'is_active', name: 'is_active',searchable: false },
				{ 'className': "text-center", data: 'switchstatus', name: 'switchstatus',orderable: false,searchable: false  },
				{ 'className': "text-center", data: 'comment', name: 'comment' },
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

    function switchsfn(id) {
            
        var flexSwitch = $("#flexSwitch"+id).is(":checked");
        console.log(id);
        console.log(flexSwitch);
        // return  false;
        if(flexSwitch){
            flexSwitch = '1';
        }else{
            flexSwitch = '0';
        }
        $.get("{{route('backend.manage.buyer.changestatus')}}", {'id':id,'status':flexSwitch},function (data, textStatus, jqXHR) {
            oTable.draw( false );
        });
    }
</script>
@stop