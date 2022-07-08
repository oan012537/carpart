@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="settingbanner">

<div class="content">

    <div class="boxbox__approvel">
        <div class="box__approvel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="txt__page">สร้างแบนเนอร์</h2>
                    </div>

                    <div class="box__filter3">
                        <div class="col-12">
                            <form class="form-box-input px-2">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="title__txt">ค้นหา</label>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                    <div class="col-4">
                                        <label class="title__txt">ช่วงวันที่เผยแพร่</label>
                                        <div class="input-group ">
                                            <input type="date" class="form-control" placeholder="Recipient's username" aria-describedby="button-yes">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <br>
                    <div class="card_boxbanner">
                        <div class="row">
                            <div class="col-6">
                                <p class="txt_num1"> <i class='fas fa-exclamation-circle'></i> ลำดับที่ 1 </p>
                            </div>
                            <div class="col-6">
                                <p class="txt_de"> <i class="fa fa-trash"></i> ลบ </p>
                            </div>
                        </div>

                        <div class="card-upup">
                            <p class="txt_droptxt text-center">
                                Drag and drop files.
                            </p>
                            <p class="txt_uptxt text-center">
                                อัปโหลดภาพแบนเนอร์
                            </p>
                            <p class="txt_uptxt2 text-center">
                                ขนาดที่แนะนำ 1920*700 px
                            </p>

                            <div class="box__btn">
                                <a href="#" class="btn btn__viewdetail ">
                                    <i class="fa fa-upload"></i>
                                    กดเลือกไฟล์</a>
                            </div>
                        </div>
                        <label class="title__txt">Link</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"> <i class="fa fa-link" style="font-size:22px"></i> </span>
                            </div>
                            <input type="text" class="form-control" id="basic-url" placeholder="แนบ Link" aria-describedby="basic-addon3">
                        </div>
                    </div>



                    <div class="card_boxbanner">
                        <div class="row">
                            <div class="col-6">
                                <p class="txt_num1"> <i class='fas fa-exclamation-circle'></i> ลำดับที่ 1 </p>
                            </div>
                            <div class="col-6">
                                <p class="txt_de"> <i class="fa fa-trash"></i> ลบ </p>
                            </div>
                        </div>

                        <div class="card-upup">
                            <p class="txt_droptxt text-center">
                                Drag and drop files.
                            </p>
                            <p class="txt_uptxt text-center">
                                อัปโหลดภาพแบนเนอร์
                            </p>
                            <p class="txt_uptxt2 text-center">
                                ขนาดที่แนะนำ 1920*700 px
                            </p>

                            <div class="box__btn">
                                <a href="#" class="btn btn__viewdetail ">
                                    <i class="fa fa-upload"></i>
                                    กดเลือกไฟล์</a>
                            </div>
                        </div>
                        <label class="title__txt">Link</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"> <i class="fa fa-link" style="font-size:22px"></i> </span>
                            </div>
                            <input type="text" class="form-control" id="basic-url" placeholder="แนบ Link" aria-describedby="basic-addon3">
                        </div>
                    </div>



                    <div class="card_boxbanner">
                        <div class="row">
                            <div class="col-6">
                                <p class="txt_num1"> <i class='fas fa-exclamation-circle'></i> ลำดับที่ 1 </p>
                            </div>
                            <div class="col-6">
                                <p class="txt_de"> <i class="fa fa-trash"></i> ลบ </p>
                            </div>
                        </div>

                        <div class="card-upup">
                            <p class="txt_droptxt text-center">
                                Drag and drop files.
                            </p>
                            <p class="txt_uptxt text-center">
                                อัปโหลดภาพแบนเนอร์
                            </p>
                            <p class="txt_uptxt2 text-center">
                                ขนาดที่แนะนำ 1920*700 px
                            </p>

                            <div class="box__btn">
                                <a href="#" class="btn btn__viewdetail ">
                                    <i class="fa fa-upload"></i>
                                    กดเลือกไฟล์</a>
                            </div>
                        </div>
                        <label class="title__txt">Link</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"> <i class="fa fa-link" style="font-size:22px"></i> </span>
                            </div>
                            <input type="text" class="form-control" id="basic-url" placeholder="แนบ Link" aria-describedby="basic-addon3">
                        </div>
                    </div>


                    <div class="but_upslide">
                        <a href="#" class="btn btn__viewdetail3 me-3">
                            <i class="fa fa-upload"></i>
                            เพิ่มแบนเนอร์สไลด์</a>
                    </div>



                    <div class="text-center">
                        <button class="btn btn__app px-5">กลับ</button>
                        <button class="btn btn__app btn__waitapproval px-5">ยืนยัน</button>
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
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>
@stop