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
                <?php include 'supplier-navprofile.php' ?>
            </div>
            <div class="col-lg-9">
                <div class="box__editprofile">
                    <form>
                        <div class="groupedit1">
                            <p class="title__txt">ขอเปลี่ยนแปลงข้อมูลผู้ติดต่อ</p>
                            <div class="itemsorg">
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
                            </div>

                            <p class="title__txt2">ข้อมูลที่อยู่</p>
                            <div class="itemsorg">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label> สำเนาบัตรประชาชน <span>* (รองรับไฟล์ .jpg .png เท่านั้น ขนาดไม่เกิน 5Mb.)</span></label>
                                            <div class="box__drop">
                                                <div class="drop-zone">
                                                    <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"></i>
                                                        <p> แนบรูปภาพ </p>
                                                        <div class="tt-img-detail">
                                                            <p> ขนาดไม่เกิน 5 Mb.</p>
                                                        </div>
                                                    </span>
                                                    <input type="file" name="myFile" class="drop-zone__input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">ที่อยู่ตามบัตรประชาชน <span>*</span></label>
                                            <textarea name="address" class="form-control"></textarea>

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
                                            <label for="">เขต/อำเภอ <span>*</span></label>
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
                                            <label for="">แขวง/ตำบล <span>*</span></label>
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
                            </div>

                    </form>
                    <div class="box__btneditprofile">
                        <button class="btn btn__back">กลับ</button>
                        <button class="btn btn__yes">ยืนยัน</button>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>


    </div>

    </div>

    <?php include 'javascript.php'; ?>
    <script src="assets/js/dropzone.js"></script>

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