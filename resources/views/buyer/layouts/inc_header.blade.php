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

                <li class="nav-item">
                    <a class="nav-link btn__yellow" href="{{url(Session('lang')."/buyer/login-buy/")}}">
                        <div class="icon"><span>เข้าสู่ระบบผู้ซื้อ</span></div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn__yellow2" href="{{route('supplier')}}">
                        <div class="icon2"><span>เข้าสู่ระบบผู้ขาย</span></div>
                    </a>
                </li>
                <!--  -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('assets/img/icon/icon-web.svg')}}" class="img-fluid" alt=""> @if(Session::get('lang')=='th')ไทย @else English @endif
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
