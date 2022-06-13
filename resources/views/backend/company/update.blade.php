@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="setting-org">

    <div class="content">

        <div class="box__contentsetting">
            <form method="POST" action="{{ route('backend.company.update') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box__title">
                            <h3>ตั้งค่าบริษัท</h3>
                        </div>
                    </div>

                    
                    <div class="col-lg-3">
                        <div class="box__profile">
                            <div class="box__image">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <form action="" method="post" id="form-image">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><i class="fa-solid fa-pencil"></i> แก้ไข</label>
                                        </form>
                                    </div>
                                    <div class="avatar-preview">
                                        <img class="profile-user-img img-fluid " id="imagePreview" src="{{asset('backends/assets/img/navbar/logo-whites.svg')}}" alt="User profile picture">
                                    </div>
                    
                                </div>
                            </div>
                    
                            <div class="box__contentname">
                                <h3 class="txt__name">สมมติ แซ่ตัน</h3>
                            </div>
                    
                            <div class="box__nav">
                                <ul>
                                    <li data-page="setting-org">
                                        {{-- setting-org.php --}}
                                        <a href="{{route('backend.company.edit')}}">
                                            <div class="icon1"> </div>
                                            ข้อมูลบริษัท
                                        </a>
                                    </li>
                    
                                    <li data-page="setting-user"><a href="setting-user.php">
                                            <div class="icon2"></div> ตั้งค่าผู้ใช้งาน
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="box__editinfoorg">
                            <div class="groupedit1">
                                <p class="title__txt">ขอเปลี่ยนแปลงข้อมูลบริษัท</p>
                                <div class="itemsorg">
                                    {{-- <form> --}}
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name"> ชื่อ</label>
                                                    <input type="text" class="form-control" name="name" placeholder="ระบุ" value="{{$company->name}}" required>
                                                </div>
                                            </div>

                                            <div class="col-6"></div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="email">อีเมล</label>
                                                    <input type="email" class="form-control" name="email" placeholder="emily@sample.com" value="{{$company->email}}" required>

                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="phone">โทรศัพท์ </label>
                                                    <input type="text" class="form-control" name="phone" maxlength="10" placeholder="0123344565" value="{{$company->tel}}" required>
                                                </div>
                                            </div>
                                        </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                            <!--  -->

                            <div class="groupedit2">
                                <p class="title__txt">ข้อมูลที่อยู่</p>
                                <div class="itemsorg">
                                    {{-- <form> --}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label> ที่อยู่ตามบริษัท <span> *</span></label>
                                                    <textarea name="address" class="form-control" placeholder="ระบุ" required>{{$company->address}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="province">จังหวัด <span>*</span></label>
                                                    <select class="form-select" aria-label="Default select example" required name="province" id="province" onchange="changeprovinces(this.value)">
                                                        <option disabled selected>Choose</option>
                                                        @if(!empty($provinces))
                                                        @foreach ($provinces as $item)
                                                            <option value="{{$item->id}}" @if($company->address_province == $item->id)selected @endif>{{$item->name_th}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                    <input type="hidden" name="provincehid" id="provincehid" value="{{$nameprovinces}}">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="amphure">เขต <span>*</span></label>
                                                    <select class="form-select" aria-label="Default select example" required name="amphure" id="amphure"  onchange="changeamphures(this.value)">
                                                        <option disabled selected>Choose</option>
                                                        @if(!empty($amphures))
                                                        @foreach ($amphures as $item)
                                                            <option value="{{$item->id}}" @if($company->address_amphure == $item->id)selected @endif>{{$item->name_th}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                    <input type="hidden" name="amphurehid" id="amphurehid" value="{{$nameamphures}}">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="district">แขวง <span>*</span></label>
                                                    <select class="form-select" aria-label="Default select example" required name="district" id="district" onchange="changedistricts(this.value)">
                                                        <option disabled selected>Choose</option>
                                                        @if(!empty($districts))
                                                        @foreach ($districts as $item)
                                                            <option value="{{$item->id}}" @if($company->address_district == $item->id)selected @endif>{{$item->name_th}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                    <input type="hidden" name="districthid" id="districthid" value="{{$namedistricts}}">

                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="zipcode">รหัสไปรษณีย์ <span>*</span></label>
                                                    {{-- <select class="form-select" aria-label="Default select example" required name="zipcode">
                                                        <option selected>รหัสไปรษณีย์ 1</option>
                                                        <option value="1">รหัสไปรษณีย์ 2</option>
                                                        <option value="2">รหัสไปรษณีย์ 3</option>
                                                        <option value="3">รหัสไปรษณีย์ 4</option>
                                                    </select> --}}
                                                    <input type="text" name="zipcode" id="zipcode" required readonly class="form-control" value="{{$company->address_zipcode}}">
                                                </div>
                                            </div>
                                        </div>
                                    {{-- </form> --}}


                                </div>

                                <!--  -->
                                <div class="box__btn">
                                    <a href="{{route('backend.company')}}"><button class="btn btn__back" type="button">กลับ</button></a>
                                    <button class="btn btn__yes" type="submit">ยืนยัน</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
@stop

@section('script')
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
        $.get("{{url('backend/company/changeprovinces')}}/"+id,function(result){
            $("#amphure").empty().append('<option disabled selected>Choose</option>');
            $.each(result, function (indexInArray, valueOfElement) { 
                $("#amphure").append('<option value="'+valueOfElement.id+'" >'+valueOfElement.name_th+'</option>');
            });
        });
        $("#provincehid").val($("#province option:selected").text());
    }
    function changeamphures(id){
        $.get("{{url('backend/company/changeamphures')}}/"+id,function(result){
            $("#district").empty().append('<option disabled selected>Choose</option>');
            $.each(result, function (indexInArray, valueOfElement) { 
                $("#district").append('<option value="'+valueOfElement.id+'" >'+valueOfElement.name_th+'</option>');
            });
        });
        $("#amphurehid").val($("#amphure option:selected").text());
    }
    function changedistricts(id){
        $.get("{{url('backend/company/changedistricts')}}/"+id,function(result){
            // alert(result)
            $("#zipcode").val(result);
        });
        $("#districthid").val($("#district option:selected").text());
    }
</script>
@stop