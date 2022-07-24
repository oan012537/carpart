@extends('buyer.layouts.template')

@section('matavendor')
    <link rel="stylesheet" href="{{asset('assets/css/order-list.css') }}">
@stop

@section('content')

<section id="history-request">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="nav__top">
                    <a href="javascript:void(0)">บัญชีของฉัน</a> <span><i
                            class="fa-solid fa-chevron-right"></i></span> <a href="javascript:void(0)">
                        รายการรอยืนยันจากผู้ขาย </a>
                </div>

                @include('buyer.profile.nav_profile')

            </div>
            <div class="col-8">
                <div class="box__contentmain">
                    <p class="txt__titletop">การยืนยันความพร้อมของสินค้า</p>
                    <p class="txt__subtop">ข้อมูลประวัติการขอยืนยันความพร้อมของสินค้า</p>
                    <hr class="underline">

                    <div class="box__tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="taball-tab" data-bs-toggle="tab"
                                    data-bs-target="#taball" type="button" role="tab" aria-controls="taball"
                                    aria-selected="true">ทั้งหมด <span>{{ $confirminventories_all->count() }}</span></button>
                                <button class="nav-link" id="tabrequest-tab" data-bs-toggle="tab"
                                    data-bs-target="#tabrequest" type="button" role="tab" aria-controls="tabrequest"
                                    aria-selected="false"> รอการยืนยัน <span>{{ $confirminventories_pending->count() }}</span></button>
                                <button class="nav-link" id="navopen-tab" data-bs-toggle="tab"
                                    data-bs-target="#navopen" type="button" role="tab" aria-controls="navopen"
                                    aria-selected="false">ได้รับการยืนยัน <span>{{ $confirminventories_approved->count() }}</span></button>
                                <button class="nav-link" id="navclose-tab" data-bs-toggle="tab"
                                    data-bs-target="#navclose" type="button" role="tab" aria-controls="navclose"
                                    aria-selected="false">ยกเลิก <span>{{ $confirminventories_canceled->count() }}</span></button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-magnifying-glass"></i> </span>
                                <input type="text" class="form-control"
                                    placeholder="ค้นหาจากหมายเลขคำสั่งซื้อ หรือชื่อสินค้าในทุกคำสั่งซื้อ "
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            
                            <div class="tab-pane fade show active" id="taball" role="tabpanel" aria-labelledby="taball-tab">
                                @include('buyer.profile.confirminventory.confirm_list_all')
                            </div>

                            <div class="tab-pane fade" id="tabrequest" role="tabpanel" aria-labelledby="tabrequest-tab">
                                @include('buyer.profile.confirminventory.confirm_list_pending')
                            </div>

                            <div class="tab-pane fade" id="navopen" role="tabpanel" aria-labelledby="navopen-tab">
                                @include('buyer.profile.confirminventory.confirm_list_approved')
                            </div>

                            <div class="tab-pane fade" id="navclose" role="tabpanel" aria-labelledby="navclose-tab">
                                @include('buyer.profile.confirminventory.confirm_list_canceled')
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

@section('script')

    <script>

    </script>

@stop
