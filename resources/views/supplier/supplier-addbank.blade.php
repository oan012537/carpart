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
    <input type="hidden" id="pageName2" name="pageName2" value="profilebank">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box__title">
                        <h3>ข้อมูลร้านค้า</h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <?php include 'supplier-navprofile.php' ?>
                </div>
                <div class="col-lg-9">
                    <div class="box__profileaddbank">
                        <div class="groupedit1">
                            <div class="row">
                                <div class="col-12">
                                    <p class="title__box">ขอเปลี่ยนแปลงข้อมูลบัญชีธนาคาร <span>เจ้าหน้าที่จะตรวจสอบและเปลี่ยนแปลงข้อมูลให้ภายใน ....</span></p>
                                </div>
                            </div>

                            <div class="itemseditaddbank">
                                <form>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="box__setdefault">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        ตั้งเป็นบัญชีรับเงิน
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label> หมายเลขบัญชี <span> *</span></label>
                                                <input type="text" class="form-control" name="numberbank" placeholder="ระบุ">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label> ชื่อบัญชี <span>*</span> </label>
                                                <input type="text" class="form-control" name="namebank" placeholder="ระบุ">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">ธนาคาร <span>*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>กรุงไทย</option>
                                                    <option value="1">ไทยพาณิชย์</option>
                                                    <option value="2">กสิกรไทย</option>
                                                    <option value="3">กรุงศรี</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">สาขา <span>*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>สาขา 1</option>
                                                    <option value="1">สาขา 2</option>
                                                    <option value="2">สาขา 3</option>
                                                    <option value="3">สาขา 4</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">ประเภทบัญชี <span>*</span></label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>ออมทรัพย์</option>
                                                    <option value="1">ออมทรัพย์</option>
                                                    <option value="2">ฝากประจำ</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="tt-text-log">
                                                <p>
                                                    สำเนาหน้า Book Bank <span class="dot__color">* (รองรับไฟล์ .jpg .png หรือ .pdf เท่านั้น ขนาดไม่เกิน 5Mb.)</span>
                                                </p>
                                            </div>

                                            <div class="box__drop">
                                                <div class="drop-zone">
                                                    <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"></i>
                                                        <p> แนบรูปภาพ หรือ PDF</p>
                                                        <div class="tt-img-detail">
                                                            <p> ขนาดไม่เกิน 5 Mb.</p>
                                                        </div>
                                                    </span>
                                                    <input type="file" name="myFile" class="drop-zone__input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!--  -->
                            <div class="box__btn">
                                <button class="btn btn__back">กลับ</button>
                                <button class="btn btn__yes" data-bs-toggle="modal" data-bs-target="#modalotp">ยืนยัน</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Otp -->
    <div class="modal fade" id="modalotp" tabindex="-1" aria-labelledby="modalotpLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalotpLabel">ยืนยันรหัส OTP</h5>
                </div>
                <div class="modal-body">
                    <div class="box__contentotp">
                        <p class="txt__title">กรุณากรอกรหัส OTP ที่ส่งไปยังหมายเลข</p>
                        <p class="txt__phone">012-345-6789</p>


                        <form class="digit-group" data-group-name="digits" autocomplete="off">
                            <input class="otp" type="text" maxlength="1">
                            <input class="otp" type="text" maxlength="1">
                            <input class="otp" type="text" maxlength="1">
                            <input class="otp" type="text" maxlength="1">
                            <input class="otp" type="text" maxlength="1">
                            <input class="otp" type="text" maxlength="1">
                        </form>

                        <p class="txt__time">หากไม่ได้รับรหัสผ่านใน 1 นาที</p>
                        <p class="txt__otp">กรุณากด <a href="javascript:void(0)">ส่งรหัส OTP อีกครั้ง <i class="fas fa-sync-alt"></i></a> </p>

                        <div class="box__btn">
                            <button type="button" class="btn btn__back" data-bs-dismiss="modal">กลับ</button>
                            <button type="button" class="btn btn__yes">ยืนยัน</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal Otp -->



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

            // OTP
            document.querySelectorAll(".otp").forEach(function(otpEl) {
                otpEl.addEventListener("keyup", backSp);
                otpEl.addEventListener("keypress", function() {
                    var nexEl = this.nextElementSibling;
                    nexEl.focus();
                })
            })

            function backSp(backKey) {
                if (backKey.keyCode == 8) {
                    var prev = this.previousElementSibling.focus()
                }
            }

            // 

        });
    </script>


</body>

</html>