<div class="col-md-3">
    <div class="box__profilemenu">

        <div class="box__nav">
            <ul>
                <li data-page="profile">
                    <a href="{{url('backend/manage/supplier/individual/profile')}}/{{$id}}">
                        <i class="fa fa-user" style='font-size:20px'></i> &nbsp;
                        ข้อมูลผู้ขาย
                    </a>
                </li>

                <li data-page="historyparts">
                    <a href="{{url('backend/manage/supplier/individual/historyparts')}}/{{$id}}">
                        <i class='far fa-file' style='font-size:20px'></i> &nbsp;
                        ประวัติคำขอหาอะไหล่
                    </a>
                </li>

                <li data-page="pendinglist">
                    <a href="{{url('backend/manage/supplier/individual/pendinglist')}}/{{$id}}">
                        <i class='far fa-file-alt' style='font-size:20px'></i> &nbsp;
                        รายการรอยืนยัน
                    </a>
                </li>

                <li data-page="historysales">
                    <a href="{{url('backend/manage/supplier/individual/historysales')}}/{{$id}}">
                        <i class="fa fa-shopping-cart" style='font-size:20px'></i> &nbsp;
                        ประวัติการขาย
                    </a>
                </li>

                <li data-page="claimlist">
                    <a href="{{url('backend/manage/supplier/individual/claimlist')}}/{{$id}}">
                        <i class='fas fa-exclamation-circle' style='font-size:20px'></i>
                        &nbsp; รายการเคลม
                    </a>
                </li>

                <li data-page="productlist">
                    <a href="{{url('backend/manage/supplier/individual/productlist')}}/{{$id}}">
                        <i class='fas fa-box' style='font-size:20px'></i> &nbsp;
                        รายการสินค้า
                    </a>
                </li>
                </ul>
        </div>
    </div>


    <div class="box_swithonline">
        <div class="txt_online">
            <p>
                การใช้งาน
            </p>
        </div>

        <div class="txt_sw_txt">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                    checked>
                <label class="form-check-label" for="flexSwitchCheckDefault"> เปิดการใช้งาน
                </label>
            </div>
        </div>

        <div class="txt_online">
            <p>
                หมายเหตุ
            </p>
        </div>

        <input type="text" class="form-control" id="" placeholder="-">
    </div>






    <div class="box_boxstatus">
        <div class="row">
            <div class="col-4">
                <div class="txt_online">
                    <p>
                        สถานะ
                    </p>
                </div>

            </div>
            <div class="col-8">
                <small class="status-successout"> <i class="fa fa-check-circle"></i> อนุมัติ
                </small>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="txt_online">
                    <p>
                        วันที่อนุมัติ
                    </p>
                </div>

            </div>
            <div class="col-8">
                <div class="txt_date-txt">
                    <p>
                        14/12/2565 18.00
                    </p>
                </div>
            </div>
        </div>
    </div>



</div>