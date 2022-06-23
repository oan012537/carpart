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
                <div class="box__editprofile">
                    <div class="groupedit1">
                        <p class="title__txt">ขอเปลี่ยนแปลงข้อมูลผู้ติดต่อ</p>
                        <div class="itemsorg">
                            <form>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label> ชื่อ <span>*</span></label>
                                            <input type="text" class="form-control" name="firstname" placeholder="ระบุ">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">นามสกุล <span>*</span></label>
                                            <input type="text" class="form-control" name="lastname" placeholder="ระบุ">

                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">อีเมล</label>
                                            <input type="email" class="form-control" name="email" placeholder="emily@sample.com">

                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">โทรศัพท์ <span>*</span></label>
                                            <input type="text" class="form-control" name="phone" maxlength="10" placeholder="0123344565">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <div class="box__btneditprofile">
                    <button class="btn btn__back">กลับ</button>
                    <button class="btn btn__yes">ยืนยัน</button>
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