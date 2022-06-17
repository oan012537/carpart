<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="keywords" content="" />
    <meta name=" description" content="" />
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="brackets">
    <meta name='copyright' content='orange technology solution co.,ltd.'>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link type="image/ico" rel="shortcut icon" href="assets/img/favicon.ico">

    <?php include 'stylesheet.php'; ?>
</head>

<body>

    <?php include 'header.php'; ?>



    <section id="sec-login1">
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
                                เข้าสู่ระบบ
                            </p>
                        </div>
                        <div class="tt-text-log">
                            <p>
                                ชื่อ
                            </p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="ระบุ" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="tt-text-log2">
                            <p>
                                อีเมล
                            </p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="carparts.navi@gmail.com">
                        </div>

                        <div class="tt-text-log2">
                            <p>
                                เบอร์มือถือ <span>*</span>
                            </p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="ระบุ">
                        </div>



                        <br>
                        <div class='but-bb-log'>
                            <a href="javascript:void(0)" class="button button1" data-bs-toggle="modal" data-bs-target="#modalsuccess"> สมัครสมาชิก</a>
                        </div>

                        <div class="text-or-t">
                            <p>
                                CPN
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modalsuccess" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/img/login/sf.png" class="img-fluid" alt="" style="margin-left: 4px;">
                </div>
                <div class="modal-footer">
                    <div class="tt-text-con">
                        <p>
                            ยืนยันตัวตนสำเร็จ
                        </p>
                    </div>
                    <br>
                    <div class="but-bb">
                        <button class="button button3" data-bs-dismiss="modal"> ตกลง</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php'; ?>
    <?php include 'javascript.php'; ?>

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
</body>

</html>