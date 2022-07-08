<header class="header body-pd" id="header">
    <div class="header_toggle"> <img src="{{asset('backends/assets/img/navbar/icon-richmenu.svg')}}" alt="" id="header-toggle"> </div>
    <ul class="box__allheader">
        <li class="nav-item box__icon">
            <a class="nav-link " href="#">
                <div class="iconimage">
                    <img src="{{asset('backends/assets/img/icon/icon-noti.svg')}}" class="img-fluid" alt="">
                    <div class="box__number"><span>11</span></div>
                </div>
            </a>
        </li>
        <!--  -->

        <li class="nav-item box__icon">
            <a class="nav-link" href="#">
                <div class="iconimage">
                    <img src="{{asset('backends/assets/img/icon/icon-email.svg')}}" class="img-fluid" alt="">
                </div>
            </a>
        </li>

        <li class="nav-item box__icon">
            <a class="nav-link" href="#">
                <div class="iconimage">
                    <img src="{{asset('backends/assets/img/icon/icon-extend.svg')}}" class="img-fluid" alt="">
                </div>
            </a>
        </li>

        <!--  -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('backends/assets/img/icon/icon-web.svg')}}" class="img-fluid" alt=""> @if(Session::get('lang')=='th')ไทย @else English @endif
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('backend/setlang/th')}}">ไทย</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{url('backend/setlang/en')}}">English</a></li>
            </ul>
        </li>

        <!--  -->
        <li class="header_img" >
            <img src="{{asset('backends/assets/img/hczKIze.jpg')}}" alt=""> 
        </li>
        <a href="{{url('backend/logout')}}" class="btn__logout"><i class="fa-solid fa-right-from-bracket"></i> ออกจากระบบ</a>
        {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle header_img" href="#" id="navbarProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('backends/assets/img/hczKIze.jpg')}}" alt=""> 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarProfile">
                <li>
                    <a class="dropdown-item" href="{{url('backend/logout')}}">Logout</a>
                </li>
            </ul>
        </li> --}}
    </ul>

</header>
<div class="l-navbar showmenu" id="nav-bar">
    <nav class="nav">
        <div> <a href="{{route('backend.dashboard')}}" class="nav_logo"> <img src="{{asset('backends/assets/img/navbar/logo-whites.svg')}}" class="img-fluid" alt=""> </a>
            <div class="nav_list">
                <li>
                    <a data-page="dashboard" href="{{route('backend.dashboard.index')}}" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                </li>
                <!-- DropDown -->
                <li>
                    <a href="javascript:void(0)" class="nav_link" data-page="approval" id="approval">
                        <i class="fa-solid fa-list"></i>
                        <div class="nav_name">คำขออนุมัติ <div class="box__iconmenu"> <span class="circle">12</span></div>
                            <div class="icondropdown">
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="item-show-approval itemdropdown">
                        <li data-page="approval-individual"><a href="{{route('backend.approval.individual')}}">ผู้ขายบุคคลธรรมดา</a></li>
                        <li data-page="approval-legal"><a href="{{route('backend.approval.legal')}}">ผู้ขายนิติบุคคล</a></li>
                    </ul>
                </li>
                <!-- DropDown -->
                <li> <a data-page="orderlist" href="{{route('backend.orderlist')}}" class="nav_link"> <i class="fa-solid fa-cart-shopping"></i> <span class="nav_name">รายการสั่งซื้อ</span> </a></li>
                <li><a href="#" class="nav_link"> <i class='fas fa-exclamation-circle'></i> <span class="nav_name">รายการเคลม</span> </a></li>
                <li><a data-page="requestspares" href="{{route('backend.requestspares')}}" class="nav_link"> <i class='far fa-file'></i> <span class="nav_name">ประวัติคำขอหาอะไหล่</span> </a></li>
                <li><a href="#" class="nav_link"> <i class="fa-solid fa-hand-holding-dollar"></i> <span class="nav_name">ระบบการเงิน</span> </a></li>
                <li><a href="#" class="nav_link"> <i class='fas fa-file-alt'></i> <span class="nav_name">รายงาน</span> </a></li>
                <li><a data-page="manageproduct" href="{{route('backend.product')}}" class="nav_link"> <i class="fas fa-box"></i> <span class="nav_name">จัดการสินค้า</span> </a></li>
                {{-- <li><a href="#" class="nav_link"> <i class="fas fa-store"></i> <span class="nav_name">จัดการผู้ขาย</span> </a></li> --}}
                <li>
                    <a href="javascript:void(0)" class="nav_link" data-page="managesupplier" id="managesupplier">
                        <i class="fa-solid fas fa-store"></i>
                        <div class="nav_name">จัดการผู้ขาย
                            <div class="icondropdown">
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="item-show-managesupplier itemdropdown">
                        <li data-page="managesupplierindividual"><a href="{{route('backend.manage.supplier.individual')}}">บุคคลธรรมดา</a></li>
                        <li data-page="managesupplierlegal"><a href="{{route('backend.manage.supplier.legal')}}">นิติบุคคล</a></li>
                        <li data-page="managesuppliercommission"><a href="{{route('backend.manage.supplier.commission')}}">ตั้งค่าคอมมิชชั่น</a></li>
                    </ul>
                </li>
                {{-- <li><a href="#" class="nav_link"> <i class="fa-solid fa-user-gear"></i> <span class="nav_name">จัดการผู้ซื้อ</span> </a></li> --}}
                <li>
                    <a href="javascript:void(0)" class="nav_link" data-page="managebuyer" id="managebuyer">
                        <i class="fa-solid fas fa-store"></i>
                        <div class="nav_name">จัดการผู้ซื้อ
                            <div class="icondropdown">
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="item-show-managebuyer itemdropdown">
                        <li data-page="managebuyerindividual"><a href="{{route('backend.manage.buyer.individual')}}">บุคคลธรรมดา</a></li>
                        <li data-page="managebuyerlegal"><a href="{{route('backend.manage.buyer.legal')}}">นิติบุคคล</a></li>
                    </ul>
                </li>
                <li><a href="#" class="nav_link"> <i class='fas fa-truck'></i> <span class="nav_name">จัดการขนส่ง</span> </a></li>
                <li><a href="#" class="nav_link"> <i class="fa-solid fa-star"></i> <span class="nav_name">จัดการรีวิว</span> </a></li>
                <li><a href="#" class="nav_link"> <i class='far fa-comments'></i> <span class="nav_name">Chat</span> </a></li>
                {{-- <li><a href="#" class="nav_link"> <i class="fa-solid fa-book-open"></i> <span class="nav_name">จัดการ PDPA</span> </a></li> --}}
                <li>
                    <a href="javascript:void(0)" class="nav_link" data-page="pdpa" id="pdpa">
                        <i class="fa-solid fa-book-open"></i>
                        <div class="nav_name">จัดการ PDPA
                            <div class="icondropdown">
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="item-show-pdpa itemdropdown">
                        <li data-page="settingpdpa"><a href="{{route('backend.pdpa')}}">ตั้งค่าPDPA</a></li>
                        <li data-page="consentlist"><a href="{{route('backend.pdpa.consentlist')}}">รายชื่อผู้ยินยอม</a></li>
                    </ul>
                </li>

                <li><a data-page="settingcompany" href="{{route('backend.company')}}" class="nav_link"> <i class="fa-solid fa-gear"></i> <span class="nav_name">ตั้งค่าบริษัท</span> </a></li>
                <li><a data-page="settingcategory" href="{{route('backend.category')}}" class="nav_link"> <i class="fa-solid fa-screwdriver-wrench"></i> <span class="nav_name">ตั้งค่าหมวดหมู่สินค้า</span> </a></li>
                <li><a data-page="settingbrand" href="{{route('backend.brand')}}" class="nav_link"> <i class="fa-solid fa-screwdriver-wrench"></i> <span class="nav_name">ตั้งค่าแบรนด์</span> </a></li>

                <li><a data-page="settingbanner" href="{{route('backend.banner')}}" class="nav_link"> <i class="fa-solid fa-money-check"></i> <span class="nav_name">จัดการ Banner</span> </a></li>
                <li><a href="#" class="nav_link"> <i class="fa-solid fa-table-list"></i><span class="nav_name">จัดการบทความ</span> </a></li>
                <li><a href="#" class="nav_link"> <i class="fa-solid fa-tower-broadcast"></i> <span class="nav_name">จัดการ Broadcast</span> </a></li>
                <li><a href="#" class="nav_link"> <i class="fa-solid fa-bullhorn"></i> <span class="nav_name">จัดการโปรโมชั่น</span> </a></li>
                <li><a href="#" class="nav_link"> <i class="fa-solid fa-floppy-disk"></i> <span class="nav_name">Log การจัดการของแอดมิน</span> </a></li>
                <li><a href="#" class="nav_link"> <i class="fa-solid fa-circle-question"></i> <span class="nav_name">คำถามที่พบบ่อย</span> </a></li>
            </div>
        </div>
    </nav>
</div>