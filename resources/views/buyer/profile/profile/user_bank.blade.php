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

<div class="but-bank">

</div>
<div class="b-but-addplus">
    <button class="button button-inadd"
        onclick="document.getElementById('id04').style.display='block'"> <i
            class="fa fa-plus-circle"></i> เพิ่มบัญชีธนาคาร
    </button>
</div>