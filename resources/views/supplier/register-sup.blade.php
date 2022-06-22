<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{url("")}}">
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
    <link href="assets/css/regis6.css" rel="stylesheet">

    @include('inc_stylesheet')
</head>

<body>
    <form method="POST" action="{{route('regiser-sup')}}">
        @csrf
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
                                <img src="assets/img/login/se3.png" class="img-fluid" alt="...">
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
                                    ประเภท
                                </p>
                            </div>

                            <div class="box-check">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tabs"
                                        id="onetab" value="normal">
                                    <label class="form-check-label" for="one"> บุคคลธรรมดา </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tabs"
                                        id="twotab" value="niti">
                                    <label class="form-check-label" for="two"> นิติบุคคล </label>
                                </div>
                                
                            </div>
                            <br>
                            <div class="tt-text-log">
                                <p>
                                    ชื่อร้าน *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ระบุ" name="store_name" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    ชื่อ *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ระบุ" name="first_name" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    นามสกุล *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ระบุ" name="last_name" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    เลขบัตรประชาชน *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ระบุ" name="card_id" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    ที่อยู่ (ตามบัตรประชาชน) *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ระบุ" name="address" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    ตำบล *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ระบุ </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3 </option>
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    อำเภอ *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ระบุ </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3 </option>
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    จังหวัด *
                                </p>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected> ระบุ </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3 </option>
                                </select>
                            </div>
                            <div class="tt-text-log">
                                <p>
                                    สำเนาบัตรประชาชน *
                                </p>
                                <div class="text-t-log">
                                    <p>
                                        (รองรับไฟล์ .jpg และ .png เท่านั้น. ขนาดไม่เกิน 5Mb.)
                                    </p>
                                </div>
                            </div>

                            <div class="drop-zone">
                                <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"
                                        style="font-size:35px"></i>
                                    <p> แนบรูปภาพ Jpeg</p>
                                    <div class="tt-img-detail">
                                        <p> ขนาดไม่เกิน 5 ภาพ </p>
                                        <p> ขนาดไม่เกิน 5 Mb. </p>
                                    </div>
                                </span>
                                <input type="file" name="myFile" class="drop-zone__input">
                            </div>

                            <br>
                            <div class="tt-text-log">
                                <p>
                                    ทะเบียนบ้าน *
                                </p>
                                <div class="text-t-log">
                                    <p>
                                        (รองรับไฟล์ .jpg และ .png เท่านั้น. ขนาดไม่เกิน 5Mb.)
                                    </p>
                                </div>
                            </div>

                            <div class="drop-zone">
                                <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"
                                        style="font-size:35px"></i>
                                    <p> แนบรูปภาพ Jpeg</p>
                                    <div class="tt-img-detail">
                                        <p> ขนาดไม่เกิน 5 Mb. </p>
                                    </div>
                                </span>
                                <input type="file" name="myFile" class="drop-zone__input">
                            </div>

                            <br>
                            <div class='but-bb-log2'>
                                {{-- registercon-sup.php --}}
                                <a href="{{url('supplier/registercon-sup')}}"> 
                                    <button class="button button1"> ถัดไป &nbsp; <i class='fas fa-angle-right'></i>
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>






    </section>
</form>

    @include('inc_footer')

    <script>
    onChangeHandler = () => {
        let reader = new FileReader();
        let file = $(".upload-image__file")[0].files[0]
        reader.onloadend = () => {
            console.log(reader.result)
            $(".upload-image").css("background-image", "url(" + reader.result + ")")

        }
        reader.readAsDataURL(file);
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