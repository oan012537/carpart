<header class="header body-pd" id="header">
    <div class="header_toggle"> <img src="{{asset('assets/img/navbar/icon-richmenu.svg')}}" alt="" id="header-toggle"> </div>
    <ul class="box__allheader">
        <li class="nav-item box__icon2">
            <a class="nav-link " href="#">
                <div class="iconimage">
                    <img src="{{asset('assets/img/icon/icon-noti.svg')}}" class="img-fluid" alt="">
                    <div class="box__number"><span>11</span></div>
                </div>
            </a>
        </li>

      
        <!--  -->

        <li class="nav-item box__icon2">
            <a class="nav-link" href="#">
                <div class="iconimage">
                    <img src="{{asset('assets/img/icon/icon-email.svg')}}" class="img-fluid" alt="">
                </div>
            </a>
        </li>

        <li class="nav-item box__icon2">
            <a class="nav-link" href="#">
                <div class="iconimage">
                    <img src="{{asset('assets/img/icon/icon-extend.svg')}}" class="img-fluid" alt="">
                </div>
            </a>
        </li>

        <!--  -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('assets/img/icon/icon-web.svg')}}" class="img-fluid" alt=""> {{ trans('file.Language') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ url('language_switch/th') }}">ไทย</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ url('language_switch/en') }}">English</a></li>
            </ul>
        </li>

        <!--  -->

        <li class="header_img"> 
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <img src="{{asset('backends/assets/img/hczKIze.jpg')}}" alt="profile">
            </a>
            <form id="logout-form" action="{{ route('supplier.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        
    </ul>

</header>
<div class="l-navbar showmenu" id="nav-bar">
    <nav class="nav">
        <div> <a href="supplier-notiboard.php" class="nav_logo"> <img src="{{asset('assets/img/navbar/logo-whites.svg')}}" class="img-fluid" alt=""> </a>
            <div class="nav_list">
                <li>
                    <a href="supplier-notiboard.php" class="nav_link" data-page="notiboard">
                        <div class="icon__sidebar1"></div>
                        <span class="nav_name">Notification <span class="box__iconmenu"> <span class="circle">12</span></span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav_link">
                        <div class="icon__sidebar2"></div>
                        <span class="nav_name">รายการรอยืนยัน<br>ความพร้อมสินค้า <span class="box__iconmenu"> <span class="circle">12</span></span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav_link">
                        <div class="icon__sidebar3"></div>
                        <span class="nav_name">รายการสั่งซื้อ <span class="box__iconmenu"> <span class="circle">12</span></span>
                    </a>
                </li>

                <li>
                    {{-- spareparts-card.php --}}
                    <a href="{{route('supplier.requests')}}" class="nav_link" data-page="spareparts-card">
                        <div class="icon__sidebar4"></div>
                        <span class="nav_name">คำขอหาอะไหล่ </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav_link">
                        <div class="icon__sidebar5"></div>
                        <span class="nav_name">รายการเคลม <span class="box__iconmenu"> <span class="circle">12</span></span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav_link">
                        <div class="icon__sidebar6"></div>
                        <span class="nav_name">ระบบการเงิน <span class="box__iconmenu"> <span class="circle">12</span></span>
                    </a>
                </li>
                {{-- inventory --}}
                <li id="product">
                    <form id="frm-product" action="{{ route('products.index') }}">
                        <input type="hidden" name="status_code" value="all">
                    </form>
                    <a id="product-list-menu" href="javascript:document.getElementById('frm-product').submit();" class="nav_link">
                        <div class="icon__sidebar7"></div>
                        <span class="nav_name">{{ trans('file.Manage Product') }}</span>
                    </a>
                </li>

                <!--  นิติบุคคล -->
                <li>
                    <a href="supplier-profilelegal.php" class="nav_link" data-page="supplier-profile">
                        <div class=" icon__sidebar8"></div>
                        <span class="nav_name">ร้านค้าของฉัน </span>
                    </a>
                </li>

                <!-- ธรรมดา -->
                <!-- <li>
                    <a href="supplier-profile.php" class="nav_link" data-page="supplier-profile">
                        <div class=" icon__sidebar8"></div>
                        <span class="nav_name">ร้านค้าของฉัน </span>
                    </a>
                </li> -->

                <!--  -->
                <li>
                    <a href="#" class="nav_link">
                        <div class="icon__sidebar9"></div>
                        <span class="nav_name">โปรโมชั่น </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav_link">
                        <div class="icon__sidebar10"></div>

                        <span class="nav_name">Chat <span class="box__iconmenu"> <span class="circle">12</span></span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav_link">
                        <div class="icon__sidebar11"></div>

                        <span class="nav_name">จัดการขนส่ง </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav_link">
                        <div class="icon__sidebar12"></div>

                        <span class="nav_name">รีวิวจากผู้ซื้อ </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav_link">
                        <div class="icon__sidebar13"></div>

                        <span class="nav_name">คำถามที่พบบ่อย </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav_link">
                        <div class="icon__sidebar14"></div>
                        <span class="nav_name">Dashboard </span>
                    </a>
                </li>


    </nav>
</div>