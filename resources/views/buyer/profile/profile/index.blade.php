<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CARPARTSNAVI </title>
    <meta name="keywords" content="" />
    <meta name=" description" content="" />
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="brackets">
    <meta name='copyright' content='orange technology solution co.,ltd.'>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link type="image/ico" rel="shortcut icon" href="assets/img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link modal -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- link modal -->

    @include('buyer.layouts.inc_stylesheet')

    <link rel="stylesheet" href="{{ asset('assets/css/account-buy.css') }}">
</head>

<body>

    @include('buyer.layouts.inc_headerlogin')

    <!-- <input type="hidden" id="pageNameNav" name="pageNameNav" value="account-buy" > -->

    <section id="history-request">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="nav__top">
                        <a href="javascript:void(0)">บัญชีของฉัน</a> <span><i
                                class="fa-solid fa-chevron-right"></i></span> <a href="javascript:void(0)">
                            บัญชีของฉัน </a>
                    </div>

                    @include('buyer.profile.nav_profile')

                </div>
                <div class="col-8">
                    <div class="box__contentmain">
                        <div class="box__tab">
                        <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="taball-tab" data-bs-toggle="tab"
                                        data-bs-target="#taball" type="button" role="tab" aria-controls="taball"
                                        aria-selected="true">ข้อมูลส่วนตัว </button>
                                    <button class="nav-link" id="tabrequest-tab" data-bs-toggle="tab"
                                        data-bs-target="#tabrequest" type="button" role="tab" aria-controls="tabrequest"
                                        aria-selected="false"> รหัสผ่าน </button>
                                    <button class="nav-link" id="navopen-tab" data-bs-toggle="tab"
                                        data-bs-target="#navopen" type="button" role="tab" aria-controls="navopen"
                                        aria-selected="false">เชื่อมต่อโซเชียล</button>
                                    <button class="nav-link" id="navbank-tab" data-bs-toggle="tab"
                                        data-bs-target="#navbank" type="button" role="tab" aria-controls="navbank"
                                        aria-selected="false">ข้อมูลธนาคาร </button>
                                    <button class="nav-link" id="navaddress-tab" data-bs-toggle="tab"
                                        data-bs-target="#navaddress" type="button" role="tab" aria-controls="navaddress"
                                        aria-selected="false">จัดการที่อยู่ </button>
                                </div>
                            </nav>


                            <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="taball" role="tabpanel" aria-labelledby="taball-tab">
                                    @include('buyer.profile.profile.user_profile')
                                </div>

                                <div class="tab-pane fade" id="tabrequest" role="tabpanel" aria-labelledby="tabrequest-tab">
                                    @include('buyer.profile.profile.user_password')
                                </div>

                                <div class="tab-pane fade" id="navopen" role="tabpanel" aria-labelledby="navopen-tab">
                                    @include('buyer.profile.profile.user_socialmedia')
                                </div>
                                
                                <div class="tab-pane fade" id="navbank" role="tabpanel" aria-labelledby="navbank-tab">
                                    @include('buyer.profile.profile.user_bank')  
                                </div>

                                <div class="tab-pane fade" id="navaddress" role="tabpanel" aria-labelledby="navaddress-tab">
                                    @include('buyer.profile.profile.user_address')  
                                </div>

                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    

    @include('layouts.inc_footer')
    @include('buyer.layouts.inc_js')


     <!-- JS  upload img -->
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



    <!-- JS  modal edit -->
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


    <!-- JS  modal edit 2 -->
    <script>
        var modal = document.getElementById("myModa2");
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

<script>

    $(document).ready(function() {
        $.get("{{url('fetchamphures')}}/1",function(result) {
            $("#amphure").empty().append('<option disabled selected>Choose</option>');
            $.each(result, function(indexInArray, valueOfElement) {
                $("#amphure").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
            });
        });
    });

</script>
           
@include('buyer.profile.profile.inc_js_user_profileaccount') <!-- JS ของ file user_profile  -->
@include('buyer.profile.profile.inc_js_user_password') <!-- JS ของ file user_password  -->
@include('buyer.profile.profile.inc_js_user_bank') <!-- JS ของ file user_bank -->
@include('buyer.profile.profile.inc_js_user_address') <!-- JS ของ file user_address -->

</body>

</html>