<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> register </title>
    <meta name="keywords" content="" />
    <meta name=" description" content="" />
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="brackets">
    <meta name='copyright' content='orange technology solution co.,ltd.'>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link type="image/ico" rel="shortcut icon" href="assets/img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="assets/css/regis8.css" rel="stylesheet">

    <?php include 'stylesheet.php'; ?>
</head>

<body>

    <section id="sec-regis5">
        <div class="container">
            <div class="box-b-login">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="img-img-log">
                            <img src="assets/img/login/ln1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="h-text-log">
                            <p>
                                สมัครสมาชิก
                            </p>
                        </div>
                        <div class="img-send-img">
                            <div class="text-center">
                                <img src="assets/img/login/se5.png" class="img-fluid" alt="..." style="">
                            </div>
                        </div>
                        <div class="tt-text-send">
                            <p>
                                ข้อมูลสมาชิก
                            </p>
                        </div>
                        <div class="tt-text-send2">
                            <p>
                                ข้อมูลติดต่อ
                            </p>
                        </div>
                        <div class="tt-text-send3">
                            <p>
                                ข้อมูลธนาคาร
                            </p>
                        </div>
                        <div class="box-b-detail">
                            <div class="tt-text-log">
                                <p>
                                    หมายเลขบัญชี *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="123-123456-1" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    ชื่อบัญชี *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="บริษัท เฮงเฮงอะไหล่ยนต์"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    ธนาคาร *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> กรุงไทย </option>
                                    <option value="1"> กสิกร </option>
                                    <option value="2"> กรุงเทพ</option>
                                    <option value="3"> ไทยพาณิชย์ </option>
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    สาขา *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ประชาอุทิศ </option>
                                    <option value="1"> พญาไท </option>
                                    <option value="2"> เทเวศน์ </option>
                                    <option value="3"> บางซื่อ </option>
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    ปรเภทบิญชี *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ออมทรัพย์ </option>
                                    <option value="1"> ออมทรัพย์ 1 </option>
                                    <option value="2"> ออมทรัพย์ 2</option>
                                    <option value="3"> ออมทรัพย์ 3 </option>
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    สำเนาหน้า Book bank *
                                </p>
                            </div>
                            <br>

                            <div class="drop-zone">
                                <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"
                                        style="font-size:35px"></i>
                                    <p> แนบรูปภาพ หรือ PDF</p>
                                    <div class="tt-img-detail">
                                        <p> ขนาดไม่เกิน 5 Mb. </p>
                                    </div>
                                </span>
                                <input type="file" name="myFile" class="drop-zone__input">
                            </div>



                            <br>
                            <div class='but-bb-log2'>
                                <button class="button button1" id="myBtn"> ถัดไป &nbsp; <i
                                        class='fas fa-angle-right'></i>
                                </button>
                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <div class="modal-body">
                                            <img src="assets/img/login/sc.png" class="img-fluid" alt=""
                                                style="margin-left: 28px;">
                                        </div>
                                        <div class="modal-footer">
                                            <div class="tt-text-con">
                                                
                                                <p>
                                                    รอการอนุมัติจากเจ้าหน้าที่
                                                </p>
                                            </div>
                                            <div class="tt-text-con2">
                                                <p>
                                                    เจ้าหน้าที่จะทำการตรวจสอบข้อมูลของท่านเพื่ออนุมติการสมัครสมาชิก
                                                    สามารถตรวจสอบการอนุมัตได้ทาง e-mail หรือ SMS ของท่าน
                                                </p>
                                            </div>
                                            <div class="tt-text-con3">
                                                <p>
                                                    ภายใน 24 ซม.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

    <script src="./src/main.js"></script>
    <script>
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        const dropZoneElement = inputElement.closest(".drop-zone");

        dropZoneElement.addEventListener("click", (e) => {
            inputElement.click();
        });

        inputElement.addEventListener("change", (e) => {
            if (inputElement.files.length) {
                updateThumbnail(dropZoneElement, inputElement.files[0]);
            }
        });

        dropZoneElement.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZoneElement.classList.add("drop-zone--over");
        });

        ["dragleave", "dragend"].forEach((type) => {
            dropZoneElement.addEventListener(type, (e) => {
                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        dropZoneElement.addEventListener("drop", (e) => {
            e.preventDefault();

            if (e.dataTransfer.files.length) {
                inputElement.files = e.dataTransfer.files;
                updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
            }

            dropZoneElement.classList.remove("drop-zone--over");
        });
    });

    /**
     * Updates the thumbnail on a drop zone element.
     *
     * @param {HTMLElement} dropZoneElement
     * @param {File} file
     */
    function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

        // First time - remove the prompt
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
            dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }

        // First time - there is no thumbnail element, so lets create it
        if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("drop-zone__thumb");
            dropZoneElement.appendChild(thumbnailElement);
        }

        thumbnailElement.dataset.label = file.name;

        // Show thumbnail for image files
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = () => {
                thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
            };
        } else {
            thumbnailElement.style.backgroundImage = null;
        }
    }
    </script>


</body>

</html>