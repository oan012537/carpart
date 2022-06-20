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
                    <div class="box__editinfoorg">
                        <div class="groupedit1">
                            <p class="title__txt">ขอเปลี่ยนแปลงข้อมูลบริษัท</p>
                            <div class="itemsorg">
                                <form>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label> ชื่อ</label>
                                                <input type="text" class="form-control" name="nameorg" placeholder="ระบุ">
                                            </div>
                                        </div>

                                        <div class="col-6"></div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">อีเมล</label>
                                                <input type="email" class="form-control" name="email" placeholder="emily@sample.com">

                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">โทรศัพท์ </label>
                                                <input type="text" class="form-control" name="phone" maxlength="10" placeholder="0123344565">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--  -->

                        <div class="groupedit2">
                            <p class="title__txt">ข้อมูลที่อยู่</p>
                            <div class="itemsorg">
                                <form>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label> ที่อยู่ตามบริษัท <span> *</span></label>
                                                <textarea name="address" class="form-control" placeholder="ระบุ"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">จังหวัด <span>*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>จังหวัด 1</option>
                                                    <option value="1">จังหวัด 2</option>
                                                    <option value="2">จังหวัด 3</option>
                                                    <option value="3">จังหวัด 4</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">เขต <span>*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>เขต 1</option>
                                                    <option value="1">เขต 2</option>
                                                    <option value="2">เขต 3</option>
                                                    <option value="3">เขต 4</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">แขวง <span>*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>แขวง 1</option>
                                                    <option value="1">แขวง 2</option>
                                                    <option value="2">แขวง 3</option>
                                                    <option value="3">แขวง 4</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">รหัสไปรษณีย์ <span>*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>รหัสไปรษณีย์ 1</option>
                                                    <option value="1">รหัสไปรษณีย์ 2</option>
                                                    <option value="2">รหัสไปรษณีย์ 3</option>
                                                    <option value="3">รหัสไปรษณีย์ 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>

                            <!--  -->
                            <div class="box__btn">
                                <button class="btn btn__back">กลับ</button>
                                <button class="btn btn__yes">ยืนยัน</button>
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