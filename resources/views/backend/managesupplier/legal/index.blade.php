@extends('backend.layouts.templates')
@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />

<input type="hidden" id="pagemenuName" name="pagemenuName" value="managesupplier">
<input type="hidden" id="pagemenuName2" name="pagemenuName2" value="managesupplierlegal">
<input type="hidden" id="navpageName" name="navpageName" value="profile">
<div class="content">

    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="txt__page">จัดการผู้ขาย : นิติบุคคล</h2>
                </div>

                <div class="col-12">
                    <div class="box__filter2">
                        <form class="form-box-input px-2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="title__txt">ค้นหา</label>
                                    <input type="text" class="form-control" placeholder="ค้นหา"
                                        aria-describedby="button-search">
                                    <button class="btn btn__search" type="button" id="button-search"></button>

                                </div>

                                <div class="col-lg-3">
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
                                    <table id="datatables" class="table table-striped  display nowrap" style="width:150%">
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
    var oTable;
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
				url : "{{route('backend.manage.supplier.legal.datatables')}}",
				data: function (d) {
					d.search = $('#search').val();
					d.status = $('#status').val();
				},
			},
			columns: [
				{ 'className': "text-center", data: 'code', name: 'code' },
				{ 'className': "text-center", data: 'supplir_name', name: 'supplir_name' },
				{ 'className': "text-center", data: 'card_id', name: 'card_id' },
				{ 'className': "text-center", data: 'usertype', name: 'usertype',orderable: false,searchable: false },
				{ 'className': "text-center", data: 'supplier_type', name: 'supplier_type' },
				{ 'className': "text-center", data: 'created_at', name: 'created_at',searchable: false },
				{ 'className': "text-center", data: 'approve_at', name: 'suppliers.approve_at',searchable: false },
				{ 'className': "text-center", data: 'is_active', name: 'is_active',searchable: false },
				{ 'className': "text-center", data: 'switchstatus', name: 'switchstatus',orderable: false,searchable: false  },
				{ 'className': "text-center", data: 'comment', name: 'comment' },
				{ 'className': "text-center", data: 'btnaction', name: 'btnaction',orderable: false,searchable: false },
			],
			order: [[0, 'asc']],
			rowCallback: function(row,data,index ){
				
				
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
            $.get("{{route('backend.manage.supplier.individual.changestatus')}}", {'id':id,'status':flexSwitch},function (data, textStatus, jqXHR) {
                if(data == 'Y'){
                    toastralert('success','ส่งsmsแจ้งเตือนเรียบร้อย');
                }else if(data == 'X'){
                    toastralert('error','เกิดข้อผิดพลาดในการส่งsms');
                }
                oTable.draw( false );
            });
        }
</script>
@stop