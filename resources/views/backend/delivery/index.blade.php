@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="delivery">
<input type="hidden" id="pageName2" name="pageName2" value="delivery">

<div class="content">

    <div class="boxbox__approvel">
        <div class="box__approvel">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-6 col-md-12 col-12">
                        <h2 class="txt__page">จัดการขนส่ง</h2>
                    </div>
                    <div class="col-xl-6 col-md-12 col-12">
                        <a href="{{route('backend.delivery.add')}}" class="btn btn_tran mt-4">
                            <i class="fa fa-plus-circle"></i>
                            เพิ่มการจัดส่ง</a>
                    </div>



                    <div class="box__filter">
                        <div class="col-12">
                            <form class="form-box-input px-2">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="title__txt">ค้นหา</label>
                                        <div class="box_b">
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    placeholder="ค้นหาชื่อผู้ขาย , เบอร์โทรศัพท์ , ชื่อขนส่ง"
                                                    aria-describedby="button-search">
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
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#all">
                                                        การจัดส่งที่รองรับโดย CPN
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#sold">
                                                        บริษัทขนส่งเอกชน (พัสดุชิ้นใหญ่) </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#suspended">
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
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>

                                                            <th>ชื่อผู้ให้บริการขนส่ง</th>
                                                            <th></th>
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
                                                        <tr>

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
                                                        </tr>
                                                        <tr>

                                                            <th> <img src="assets/img/tran/logop.png" class="img-bookbook"> </th>
                                                            <th>EMS - Thaipost</th>
                                                            <th>EMS</th>
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
                                                        </tr>
                                                        <tr>

                                                            <th> <img src="assets/img/tran/logologi.png" class="img-bookbook"> </th>
                                                            <th>CJ Logistics</th>
                                                            <th>ลงทะเบียน</th>
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
                                                        </tr>
                                                        <tr>

                                                            <th> <img src="assets/img/tran/logoni.png" class="img-bookbook"> </th>
                                                            <th>Ninjavan</th>
                                                            <th>EMS</th>
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
                                                        </tr>
                                                        <tr>

                                                            <th> <img src="assets/img/tran/logoscg.png" class="img-bookbook"> </th>
                                                            <th>SCG Yamato Express</th>
                                                            <th>แมสเซนเจอร์</th>
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
                                                            <td><a class="btn btn-table-edit" href="manage-productEdit.php">
                                                                    <i class="fas fa-pencil-alt"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>


                                        <div id="sold" class="tab-pane fade"><br>



                                            <div class="table-responsive form-box-input">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>

                                                            <th>ชื่อผู้ให้บริการขนส่ง</th>
                                                            <th></th>
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
                                                        <tr>

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
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th> <img src="assets/img/tran/logop.png"
                                                                    class="img-bookbook"> </th>
                                                            <th>EMS - Thaipost</th>
                                                            <th>EMS</th>
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
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th> <img src="assets/img/tran/logologi.png"
                                                                    class="img-bookbook"> </th>
                                                            <th>CJ Logistics</th>
                                                            <th>ลงทะเบียน</th>
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
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th> <img src="assets/img/tran/logoni.png"
                                                                    class="img-bookbook"> </th>
                                                            <th>Ninjavan</th>
                                                            <th>EMS</th>
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
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th> <img src="assets/img/tran/logoscg.png"
                                                                    class="img-bookbook"> </th>
                                                            <th>SCG Yamato Express</th>
                                                            <th>แมสเซนเจอร์</th>
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
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div id="suspended" class="tab-pane fade"><br>

                                            <div class="table-responsive form-box-input">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>

                                                            <th>ชื่อผู้ให้บริการขนส่ง</th>
                                                            <th></th>
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
                                                        <tr>

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
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th> <img src="assets/img/tran/logop.png"
                                                                    class="img-bookbook"> </th>
                                                            <th>EMS - Thaipost</th>
                                                            <th>EMS</th>
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
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th> <img src="assets/img/tran/logologi.png"
                                                                    class="img-bookbook"> </th>
                                                            <th>CJ Logistics</th>
                                                            <th>ลงทะเบียน</th>
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
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th> <img src="assets/img/tran/logoni.png"
                                                                    class="img-bookbook"> </th>
                                                            <th>Ninjavan</th>
                                                            <th>EMS</th>
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
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>

                                                            <th> <img src="assets/img/tran/logoscg.png"
                                                                    class="img-bookbook"> </th>
                                                            <th>SCG Yamato Express</th>
                                                            <th>แมสเซนเจอร์</th>
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
                                                        </tr>
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