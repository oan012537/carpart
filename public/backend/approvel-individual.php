<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARPASRTSNAVI</title>
    <?php include 'stylesheet.php'; ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
</head>

<body id="body-pd" class="body-pd buyer">
    <?php include 'navbar-buyer.php'; ?>
    <input type="hidden" id="pageName" name="pageName" value="approval">
    <input type="hidden" id="pageName2" name="pageName2" value="approval-individual">

    <div class="content">

        <div class="box__approvel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="txt__page">คำขออนุมัติ : ผู้ขายบุคคลธรรมดา</h2>
                    </div>

                    <div class="col-12">
                        <div class="box__filter">
                            <form>
                                <div class="wrapper__form">
                                    <div class="box__search">
                                        <label for="">ค้นหา</label>


                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="ระบุ...." aria-describedby="button-search">
                                            <button class="btn btn__search" type="button" id="button-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        </div>
                                    </div>

                                    <div class="box__radio">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                วันที่สมัคร
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                วันที่อนุมัติ
                                            </label>
                                        </div>
                                    </div>

                                    <div class="box__search">
                                        <label for="">ช่วงวัน-เวลา</label>
                                        <div class="input-group ">
                                            <input type="date" class="form-control" placeholder="Recipient's username" aria-describedby="button-yes">
                                        </div>
                                    </div>

                                    <div class="box__btn">
                                        <button class="btn btn__search2" type="button" id="button-yes">ค้นหา</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="box__table">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="total-tab" data-bs-toggle="tab" data-bs-target="#total" type="button" role="tab" aria-controls="total" aria-selected="true">ทั้งหมด <span class="circle"> 1234</span></button>
                                    <button class="nav-link" id="wait-tab" data-bs-toggle="tab" data-bs-target="#wait" type="button" role="tab" aria-controls="wait" aria-selected="false">รออนุมัติ <span class="circle"> 14</span></button>
                                    <button class="nav-link" id="approval-tab" data-bs-toggle="tab" data-bs-target="#approval" type="button" role="tab" aria-controls="approval" aria-selected="false">อนุมัติแล้ว <span class="circle"> 34</span></button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="total" role="tabpanel" aria-labelledby="total-tab">
                                    <div class="table-responsive">
                                        <table id="table-user" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <td>รหัสสมาชิก</td>
                                                    <td>ชื่อร้าน</td>
                                                    <td>ชื่อผู้ขาย</td>
                                                    <td>เลขบัตรประชาชน</td>
                                                    <td>วันที่สมัคร</td>
                                                    <td>วันที่อนุมัติ</td>
                                                    <td>สถานะรายการ</td>
                                                    <td>หมายเหตุ</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 1; $i <= 35; $i++) { ?>
                                                    <tr>
                                                        <td>A23456781</td>
                                                        <td>ชื่อ</td>
                                                        <td>ชื่อจริง นามสกุล</td>
                                                        <td>12345677889901</td>
                                                        <td>15/15/2560 18.00</td>
                                                        <td>15/15/2560 18.00</td>
                                                        <td>
                                                            <?php if ($i <= 3) { ?>
                                                                <div class="approvel ap-success">
                                                                    <p>อนุมัติ</p>
                                                                </div>
                                                            <?php } elseif ($i > 3 && $i < 6) { ?>
                                                                <div class="approvel ap-wait">
                                                                    <p>รออนุมัติ</p>
                                                                </div>

                                                            <?php } else { ?>
                                                                <div class="approvel ap-no">
                                                                    <p>ไม่อนุมัติ</p>
                                                                </div>

                                                            <?php   }  ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($i <= 3) { ?>
                                                                <p class="txt__note">-</p>
                                                            <?php } else { ?>
                                                                <p class="txt__note">เอกสารไม่ชัด</p>
                                                            <?php   }  ?>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="btn btn__viewdetail" data-bs-toggle="modal" data-bs-target="#modalviewdetailapp">ดูรายละเอียด</a></td>
                                                        <td>
                                                            <div class="box__btn">
                                                                <button class="btn btn__app <?php if ($i == 1) {
                                                                                                echo 'btn__approval';
                                                                                            } ?>" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
                                                                <button class="btn btn__app  <?php if ($i == 1) {
                                                                                                    echo 'btn__waitapproval';
                                                                                                } ?>">รออนุมัติ</button>
                                                                <button class="btn btn__app  <?php if ($i == 1) {
                                                                                                    echo 'btn__noapproval';
                                                                                                } ?>">ไม่อนุมัติ</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="wait" role="tabpanel" aria-labelledby="wait-tab">
                                    <div class="table-responsive">
                                        <table id="table-user" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <td>รหัสสมาชิก</td>
                                                    <td>ชื่อร้าน</td>
                                                    <td>ชื่อผู้ขาย</td>
                                                    <td>เลขบัตรประชาชน</td>
                                                    <td>วันที่สมัคร</td>
                                                    <td>วันที่อนุมัติ</td>
                                                    <td>สถานะรายการ</td>
                                                    <td>หมายเหตุ</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 1; $i <= 35; $i++) { ?>
                                                    <tr>
                                                        <td>A23456781</td>
                                                        <td>ชื่อ</td>
                                                        <td>ชื่อจริง นามสกุล</td>
                                                        <td>12345677889901</td>
                                                        <td>15/15/2560 18.00</td>
                                                        <td>15/15/2560 18.00</td>
                                                        <td>
                                                            <div class="approvel ap-wait">
                                                                <p>รออนุมัติ</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php if ($i <= 3) { ?>
                                                                <p class="txt__note">-</p>
                                                            <?php } else { ?>
                                                                <p class="txt__note">เอกสารไม่ชัด</p>
                                                            <?php   }  ?>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="btn btn__viewdetail" data-bs-toggle="modal" data-bs-target="#modalviewdetailapp">ดูรายละเอียด</a></td>
                                                        <td>
                                                            <div class="box__btn">
                                                                <button class="btn btn__app <?php if ($i == 1) {
                                                                                                echo 'btn__approval';
                                                                                            } ?>" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
                                                                <button class="btn btn__app  <?php if ($i == 1) {
                                                                                                    echo 'btn__waitapproval';
                                                                                                } ?>">รออนุมัติ</button>
                                                                <button class="btn btn__app  <?php if ($i == 1) {
                                                                                                    echo 'btn__noapproval';
                                                                                                } ?>">ไม่อนุมัติ</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="approval" role="tabpanel" aria-labelledby="approval-tab">
                                    <div class="table-responsive">
                                        <table id="table-user" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <td>รหัสสมาชิก</td>
                                                    <td>ชื่อร้าน</td>
                                                    <td>ชื่อผู้ขาย</td>
                                                    <td>เลขบัตรประชาชน</td>
                                                    <td>วันที่สมัคร</td>
                                                    <td>วันที่อนุมัติ</td>
                                                    <td>สถานะรายการ</td>
                                                    <td>หมายเหตุ</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 1; $i <= 35; $i++) { ?>
                                                    <tr>
                                                        <td>A23456781</td>
                                                        <td>ชื่อ</td>
                                                        <td>ชื่อจริง นามสกุล</td>
                                                        <td>12345677889901</td>
                                                        <td>15/15/2560 18.00</td>
                                                        <td>15/15/2560 18.00</td>
                                                        <td>
                                                            <div class="approvel ap-success">
                                                                <p>อนุมัติ</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php if ($i <= 3) { ?>
                                                                <p class="txt__note">-</p>
                                                            <?php } else { ?>
                                                                <p class="txt__note">เอกสารไม่ชัด</p>
                                                            <?php   }  ?>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="btn btn__viewdetail" data-bs-toggle="modal" data-bs-target="#modalviewdetailapp">ดูรายละเอียด</a></td>
                                                        <td>
                                                            <div class="box__btn">
                                                                <button class="btn btn__app <?php if ($i == 1) {
                                                                                                echo 'btn__approval';
                                                                                            } ?>" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
                                                                <button class="btn btn__app  <?php if ($i == 1) {
                                                                                                    echo 'btn__waitapproval';
                                                                                                } ?>">รออนุมัติ</button>
                                                                <button class="btn btn__app  <?php if ($i == 1) {
                                                                                                    echo 'btn__noapproval';
                                                                                                } ?>">ไม่อนุมัติ</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalapproval" tabindex="-1" aria-labelledby="modalapprovalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modalapprovalLabel">อนุมัติแบบเร่งด่วน</h3>
                </div>
                <div class="modal-body">
                    <div class="box__result">
                        <p class="txt__result">ผลการพิจารณา :<span>ไม่ผ่าน</span></p>
                    </div>

                    <div class="form-group">
                        <label for="">หมายเหตุ</label>
                        <textarea name="txt__note" class="form-control" id="txt__note"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn__back" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="button" class="btn btn__yes">ยืนยัน</button>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- Modal -->
    <div class="modal fade" id="modalviewdetailapp" tabindex="-1" aria-labelledby="modalviewdetailappLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="wrapper__title">
                        <div class="box__title">
                            <h3 class="modal-title" id="modalviewdetailappLabel">ข้อมูลผู้ขาย บุคคลธรรมดา</h3>
                        </div>

                        <div class="box__codenumber">
                            <p>รหัสสมาชิก <span>12434345</span></p>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="box__detail">
                        <?php
                        $txtleft = array(
                            '1' => 'ชื่อร้าน',
                            '2' => 'ชื่อ',
                            '3' => 'นามสกุล',
                            '4' => 'อีเมล',
                            '5' => 'โทรศัพท์',
                            '6' => 'เลขบัตรประชาชน',
                            '7' => 'ที่อยู่ตามบัตรประชาชน',
                            '8' => 'ที่อยู่ร้าน',
                            '9' => 'สำเนาบัตรประชาชน',
                            '10' => 'Page Url/Facebook Url',
                            '11' => 'Google Map',
                        );

                        $txtright = array(
                            '1' => 'อะไหล่',
                            '2' => 'สมมติ',
                            '3' => 'แซ่ตัน',
                            '4' => 'emily@sample.com',
                            '5' => '012345678',
                            '6' => '12345678901234',
                            '7' => '123 หมู่ 0 ถนน เจริญกรุง ซอย 5  ตำบล ทุ่งสุลา อำเภอ ศรีราชา จังหวัด ชลบุรี 12345',
                            '8' => '123 หมู่ 0 ถนน เจริญกรุง ซอย 5  ตำบล ทุ่งสุลา อำเภอ ศรีราชา จังหวัด ชลบุรี 12345',
                            '9' => 'ดูรูปภาพ <a data-fancybox="gallery" class="btn__viewimage" href="https://lipsum.app/id/46/1600x1200"><i class="fa-solid fa-image"></i></a>',
                            '10' => 'www.facebook.com',
                            '11' => 'www.google.com ',
                        );
                        for ($i = 1; $i <= 11; $i++) { ?>
                            <div class="itemsdetail">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="txt__left"> <?php echo $txtleft[$i]; ?> </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="txt__right"><?php echo $txtright[$i]; ?></p>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="box__status">
                        <h2 class="txt__titlestatus">ข้อมูลผู้ขาย บุคคลธรรมดา</h2>
                        <div class="form-group">
                            <label for="">สถานะ <span>*</span></label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>อนุมัติ</option>
                                <option value="1">อนุมัติ</option>
                                <option value="2">รออนุมัติ</option>
                                <option value="3">ไม่อนุมัติ</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">หมายเหตุ</label>
                            <textarea name="txt__note" id="txt__note" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="wrapper__approvaldate">
                                <div class="box__date">
                                    <p>อนุมัตเมื่อ <span>dd/mm/yyyy hh:mm</span></p>
                                </div>

                                <div class="box__userapproval">
                                    <p>ผู้อนุมัติ <span>แอดมิน</span></p>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="modal-footer">
                        <div class="box__btn">
                            <button type="button" class="btn btn__back" data-bs-dismiss="modal">กลับ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
        <?php include 'javascript.php'; ?>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


        <!-- <script>
        $(document).ready(function() {
            $('#table-user').DataTable();
        });
    </script> -->

</body>

</html>