@extends('supplier.layouts.template')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="supplier-profile">
<input type="hidden" id="pageName2" name="pageName2" value="profilestore">
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="box__titlepage">
                <h3>ข้อมูลร้านค้า</h3>
            </div>
        </div>
        <div class="col-xl-3 col-lg-12">
            @include('supplier.layouts.inc_nav')
        </div>
        @if($supplier->type == 'บุคคลธรรมดา')
        <div class="col-xl-9 col-lg-12">
            <div class="box__profileeditstore">
                <div class="groupedit1">
                    <div class="row">
                        <div class="col-12">
                            <p class="title__box">ขอเปลี่ยนแปลงข้อมูลบริษัท <span>เจ้าหน้าที่จะตรวจสอบและเปลี่ยนแปลงข้อมูลให้ภายใน ....</span></p>
                        </div>
                    </div>

                    <form method="POST" enctype="multipart/form-data" action="{{route('supplier.profile.store.update')}}" id="formedit">
                        @csrf
                        <div class="itemseditstore">
                            <div class="row">
                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label> ชื่อ <span> *</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="ระบุ" required value="{{$supplier->store_name}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12"></div>
                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label> อีเมล </label>
                                        <input type="email" class="form-control" name="email" placeholder="ระบุ" required value="{{$supplier->email}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label> โทรศัพท์ <span> *</span></label>
                                        <input type="text" class="form-control" name="phone" placeholder="ระบุ" required value="{{$supplier->phone}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label> Page URL/Facebook URL </label>
                                        <textarea name="pagefacebook" class="form-control" placeholder="ระบุ">{{$supplier->facebook}}</textarea>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label> Google Map Url <span> *</span></label>
                                        <textarea name="googlemap" class="form-control" placeholder="ระบุ" required>{{$supplier->googlemap}}</textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--  -->
                        <p class="title__box2">ข้อมูลที่อยู่</p>
                        <div class="itemseditstore ">
                            <div class="row">

                                <div class="col-12">
                                    <div class="box__setdefault">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" @if($supplier->store_addressidcard == '1') checked @endif name="addressidcard">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                ที่อยู่ร้านค้าตรงตามบัตรประชาชน
                                            </label>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="">ที่อยู่ร้านค้า <span> *</span></label>

                                        <textarea name="address" class="form-control" placeholder="ระบุ" id="address" required>{{$supplier->store_address}}</textarea>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label for="">จังหวัด <span>*</span></label>
                                        <select class="form-select" aria-label="Default select example" required name="province" id="province" onchange="changeprovinces(this.value)">
                                            <option disabled selected value="">Choose</option>
                                            @if(!empty($provinces))
                                            @foreach ($provinces as $item)
                                            <option value="{{$item->id}}" @if($supplier->store_province == $item->id)selected @endif>{{$item->name_th}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <input type="hidden" name="provincehid" id="provincehid" value="{{$nameprovinces}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label for="">เขต/อำเภอ <span>*</span></label>
                                        <select class="form-select" aria-label="Default select example" required name="amphure" id="amphure" onchange="changeamphures(this.value)">
                                            <option disabled selected value="">Choose</option>
                                            @if(!empty($amphures))
                                            @foreach ($amphures as $item)
                                            <option value="{{$item->id}}" @if($supplier->store_amphure == $item->id)selected @endif>{{$item->name_th}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <input type="hidden" name="amphurehid" id="amphurehid" value="{{$nameamphures}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label for="">แขวง/ตำบล <span>*</span></label>
                                        <select class="form-select" aria-label="Default select example" required name="district" id="district" onchange="changedistricts(this.value)">
                                            <option disabled selected value="">Choose</option>
                                            @if(!empty($districts))
                                            @foreach ($districts as $item)
                                            <option value="{{$item->id}}" @if($supplier->store_district == $item->id)selected @endif>{{$item->name_th}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <input type="hidden" name="districthid" id="districthid" value="{{$namedistricts}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label for="">รหัสไปรษณีย์ <span>*</span></label>
                                        <input type="text" name="zipcode" id="zipcode" required readonly class="form-control" value="{{$supplier->store_zipcode}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <!--  -->
                    <div class="box__btn">
                        <a class="btn btn__back" href="{{route('supplier.profile.store')}}">กลับ</a>
                        {{-- <button type="button" class="btn btn__back">กลับ</button> --}}
                        <button type="submit" form="formedit" class="btn btn__yes">ยืนยัน</button>
                    </div>
                </div>
            </div>

        </div>
        @else
        <div class="col-xl-9 col-lg-12">
            <div class="box__profileeditstore">
                <div class="groupedit1">
                    <div class="row">
                        <div class="col-12">
                            <p class="title__box">ขอเปลี่ยนแปลงข้อมูลบริษัท <span>เจ้าหน้าที่จะตรวจสอบและเปลี่ยนแปลงข้อมูลให้ภายใน ....</span></p>
                        </div>
                    </div>



                    <div class="itemseditstore">
                        <form method="POST" enctype="multipart/form-data" action="{{route('supplier.profile.legal.store.update')}}" id="formedit">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label> ชื่อบริษัท <span> *</span></label>
                                        <input type="text" class="form-control" name="nameorg" placeholder="ระบุ" required value="{{$supplier->company_name}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12"></div>
                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label> สาขา </label>
                                        <input type="text" class="form-control" name="branch" placeholder="ระบุ" required value="{{$supplier->branch}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label> เลขประจำตัวผู้เสียภาษี <span> *</span></label>
                                        <input type="text" class="form-control" name="taxid" placeholder="ระบุ" required value="{{$supplier->vat_id}}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label> ที่อยู่ตามหนังสือรับรองบริษัท <span> *</span></label>
                                        <textarea name="addressorg" class="form-control" placeholder="ระบุ">{{$supplier->store_address}}</textarea>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label for="">จังหวัด <span>*</span></label>
                                        <select class="form-select" aria-label="Default select example" required name="province" id="province" onchange="changeprovinces(this.value)">
                                            <option disabled selected value="">Choose</option>
                                            @if(!empty($provinces))
                                            @foreach ($provinces as $item)
                                            <option value="{{$item->id}}" @if($supplier->store_province == $item->id)selected @endif>{{$item->name_th}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <input type="hidden" name="provincehid" id="provincehid" value="{{$nameprovinces}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label for="">เขต/อำเภอ <span>*</span></label>
                                        <select class="form-select" aria-label="Default select example" required name="amphure" id="amphure" onchange="changeamphures(this.value)">
                                            <option disabled selected value="">Choose</option>
                                            @if(!empty($amphures))
                                            @foreach ($amphures as $item)
                                            <option value="{{$item->id}}" @if($supplier->store_amphure == $item->id)selected @endif>{{$item->name_th}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <input type="hidden" name="amphurehid" id="amphurehid" value="{{$nameamphures}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label for="">แขวง/ตำบล <span>*</span></label>
                                        <select class="form-select" aria-label="Default select example" required name="district" id="district" onchange="changedistricts(this.value)">
                                            <option disabled selected value="">Choose</option>
                                            @if(!empty($districts))
                                            @foreach ($districts as $item)
                                            <option value="{{$item->id}}" @if($supplier->store_district == $item->id)selected @endif>{{$item->name_th}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <input type="hidden" name="districthid" id="districthid" value="{{$namedistricts}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label for="">รหัสไปรษณีย์ <span>*</span></label>
                                        <input type="text" name="zipcode" id="zipcode" required readonly class="form-control" value="{{$supplier->store_zipcode}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label> อีเมล </label>
                                        <input type="email" class="form-control" name="companyemail" placeholder="ระบุ" value="{{$supplier->company_email}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label> โทรศัพท์ <span> *</span></label>
                                        <input type="text" class="form-control" name="phone" maxlength="10" placeholder="ระบุ" value="{{$supplier->phone}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label> Page URL/Facebook URL <span> *</span></label>
                                        <input type="text" class="form-control" name="pageurl" placeholder="ระบุ" value="{{$supplier->facebook}}">
                                    </div>
                                </div>


                                <div class="col-xl-6 col-12">
                                    <div class="form-group">
                                        <label> Google Map Url <span> *</span></label>
                                        <input type="text" class="form-control" name="googlemap" placeholder="ระบุ" value="{{$supplier->googlemap}}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="tt-text-log">
                                        <p>
                                            หนังสือรับรองบริษัท อายุไม่เกิน 6 เดือน <span class="dot__color">* (รองรับไฟล์ .jpg .png หรือ .pdf เท่านั้น ขนาดไม่เกิน 5Mb.)</span>
                                        </p>

                                    </div>

                                    <div class="box__drop">
                                        <div class="drop-zone">
                                            <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"></i>
                                                <p> แนบรูปภาพ หรือ PDF</p>
                                                <div class="tt-img-detail">
                                                    <p> ขนาดไม่เกิน 5 Mb.</p>
                                                </div>
                                            </span>
                                            <input type="file" name="myFile" class="drop-zone__input">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="tt-text-log">
                                        <p>
                                            สำเนา ภ.พ.20 <span> (รองรับไฟล์ .jpg .png หรือ .pdf เท่านั้น ขนาดไม่เกิน 5Mb.)
                                            </span>
                                        </p>

                                    </div>

                                    <div class="box__drop">
                                        <div class="drop-zone">
                                            <span class="drop-zone__prompt"> <i class="fa fa-plus-circle"></i>
                                                <p> แนบรูปภาพ หรือ PDF</p>
                                                <div class="tt-img-detail">
                                                    <p> ขนาดไม่เกิน 5 Mb.</p>
                                                </div>
                                            </span>
                                            <input type="file" name="myFile1" class="drop-zone__input">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </form>

                        <!--  -->
                        <div class="box__btn">
                            <a class="btn btn__back" href="{{route('supplier.profile.store')}}">กลับ</a>
                            <button type="submit" form="formedit" class="btn btn__yes">ยืนยัน</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        @endif
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

    function changeprovinces(id) {
        $.get("{{url('changeprovinces')}}/" + id, function(result) {
            $("#amphure").empty().append('<option disabled selected>Choose</option>');
            $.each(result, function(indexInArray, valueOfElement) {
                $("#amphure").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
            });
        });
        $("#provincehid").val($("#province option:selected").text());
    }

    function changeamphures(id) {
        $.get("{{url('changeamphures')}}/" + id, function(result) {
            $("#district").empty().append('<option disabled selected>Choose</option>');
            $.each(result, function(indexInArray, valueOfElement) {
                $("#district").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
            });
        });
        $("#amphurehid").val($("#amphure option:selected").text());
    }

    function changedistricts(id) {
        $.get("{{url('changedistricts')}}/" + id, function(result) {
            // alert(result)
            $("#zipcode").val(result);
        });
        $("#districthid").val($("#district option:selected").text());
    }

    $("#myFile").change(function() {
        var input = document.getElementById('myFile');
        if (!input.files) { // This is VERY unlikely, browser support is near-universal
            console.error("This browser doesn't seem to support the `files` property of file inputs.");
        } else if (!input.files[0]) {
            console.log("Please select a file before clicking 'Load'");
        } else {
            const limitsize = 5;
            var file = input.files[0];
            // console.log("File " + file.name + " is " + file.size + " bytes in size");
            console.log(parseFloat((file.size / (1024 * 1024)).toFixed(2)))
            if (parseFloat((file.size / (1024 * 1024)).toFixed(2)) > 5) {
                $("#myFile").val('');
                $("#drop-zone__thumb").remove();

            }
        }

    });
    $("#flexCheckChecked").click(function(e) {
        if ($(this).is(":checked")) {
            $("#address").attr('required', false);
            $("#province").attr('required', false);
            $("#amphure").attr('required', false);
            $("#district").attr('required', false);
            $("#zipcode").attr('required', false);
        } else {
            $("#address").attr('required', true);
            $("#province").attr('required', true);
            $("#amphure").attr('required', true);
            $("#district").attr('required', true);
            $("#zipcode").attr('required', true);
        }
        // e.preventDefault();

    });

    function changeprovinces(id) {
        $.get("{{url('changeprovinces')}}/" + id, function(result) {
            $("#amphure").empty().append('<option disabled selected>Choose</option>');
            $.each(result, function(indexInArray, valueOfElement) {
                $("#amphure").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
            });
        });
        $("#provincehid").val($("#province option:selected").text());
    }

    function changeamphures(id) {
        $.get("{{url('changeamphures')}}/" + id, function(result) {
            $("#district").empty().append('<option disabled selected>Choose</option>');
            $.each(result, function(indexInArray, valueOfElement) {
                $("#district").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
            });
        });
        $("#amphurehid").val($("#amphure option:selected").text());
    }

    function changedistricts(id) {
        $.get("{{url('changedistricts')}}/" + id, function(result) {
            // alert(result)
            $("#zipcode").val(result);
        });
        $("#districthid").val($("#district option:selected").text());
    }
</script>
@stop
