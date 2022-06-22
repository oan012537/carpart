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
                    <div class="box__profilebank">

                        <div class="box__info">
                            <?php
                            $heading = array(
                                '1' => 'หมายเลขบัญชี',
                                '2' => 'ชื่อบัญชี',
                                '3' => 'ธนาคาร',
                                '4' => 'สาขา',
                                '5' => 'ประเภทบัญชี',
                                '6' => 'สำเนาหน้า Book Bank',

                            );

                            $result = array(
                                '1' => '123-123456-1',
                                '2' => 'บริษัท เฮงเฮงอะไหล่ยนต์',
                                '3' => 'กรุงไทย',
                                '4' => 'ประชาอุทิศ',
                                '5' => 'ออมทรัพย์',
                                '6' => '<a href="javascript:void(0)" class="btn btn__pdf"> <img src="assets/img/icon/icon-pdf.svg" class="img-fluid"> </a>',
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

                                            <?php if ($i == 1) { ?>
                                                <div class="box__setdefault">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            ตั้งเป็นบัญชีรับเงิน
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>

                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-12">
                        <a href="supplier-addbank.php" class="btn btn__addbank"> <i class="fa-solid fa-circle-plus"></i> เพิ่มบัญชีธนาคาร</a>
                    </div>
                </div>
        </div>
    </div>
</div>
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