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
                <div class="col-lg-3">
                    <?php include 'supplier-navprofilelegal.php' ?>
                </div>

                <div class="col-lg-9">
                    <div class="box__profile">
                        <div class="row">
                            <div class="col-10">
                                <p class="title__box">ข้อมูลผู้ขาย</p>
                            </div>
                            <div class="col-2">
                                <div class="box__edit">
                                    <a href="supplier-editprofilelegal.php" class="btn__edit"><i class="fa-solid fa-pencil"></i> แก้ไข</a>

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

                            for ($i = 1; $i <= 4; $i++) {
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
                </div>
            </div>
        </div>
    </div>




    <?php include 'javascript.php'; ?>

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


</body>

</html>