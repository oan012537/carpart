<link rel="stylesheet" href="{{ asset('assets/css/nav_profile.css') }}">


<section id="navprofile">
    <div class="container">

        <br>

        <div class="box__navleft" id="nav-bar">
            <nav class="nav">

                <div class="nav_list">
                    <li>
                        <a href="{{ url('buyer/myaccount') }}" class="nav_link activemenumain" data-page="account-buy">
                            <i class='fas fa-user-cog'></i>
                            <span class="nav_name">บัญชีของฉัน </span>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="history-request.php" class="nav_link" data-page="history-request">
                            <i class="fa fa-clock"></i>
                            <span class="nav_name"> ประวัติใบคำขอหาอะไหล่ <span class="box__iconmenu">
                                    <span class="circle">12</span></span>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('buyer/myaccount/confirminventory') }}" class="nav_link" data-page="order-list">
                            <i class='far fa-file'></i>
                            <span class="nav_name">รายการรอยืนยันจากผู้ขาย</span>

                        </a>
                    </li>

                    <li>
                        <a href="order-pay.php" class="nav_link" data-page="order-pay">
                            <i class='far fa-file-alt'></i>
                            <span class="nav_name">จัดการการสั่งซื้อ </span>
                        </a>
                    </li>

                    <li>
                        <a href="order-cerm.php" class="nav_link" data-page="order-cerm">
                            <i class='far fa-file-alt'></i>
                            <span class="nav_name">รายการส่งเคลม <span class="box__iconmenu"> <span
                                        class="circle">12</span></span>
                        </a>
                    </li>

                    <li>
                        <a href="page-notification.php" class="nav_link" data-page="page-notification">
                            <i class='fas fa-bell'></i>
                            <span class="nav_name">การแจ้งเตือน <span class="box__iconmenu"> <span
                                        class="circle">12</span></span>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="page-listsave.php" class="nav_link" data-page="page-listsave">
                            <i class="fa fa-heart"></i>
                            <span class="nav_name">รายการที่บันทึกไว้ <span class="box__iconmenu"> <span
                                        class="circle">12</span></span>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="page-question.php" class="nav_link" data-page="page-question">
                            <i class="fa fa-question-circle"></i>
                            <span class="nav_name">คำถามที่พบบ่อย </span>
                        </a>
                    </li>


                    <li>
                        <a href="#" class="nav_link" data-page="#">
                            <i class='far fa-comments'></i>
                            <span class="nav_name">ติดต่อเจ้าหน้าที่ </span>

                        </a>
                    </li>

                    <li>
                        <a href="page-datarights.php" class="nav_link" data-page="page-datarights">
                            <i class="fa fa-gear"></i>
                            <span class="nav_name">การให้สิทธิ์ข้อมูล </span>
                        </a>
                    </li>

                </div>


            </nav>
        </div>



    </div>
</section>