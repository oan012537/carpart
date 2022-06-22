@extends('supplier.layouts.template')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="supplier-profile">
<input type="hidden" id="pageName2" name="pageName2" value="profilesetuser">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__titlepage">
                    <h3>จัดการสมาชิก</h3>
                </div>
            </div>
            <div class="col-lg-3">
                @include('supplier.layouts.inc_nav')
            </div>

            <div class="col-lg-9">

                <div class="wrapper__add">
                    <div class="box__btn">
                        <a href="javascript:void(0)" class="btn btn__add" data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fa-solid fa-circle-plus"></i> เพิ่มบทบาท</a>
                    </div>

                    <div class="box__search">
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="Search for anything .." aria-label="Search for anything .." aria-describedby="button-addon2">
                            <button class="btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>



                <div class="box__infoorg">
                    <div class="row">
                        <div class="col-3">

                            <ul class="nav nav-tabs tab-left" id="myTab" role="tablist">
                                <?php
                                $name = array(
                                    '1' => 'ผู้จัดการ',
                                    '2' => 'ผู้ดูแล',
                                    '3' => 'แอดมิน',
                                    '4' => 'เจ้าหน้าที่ขาย',
                                    '5' => 'เจ้าหน้าที่บัญชี',
                                    '6' => 'CPN Sale',
                                );
                                for ($i = 1; $i <= 6; $i++) {
                                ?>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link <?php if ($i == 1) {
                                                                    echo 'active';
                                                                } ?>" id="permission<?php echo $i; ?>-tab" data-bs-toggle="tab" data-bs-target="#permission<?php echo $i; ?>" type="button" role="tab" aria-controls="permission<?php echo $i; ?>" aria-selected="true"><?php echo $name[$i]; ?></button>
                                    </li>
                                <?php } ?>
                            </ul>



                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="tabright">
                                <?php for ($x = 1; $x <= 6; $x++) { ?>
                                    <div class="tab-pane fade <?php if ($x == 1) {
                                                                    echo 'show active';
                                                                } ?>" id="permission<?php echo $x; ?>" role="tabpanel" aria-labelledby="permission<?php echo $x; ?>-tab">

                                        <!--  -->
                                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="setpermission<?php echo $x; ?>-tab" data-bs-toggle="tab" data-bs-target="#setpermission<?php echo $x; ?>" type="button" role="tab" aria-controls="setpermission<?php echo $x; ?>" aria-selected="true">ตั้งค่าบทบาท</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="setmember<?php echo $x; ?>-tab" data-bs-toggle="tab" data-bs-target="#setmember<?php echo $x; ?>" type="button" role="tab" aria-controls="setmember<?php echo $x; ?>" aria-selected="false">จัดการสมาชิก ( 5 คน )</button>
                                            </li>

                                        </ul>
                                        <div class="tab-content" id="myTabContentsetting">
                                            <div class="tab-pane fade show active" id="setpermission<?php echo $x; ?>" role="tabpanel" aria-labelledby="setpermission<?php echo $x; ?>-tab">
                                                <div class="form-group">
                                                    <label for="">ชื่อบทบาท</label>
                                                    <input type=" text" name="namepermission" class="form-control" aria-describedby="button-addon3" value="<?php echo $name[$x]; ?>">
                                                    <button type="button" id="button-addon3" class="btn btn__popover" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="ลบบทบาทนี้">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </div>


                                                <div class="box__contentsetting">
                                                    <div class="contentswitch">
                                                        <h3 class="txt__title">สิทธิการใช้งาน</h3>
                                                        <?php
                                                        $namepermiss = array(
                                                            '1' => 'จัดการบทบาท',
                                                            '2' => 'ดูแลการขาย',
                                                            '3' => 'ดูแลการเงิน',
                                                            '4' => 'จัดการโปรโมชั่น',
                                                            '5' => 'จัดการข้อมูลธนาคาร',
                                                            '6' => 'ดูแลการขาย',
                                                            '7' => 'ดูแลการเงิน',
                                                        );
                                                        for ($z = 1; $z <= 6; $z++) {

                                                        ?>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <p class="txt__subtitle"> <?php echo $namepermiss[$z]; ?></p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" <?php if ($z == 1) {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?>>
                                                                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                                    </div>

                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="box__content">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard dummy text ever since the 1500s, </p>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="setmember<?php echo $x; ?>" role="tabpanel" aria-labelledby="setmember<?php echo $x; ?>-tab">

                                                <div class="table-respoonsive tablestyle">
                                                    <table class="table text-center">
                                                        <thead>
                                                            <tr>
                                                                <td scope="col">รหัสสมาชิก</td>
                                                                <td scope="col">ชื่อ - นามสกุล</td>
                                                                <td scope="col">เบอร์ติดต่อ</td>
                                                                <td scope="col">อีเมล</td>
                                                                <td scope="col">สถานะ</td>
                                                                <td scope="col"></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                                <tr>
                                                                    <td>0123</td>
                                                                    <td>สมชาย แซ่อึ้ง</td>
                                                                    <td>0123456789</td>
                                                                    <td>sample@gmail.com</td>
                                                                    <td class="text-center">
                                                                        <div class="form-check form-switch ">
                                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a href="javascript:void(0)" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa-solid fa-ellipsis"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fa-solid fa-pencil"></i> แก้ไข</a></li>
                                                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash-can"></i> ลบ</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <!--  -->
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add -->
<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="myModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModal1Label">เพิ่ม / แก้ไขสมาชิก</h3>
            </div>
            <div class="modal-body">
                <div class="box__form">
                    <form>
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">ชื่อ <span>*</span></label>
                                    <input type="text" name="username" class="form-control" placeholder="ระบุ">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">หัวข้อ <span>*</span></label>
                                    <input type="text" name="topic" class="form-control" placeholder="ระบุ">
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">อีเมล <span>*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="ระบุ">
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">เบอร์มือถือ <span>*</span></label>
                                    <input type="text" name="phone" class="form-control" placeholder="ระบุ" maxlength="10">
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="ระบุ" aria-describedby="button-addon2" value="ผู้จัดการ">
                                    <button class="btn btn__setpermission btn-next" type="button" id="button-addon2"><img src="assets/img/setting/icon-role.svg" class="img-fluid" alt=""> เลือกบทบาท</button>
                                </div>
                            </div>



                            <div class="col-xl-6 col-md-6 col-12 form-switch">
                                <label for=""> สถานะ</label>
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">อนุญาตให้ใช้งาน</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn__back" data-bs-dismiss="modal">กลับ</button>
                <button type="button" class="btn btn__yes" data-bs-toggle="modal" data-bs-target="#modalsuccess">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- Modal -->
<div class=" modal fade" id="myModal2" tabindex="-1" aria-labelledby="myModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content ">
            <div class="modal-header">
                <h3 class="modal-title" id="myModal2Label">เลือกบทบาท</h3>
            </div>
            <div class="modal-body">
                <?php

                $namechkbox = array(
                    '1' => 'ผู้จัดการ',
                    '2' => 'ผู้ดูแล',
                    '3' => 'แอดมิน',
                    '4' => 'เจ้าหน้าที่ขาย',
                    '5' => 'เจ้าหน้าที่บัญชี',
                    '6' => 'CPN Sale',
                );
                for ($i = 1; $i <= 6; $i++) {
                ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="permissionbox<?php echo $i; ?>">
                        <label class="form-check-label" for="permissionbox<?php echo $i; ?>">
                            <?php echo $namechkbox[$i]; ?>
                        </label>
                    </div>
                <?php } ?>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn__back btn-prev" data-bs-dismiss="modal">กลับ</button>
                <button type="button" class="btn btn__yes ">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!--  -->

<div class="modal fade" id="modalsuccess" tabindex="-1" aria-labelledby="myModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-body">
                <img src="assets/img/login/sf.png" class="img-fluid" alt="" style="margin-left: 4px;">
            </div>
            <div class="modal-footer">
                <div class="tt-text-con">
                    <p>
                        เพิ่มสมาชิกสำเร็จกรุณารอรับ Username
                        ทาง SMS
                    </p>
                </div>
                <div class="but-bb">
                    <button class="button btn__yes"> ตกลง
                    </button>
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