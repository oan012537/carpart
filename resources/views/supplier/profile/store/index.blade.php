@extends('supplier.layouts.template')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="supplier-profile">
<input type="hidden" id="pageName2" name="pageName2" value="profilestore">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__titlepage">
                    <h3>ข้อมูลร้านค้า</h3>
                </div>
            </div>
            <div class="col-lg-3">
                @include('supplier.layouts.inc_nav')
            </div>

            <div class="col-lg-9">
                <div class="box__profilestore">
                    <div class="row">
                        <div class="col-10">
                            <p class="title__box">ข้อมูลบริษัท/นิติบุคคล</p>
                        </div>
                        <div class="col-2">
                            <div class="box__edit">
                                <a href="{{route('supplier.profile.store.edit')}}" class="btn__edit"><i class="fa-solid fa-pencil"></i> แก้ไขที่อยู่</a>

                            </div>
                        </div>
                    </div>

                    <div class="box__info">
                        <?php
                        $heading = array(
                            '1' => 'ชื่อร้าน',
                            '2' => 'อีเมล',
                            '3' => 'โทรศัพท์',
                            '4' => 'Page Url/Facebook Url',
                            '5' => 'Google Map',
                            '6' => 'ที่อยู่',
                        );

                        $result = array(
                            '1' => 'สมมติ <img src="assets/img/icon/icon__notverify.svg" class="img-fluid"> ร้านค้ายังไม่ได้ยืนยันตัวตน || สมมติ <img src="assets/img/icon/iconverify2__success.svg" class="img-fluid"> ผ่านการยืนยันตัวตนขั้น 2',
                            '2' => 'emily@sample.com',
                            '3' => '012345678',
                            '4' => 'www,.sample.com',
                            '5' => 'www,.sample.com',
                            '6' => '123 หมู่ 0 ถนน เจริญกรุง ซอย 5  ตำบล ทุ่งสุลา อำเภอ ศรีราชา จังหวัด ชลบุรี 12345',
                        );

                        for ($i = 1; $i <= 6; $i++) {
                        ?>
                            <div class="box__itemsinfo">
                                <div class="row">
                                    <div class="col-3">
                                        <p class="title__txt"><?php echo $heading[$i]; ?></p>
                                    </div>
                                    <div class="col-9">
                                        <p class="title__result"><?php echo $result[$i]; ?></p>
                                    </div>

                                    <div class="col-12">
                                        <?php if ($i != 4) { ?>
                                            <hr>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="box__verify2">
                    <a href="javascript:void(0)" class="btn btn__viewverify" data-bs-toggle="modal" data-bs-target="#verify2">ยืนยันตัวตนขั้น 2 เพื่อเพิ่มความน่าเชื่อถือให้ร้านของคุณ</a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="verify2" tabindex="-1" aria-labelledby="verify2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verify2Label">ยืนยันตัวตนขั้น 2 เพื่อเพิ่มความน่าเชื่อถือให้ร้านของคุณ</h5>
            </div>
            <div class="modal-body">
                <p class="txt__label">แนบเอกสารทางราชการนอกเหนือจากบัตรประชาชน</p>

                <div class="box__content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                            <div class="box__drop">
                                <div class="drop-zone">
                                    <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"></i>
                                        <p> แนบรูปภาพหรือ PDF </p>
                                        <div class="tt-img-detail">
                                            <p> ขนาดไม่เกิน 5 Mb.</p>
                                        </div>
                                    </span>
                                    <input type="file" name="myFile" class="drop-zone__input">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                            <p>ท่านสามารถใช้รูปเอกสารตัวจริง หรือรูปถ่ายสำเนาของเอกสาร (เซ็นหรือไม่เซ็นรับรองเอกสารก็ได้)
                                หากท่านเซ็นรับรองเอกสาร จะต้องไม่บดบังข้อมูลใดๆ บนเอกสาร
                                ภาพที่อัปโหลดต้องชัด ข้อมูลครบถ้วน และเอกสารยังไม่หมดอายุ
                                ภาพเอกสารต้องเห็นรายละเอียด หน้าแรกที่ระบุรายละเอียดเกี่ยวกับบ้าน และหน้าเอกสารที่แสดงชื่อ นามสกุลของท่าน
                                สำหรับเอกสารเพิ่มเติม (เอกสารประกอบอื่นที่น่าเชื่อถือ) ท่านสามารถอัปโหลดเอกสารได้มากกว่า 1 รายการเพื่อประกอบการพิจารณาการเปิดบัญชี
                                ระบบรองรับไฟล์ JPG, JPEG และ PDF ที่มีขนาดไม่เกิน 20 MB ต่อไฟล์</p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="box__btn">
                <button type="button" class="btn btn__back" data-bs-dismiss="modal">กลับ</button>
                <button type="button" class="btn btn__yes">ยืนยัน</button>
                <p class="txt__time">ใช้เวลาตรวจสอบประมาณ 5-10 วัน</p>
            </div>

        </div>
    </div>
</div>

<!--  -->
@stop

@section('script')
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
    });
</script>
@stop