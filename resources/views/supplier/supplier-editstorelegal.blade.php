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
                    <div class="box__profileeditstore">
                        <div class="groupedit1">
                            <div class="row">
                                <div class="col-12">
                                    <p class="title__box">ขอเปลี่ยนแปลงข้อมูลบริษัท <span>เจ้าหน้าที่จะตรวจสอบและเปลี่ยนแปลงข้อมูลให้ภายใน ....</span></p>
                                </div>
                            </div>



                            <div class="itemseditstore">
                                <form>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label> ชื่อบริษัท <span> *</span></label>
                                                <input type="text" class="form-control" name="nameorg" placeholder="ระบุ">
                                            </div>
                                        </div>

                                        <div class="col-6"></div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label> สาขา </label>
                                                <input type="text" class="form-control" name="branch" placeholder="ระบุ">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label> เลขประจำตัวผู้เสียภาษี <span> *</span></label>
                                                <input type="text" class="form-control" name="branch" placeholder="ระบุ">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label> ที่อยู่ตามหนังสือรับรองบริษัท <span> *</span></label>
                                                <textarea name="addressorg" class="form-control" placeholder="ระบุ"></textarea>
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

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label> อีเมล </label>
                                                <input type="email" class="form-control" name="branch" placeholder="ระบุ">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label> โทรศัพท์ <span> *</span></label>
                                                <input type="text" class="form-control" name="phone" maxlength="10" placeholder="ระบุ">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label> Page URL/Facebook URL <span> *</span></label>
                                                <input type="text" class="form-control" name="pageurl" placeholder="ระบุ">
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label> Google Map Url <span> *</span></label>
                                                <input type="text" class="form-control" name="googlemap" placeholder="ระบุ">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="tt-text-log">
                                                <p>
                                                    หนังสือรับรองบริษัท อายุไม่เกิน 6 เดือน <span class="dot__color">* (รองรับไฟล์ .jpg .png หรือ .pdf เท่านั้น ขนาดไม่เกิน 5Mb.)</span>
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


                                        <div class="col-12">
                                            <div class="tt-text-log">
                                                <p>
                                                    สำเนา ภ.พ.20 <span> (รองรับไฟล์ .jpg .png หรือ .pdf เท่านั้น ขนาดไม่เกิน 5Mb.)
                                                    </span>
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