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
            <div class="col-xl-3 col-lg-12">
                @include('supplier.layouts.inc_nav')
            </div>
            @if($supplier->type == 'บุคคลธรรมดา')
            <div class="col-xl-9 col-lg-12">
                <div class="box__profilestore">
                    <div class="row">
                        <div class="col-xl-10 col-md-8 col-12">
                            <p class="title__box">ข้อมูลร้านค้า</p>
                        </div>
                        <div class="col-xl-2 col-md-4 col-12">
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
                            '1' => $supplier->store_name . '<img src="' . asset('assets/img/icon/icon__notverify.svg') . '" class="img-fluid"> ร้านค้ายังไม่ได้ยืนยันตัวตน',
                            '2' => $supplier->company_email,
                            '3' => $supplier->phone,
                            '4' => $supplier->facebook,
                            '5' => $supplier->googlemap,
                            '6' => $supplier->store_addressfull,
                        );
                        $result1 = array(
                            '1' => 'สมมติ <img src="' . asset('assets/img/icon/icon__notverify.svg') . '" class="img-fluid"> ร้านค้ายังไม่ได้ยืนยันตัวตน || สมมติ <img src="' . asset('assets/img/icon/iconverify2__success.svg') . '" class="img-fluid"> ผ่านการยืนยันตัวตนขั้น 2',
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
                                    <div class="col-xl-3 col-md-6 col-12">
                                        <p class="title__txt"><?php echo $heading[$i]; ?></p>
                                    </div>
                                    <div class="col-xl-9 col-md-6 col-12">
                                        <p class="title__result"><?php echo $result[$i]; ?></p>
                                    </div>

                                    <div class="col-12">
                                        <?php if ($i != 6) { ?>
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
                    {{-- ถ้าสองขึั้นตอนแล้วตรงนี้ไม่จ้องขึ้น --}}
                </div>

            </div>
            @else
            <div class="col-xl-9 col-lg-12">
                <div class="box__profilestore">
                    <div class="row">
                        <div class="col-xl-10 col-md-8 col-12">
                            <p class="title__box">ข้อมูลบริษัท/นิติบุคคล</p>
                        </div>
                        <div class="col-xl-2 col-md-4 col-12">
                            <div class="box__edit">
                                <a href="{{route('supplier.profile.store.edit')}}" class="btn__edit"><i class="fa-solid fa-pencil"></i> แก้ไขที่อยู่</a>

                            </div>
                        </div>
                    </div>

                    <div class="box__info">
                        <?php
                        $heading = array(
                            '1' => 'ชื่อบริษัท',
                            '2' => 'สาขา',
                            '3' => 'เลขประจำตัวผู้เสียภาษี',
                            '4' => 'ที่อยู่',
                            '5' => 'อีเมล',
                            '6' => 'โทรศัพท์',
                            '7' => 'Page URL/Facebook URL',
                            '8' => 'Google Map',
                            '9' => 'หนังสือรับรองบริษัท',
                            '10' => 'สำเนา ภ.พ.20',

                        );

                        $result1 = array(
                            '1' => 'เฮงเฮงอะไหล่ยนต์ <img src="assets/img/icon/icon-verify.svg" class="img-fluid"> นิติบุคคล',
                            '2' => 'สำนักงานใหญ่',
                            '3' => '1234445657676',
                            '4' => '123 หมู่ 0 ถนน เจริญกรุง ซอย 5  ตำบล ทุ่งสุลา อำเภอ ศรีราชา จังหวัด ชลบุรี 12345',
                            '5' => 'sample@gmail.com',
                            '6' => '012345678',
                            '7' => 'www.sample.com',
                            '8' => 'www.sample.com',
                            '9' => 'หนังสือรับรองบริษัท',
                            '10' => 'สำเนา ภ.พ.20 <a data-fancybox="gallery" class="btn__viewimage" href="https://lipsum.app/id/46/1600x1200"><i class="fa-solid fa-image"></i></a>',
                        );
                        $result = array(
                            '1' => $supplier->store_name . ' <img src="' . asset('assets/img/icon/icon-verify.svg') . '" class="img-fluid"> นิติบุคคล',
                            '2' => $supplier->branch,
                            '3' => $supplier->vat_id,
                            '4' => $supplier->store_addressfull,
                            '5' => $supplier->company_email,
                            '6' => $supplier->phone,
                            '7' => $supplier->facebook,
                            '8' => $supplier->googlemap,
                            '9' => '<a class="btn btn__pdf fancybox" data-fancybox href="' . asset($supplier->pic_certificate) . '" > <img src="' . asset('assets/img/icon/icon-pdf.svg') . '" class="img-fluid"> </a>',
                            '10' => '<a class="btn btn__pdf fancybox" data-fancybox href="' . asset($supplier->pic_vat) . '" > <img src="' . asset('assets/img/icon/icon-pdf.svg') . '" class="img-fluid"> </a>',
                        );

                        for ($i = 1; $i <= 10; $i++) {
                        ?>
                            <div class="box__itemsinfo">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 col-12">
                                        <p class="title__txt"><?php echo $heading[$i]; ?></p>
                                    </div>
                                    <div class="col-xl-9 col-md-6 col-12">
                                        <p class="title__result"><?php echo $result[$i]; ?></p>
                                    </div>

                                    <div class="col-12">
                                        <?php if ($i != 6) { ?>
                                            <hr>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
            @endif
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
                        <form method="POST" enctype="multipart/form-data" action="{{route('supplier.profile.store.verify.update')}}" id="formverify">
                            @csrf
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2">
                                <p>ท่านสามารถใช้รูปเอกสารตัวจริง หรือรูปถ่ายสำเนาของเอกสาร (เซ็นหรือไม่เซ็นรับรองเอกสารก็ได้)
                                    หากท่านเซ็นรับรองเอกสาร จะต้องไม่บดบังข้อมูลใดๆ บนเอกสาร
                                    ภาพที่อัปโหลดต้องชัด ข้อมูลครบถ้วน และเอกสารยังไม่หมดอายุ
                                    ภาพเอกสารต้องเห็นรายละเอียด หน้าแรกที่ระบุรายละเอียดเกี่ยวกับบ้าน และหน้าเอกสารที่แสดงชื่อ นามสกุลของท่าน
                                    สำหรับเอกสารเพิ่มเติม (เอกสารประกอบอื่นที่น่าเชื่อถือ) ท่านสามารถอัปโหลดเอกสารได้มากกว่า 1 รายการเพื่อประกอบการพิจารณาการเปิดบัญชี
                                    ระบบรองรับไฟล์ JPG, JPEG และ PDF ที่มีขนาดไม่เกิน 20 MB ต่อไฟล์</p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


            <div class="box__btn">
                <button type="button" class="btn btn__back" data-bs-dismiss="modal">กลับ</button>
                <button form="formverify" type="submit" class="btn btn__yes">ยืนยัน</button>
                <p class="txt__time">ใช้เวลาตรวจสอบประมาณ 5-10 วัน</p>
            </div>

        </div>
    </div>
</div>

<!--  -->
@stop

@section('script')
<script>
    const limitsize = 20;
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
    });
</script>
@stop
