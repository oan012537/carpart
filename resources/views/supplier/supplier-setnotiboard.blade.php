<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARPASRTSNAVI</title>
    <?php include 'stylesheet.php'; ?>

</head>

<body id="body-pd" class="body-pd buyer">
    <?php include 'supplier-menudashboard.php'; ?>
    <input type="hidden" id="pageName" name="pageName" value="notiboard">

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">ตั้งค่าการแจ้งเตือน</h2>
                </div>
            </div>

            <div class="box__notigeneral">
                <p class="txt__titlebox"><i class="fa-solid fa-circle-exclamation"></i> การแจ้งเตือนทั่วไป</p>

                <?php
                $chkname = array(
                    '1' => 'เลือกทั้งหมด',
                    '2' => 'รับการแจ้งเตือนเมื่อมีคำร้องขอยืนยันความพร้อมสินค้าใหม่',
                    '3' => 'รับการแจ้งเตือนเมื่อมีคำสั่งซื้อใหม่',
                    '4' => 'รับการแจ้งเตือนเมื่อได้รับการยืนยันได้รับสินค้าจากผู้ซื้อ',
                    '5' => 'รับการแจ้งเตือนการโอนเงินจาก CPN',
                    '6' => 'รับการแจ้งเตือนเมื่อมีคำร้องขอเคลมสินค้า',
                    '7' => 'รับการแจ้งเตือนเมื่อมีข้อความใหม่ในกล่องข้อความ',
                    '8' => 'รับรับการแจ้งเตือนคำขอหาอะไหล่การแจ้งเตือนเมื่อมีรายการสินค้าที่ถูกระงับโดยแอดมิน CPN',
                    '9' => 'รับการแจ้งเตือนคำขอหาอะไหล่',
                );
                for ($i = 1; $i <= 9; $i++) {
                ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="optionssetiing<?php echo $i; ?>" checked>
                        <label class="form-check-label" for="optionssetiing<?php echo $i; ?>">
                            <?php echo $chkname[$i]; ?>
                        </label>
                    </div>

                <?php } ?>
            </div>

            <!--  -->

            <div class="box__notispareparts">
                <p class="txt__titlebox"><i class="fa-solid fa-circle-exclamation"></i> การแจ้งเตือนคำขอหาอะไหล่ <span>กรณีไม่ได้ระบุกรองคำขอหาอะไหล่จะแจ้งเตือนทั้งหมด</span></p>

                <?php
                $chkname = array(
                    '1' => 'Toyota',
                    '2' => 'Honda',
                );
                $tag1 = array(
                    '1' => 'ถังน้ำสำรอง',
                    '2' => 'ชุดสายไฟ',
                    '3' => 'กล่องฟิวส์',
                    '4' => 'ถังน้ำมัน',
                    '5' => 'หมวดหมู่ย่อย',
                );

                $tag2 = array(
                    '1' => 'คันเร่ง',
                    '2' => 'เบรก',
                    '3' => 'ครัช',
                    '4' => 'ไฟเตือน',
                    '5' => 'แบตเตอร์รี่',
                );
                for ($i = 1; $i <= 2; $i++) {
                ?>
                    <div class="box__filter">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="optionsbrands<?php echo $i; ?>" checked>
                                    <label class="form-check-label" for="optionsbrands<?php echo $i; ?>">
                                        <?php echo $chkname[$i]; ?>
                                    </label>
                                </div>

                                <div class="box__tag">
                                    <?php if ($i == 1) { ?>
                                        <?php for ($x = 1; $x <= 5; $x++) { ?>
                                            <span class="badge bg__tag itemstag__<?php echo $x; ?>"><i class="fa-solid fa-xmark"></i> <?php echo $tag1[$x]; ?></span>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php for ($x = 1; $x <= 5; $x++) { ?>
                                            <span class="badge bg__tag itemstag__<?php echo $x; ?>"><i class="fa-solid fa-xmark"></i> <?php echo $tag2[$x]; ?></span>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0)">
                                    <div class="circlebin"><i class="fa-solid fa-trash"></i></div> ลบ
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <div class="box__btnadd">
                    <button class="btn btn__bgyellow"><i class="fa-solid fa-circle-plus"></i> ข้อมูลสินค้าที่ต้องการรับแจ้งเตือน</button>
                </div>
            </div>

            <div class="box__wrapperbutton">
                <a href="javascript:void(0)" class="btn btn__exit">ยกเลิก</a>
                <a href="javascript:void(0)" class="btn btn__save">บันทึก</a>
            </div>
        </div>

    </div>

    <?php include 'javascript.php'; ?>




</body>

</html>