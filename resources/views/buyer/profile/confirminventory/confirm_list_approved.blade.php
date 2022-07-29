@foreach($confirminventories_approved as $confirm_approved )
<div class="box__content">
    <div class="row">
        <div class="col-8">
            <p class="txt__title">หมายเลขคำร้องยืนยันความพร้อมของสินค้า :
                <!-- ABC123343545  -->
                {{ $confirm_approved ->id }}
            </p>
            <p class="txt__date">วันที่สั่งซื้อ 
                <!-- 15/12/2564 -->
                {{ date('d/m/Y', strtotime($confirm_approved->pending_date."+543 years")) }}
            </p>
        </div>
        <div class="col-4">
            @php 
                $box_status_class = "";
                switch($confirm_approved ->status){
                    case "pending" : $box_status_class = "status-waiting";
                                    $box_status_text = "สถานะ : รอตรวจสอบ";
                        break;
                    case "approved" : $box_status_class = "status-success";
                                    $box_status_text = "สถานะ : ได้รับการยืนยัน";
                        break;  
                    case "canceled" : $box_status_class = "status-close";
                                    $box_status_text = "สถานะ : ยกเลิก";
                        break; 
                }
            @endphp
            <div class="box__sta {{ $box_status_class }}">
                <p>{{ $box_status_text }}</p>
            </div>
        </div>
    </div>

    <hr class="underline">
    <div class="row">
        <div class="col-2">
            @php 
                $product_image = DB::table('product_images')
                    ->where('product_id',$confirm_approved->product_id)
                    ->orderBy('line_item_no', 'asc')
                    ->first();

                $image_name = "assets/img/createrequest/imagenull-2.png";
                if(!is_null($product_image)){
                    $image_name = "assets/img/prodetail/".$product_image->image ;     
                }       
            @endphp
            <div class="box__image">
                <img src="{{ asset($image_name) }}"
                    class="img-fluid" alt="{{ $confirm_approved->product_name }}">
            </div>
        </div>
        <div class="col-10">
            <p class="txt__name">{{ $confirm_approved->product_name }}</p>
            <div class="txt_txt_detail">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="txt__detail"> <i
                                        class="fa-solid fa-circle-question"></i>
                                    เช็คสต็อก </p>
                            </div>
                            <div class="col-lg-5">
                                <p class="txt__detail2"> <i
                                        class="fa-solid fa-circle-question"></i>
                                    ตรวจ Caution Plate </p>
                            </div>
                            <div class="col-lg-4">
                                @if($confirm_approved ->request_vdo == 'yes')
                                    <p class="txt__detail3"> 
                                        <i class="fa-solid fa-circle-question"></i>
                                        ขอวีดีโอ 
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
    </div>
    <hr class="underline">
    <div class="row">
        <div class="col-6">
            <div class="box__btn">
                <a href="{{ url('buyer/myaccount/confirminventory/confirmapproved/show', $confirm_approved->id) }}">
                    <button class="btn btn__viewall">
                        ดูข้อมูลรายละเอียด
                    </button>
                </a>
                <button class="btn btn__closerequst">ยกเลิก</button>
            </div>
        </div>
        <div class="col-6">

            <p class="txt__problem">
                ยอดคำสั่งซื้อทั้งหมด: &nbsp;<span class="txt__price"> ฿ {{ number_format($confirm_approved->product_price,2) }} </span>
            </p>

        </div>
    </div>
</div>
@endforeach