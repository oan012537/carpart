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


<!-- The Modal Create -->
<div id="id06" class="w3-modal">
    <div class="w3-modal-content">
        <div class="w3-container">
            <div class="text-t-haer-pakan">
                <p>
                    เพิ่ม/แก้ไขที่อยู่
                </p>
            </div>
            <form id="form_insertaddress">
            <div class="card-con w-100">
                <div class="text-t-deail-add-edit">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label"> ชื่อผู้ติดต่อ <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label"> เบอร์โทรศัพท์ <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="mb-3">
                            <label for="address" class="form-label"> ที่อยู่ <span> +
                                </span></label>
                            <textarea class="form-control" id="address" name="address"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="province" class="form-label"> จังหวัด <span> + </span>
                            </label>
                            <select class="form-select" aria-label="Default select example" name="province" id="province">
                                @foreach($provinces as $province)
                                    <option value="{{ $province->id }}"> {{ $province->name_th }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="amphure" class="form-label"> เขต/อำเภอ <span> + </span>
                            </label>
                            <select class="form-select" aria-label="Default select example" name="amphure" id="amphure">
                                <option value=""> Choose </option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="district" class="form-label"> แขวง/ตำบล <span> + </span>
                            </label>
                            <select class="form-select" aria-label="Default select example" name="district" id="district">
                                <option value=""> Choose </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="postcode" class="form-label"> รหัสไปรษณีย์ <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="postcode" name="postcode">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div style="text-align:center;">
                <div class="b-but-concon">
                    <button class="button button-close"
                        onclick="document.getElementById('id06').style.display='none'"
                        class="w3-button w3-display-topright"> ยกเลิก </button>
                    <button type="submit" class="button button-up"
                        onclick="document.getElementById('id06').style.display='none'"
                        class="w3-button w3-display-topright"> อัพเดท </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- The Modal Create -->
<div id="user_address_edit" class="w3-modal">
    <div class="w3-modal-content">
        <div class="w3-container">
            <div class="text-t-haer-pakan">
                <p>
                    แก้ไขที่อยู่
                </p>
            </div>
            <div class="card-con w-100">
                <div class="text-t-deail-add-edit">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="first_name_edit" class="form-label"> ชื่อผู้ติดต่อ <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="first_name_edit" name="first_name_edit">
                        </div>
                        <div class="col-md-6">
                            <label for="phone_edit" class="form-label"> เบอร์โทรศัพท์ <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="phone_edit" name="phone_edit">
                        </div>
                    </form>
                    <br>
                    <form class="row g-3">
                        <div class="mb-3">
                            <label for="address_edit" class="form-label"> ที่อยู่ <span> +
                                </span></label>
                            <textarea class="form-control" id="address_edit" name="address_edit"
                                rows="3"></textarea>
                        </div>
                    </form>
                    <br>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label"> จังหวัด <span> + </span>
                            </label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected value=""> Choose </option>
                                @foreach($provinces as $province)
                                    <option value="{{ $province->id }}"> {{ $province->name_th }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label"> เขต/อำเภอ <span> + </span>
                            </label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected value=""> Choose </option>
                            </select>
                        </div>
                    </form>
                    <br>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label"> แขวง/ตำบล <span> + </span>
                            </label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected value=""> Choose </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label"> รหัสไปรษณีย์ <span> + </span>
                            </label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> ระบุ </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div style="text-align:center;">
                <div class="b-but-concon">
                    <button class="button button-close"
                        onclick="document.getElementById('id06').style.display='none'"
                        class="w3-button w3-display-topright"> ยกเลิก </button>
                    <button class="button button-up"
                        onclick="document.getElementById('id06').style.display='none'"
                        class="w3-button w3-display-topright"> อัพเดท </button>
                </div>
            </div>
        </div>
    </div>
</div>
