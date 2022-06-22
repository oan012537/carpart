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
                    <?php include 'supplier-navprofilelegal.php' ?>
                </div>
                <div class="col-lg-9">
                    <div class="box__profilestore">
                        <div class="row">
                            <div class="col-10">
                                <p class="title__box">ข้อมูลบริษัท/นิติบุคคล</p>
                            </div>
                            <div class="col-2">
                                <div class="box__edit">
                                    <a href="supplier-editstorelegal.php" class="btn__edit"><i class="fa-solid fa-pencil"></i> แก้ไขที่อยู่</a>

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
                                '9' => 'สำเนา ภ.พ.20',

                            );

                            $result = array(
                                '1' => 'เฮงเฮงอะไหล่ยนต์ <img src="assets/img/icon/icon-verify.svg" class="img-fluid"> นิติบุคคล',
                                '2' => 'สำนักงานใหญ่',
                                '3' => '1234445657676',
                                '4' => '123 หมู่ 0 ถนน เจริญกรุง ซอย 5  ตำบล ทุ่งสุลา อำเภอ ศรีราชา จังหวัด ชลบุรี 12345',
                                '5' => 'sample@gmail.com',
                                '6' => '012345678',
                                '7' => 'www.sample.com',
                                '8' => 'www.sample.com',
                                '9' => 'หนังสือรับรองบริษัท',
                                '9' => 'สำเนา ภ.พ.20 <a data-fancybox="gallery" class="btn__viewimage" href="https://lipsum.app/id/46/1600x1200"><i class="fa-solid fa-image"></i></a>',
                            );

                            for ($i = 1; $i <= 9; $i++) {
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