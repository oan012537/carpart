@extends('backend.layouts.templates')
@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
<style>
    .img-delivery {
        width: 100%;
        height: 40px;
    }
</style>
<input type="hidden" id="pageName" name="pageName" value="delivery">
<input type="hidden" id="pageName2" name="pageName2" value="delivery">

<div class="content">

    <div class="boxbox__approvel">
        <div class="box__approvel box__transport">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-6 col-md-6 col-12">
                        <h2 class="txt__page">จัดการขนส่ง</h2>
                    </div>
                    <div class="col-xl-6 col-md-6 col-12">
                        <a href="{{route('backend.delivery.add')}}" class="btn btn_tran mt-4">
                            <i class="fa fa-plus-circle"></i>
                            เพิ่มการจัดส่ง</a>
                    </div>



                    <div class="box__filter">
                        <div class="col-12">
                            <form class="form-box-input px-2">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                                        <label class="title__txt">ค้นหา</label>
                                        <div class="box_b">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="ค้นหาชื่อผู้ขาย , เบอร์โทรศัพท์ , ชื่อขนส่ง" aria-describedby="button-search" id="search">
                                                <button class="btn btn__search" type="button" id="button-search">
                                                    <i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <br>
                    <div class="box_banner2">
                        <div class="row">
                            <div class="col-12">
                                <div class="box__table p-4 row">
                                    <div class="col-xl-8 col-md-12 col-12">
                                        <nav>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#all" data-table="oTable">
                                                        การจัดส่งที่รองรับโดย CPN
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#large" data-table="oTablelarge">
                                                        บริษัทขนส่งเอกชน (พัสดุชิ้นใหญ่) </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#customseller" data-table="" oTablecustomseller>
                                                        ผู้ขายกำหนดเอง
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>


                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="all" class="tab-pane active"><br>

                                            <div class="table-responsive form-box-input">
                                                <table id="datatables" class="table table-bordered nowrap" style="width:100%">
                                                    <thead>
                                                        <tr>

                                                            <th>ภาพขนส่ง</th>
                                                            <th>ชื่อผู้ให้บริการขนส่ง</th>
                                                            <th>ประเภทการจัดส่ง</th>
                                                            <th>ระยะเวลาในการจัดส่ง</th>
                                                            <th>ข้อจำกัดน้ำหนัก</th>
                                                            <th>การรับประกัน</th>
                                                            <th>สถานะ</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {{-- <tr>

                                                            <th> <img src="assets/img/tran/logof.png" class="img-bookbook"> </th>
                                                            <th>Flash Express</th>
                                                            <th>ส่งด่วน</th>
                                                            <th>กทม x-x วัน/ตจว x-x </th>
                                                            <th>xx กก. </th>
                                                            <th>มี </th>
                                                            <td class="text-center"><small class="status-success">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    กำลังใช้งาน</small></td>
                                                            <th>
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                                </div>
                                                            </th>
                                                            <td><a class="btn btn-table-edit" href="manage-productEdit.php">
                                                                    <i class="fas fa-pencil-alt"></i></a>
                                                            </td>
                                                        </tr> --}}
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>


                                        <div id="large" class="tab-pane fade"><br>



                                            <div class="table-responsive form-box-input">
                                                <table id="datatableslarge" class="table table-bordered display nowrap" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>ภาพขนส่ง</th>
                                                            <th>ชื่อผู้ให้บริการขนส่ง</th>
                                                            <th>ประเภทการจัดส่ง</th>
                                                            <th>ระยะเวลาในการจัดส่ง</th>
                                                            <th>ข้อจำกัดน้ำหนัก</th>
                                                            <th>การรับประกัน</th>
                                                            <th>สถานะ</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {{-- <tr>

                                                            <th> <img src="assets/img/tran/logof.png"
                                                                    class="img-bookbook"> </th>
                                                            <th>Flash Express</th>
                                                            <th>ส่งด่วน</th>
                                                            <th>กทม x-x วัน/ตจว x-x </th>
                                                            <th>xx กก. </th>
                                                            <th>มี </th>
                                                            <td class="text-center"><small class="status-success">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    กำลังใช้งาน</small></td>
                                                            <th>
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        role="switch" id="flexSwitchCheckChecked"
                                                                        checked>
                                                                </div>
                                                            </th>
                                                            <td><a class="btn btn-table-edit"
                                                                    href="manage-productEdit.php">
                                                                    <i class="fas fa-pencil-alt"></i></a>
                                                            </td>
                                                        </tr> --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div id="customseller" class="tab-pane fade"><br>

                                            <div class="table-responsive form-box-input">
                                                <table id="datatablescustomseller" class="table table-bordered display nowrap" style="width:100%">
                                                    <thead>
                                                        <tr>

                                                            <th>ภาพขนส่ง</th>
                                                            <th>ชื่อผู้ให้บริการขนส่ง</th>
                                                            <th>ประเภทการจัดส่ง</th>
                                                            <th>ระยะเวลาในการจัดส่ง</th>
                                                            <th>ข้อจำกัดน้ำหนัก</th>
                                                            <th>การรับประกัน</th>
                                                            <th>สถานะ</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {{-- <tr>

                                                            <th> <img src="assets/img/tran/logof.png"
                                                                    class="img-bookbook"> </th>
                                                            <th>Flash Express</th>
                                                            <th>ส่งด่วน</th>
                                                            <th>กทม x-x วัน/ตจว x-x </th>
                                                            <th>xx กก. </th>
                                                            <th>มี </th>
                                                            <td class="text-center"><small class="status-success">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    กำลังใช้งาน</small></td>
                                                            <th>
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        role="switch" id="flexSwitchCheckChecked"
                                                                        checked>
                                                                </div>
                                                            </th>
                                                            <td><a class="btn btn-table-edit"
                                                                    href="manage-productEdit.php">
                                                                    <i class="fas fa-pencil-alt"></i></a>
                                                            </td>
                                                        </tr> --}}
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
    var oTable;
    var oTablelarge;
    var oTablecustomseller;
    $(document).ready(function() {
        $('.nav-link').on('shown.bs.tab', function(e) {
            console.log('tab');
            $.fn.dataTable.tables({
                visible: true,
                api: true
            }).columns.adjust();
        });
        oTable = $('#datatables').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            lengthChange: false,
            responsive: true,
            scrollX: true,
            ajax: {
                url: "{{url('backend/delivery/datatables')}}",
                data: function(d) {
                    d.search = $('#search').val();
                },
            },
            columns: [{
                    'className': "text-center",
                    data: 'image',
                    name: 'image',
                    orderable: false,
                    searchable: false
                },
                {
                    'className': "text-center",
                    data: 'name',
                    name: 'name'
                },
                {
                    'className': "text-center",
                    data: 'type',
                    name: 'type'
                },
                {
                    'className': "text-center",
                    data: 'timeinbkk',
                    name: 'timeinbkk',
                    orderable: false
                },
                {
                    'className': "text-center",
                    data: 'weight',
                    name: 'weight'
                },
                {
                    'className': "text-center",
                    data: 'warranty',
                    name: 'warranty'
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
                    data: 'switchstatus',
                    name: 'switchstatus',
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
                [1, 'asc']
            ],
            rowCallback: function(row, data, index) {

            }
        });

        oTablelarge = $('#datatableslarge').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            lengthChange: false,
            responsive: true,
            scrollX: true,
            ajax: {
                url: "{{url('backend/delivery/datatables/large')}}",
                data: function(d) {
                    d.search = $('#search').val();
                },
            },
            columns: [{
                    'className': "text-center",
                    data: 'image',
                    name: 'image',
                    orderable: false,
                    searchable: false
                },
                {
                    'className': "text-center",
                    data: 'name',
                    name: 'name'
                },
                {
                    'className': "text-center",
                    data: 'type',
                    name: 'type'
                },
                {
                    'className': "text-center",
                    data: 'timeinbkk',
                    name: 'timeinbkk',
                    orderable: false
                },
                {
                    'className': "text-center",
                    data: 'weight',
                    name: 'weight'
                },
                {
                    'className': "text-center",
                    data: 'warranty',
                    name: 'warranty'
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
                    data: 'switchstatus',
                    name: 'switchstatus',
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
                [1, 'asc']
            ],
            rowCallback: function(row, data, index) {


            }
        });

        oTablecustomseller = $('#datatablescustomseller').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            lengthChange: false,
            responsive: true,
            scrollX: true,
            ajax: {
                url: "{{url('backend/delivery/datatables/customseller')}}",
                data: function(d) {
                    d.search = $('#search').val();
                },
            },
            columns: [{
                    'className': "text-center",
                    data: 'image',
                    name: 'image',
                    orderable: false,
                    searchable: false
                },
                {
                    'className': "text-center",
                    data: 'name',
                    name: 'name'
                },
                {
                    'className': "text-center",
                    data: 'type',
                    name: 'type'
                },
                {
                    'className': "text-center",
                    data: 'timeinbkk',
                    name: 'timeinbkk',
                    orderable: false
                },
                {
                    'className': "text-center",
                    data: 'weight',
                    name: 'weight'
                },
                {
                    'className': "text-center",
                    data: 'warranty',
                    name: 'warranty'
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
                    data: 'switchstatus',
                    name: 'switchstatus',
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
                [1, 'asc']
            ],
            rowCallback: function(row, data, index) {


            }
        });



        $("#search").keyup(function(e) {
            oTable.draw();
            oTablelarge.draw();
            oTablecustomseller.draw();
        });
    });

    function switchstatus(id) {
        // console.log($(".active").data('table'));
        var flexSwitch = $("#flexSwitchCheckChecked" + id).is(":checked");
        // return  false;
        if (flexSwitch) {
            flexSwitch = '1';
        } else {
            flexSwitch = '0';
        }
        $.get("{{route('backend.delivery.changestatus')}}", {
            'id': id,
            'status': flexSwitch
        }, function(data, textStatus, jqXHR) {
            // var checktable = $(".active").data('table');
            oTable.draw(false);
            oTablelarge.draw(false);
            oTablecustomseller.draw(false);
        });
    }
</script>
@stop
