@extends('backend.layouts.templates')
@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />

<input type="hidden" id="pageName" name="pageName" value="settingbanner">

<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">ตั้งค่าผู้ผลิต</h2>
                </div>

                <div class="col-12">
                    <div class="box__filter">
                        <form class="form-box-input px-2">
                            <div class="row">
                                <div class="col-3">
                                    <label class="title__txt">ค้นหา</label>
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control" placeholder="ระบุ..." name="search">
                                        <div class="btn-icon-search">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <label class="title__txt">สถานะ</label>
                                    <select class="setting-manufac form-select">
                                        <option>ทั้งหมด</option>
                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-12">
                    {{-- <div class="txt__detail_num mt-3 mt-lg-5">
                        <span>17 รายการ</span>
                    </div> --}}
                    <div class="box__table p-4">
                        <div class="col-12">
                            <div class="table-responsive form-box-input">
                                <table id="datatables" class="table table-bordered display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ชื่อแบรนด์</th>
                                            <th>วันที่แก้ไขล่าสุด</th>
                                            <th>ผู้แก้ไข</th>
                                            <th>สถานะ</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>
                                            <td>1234</td>
                                            <td>แบรนด์</td>
                                            <td>15/12/2565 18.00</td>
                                            <td>แอดมิน</td>
                                            <td><small class="status-success"><i class="fas fa-check-circle"></i> ใช้งาน</small></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                </div>
                                            </td>
                                            <td><a class="btn btn-table-edit" href=""><i class="fas fa-pencil-alt"></i></a></td>
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
                </div>
            </div>

        </div>
    </div>
</div>
@stop

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
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
				url : "{{url('backend/settingmanufac/datatables')}}",
				data: function (d) {
					d.search = $('#search').val();
					// d.lastname = $('#lastname').val();
					d.radiodate = $('input[name="radiodate"]:checked').val();
					d.date = $('#date').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'brand_id', name: 'brand_id' },
				{ 'className': "text-center", data: 'brand_name_th', name: 'brand_name_th' },
				{ 'className': "text-center", data: 'updated_at', name: 'updated_at' },
				{ 'className': "text-center", data: 'updated_for', name: 'updated_for' },
				{ 'className': "text-center", data: 'brand_active', name: 'brand_active',orderable: false,searchable: false },
				{ 'className': "text-center", data: 'changestatus', name: 'changestatus',orderable: false,searchable: false },
				{ 'className': "text-center", data: 'btnaction', name: 'btnaction',orderable: false,searchable: false },
			],
			order: [[0, 'asc']],
			rowCallback: function(row,data,index ){
				// $('td:eq(0)', row).html(index+1);
				// var status = '';
				// // if(data['product_status'] > 0){ //อันเก่า
				// if(data['status'] == 1){
				// 	// var status = '<span class="label bg-success-400">ใช้งาน</span>';
				// }else if(data['status'] == 0){
				// 	var status = '<span class="label bg-warning-400">ยกเลิก</span>';
				// }
				
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
    function changestatus(id){
        var mySwitch = $("#mySwitch"+id).is(":checked");
        var status = '0';
        if(mySwitch){
            status = '1';
        }
        $.get("{{route('backend.settingmanufac.changeactive')}}",{'status':status,'id':id},function (result) {
                toastralert(result.status,result.msg);
            });
    }
</script>
@stop