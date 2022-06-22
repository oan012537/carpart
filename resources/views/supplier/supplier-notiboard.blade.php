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
                <div class="col-6">
                    <h2 class="txt__page">แจ้งเตือน</h2>
                </div>

                <div class="col-6">
                    <div class="box__btn">
                        <a href="supplier-setnotiboard.php" class="btn btn__bgyellow"><i class="fa-solid fa-gear"></i> ตั้งค่าการแจ้งเตือน</a>
                    </div>
                </div>

            </div>

            <div class="box__allitemsorder">
                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <div class="itemsorder">
                        <div class="row">
                            <div class="col-2">
                                <img src="assets/img/noti/image.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-5">
                                <div class="box__content">
                                    <p class="txt__order">คำสั่งซื้อใหม่</p>
                                    <p class="txt__numorder">หมายเลขคำสั่งซื้อ C1234567890</p>
                                    <p class="txt__dateorder">15/12/2654 18.00</p>
                                </div>
                            </div>
                            <div class="col-5">

                                <div class="box__btn">
                                    <a href="javascript:void(0)" class="btn btn__nobg">ดูรายละเอียด</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>

    <?php include 'javascript.php'; ?>




</body>

</html>