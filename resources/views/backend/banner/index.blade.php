@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="settingbanner">

<div class="content">

    <div class="boxbox__approvel">
        <div class="box__approvel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="txt__page">แบนเนอร์</h2>
                    </div>

                    <div class="box__filter">

                        <div class="col-12">
                            <form class="form-box-input px-2">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="title__txt">ค้นหา</label>
                                        <input type="text" class="form-control" placeholder="ระบุ">
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
                                    <div class="col-xl-6 col-md-12 col-12">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#all">
                                                    ทั้งหมด
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#sold"> กำลังใช้งาน </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#suspended">
                                                    ไมไ่ด้ใช้งาน
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-xl-6 col-md-12 col-12">
                                        <a href="{{route('backend.banner.add')}}" class="btn btn__viewdetail me-3">
                                            <i class="fa fa-plus-circle"></i>
                                            สร้างแบนเนอร์</a>
                                    </div>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="all" class="tab-pane active"><br>

                                            <div class="table-responsive form-box-input">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>

                                                            <th>ชื่อแบนเนอร์</th>
                                                            <th>จำนวนแบนเนอร์</th>
                                                            <th>ช่วงวันที่เผยแพร่</th>
                                                            <th>สถานะ</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท1</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-success">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    กำลังใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท2</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-success">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    กำลังใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท3</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-success">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    กำลังใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท4</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-success">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    กำลังใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท5</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-suspended"> <i class="fa fa-times-circle"></i> ไม่ได้ใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br><br><br><br>
                                            <div class="view-all">
                                                <div>
                                                    <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                                </div>
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                                                    <li class="page-item">1/11</li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
                                                </ul>
                                            </div>



                                        </div>


                                        <div id="sold" class="tab-pane fade"><br>



                                            <div class="table-responsive form-box-input">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>

                                                            <th>ชื่อแบนเนอร์</th>
                                                            <th>จำนวนแบนเนอร์</th>
                                                            <th>ช่วงวันที่เผยแพร่</th>
                                                            <th>สถานะ</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท1</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-success">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    กำลังใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท2</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-success">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    กำลังใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท3</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-success">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    กำลังใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท4</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-success">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    กำลังใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท5</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-success">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    กำลังใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br><br><br><br>
                                            <div class="view-all">
                                                <div>
                                                    <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                                </div>
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                                                    <li class="page-item">1/11</li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
                                                </ul>
                                            </div>



                                        </div>


                                        <div id="suspended" class="tab-pane fade"><br>


                                            <div class="table-responsive form-box-input">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>

                                                            <th>ชื่อแบนเนอร์</th>
                                                            <th>จำนวนแบนเนอร์</th>
                                                            <th>ช่วงวันที่เผยแพร่</th>
                                                            <th>สถานะ</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท1</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-suspended"> <i class="fa fa-times-circle"></i> ไม่ได้ใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท2</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-suspended"> <i class="fa fa-times-circle"></i> ไม่ได้ใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท3</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-suspended"> <i class="fa fa-times-circle"></i> ไม่ได้ใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท4</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-suspended"> <i class="fa fa-times-circle"></i> ไม่ได้ใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th>แบนเนอร์ อัพเดท5</th>
                                                            <th>การคืนสินค้า</th>
                                                            <th>15/12/2565 18.00 ถึง 15/12/2565 18.00</th>
                                                            <td class="text-center"><small class="status-suspended"> <i class="fa fa-times-circle"></i> ไม่ได้ใช้งาน</small></td>
                                                            <td><button class="btn btn-table-search">
                                                                    <i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br><br><br><br>
                                            <div class="view-all">
                                                <div>
                                                    <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                                </div>
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                                                    <li class="page-item">1/11</li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
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