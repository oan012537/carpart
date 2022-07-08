@extends('supplier.layouts.template')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="supplier-profile">
<input type="hidden" id="pageName2" name="pageName2" value="profile">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__titlepage">
                    <h3>ข้อมูลผู้ติดต่อ</h3>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12">
                @include('supplier.layouts.inc_nav')
            </div>
            @if($supplier->type == 'บุคคลธรรมดา')
            <div class="col-xl-9 col-lg-12">
                <div class="box__profile">
                    <div class="row">
                        <div class="col-xl-10 col-md-8 col-12">
                            <p class="title__box">ข้อมูลผู้ขาย</p>
                        </div>
                        <div class="col-xl-2 col-md-4 col-12">
                            <div class="box__edit">
                                <a href="{{route('supplier.profile.edit')}}" class="btn__edit"><i class="fa-solid fa-pencil"></i> แก้ไข</a>

                            </div>
                        </div>
                    </div>

                    <div class="box__info">
                        <?php
                        $heading = array(
                            '1' => 'ชื่อ',
                            '2' => 'นามสกุล',
                            '3' => 'อีเมล',
                            '4' => 'โทรศัพท์',
                            '5' => 'ที่อยู่',

                        );

                        $result = array(
                            '1' => $supplier->first_name,
                            '2' => $supplier->last_name,
                            '3' => $supplier->email,
                            '4' => $supplier->phone,
                            '5' => $supplier->addressfull,
                        );

                        for ($i = 1; $i <= 5; $i++) {
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
                                        <?php if ($i != 5) { ?>
                                            <hr>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            @else
            <div class="col-xl-9 col-lg-12">
                <div class="box__profile">
                    <div class="row">
                        <div class="col-xl-10 col-md-8 col-12">
                            <p class="title__box">ข้อมูลผู้ขาย</p>
                        </div>
                        <div class="col-xl-2 col-md-4 col-12">
                            <div class="box__edit">
                                <a href="{{route('supplier.profile.edit')}}" class="btn__edit"><i class="fa-solid fa-pencil"></i> แก้ไข</a>

                            </div>
                        </div>
                    </div>

                    <div class="box__info">
                        <?php
                        $heading = array(
                            '1' => 'ชื่อ',
                            '2' => 'นามสกุล',
                            '3' => 'อีเมล',
                            '4' => 'โทรศัพท์',

                        );

                        $result = array(
                            '1' => 'สมมติ',
                            '2' => 'แซ่ตัน',
                            '3' => 'emily@sample.com',
                            '4' => '012345678',
                        );
                        $result = array(
                            '1' => $supplier->first_name,
                            '2' => $supplier->last_name,
                            '3' => $supplier->email,
                            '4' => $supplier->phone,
                            // '5' => $supplier->addressfull,
                        );

                        for ($i = 1; $i <= 4; $i++) {
                        ?>
                            <div class="box__itemsinfo">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 col-12">
                                        <p class="title__txt"><?php echo $heading[$i]; ?></p>
                                    </div>
                                    <div class="col-xl-9 col-md-6 col-12">
                                        <p class="title__result"><?php echo $result[$i]; ?></p>
                                    </div>

                                    <div class="col-xl-9 col-md-6 col-12">
                                        <?php if ($i != 4) { ?>
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
