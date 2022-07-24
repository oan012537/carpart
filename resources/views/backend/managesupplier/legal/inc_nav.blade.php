<style>
    .ap-no {
        background: rgba(255, 123, 123, 0.2);
        border-radius: 8px;
        padding: 4px 20px;
        display: inline-block;
        width: 100%;
        text-align: center;
        color: #ff7b7b;
    }
    .ap-wait {
        background: rgba(242, 153, 74, 0.2);
        border-radius: 8px;
        padding: 4px 20px;
        display: inline-block;
        width: 100%;
        text-align: center;
        color: #f2994a;
    }
</style>
<div class="col-lg-md-3">
    <div class="box__profilemenu">

        <div class="box__nav">
            <ul>
                <li data-page="profile">
                    <a href="{{url('backend/manage/supplier/legal/profile')}}/{{$id}}">
                        <i class="fa fa-user" style='font-size:20px'></i> &nbsp;
                        ข้อมูลผู้ขาย
                    </a>
                </li>

                <li data-page="historyparts">
                    <a href="{{url('backend/manage/supplier/legal/historyparts')}}/{{$id}}">
                        <i class='far fa-file' style='font-size:20px'></i> &nbsp;
                        ประวัติคำขอหาอะไหล่
                    </a>
                </li>

                <li data-page="pendinglist">
                    <a href="{{url('backend/manage/supplier/legal/pendinglist')}}/{{$id}}">
                        <i class='far fa-file-alt' style='font-size:20px'></i> &nbsp;
                        รายการรอยืนยัน
                    </a>
                </li>

                <li data-page="historysales">
                    <a href="{{url('backend/manage/supplier/legal/historysales')}}/{{$id}}">
                        <i class="fa fa-shopping-cart" style='font-size:20px'></i> &nbsp;
                        ประวัติการขาย
                    </a>
                </li>

                <li data-page="claimlist">
                    <a href="{{url('backend/manage/supplier/legal/claimlist')}}/{{$id}}">
                        <i class='fas fa-exclamation-circle' style='font-size:20px'></i>
                        &nbsp; รายการเคลม
                    </a>
                </li>

                <li data-page="productlist">
                    <a href="{{url('backend/manage/supplier/legal/productlist')}}/{{$id}}">
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
                <input class="form-check-input" type="checkbox" id="flexSwitch{{$supplier->id}}" @if($supplier->is_active == '1') checked @endif onclick="switchsfn('{{$supplier->id}}')">
                <label class="form-check-label" for="flexSwitch{{$supplier->id}}" id="showstatus"> @if($supplier->is_active == '1') เปิดการใช้งาน @else ระงับการใช้งาน @endif </label>
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
                @if($supplier->status_code == 'approved')
                    <small class="status-successout"> <i class="fa fa-check-circle"></i> อนุมัติ</small>
                @elseif($supplier->status_code == 'request_approval')
                    <small class="status-successout  ap-wait"> รออนุมัติ</small>
                @elseif($supplier->status_code == 'un_approve')
                    <small class="status-successout  ap-no"> <i class="fa fa-times-circle"></i> ไม่อนุมัติ</small>
                @endif
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
                        {{$supplier->approve_at}}
                    </p>
                </div>
            </div>
        </div>
    </div>



</div>
<script>
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
            if(flexSwitch == '0'){
                $("#showstatus").html('ระงับการใช้งาน')
            }else{
                $("#showstatus").html('เปิดการใช้งาน')
            }
            
        });
    }
</script>