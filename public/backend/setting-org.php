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
    <?php include 'navbar-buyer.php'; ?>
    <input type="hidden" id="pageName" name="pageName" value="setting-org">

    <div class="content">

        <div class="box__contentsetting">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box__title">
                        <h3>ตั้งค่าบริษัท</h3>
                    </div>
                </div>


                <div class="col-lg-3">
                    <?php include 'nav-profile.php' ?>
                </div>
                <div class="col-lg-9">
                    <div class="box__infoorg">
                        <div class="row">
                            <div class="col-10">
                                <p class="title__box">ข้อมูลบริษัท</p>
                            </div>
                            <div class="col-2">
                                <div class="box__edit">
                                    <a href="edit-infoorg.php" class="btn__edit"><i class="fa-solid fa-pencil"></i> แก้ไข</a>

                                </div>
                            </div>
                        </div>

                        <div class="box__info">
                            <?php
                            $heading = array(
                                '1' => 'ชื่อ',
                                '2' => 'อีเมล',
                                '3' => 'โทรศัพท์',
                                '4' => 'ที่อยู่',
                                '5' => 'Facebook Url',
                                '6' => 'LINE Url',
                                '7' => 'คำที่แสดงบนปุ่ม Add freind',
                            );

                            $result = array(
                                '1' => 'CPN',
                                '2' => 'emily@sample.com',
                                '3' => '012345678',
                                '4' => '123 หมู่ 0 ถนน เจริญกรุง ซอย 5  ตำบล ทุ่งสุลา อำเภอ ศรีราชา จังหวัด ชลบุรี 12345',
                                '5' => 'facebook.com/.....',
                                '6' => 'line.me......',
                                '7' => 'เป็นเพื่อนกันเราบน LINE',
                            );

                            for ($i = 1; $i <= 7; $i++) {
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
                                            <?php if ($i != 7) { ?>
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

    <?php include 'footer.php'; ?>
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