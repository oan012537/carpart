@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="managesupplier">
<input type="hidden" id="pageName2" name="pageName2" value="managesupplierindividual">
<input type="hidden" id="navpageName" name="navpageName" value="profile">
<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">ตั้งค่าคอมมิชชั่น</h2>
                </div>

                <div class="col-10">

                    <div class="card-cardheard">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-cc-card">
                                    <p> <span><i class="fas fa-info-circle"></i> </span>
                                        ค่าคอมมิชชั่นและการจัดระดับของผู้ขาย 1 </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card-cc-card2">
                                    <p> <span><i class="fas fa-trash"></i> </span> ลบ </p>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-12">
                                <label class="title__txt">ชื่อระดับ/State Name</label>
                                <input type="text" class="form-control" id="" placeholder="ผู้ขายเริ่มต้น">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="title__txt">เงื่อนไขของระดับ</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected=""> ยอดขายรวม</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="title__txt">รายละเอียด</label>
                                <div class="input-group mb-3">
                                    <select class="border-start-0 form-select text-center">
                                        <option>ไม่เกิน</option>
                                    </select>
                                    <input type="text" class="form-control border-end-0 w-50" placeholder="10,000"
                                        name="">
                                    <select class="border-start-0 form-select text-center">
                                        <option>บาท</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="title__txt">ระยะเวลาในการประเมิน</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-end-0 w-50" placeholder="3"
                                        name="">
                                    <select class="border-start-0 form-select text-center">
                                        <option>เดือน</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="title__txt">ค่าคอมมิชชั่น</label>
                                <input type="text" class="form-control" id="" placeholder="15%">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="title__txt">บทลงโทษกรณียกเลิกออเดอร์</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected=""> กขค</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="title__txt">ปรับตามมูลค่าออเดอร์</label>
                                <input type="text" class="form-control" id="" placeholder="15%">
                            </div>
                        </div>


                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="title__txt">เงื่อนไขเพิ่มเติม</label>
                                <div class="input-group mb-3">
                                    <select class="border-start-0 form-select text-center">
                                        <option>ขั้นต่ำ</option>
                                    </select>
                                    <input type="text" class="form-control border-end-0 w-50" placeholder="10"
                                        name="">
                                    <select class="border-start-0 form-select text-center">
                                        <option>บาท</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="title__txt">เงื่อนไขเพิ่มเติม</label>
                                <div class="input-group mb-3">
                                    <select class="border-start-0 form-select text-center">
                                        <option>ไม่เกิน</option>
                                    </select>
                                    <input type="text" class="form-control border-end-0 w-50" placeholder="10"
                                        name="">
                                    <select class="border-start-0 form-select text-center">
                                        <option>บาท</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="card-cardheard">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-cc-card">
                                    <p> <span><i class="fas fa-info-circle"></i> </span>
                                        ค่าคอมมิชชั่นและการจัดระดับของผู้ขาย 2 </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card-cc-card2">
                                    <p> <span><i class="fas fa-trash"></i> </span> ลบ </p>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-12">
                                <label class="title__txt">ชื่อระดับ/State Name</label>
                                <input type="text" class="form-control" id="" placeholder="ผู้ขายเริ่มต้น">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="title__txt">เงื่อนไขของระดับ</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected=""> ยอดขายรวม</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="title__txt">รายละเอียด</label>
                                <div class="input-group mb-3">
                                    <select class="border-start-0 form-select text-center">
                                        <option>ไม่เกิน</option>
                                    </select>
                                    <input type="text" class="form-control border-end-0 w-50" placeholder="10,000"
                                        name="">
                                    <select class="border-start-0 form-select text-center">
                                        <option>บาท</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="title__txt">ระยะเวลาในการประเมิน</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-end-0 w-50" placeholder="3"
                                        name="">
                                    <select class="border-start-0 form-select text-center">
                                        <option>เดือน</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="title__txt">ค่าคอมมิชชั่น</label>
                                <input type="text" class="form-control" id="" placeholder="15%">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="title__txt">บทลงโทษกรณียกเลิกออเดอร์</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected=""> กขค</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="title__txt">ปรับตามมูลค่าออเดอร์</label>
                                <input type="text" class="form-control" id="" placeholder="15%">
                            </div>
                        </div>


                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="title__txt">เงื่อนไขเพิ่มเติม</label>
                                <div class="input-group mb-3">
                                    <select class="border-start-0 form-select text-center">
                                        <option>ขั้นต่ำ</option>
                                    </select>
                                    <input type="text" class="form-control border-end-0 w-50" placeholder="10"
                                        name="">
                                    <select class="border-start-0 form-select text-center">
                                        <option>บาท</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="title__txt">เงื่อนไขเพิ่มเติม</label>
                                <div class="input-group mb-3">
                                    <select class="border-start-0 form-select text-center">
                                        <option>ไม่เกิน</option>
                                    </select>
                                    <input type="text" class="form-control border-end-0 w-50" placeholder="10"
                                        name="">
                                    <select class="border-start-0 form-select text-center">
                                        <option>บาท</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="card-cardheard">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-cc-card">
                                    <p> <span><i class="fas fa-info-circle"></i> </span>
                                        ค่าคอมมิชชั่นและการจัดระดับของผู้ขาย 3 </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card-cc-card2">
                                    <p> <span><i class="fas fa-trash"></i> </span> ลบ </p>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-12">
                                <label class="title__txt">ชื่อระดับ/State Name</label>
                                <input type="text" class="form-control" id="" placeholder="ผู้ขายเริ่มต้น">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="title__txt">เงื่อนไขของระดับ</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected=""> ยอดขายรวม</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="title__txt">รายละเอียด</label>
                                <div class="input-group mb-3">
                                    <select class="border-start-0 form-select text-center">
                                        <option>ไม่เกิน</option>
                                    </select>
                                    <input type="text" class="form-control border-end-0 w-50" placeholder="10,000"
                                        name="">
                                    <select class="border-start-0 form-select text-center">
                                        <option>บาท</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="title__txt">ระยะเวลาในการประเมิน</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-end-0 w-50" placeholder="3"
                                        name="">
                                    <select class="border-start-0 form-select text-center">
                                        <option>เดือน</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="title__txt">ค่าคอมมิชชั่น</label>
                                <input type="text" class="form-control" id="" placeholder="15%">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="title__txt">บทลงโทษกรณียกเลิกออเดอร์</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected=""> กขค</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="title__txt">ปรับตามมูลค่าออเดอร์</label>
                                <input type="text" class="form-control" id="" placeholder="15%">
                            </div>
                        </div>


                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="title__txt">เงื่อนไขเพิ่มเติม</label>
                                <div class="input-group mb-3">
                                    <select class="border-start-0 form-select text-center">
                                        <option>ขั้นต่ำ</option>
                                    </select>
                                    <input type="text" class="form-control border-end-0 w-50" placeholder="10"
                                        name="">
                                    <select class="border-start-0 form-select text-center">
                                        <option>บาท</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="title__txt">เงื่อนไขเพิ่มเติม</label>
                                <div class="input-group mb-3">
                                    <select class="border-start-0 form-select text-center">
                                        <option>ไม่เกิน</option>
                                    </select>
                                    <input type="text" class="form-control border-end-0 w-50" placeholder="10"
                                        name="">
                                    <select class="border-start-0 form-select text-center">
                                        <option>บาท</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <br><br><br><br><br>
                    <div class="text-center">
                        <button class="btn btn__app px-5">กลับ</button>
                        <button class="btn btn__app btn__waitapproval px-5">ยืนยัน</button>
                    </div>
                </div>
                <div class="col-2">
                    <div class="box__accordian__edit">
                        <div class="box__filter">

                            <div id="data-product9" class="collapse show">
                                <ul id="progressbar">
                                    <li class="active">
                                        <p class="progress-icon"></p> ระดับผู้ขาย 1
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p> ระดับผู้ขาย 2
                                    </li>
                                    <li>
                                        <p class="progress-icon"></p> ระดับผู้ขาย 3
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
<script>
</script>
@stop