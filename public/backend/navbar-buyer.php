    <header class="header body-pd" id="header">
        <div class="header_toggle"> <img src="assets/img/navbar/icon-richmenu.svg" alt="" id="header-toggle"> </div>
        <ul class="box__allheader">
            <li class="nav-item box__icon">
                <a class="nav-link " href="#">
                    <div class="iconimage">
                        <img src="assets/img/icon/icon-noti.svg" class="img-fluid" alt="">
                        <div class="box__number"><span>11</span></div>
                    </div>
                </a>
            </li>
            <!--  -->

            <li class="nav-item box__icon">
                <a class="nav-link" href="#">
                    <div class="iconimage">
                        <img src="assets/img/icon/icon-email.svg" class="img-fluid" alt="">
                    </div>
                </a>
            </li>

            <li class="nav-item box__icon">
                <a class="nav-link" href="#">
                    <div class="iconimage">
                        <img src="assets/img/icon/icon-extend.svg" class="img-fluid" alt="">
                    </div>
                </a>
            </li>

            <!--  -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/img/icon/icon-web.svg" class="img-fluid" alt=""> ไทย
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">ไทย</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">English</a></li>
                </ul>
            </li>

            <!--  -->

            <li class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </li>

            <a href="javascript:void(0)" class="btn__logout"><i class="fa-solid fa-right-from-bracket"></i> ออกจากระบบ</a>

        </ul>

    </header>
    <div class="l-navbar showmenu" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <img src="assets/img/navbar/logo-whites.svg" class="img-fluid" alt=""> </a>
                <div class="nav_list">
                    <li>
                        <a href="#" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    </li>
                    <!-- DropDown -->
                    <li>
                        <a href="javascript:void(0)" class="nav_link" data-page="approval" id="1">
                            <i class="fa-solid fa-list"></i>
                            <div class="nav_name">คำขออนุมัติ <div class="box__iconmenu"> <span class="circle">12</span></div>
                                <div class="icondropdown">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="item-show-1 itemdropdown">
                            <li data-page="approval-individual"><a href="approvel-individual.php">ผู้ขายบุคคลธรรมดา</a></li>
                            <li data-page="approval-legal"><a href="approvel-legal.php">ผู้ขายนิติบุคคล</a></li>
                        </ul>
                    </li>
                    <!-- DropDown -->
                    <li> <a href="#" class="nav_link"> <i class="fa-solid fa-cart-shopping"></i> <span class="nav_name">รายการสั่งซื้อ</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class='fas fa-exclamation-circle'></i> <span class="nav_name">รายการเคลม</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class='far fa-file'></i> <span class="nav_name">ประวัติคำขอหาอะไหล่</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fa-solid fa-hand-holding-dollar"></i> <span class="nav_name">ระบบการเงิน</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class='fas fa-file-alt'></i> <span class="nav_name">รายงาน</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fas fa-box"></i> <span class="nav_name">จัดการสินค้า</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fas fa-store"></i> <span class="nav_name">จัดการผู้ขาย</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fa-solid fa-user-gear"></i> <span class="nav_name">จัดการผู้ซื้อ</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class='fas fa-truck'></i> <span class="nav_name">จัดการขนส่ง</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fa-solid fa-star"></i> <span class="nav_name">จัดการรีวิว</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class='far fa-comments'></i> <span class="nav_name">Chat</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fa-solid fa-book-open"></i> <span class="nav_name">จัดการ PDPA</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fa-solid fa-gear"></i> <span class="nav_name">ตั้งค่าบริษัท</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fa-solid fa-screwdriver-wrench"></i> <span class="nav_name">ตั้งค่าหมวดหมู่สินค้า</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fa-solid fa-money-check"></i> <span class="nav_name">จัดการ Banner</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fa-solid fa-table-list"></i><span class="nav_name">จัดการบทความ</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fa-solid fa-tower-broadcast"></i> <span class="nav_name">จัดการ Broadcast</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fa-solid fa-bullhorn"></i> <span class="nav_name">จัดการโปรโมชั่น</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fa-solid fa-floppy-disk"></i> <span class="nav_name">Log การจัดการของแอดมิน</span> </a></li>
                    <li><a href="#" class="nav_link"> <i class="fa-solid fa-circle-question"></i> <span class="nav_name">คำถามที่พบบ่อย</span> </a></li>

        </nav>
    </div>