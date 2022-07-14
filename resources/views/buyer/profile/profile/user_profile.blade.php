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
                <a href="javascript:void(0);" onclick="model_buyerprofile_edit({{ $address_profiles->id }})">
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
                    {{ (is_null($user_buyer->phone) ? '-' : $user_buyer->phone) }}
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
                <a href="#">
                    <p onclick="document.getElementById('id02').style.display='block'"
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
                <p>
                    {{ (is_null($buyer_tax_invoices->name) ? '-' : $buyer_tax_invoices->name) }}
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
                <p>
                    {{ (is_null($buyer_tax_invoices->phone) ? '-' : $buyer_tax_invoices->phone) }}
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
                <p>
                    {{ (is_null($buyer_tax_invoices->texid) ? '-' : $buyer_tax_invoices->texid) }}
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
                    {{ (is_null($buyer_tax_invoices->address) ? '-' : $buyer_tax_invoices->address) }}
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
                    {{ (is_null($buyer_tax_invoices->District) ? '-' : $buyer_tax_invoices->District->name_th) }}
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
                    {{ (is_null($buyer_tax_invoices->Amphure) ? '-' : $buyer_tax_invoices->Amphure->name_th) }}
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
                    {{ (is_null($buyer_tax_invoices->Province) ? '-' : $buyer_tax_invoices->Province->name_th) }}
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
                    {{ (is_null($buyer_tax_invoices->postcode) ? '-' : $buyer_tax_invoices->postcode) }}
                </p>
            </div>
        </div>
    </div>
    </div>
