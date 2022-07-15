<div class="box__content">
    <div class="row">
        <div class="col-lg-8">
            <div class="head-address">
                <p>
                    ข้อมูลส่วนตัว
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ac-detail-text-tt">
                <a href="javascript:void(0);" onclick="model_buyerprofileaccount_edit({{ $address_profiles->id }})">
                    <p class="w3-button w3-black"> <i class="fas fa-pen"
                            style="font-size:18px"></i> &nbsp;
                        แก้ไข </p>
                </a>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    ชื่อโปรไฟล์
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p>
                    {{ (is_null($user_buyer->profile_name) ? '-' : $user_buyer->profile_name) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    ชื่อผู้ติดต่อ
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p>
                    @php 
                        $name_user = $address_profiles->first_name." ".$address_profiles->last_name;
                    @endphp
                    {{ ($name_user == "" || $name_user == null) ? '-' : $name_user }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    อีเมล
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p>
                    {{ (is_null($user_buyer->email) ? '-' : $user_buyer->email) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    โทรศัพท์
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p>
                    {{ (is_null($address_profiles->phone) ? '-' : $address_profiles->phone) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    ที่อยู่
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p>
                    {{ (is_null($address_profiles->address) ? '-' : $address_profiles->address) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    แขวง/ตำบล
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p>
                    {{ (is_null($address_profiles->District) ? '-' : $address_profiles->District->name_th) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    เขต/อำเภอ
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p>
                    {{ (is_null($address_profiles->Amphure) ? '-' : $address_profiles->Amphure->name_th) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    จังหวัด
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p>
                    {{ (is_null($address_profiles->Province) ? '-' : $address_profiles->Province->name_th) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    รหัสไปรษณีย์
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p>
                    {{ (is_null($address_profiles->postcode) ? '-' : $address_profiles->postcode) }}
                </p>
            </div>
        </div>
    </div>
    </div>



    <div class="box__content">
    <div class="row">
        <div class="col-lg-8">
            <div class="head-address">
                <p>
                    ข้อมูลสำหรับออกใบกำกับภาษี/ใบเสร็จรับเงิน
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ac-detail-text-tt">
                @php 
                    $tax_invoices_id = (is_null($buyer_tax_invoices) ? null : $buyer_tax_invoices->id);
                @endphp
                <a href="javascript:void(0);" id="btn_tax_invoices_edit" onclick="model_taxinvoice_edit({{ $tax_invoices_id }})">
                    <p 
                        class="w3-button w3-black"> <i class="fas fa-pen"
                            style="font-size:18px"></i> &nbsp;
                        แก้ไข </p>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    ชื่อ
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p id="text_tax_invoices_name">
                    {{ (is_null($buyer_tax_invoices) ? '-' : $buyer_tax_invoices->name) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    เบอร์โทรศัพท์
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p id="text_tax_invoices_phone">
                    {{ (is_null($buyer_tax_invoices) ? '-' : $buyer_tax_invoices->phone) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    เลขที่ประจำตัวผู้เสียภาษี
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p id="text_tax_invoices_texid">
                    {{ (is_null($buyer_tax_invoices) ? '-' : $buyer_tax_invoices->texid) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    ที่อยู่
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p id="text_tax_invoices_address">
                    {{ (is_null($buyer_tax_invoices) ? '-' : $buyer_tax_invoices->address) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    แขวง/ตำบล
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p id="text_tax_invoices_district">
                    {{ (is_null($buyer_tax_invoices) || is_null($buyer_tax_invoices->District) ? '-' : $buyer_tax_invoices->District->name_th) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    เขต/อำเภอ
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p id="text_tax_invoices_amphure">
                    {{ (is_null($buyer_tax_invoices) || is_null($buyer_tax_invoices->Amphure) ? '-' : $buyer_tax_invoices->Amphure->name_th) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    จังหวัด
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p id="text_tax_invoices_province">
                    {{ (is_null($buyer_tax_invoices) || is_null($buyer_tax_invoices->Province) ? '-' : $buyer_tax_invoices->Province->name_th) }}
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="txt__title2">
                <p>
                    รหัสไปรษณีย์
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="txt__detailtitle2">
                <p id="text_tax_invoices_postcode">
                    {{ (is_null($buyer_tax_invoices) ? '-' : $buyer_tax_invoices->postcode) }}
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Edit Modal Account Profile -->
<div id="user_profileaccount_edit" class="w3-modal">
    <div class="w3-modal-content">
        <div class="w3-container">
            <div class="text-t-haer-pakan">
                <p>
                    แก้ไขข้อมูลส่วนตัว
                </p>
            </div>
            <form id="form_editprofileaccount">
            @csrf
            <div class="card-con w-100">
                <div class="text-t-deail-add-edit">
                    <input type="text" class="form-control" id="buyerprofileaccount_id" name="buyerprofileaccount_id">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="account_first_name" class="form-label"> ชื่อผู้ติดต่อ <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="account_first_name" name = "account_first_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="account_phone" class="form-label"> เบอร์โทรศัพท์ <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="account_phone" name="account_phone" required>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="mb-3">
                            <label for="account_address" class="form-label"> ที่อยู่ <span> +
                                </span></label>
                            <textarea class="form-control" id="account_address" name="account_address"
                                rows="3" required>{{ $address_profiles->address }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label"> จังหวัด <span> + </span>
                            </label>
                            <select class="form-select" id ="account_province" name="account_province" aria-label="Default select example" required>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label"> เขต/อำเภอ <span> + </span>
                            </label>
                            <select class="form-select" id="account_amphure" name="account_amphure" aria-label="Default select example" required>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label"> แขวง/ตำบล <span> + </span>
                            </label>
                            <select class="form-select" id="account_district" name="account_district" aria-label="Default select example" required>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label"> รหัสไปรษณีย์ <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="account_postcode" name="account_postcode" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div style="text-align:center;">
                <div class="b-but-concon">
                    <button type="button" class="button button-close"
                        onclick="document.getElementById('user_profileaccount_edit').style.display='none'"
                        class="w3-button w3-display-topright"> ยกเลิก </button>
                    <button type="submit" class="button button-up"
                        class="w3-button w3-display-topright"> อัพเดท </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Edit Modal Taxinvioce-->
<div id="user_taxinvoice_edit" class="w3-modal">
    <div class="w3-modal-content">
        <div class="w3-container">
            <div class="text-t-haer-pakan">
                <p>
                    แก้ไขข้อมูลสำหรับออกใบกำกับภาษี/ใบเสร็จรับเงิน
                </p>
            </div>
            <form id="form_edittaxinvoice">
            @csrf
            <div class="card-con w-100">
                <div class="text-t-deail-add-edit">
                    <input type="text" class="form-control" id="tax_invoices_id" name="tax_invoices_id">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="tax_invoices_name" class="form-label"> ชื่อผู้ติดต่อ <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="tax_invoices_name" name="tax_invoices_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="tax_invoices_phone" class="form-label"> เบอร์โทรศัพท์ <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="tax_invoices_phone" name="tax_invoices_phone" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="tax_invoices_texid" class="form-label"> เลขที่ประจำตัวผู้เสียภาษี <span> + </span></label>
                            <input type="text" class="form-control" id="tax_invoices_texid" name="tax_invoices_texid" required>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="mb-3">
                            <label for="tax_invoices_address" class="form-label"> ที่อยู่ <span> +
                                </span></label>
                            <textarea class="form-control" id="tax_invoices_address" name="tax_invoices_address"
                                rows="1" required></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="tax_invoices_province" class="form-label"> จังหวัด <span> + </span>
                            </label>
                            <select class="form-select" aria-label="Default select example" id="tax_invoices_province" name="tax_invoices_province" required>
                                <option value=""> Choose </option>
                                @foreach($provinces as $province)
                                    <option value="{{ $province->id }}"> {{ $province->name_th }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="tax_invoices_amphure" class="form-label"> เขต/อำเภอ <span> + </span>
                            </label>
                            <select class="form-select" aria-label="Default select example" id="tax_invoices_amphure" name="tax_invoices_amphure" required>
                                <option value=""> Choose </option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="tax_invoices_district" class="form-label"> แขวง/ตำบล <span> + </span>
                            </label>
                            <select class="form-select" aria-label="Default select example" id="tax_invoices_district" name="tax_invoices_district" required>
                                <option value=""> Choose </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="tax_invoices_postcode" class="form-label"> รหัสไปรษณีย์ <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="tax_invoices_postcode" name="tax_invoices_postcode" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div style="text-align:center;">
                <div class="b-but-concon">
                    <button type="button" class="button button-close"
                        onclick="document.getElementById('user_taxinvoice_edit').style.display='none'"
                        class="w3-button w3-display-topright"> ยกเลิก </button>
                    <button type="submit" class="button button-up"
                        class="w3-button w3-display-topright"> อัพเดท </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>