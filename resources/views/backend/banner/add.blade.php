@extends('backend.layouts.templates')
@section('content')
<style>
    input[type="file"]{
        opacity: 0;
        left: 0;
        top: 0;
        overflow: hidden;
        display: inline-block;
        position: absolute;
        width: 100%;
        height: 100%;
    }
</style>
<input type="hidden" id="pageName" name="pageName" value="settingbanner">

<div class="content">

    <div class="boxbox__approvel">
        <div class="box__approvel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="txt__page">สร้างแบนเนอร์</h2>
                    </div>
                    <form id="formbanner" method="post" enctype="multipart/form-data" action="{{route('backend.banner.store')}}">
                        @csrf
                        <div class="box__filter3">
                            <div class="col-12">
                                {{-- <form class="form-box-input px-2"> --}}
                                    <div class="row">
                                        <div class="col-lg-4 mt-3">
                                            <label class="title__txt">ชื่อแบนเนอร์</label>
                                            <input type="text" class="form-control" placeholder="ระบุ" name="name" id="name" required>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <label class="title__txt">ช่วงวันที่เผยแพร่</label>
                                            <div class="input-group ">
                                                <input type="date" class="form-control" placeholder="Recipient's username" aria-describedby="button-yes" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <label class="title__txt">ลำดับที่แสดง</label>
                                            <div class="input-group ">
                                                <input type="text" class="form-control number" value="" name="sort" id="sort" required>
                                            </div>
                                        </div>
                                    </div>
                                {{-- </form> --}}
                            </div>
                        </div>


                        <br>
                        <div class="card_boxbanner mainbanner">
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
                                    <button type="button" class="btn btn__viewdetail "><i class="fa fa-upload"></i><input type="file" name="upload[]" id="upload">กดเลือกไฟล์</button>
                                </div>
                            </div>
                            <label class="title__txt">Link</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3"> <i class="fa fa-link" style="font-size:22px"></i> </span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" placeholder="แนบ Link" aria-describedby="basic-addon3" name="link[]">
                            </div>
                        </div>
                    </form>

                    <div class="but_upslide">
                        <button type="button" id="btnaddbanner" class="btn btn__viewdetail3 me-3"><i class="fa fa-upload"></i>เพิ่มแบนเนอร์สไลด์</button>
                    </div>



                    <div class="text-center">
                        <a href="{{route('backend.banner')}}" class="btn btn__app px-5">กลับ</a>
                        <button form="formbanner" type="submit" class="btn btn__app btn__waitapproval px-5">ยืนยัน</button>
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
    var countaddbanner = 1;
    $("#btnaddbanner").click(function (e) {
        countaddbanner += 1;
        var mainbanners = $(".mainbanner").clone();
        $(".card_boxbanner:last").after(mainbanners);
        $(".card_boxbanner:last").removeClass('mainbanner');
        $(".card_boxbanner:last").addClass('addbanner');
        $(".card_boxbanner:last").attr('id','addbanner'+countaddbanner);
        $(".card_boxbanner:last").attr('data-rows',countaddbanner);
        $(".card_boxbanner:last .txt_num1").html(" <i class='fas fa-exclamation-circle'></i> ลำดับที่ "+countaddbanner+" ");
        $(".card_boxbanner:last .txt_de").attr("onclick","removebanners("+countaddbanner+")");
        
        e.preventDefault();
    });
    function eachcount() {
        countaddbanner = 2;

        $(".addbanner").each(function (key,e) {
            countaddbanner += key;
            var rows = $(this).data('rows');
            $("#addbanner"+rows+" .txt_num1").html(" <i class='fas fa-exclamation-circle'></i> ลำดับที่ "+countaddbanner+" ");
            $("#addbanner"+rows+" .txt_de").attr("onclick","removebanners("+countaddbanner+")");
            $("#addbanner"+rows).attr('data-rows',countaddbanner);
            $("#addbanner"+rows).attr('id','addbanner'+countaddbanner);
            

            // $("#addbanner"+rows).removeAttr('data-rows');
            
        });
        countaddbanner = $(".addbanner").length;
    }
    function removebanners(rows) {
        $("#addbanner"+rows).remove();
        eachcount();
    }
</script>
@stop