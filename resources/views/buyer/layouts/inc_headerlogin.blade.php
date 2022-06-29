<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('frontend.index')}}"><img src="{{asset('assets/img/icon/logo.svg')}}" class="img-fluid" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto  mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link link1" aria-current="page" href="{{route('frontend.index')}}">หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('frontend.request')}}">ค้นหาสินค้า</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('frontend.promotion')}}">โปรโมชั่น</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">คูปองส่วนลดทั้งหมด</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('frontend.articles')}}">บทความ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('frontend.contactus')}}">ติดต่อเรา</a>
                </li>

                <li class="nav-item box__icon">
                    <a class="nav-link " href="#">
                        <div class="iconimage">
                            <img src="{{asset('assets/img/icon/icon-noti.svg')}}" class="img-fluid" alt="">
                            <div class="box__number"><span>11</span></div>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="iconimage">
                            <img src="{{asset('assets/img/icon/icon-chat.svg')}}" class="img-fluid icon__chat" alt="">
                            <div class="box__number"><span>1</span></div>
                        </div>
                    </a>
                </li>
                <!--  -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('assets/img/icon/icon-web.svg')}}" class="img-fluid" alt=""> @if(Session('lang') == "th")ไทย @else English @endif
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('set/lang/th')}}">ไทย</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{url('set/lang/en')}}">English</a></li>
                    </ul>
                </li>

                <!--  -->

                @if (Auth::guard('buyer')->user())
                    <li class="nav-item">
                        <a class="nav-link btn__yellow" href="{{url('buyer/logout-buy')}}">
                            <span>logout</span>
                        </a>
                    </li>
                @else

                @endif
            </ul>
        </div>
    </div>
</nav>

<!--  -->
<div class="header2">
    <div class="container">
        <div class="box__group2">
            <div class="input-group box__search">
                <input type="text" class="form-control" aria-describedby="button-addon2">
                <button class="btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>

            <div class="box__resultsearch">
                <ul>
                    <li>การค้นหายอดนิยม</li>
                    <li><a href="javascript:void(0)">ยางรถยนต์</a></li>
                    <li><a href="javascript:void(0)">น้ำมันเครื่อง</a></li>
                    <li><a href="javascript:void(0)">แบตเตอรรี่</a></li>
                    <li><a href="javascript:void(0)">เบรก</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--  -->
