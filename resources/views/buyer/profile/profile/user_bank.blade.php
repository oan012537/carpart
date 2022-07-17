<div id="box_content_bank" >
@if(!is_null($buyer_banks))

@foreach($buyer_banks as $key => $bank)

    @php
        $bank_checked = "";
        if($bank->banks_active == 1){
            $bank_checked = "checked";
        }
    @endphp
    <div class="box__content">
        <div class="box-check-set">
            <label class="b-bank"> ตั้งเป็นบัญชีรับเงิน
                <input type="radio" name="bank_checked" {{ $bank_checked }}>
                <span class="checkmark"></span>
            </label>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-3">
                <div class="txt__title2-bank">
                    <p>
                        หมายเลขบัญชี
                    </p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="txt__detailtitle2-bank">
                    <p>
                        {{ (is_null($bank->banks_accountnumber) ? '-' : $bank->banks_accountnumber) }}
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="txt__title2-bank">
                    <p>
                        ชื่อบัญชี
                    </p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="txt__detailtitle2-bank">
                    <p>
                        {{ (is_null($bank->banks_accountname) ? '-' : $bank->banks_accountname) }}
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="txt__title2-bank">
                    <p>
                        ธนาคาร
                    </p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="txt__detailtitle2-bank">
                    <p>
                        {{ (is_null($bank->banks_name) ? '-' : $bank->banks_name) }}
                    </p>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-lg-3">
                <div class="txt__title2-bank">
                    <p>
                        กรุงไทย
                    </p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="txt__detailtitle2-bank">
                    <p>
                        012345678
                    </p>
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col-lg-3">
                <div class="txt__title2-bank">
                    <p>
                        สาขา
                    </p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="txt__detailtitle2-bank">
                    <p>
                        {{ (is_null($bank->banks_branch) ? '-' : $bank->banks_branch) }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="txt__title2-bank">
                    <p>
                        ประเภทบัญชี
                    </p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="txt__detailtitle2-bank">
                    <p>
                        {{ (is_null($bank->banks_type) ? '-' : $bank->banks_type) }}
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="txt__title2-bank">
                    <p>
                        สำเนาหน้า Book Bank
                    </p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="txt__detailtitle2-bank">
                    <img src="{{ asset('assets/img/account/img-bank.png') }}" class="img-fluid"
                        alt="shoe image">
                </div>
            </div>
        </div>
    </div>
@endforeach

@endif
</div>

<div class="but-bank">

</div>

<div class="b-but-addplus">
    <button class="button button-inadd"
        onclick="document.getElementById('modal_insertbank').style.display='block'"> <i
            class="fa fa-plus-circle"></i> เพิ่มบัญชีธนาคาร
    </button>
</div>



<!-- The Modal Insertbank -->
<div id="modal_insertbank" class="w3-modal">
    <div class="w3-modal-content">
        <div class="w3-container">
            <div class="text-t-haer-pakan">
                <p>
                    แก้ไขบัญชีสำหรับเงินคืน
                </p>
            </div>
            <form id="form_insertbank">
            @csrf
            <div class="card-con w-100">
                <div class="text-t-deail-add-edit">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label"> หมายเลขบัญชี <span> + </span>
                            </label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label"> ชื่อบัญชี <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label"> ธนาคาร <span> + </span>
                            </label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> ระบุ </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label"> สาขา <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label"> ประเภทบัญชี <span> + </span>
                            </label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <br>
                    <label for="inputPassword4" class="form-label"> สำเนาหน้า Book Bank <span> + (รองรับไฟล์
                            .pdf, .jpg และ .png เท่านั้น. ขนาดไม่เกิน 5Mb.) </span>
                        <div class="card-in2">
                            <div class="w3-container w3-center">
                                <div class="drop-zone">
                                    <span class="drop-zone__prompt2"> <i class="fa fa-plus-circle"
                                            style="font-size:35px"></i>
                                        <p>แนบรูปภาพ หรือ PDF</p>

                                    </span>
                                    <input type="file" name="myFile" class="drop-zone__input">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <br>
            <div style="text-align:center;">
                <div class="b-but-concon">
                    <button class="button button-close"
                        onclick="document.getElementById('modal_insertbank').style.display='none'"
                        class="w3-button w3-display-topright"> ยกเลิก </button>
                    <button class="button button-up"
                        onclick="document.getElementById('modal_otp_insertbank').style.display='block'"
                        class="w3-button w3-black"> อัพเดท </button>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>



<!-- The Modal OTP Bank -->
<div id="modal_otp_insertbank" class="w3-modal">
    <div class="w3-modal-content">
        <div class="w3-container">
            <div class="text-t-haer-pakan">
                <p>
                    ยืนยันรหัส OTP
                </p>
            </div>
            <div class="card-conotp w-100">
                <div class="h-text-otp">
                    <p>
                        กรุณากรอกรหัส OTP ที่ส่งไปยังหมายเลข
                    </p>
                </div>
                <div class="num-text-otp">
                    <p>
                        012-345-6789
                    </p>
                </div>
                <div class="w3-container w3-center">
                    <div class="img-text-otp">
                        <img src="{{ asset('assets/img/account/b.png') }}" class="img-fluid" alt="shoe image">
                        <img src="{{ asset('assets/img/account/b.png') }}" class="img-fluid" alt="shoe image">
                        <img src="{{ asset('assets/img/account/b.png') }}" class="img-fluid" alt="shoe image">
                        <img src="{{ asset('assets/img/account/b.png') }}" class="img-fluid" alt="shoe image">
                        <img src="{{ asset('assets/img/account/b.png') }}" class="img-fluid" alt="shoe image">
                        <img src="{{ asset('assets/img/account/b.png') }}" class="img-fluid" alt="shoe image">
                    </div>
                </div>
                <br>
                <div class="vi-text-otp">
                    <p>
                        หากไม่ได้รับรหัสผ่านใน 1 นาที
                    </p>
                </div>
                <div class="re-text-otp">
                    <p>
                        กรุณากด ส่งรหัส OTP อีกครั้ง <i class='fas fa-sync'></i>
                    </p>
                </div>
            </div>
            <br>
            <div style="text-align:center;">
                <div class="b-but-concon">
                    <button class="button button-close"
                        onclick="document.getElementById('modal_otp_insertbank').style.display='none'"
                        class="w3-button w3-display-topright"> กลับ </button>
                    <button class="button button-up"
                        onclick="document.getElementById('modal_otp_insertbank').style.display='none'"
                        class="w3-button w3-display-topright"> ยืนยัน </button>
                </div>
            </div>
        </div>
    </div>
</div>