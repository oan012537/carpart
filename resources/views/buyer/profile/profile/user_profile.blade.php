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
                <a href="#">
                    <p onclick="document.getElementById('id01').style.display='block'"
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
                        $name_user = $user_buyer->first_name." ".$user_buyer->last_name;
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
                    {{ (is_null($user_buyer->phone) ? '-' : $user_buyer->phone) }}
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
                    ทุ่งสุขลา
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
                    ศรีราชา
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
                    ชลบุรี
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
                    12345
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
                    นายสมมุติ สมุด
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
                    0812345677
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
                    1 234 5678 9101 2
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
                    123 หมู่ 0 ถนน เจริญกรุง แขวง เยาวราช ซอย 5
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
                    ทุ่งสุขลา
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
                    ศรีราชา
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
                    ชลบุรี
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
                    12345
                </p>
            </div>
        </div>
    </div>
    </div>