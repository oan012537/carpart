@extends('supplier.layouts.template')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="supplier-profile">
<input type="hidden" id="pageName2" name="pageName2" value="profile">
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="box__titlepage">
                <h3>ข้อมูลผู้ติดต่อ</h3>
            </div>
        </div>
        <div class="col-lg-3">
            @include('supplier.layouts.inc_nav')
        </div>

        <div class="col-lg-9">
            <div class="box__editprofile">
                <form method="POST" enctype="multipart/form-data" action="{{route('supplier.profile.update')}}" id="formedit">
                    @csrf
                    <div class="groupedit1">
                        <p class="title__txt">ขอเปลี่ยนแปลงข้อมูลผู้ติดต่อ</p>
                        <div class="itemsorg">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label> ชื่อ <span>*</span></label>
                                        <input type="text" class="form-control" name="firstname" placeholder="ระบุ" required>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">นามสกุล <span>*</span></label>
                                        <input type="text" class="form-control" name="lastname" placeholder="ระบุ" required>

                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">อีเมล</label>
                                        <input type="email" class="form-control" name="email" placeholder="emily@sample.com" required>

                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">โทรศัพท์ <span>*</span></label>
                                        <input type="text" class="form-control" name="phone" maxlength="10" placeholder="0123344565" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="title__txt2">ข้อมูลที่อยู่</p>
                        <div class="itemsorg">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label> สำเนาบัตรประชาชน <span>* (รองรับไฟล์ .jpg .png เท่านั้น ขนาดไม่เกิน 5Mb.)</span></label>
                                        <div class="box__drop">
                                            <div class="drop-zone">
                                                <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"></i>
                                                    <p> แนบรูปภาพ </p>
                                                    <div class="tt-img-detail">
                                                        <p> ขนาดไม่เกิน 5 Mb.</p>
                                                    </div>
                                                </span>
                                                <input type="file" name="myFile" id="myFile" class="drop-zone__input" required style="opacity: 0;width: 0;display: block;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">ที่อยู่ตามบัตรประชาชน <span>*</span></label>
                                        <textarea name="address" class="form-control" required></textarea>

                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">จังหวัด <span>*</span></label>
                                        <select class="form-select" aria-label="Default select example" required name="province" id="province" onchange="changeprovinces(this.value)">
                                            <option disabled selected value="">Choose</option>
                                            @if(!empty($provinces))
                                            @foreach ($provinces as $item)
                                                <option value="{{$item->id}}" >{{$item->name_th}}</option>
                                                {{-- @if($supplier->address_province == $item->id)selected @endif --}}
                                            @endforeach
                                            @endif
                                        </select>
                                        <input type="hidden" name="provincehid" id="provincehid" value="{{$nameprovinces}}">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">เขต/อำเภอ <span>*</span></label>
                                        <select class="form-select" aria-label="Default select example" required name="amphure" id="amphure"  onchange="changeamphures(this.value)">
                                            <option disabled selected value="">Choose</option>
                                            @if(!empty($amphures))
                                            @foreach ($amphures as $item)
                                                <option value="{{$item->id}}" @if($supplier->address_amphure == $item->id)selected @endif>{{$item->name_th}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <input type="hidden" name="amphurehid" id="amphurehid" value="{{$nameamphures}}">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">แขวง/ตำบล <span>*</span></label>
                                        <select class="form-select" aria-label="Default select example" required name="district" id="district" onchange="changedistricts(this.value)">
                                            <option disabled selected value="">Choose</option>
                                            @if(!empty($districts))
                                            @foreach ($districts as $item)
                                                <option value="{{$item->id}}" @if($supplier->address_district == $item->id)selected @endif>{{$item->name_th}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <input type="hidden" name="districthid" id="districthid" value="{{$namedistricts}}">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="zipcode">รหัสไปรษณีย์ <span>*</span></label>
                                        <input type="text" name="zipcode" id="zipcode" required readonly class="form-control" value="">
                                        {{-- {{$supplier->address_zipcode}} --}}
                                    </div>
                                </div>

                            </div>
                        </div>

                </form>
                <div class="box__btneditprofile">
                    <a class="btn btn__back" href="{{route('supplier.profile')}}">กลับ</a>
                    {{-- <button type="button" class="btn btn__back">กลับ</button> --}}
                    <button type="submit" form="formedit" class="btn btn__yes">ยืนยัน</button>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
@stop

@section('script')
<script>
    const limitsize = 5;
</script>
<script src="{{asset('assets/js/dropzone.js')}}"></script>
<script>
    $(document).ready(function() {

        $("#imageUpload").change(function(data) {

            var imageFile = data.target.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);

            reader.onload = function(evt) {
                $('#imagePreview').attr('src', evt.target.result);
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
        });
    });

    function changeprovinces(id){
        $.get("{{url('changeprovinces')}}/"+id,function(result){
            $("#amphure").empty().append('<option disabled selected>Choose</option>');
            $.each(result, function (indexInArray, valueOfElement) { 
                $("#amphure").append('<option value="'+valueOfElement.id+'" >'+valueOfElement.name_th+'</option>');
            });
        });
        $("#provincehid").val($("#province option:selected").text());
    }
    function changeamphures(id){
        $.get("{{url('changeamphures')}}/"+id,function(result){
            $("#district").empty().append('<option disabled selected>Choose</option>');
            $.each(result, function (indexInArray, valueOfElement) { 
                $("#district").append('<option value="'+valueOfElement.id+'" >'+valueOfElement.name_th+'</option>');
            });
        });
        $("#amphurehid").val($("#amphure option:selected").text());
    }
    function changedistricts(id){
        $.get("{{url('changedistricts')}}/"+id,function(result){
            // alert(result)
            $("#zipcode").val(result);
        });
        $("#districthid").val($("#district option:selected").text());
    }

    $("#myFile").change(function(){
        var input = document.getElementById('myFile');
        if (!input.files) { // This is VERY unlikely, browser support is near-universal
            console.error("This browser doesn't seem to support the `files` property of file inputs.");
        } else if (!input.files[0]) {
            console.log("Please select a file before clicking 'Load'");
        } else {
            const limitsize = 5;
            var file = input.files[0];
            // console.log("File " + file.name + " is " + file.size + " bytes in size");
            console.log(parseFloat((file.size / (1024*1024)).toFixed(2)))
            if(parseFloat((file.size / (1024*1024)).toFixed(2)) > 5){
                $("#myFile").val('');
                $("#drop-zone__thumb").remove();

            }
        }
        
    });
    // var totalsize = 0.0;
    // $("#myFile").dropzone({ 
    //     maxFileWidth:300,
    //     maxFileHeight:300,
    //     maxFilesize: 1,
    //     filesizeBase: 1000,
    //     accept: function(file, done) {
    //         if (totalsize >= MAX_TOTAL_SIZE) {
    //             file.status = Dropzone.CANCELED;
    //             this._errorProcessing([file],  "Max limit reached", null);
    //         }else { 
    //             done();
    //         }
    //     },
    //     init: function() {
    //         this.on("addedfile", function(file) { 
    //             totalsize += parseFloat((file.size / (1024*1024)).toFixed(2));
    //         });
    //         this.on("removedfile", function(file) {
    //             if(file.upload.progress != 0){
    //                 totalsize -= parseFloat((file.size / (1024*1024)).toFixed(2));
    //             }
    //         });
    //         this.on("error", function(file) {
    //             totalsize -= parseFloat((file.size / (1024*1024)).toFixed(2));
    //         });
    //     }
    // }); 

</script>
@stop