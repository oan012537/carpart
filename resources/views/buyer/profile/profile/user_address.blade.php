@foreach($buyer_profiles as $key => $buyerprofile)
    @php 
        $profile_checked = "";
        $delivery_checked = "";

        if($buyerprofile->is_profile == 1){
            $profile_checked = "checked";
        }

        if($buyerprofile->is_delivery == 1){
            $delivery_checked = "checked";
        }
        
    @endphp
<div class="box__content">
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <label class="b-bank2"> ตั้งเป็นที่อยู่โปรไฟล์
                        <input type="radio" name="profile_checked" {{ $profile_checked }}>
                        <span class="checkmark2"></span>
                    </label>
                </div>
                <div class="col-lg-6">
                    <label class="b-bank3"> ตั้งเป็นที่อยู่จัดส่ง
                        <input type="radio" name="delivery_checked" {{ $delivery_checked }}>
                        <span class="checkmark3"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ac-detail-text-tt2">
                <a href="#">
                    <p onclick="document.getElementById('id06').style.display='block'"
                        class="w3-button w3-black"> <i class="fas fa-pen"
                            style="font-size:18px"></i> &nbsp;
                        แก้ไข </p>
                </a>
            </div>
            <div class="ttext-delate">
                <a href="#">
                    <p> ลบ </p>
                </a>
            </div>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-lg-2">
            <div class="h-text-h">
                <p>
                    ชื่อ-นามสกุล
                </p>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="detail-text-detail">
                <p>
                    @php 
                        $name_user = $buyerprofile->first_name." ".$buyerprofile->last_name;
                    @endphp
                    {{ ($name_user == "" || $name_user == null) ? '-' : $name_user }}
                </p>
            </div>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-lg-2">
            <div class="h-text-h">
                <p>
                    โทรศัพท์
                </p>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="detail-text-detail">
                <p>
                    {{ (is_null($buyerprofile->phone) ? '-' : $buyerprofile->phone) }}
                </p>
            </div>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-lg-2">
            <div class="h-text-h">
                <p>
                    อีเมล
                </p>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="detail-text-detail">
                <p>
                    {{ (is_null($user_buyer->email) ? '-' : $user_buyer->email) }}
                </p>
            </div>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-lg-2">
            <div class="h-text-h">
                <p>
                    ที่อยู่
                </p>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="detail-text-detail">
                <p>
                    {{ $buyerprofile->address }} 
                    {{ (is_null($buyerprofile->District) ? '-' : $buyerprofile->District->name_th) }} 
                    {{ (is_null($buyerprofile->Amphure) ? '-' : $buyerprofile->Amphure->name_th) }}
                    {{ (is_null($buyerprofile->Province) ? '-' : $buyerprofile->Province->name_th) }}
                    {{ $buyerprofile->postcode }} 
                </p>
            </div>
        </div>
    </div>
</div>
@endforeach


<div class="b-but-addplus2">
    <button class="button button-inadd"
        onclick="document.getElementById('id06').style.display='block'"> <i
            class="fa fa-plus-circle"></i> เพิ่มที่อยู่
    </button>
</div>