@extends('supplier.layouts.template')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="supplier-profile">
<input type="hidden" id="pageName2" name="pageName2" value="profilebank">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__titlepage">
                    <h3>ข้อมูลธนาคาร</h3>
                </div>
            </div>
            <div class="col-lg-3">
                @include('supplier.layouts.inc_nav')
            </div>

            <div class="col-lg-9">
                <div class="box__profileaddbank">
                    <div class="groupedit1">
                        <div class="row">
                            <div class="col-12">
                                <p class="title__box">ขอเปลี่ยนแปลงข้อมูลบัญชีธนาคาร <span>เจ้าหน้าที่จะตรวจสอบและเปลี่ยนแปลงข้อมูลให้ภายใน ....</span></p>
                            </div>
                        </div>

                        <div class="itemseditaddbank">
                            <form method="POST" enctype="multipart/form-data" action="{{route('supplier.profile.bank.store')}}" id="formadd" onsubmit="return fncheckotp();">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="box__setdefault">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" name="setreceive" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    ตั้งเป็นบัญชีรับเงิน
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <div class="form-group">
                                            <label> หมายเลขบัญชี <span> *</span></label>
                                            <input type="text" class="form-control" name="numberbank" id="numberbank" placeholder="ระบุ" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label> ชื่อบัญชี <span>*</span> </label>
                                            <input type="text" class="form-control" name="namebank" id="namebank" placeholder="ระบุ" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">ธนาคาร <span>*</span></label>
                                            <select class="form-select" aria-label="Default select example" required name="bank" id="bank">
                                                <option selected>กรุงไทย</option>
                                                <option value="1">ไทยพาณิชย์</option>
                                                <option value="2">กสิกรไทย</option>
                                                <option value="3">กรุงศรี</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">สาขา <span>*</span></label>
                                            <select class="form-select" aria-label="Default select example" required name="bankbranch" id="bankbranch">
                                                <option selected>สาขา 1</option>
                                                <option value="1">สาขา 2</option>
                                                <option value="2">สาขา 3</option>
                                                <option value="3">สาขา 4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">ประเภทบัญชี <span>*</span></label>
                                            <select class="form-select" aria-label="Default select example" required name="banktype" id="banktype">
                                                <option selected>ออมทรัพย์</option>
                                                <option value="1">ออมทรัพย์</option>
                                                <option value="2">ฝากประจำ</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="tt-text-log">
                                            <p>
                                                สำเนาหน้า Book Bank <span class="dot__color">* (รองรับไฟล์ .jpg .png หรือ .pdf เท่านั้น ขนาดไม่เกิน 5Mb.)</span>
                                            </p>
                                        </div>

                                        <div class="box__drop">
                                            <div class="drop-zone">
                                                <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"></i>
                                                    <p> แนบรูปภาพ หรือ PDF</p>
                                                    <div class="tt-img-detail">
                                                        <p> ขนาดไม่เกิน 5 Mb.</p>
                                                    </div>
                                                </span>
                                                <input type="file" name="myFile" class="drop-zone__input" style="opacity: 0;width: 0;display: block;" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--  -->
                        <div class="box__btn">
                            <a href="{{route('supplier.profile.bank')}}" class="btn btn__back">กลับ</a>
                            <button type="submit" form="formadd" class="btn btn__yes" >ยืนยัน</button>
                            {{-- <button type="submit" form="formadd" class="btn btn__yes" data-bs-toggle="modal" data-bs-target="#modalotp">ยืนยัน</button> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Otp -->
<div class="modal fade" id="modalotp" tabindex="-1" aria-labelledby="modalotpLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalotpLabel">ยืนยันรหัส OTP</h5>
            </div>
            <div class="modal-body">
                <div class="box__contentotp">
                    <p class="txt__title">กรุณากรอกรหัส OTP ที่ส่งไปยังหมายเลข</p>
                    <p class="txt__phone">{{$supplier->phone}}</p>


                    <form class="digit-group" data-group-name="digits" autocomplete="off" id="formotp">
                        @csrf
                        <input type="hidden" id="token" name="token">
                        <input class="otp number" type="text" maxlength="1" name="otp1">
                        <input class="otp number" type="text" maxlength="1" name="otp2">
                        <input class="otp number" type="text" maxlength="1" name="otp3">
                        <input class="otp number" type="text" maxlength="1" name="otp4">
                        <input class="otp number" type="text" maxlength="1" name="otp5">
                        <input class="otp number" type="text" maxlength="1" name="otp6">
                    </form>

                    <p class="txt__time">หากไม่ได้รับรหัสผ่านใน 1 นาที</p>
                    <p class="txt__otp">กรุณากด <a href="javascript:void(0)">ส่งรหัส OTP อีกครั้ง <i class="fas fa-sync-alt"></i></a> </p>

                    <div class="box__btn">
                        <button type="button" class="btn btn__back" data-bs-dismiss="modal">กลับ</button>
                        <button type="button" class="btn btn__yes" id="btnsubmitotp">ยืนยัน</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal Otp -->
@stop

@section('script')
<script>
    const limitsize = 5;
</script>
<script src="{{asset('assets/js/dropzone.js')}}"></script>
<script>
    $(document).ready(function() {

        $("#imageUpload").change(function(data) {

            var imageFile = data.target.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);

            reader.onload = function(evt) {
                $('#imagePreview').attr('src', evt.target.result);
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }

        });

        // OTP
        document.querySelectorAll(".otp").forEach(function(otpEl) {
            otpEl.addEventListener("keyup", backSp);
            otpEl.addEventListener("keypress", function(e) {
                if ((parseInt(e.keyCode) > 47 && parseInt(e.keyCode) < 58)) {
                    var nexEl = this.nextElementSibling;
                    nexEl.focus();
                }
                
            });
        })

        function backSp(backKey) {
            if (backKey.keyCode == 8) {
                var prev = this.previousElementSibling.focus()
            }else{
                
                if ((parseInt(backKey.keyCode) > 47 && parseInt(backKey.keyCode) < 58)) {
                    // console.log(backKey.keyCode)
                    var nexEl = this.nextElementSibling.focus();
                }
                
            }
        }
        
        

    });
    function fncheckotp() {
        // alert();
        // return false;
        
        $("#modalotp").modal('show');
        setTimeout(() => {
            $('#modalotp input[class="otp"]:first').focus();
            $.get("{{url('supplier/gettoken')}}/"+$('.txt__phone').text(),
                function (data, textStatus, jqXHR) {
                    $("#token").val(data);
                },
                // "dataType"
            );
        }, 2000);
        
        return false;
    }
    $("#btnsubmitotp").click(function (e) { 
        $.post("{{url('supplier/getotp')}}", $("#formotp").serialize(),
            function (data, textStatus, jqXHR) {
                console.log(data);
                if(data.result.status){
                    $("#formadd").removeAttr('onsubmit').submit();
                }else{
                    toastralert('error','เกิดข้อผิดพลาด');
                }
            },
            // "dataType"
        );
        e.preventDefault();
        
    });
</script>
@stop