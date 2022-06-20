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
            <div class="box-b-login box-backend">
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
                                อีเมล
                            </p>
                        </div>
                        <div class="input-group mb-3 box-border">
                            <span> <img src="assets/img/login/icon-in.svg" class="img-fluid icon-signin" alt=""></span>
                            <input type="text" class="form-control" name="username" placeholder="01xx-xxx-xxxxx" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="tt-text-log2">
                            <p>
                                รหัสผ่าน
                            </p>
                        </div>
                        <div class="input-group mb-3 box-border">
                            <img src="assets/img/login/icon-key.svg" class="img-fluid icon-key" alt="">
                            <input type="password" name="password" class="form-control" id="password" placeholder="*************">
                            <img src="assets/img/login/icon-eye.svg" class="img-fluid icon-eye" alt="" onclick="eyePassword()">
                        </div>
                        <div class="t-pass-t">
                            <p>
                                ลืมรหัสผ่าน
                            </p>
                        </div>
                        <br>
                        <div class='but-bb-log'>
                            <a href="setting-org.php" class="button button1">
                                เข้าสู่ระบบ
                            </a>
                        </div>

                        <div class="text-or-t">
                            <p>
                                CPN
                            </p>
                        </div>
                        <div class='but-bb-log2'>
                            <a href="register.php" class="button button2">
                                สมัครสมาชิก
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <?php include 'footer.php'; ?>
    <?php include 'javascript.php'; ?>

    <script>
        eyePassword = () => {
            const togglePassword = document.querySelector('.icon-eye');
            const password = document.querySelector('#password');

            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

        }
    </script>
</body>

</html>