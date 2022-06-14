@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="setting-user">

<div class="content">

    <div class="box__contentsetting contentuser">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__title">
                    <h3>จัดการสมาชิก</h3>
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
                                <a href="{{route('backend.company')}}">
                                    <div class="icon1"> </div>
                                    ข้อมูลบริษัท
                                </a>
                            </li>
               
                            <li data-page="setting-user"><a href="{{route('backend.setting.user')}}">
                                    <div class="icon2"></div> ตั้งค่าผู้ใช้งาน
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">

                <div class="wrapper__add">
                    <div class="box__btn">
                        <a href="javascript:void(0)" class="btn btn__add" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-solid fa-circle-plus"></i> เพิ่มบทบาท</a>
                    </div>

                    <div class="box__search">
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="Search for anything .." aria-label="Search for anything .." aria-describedby="button-addon2">
                            <button class="btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>



                <div class="box__infoorg">
                    <div class="row">
                        <div class="col-3">
                            <ul class="nav nav-tabs tab-left" id="myTab" role="tablist">
                                @foreach($roles as $key => $role)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link @if($key == 0) active @endif" id="permission{{$role->role_id}}-tab" data-bs-toggle="tab" data-bs-target="#permission{{$role->role_id}}" type="button" role="tab" aria-controls="permission{{$role->role_id}}" aria-selected="true">{{$role->role_name}}</button>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="tabright">
                                @foreach($roles as $key => $role)
                                    <div class="tab-pane fade @if($key == 0) show active @endif " id="permission{{$role->role_id}}" role="tabpanel" aria-labelledby="permission{{$role->role_id}}-tab">

                                        <!--  -->
                                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="setpermission{{$role->role_id}}-tab" data-bs-toggle="tab" data-bs-target="#setpermission{{$role->role_id}}" type="button" role="tab" aria-controls="setpermission{{$role->role_id}}" aria-selected="true">ตั้งค่าบทบาท</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="setmember{{$role->role_id}}-tab" data-bs-toggle="tab" data-bs-target="#setmember{{$role->role_id}}" type="button" role="tab" aria-controls="setmember{{$role->role_id}}" aria-selected="false">จัดการสมาชิก ( @if(array_key_exists($role->role_id,$datas)) {{count($datas[$role->role_id])}} @else 0 @endif คน )</button>
                                            </li>
                                            <li class="btn__addmember" onclick="fnaddmember('{{$role->role_name}}')" role="presentation">
                                                <button class="nav-link" class="btn btn__addpermission" type="button" data-bs-toggle="modal" data-bs-target="#myModal1"> <img src="{{asset('backends/assets/img/setting/icon-role-active.svg')}}" class="img-fluid" alt=""> เพิ่มสมาชิก</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContentsetting">
                                            <div class="tab-pane fade show active" id="setpermission{{$role->role_id}}" role="tabpanel" aria-labelledby="setpermission{{$role->role_id}}-tab">
                                                <div class="form-group">
                                                    <label for="">ชื่อบทบาท</label>
                                                    <input type=" text" name="namepermission" class="form-control" aria-describedby="button-addon3" value="{{$role->role_name}}">
                                                    <button type="button" id="button-addon3" class="btn btn__popover" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="ลบบทบาทนี้">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </div>


                                                <div class="box__contentsetting">
                                                    <div class="contentswitch">
                                                        <h3 class="txt__title">สิทธิการใช้งาน</h3>
                                                        <?php
                                                        $namepermiss = array(
                                                            '1' => 'จัดการบทบาท',
                                                            '2' => 'ดูแลการขาย',
                                                            '3' => 'ดูแลการเงิน',
                                                            '4' => 'จัดการโปรโมชั่น',
                                                            '5' => 'จัดการข้อมูลธนาคาร',
                                                            '6' => 'ดูแลการขาย',
                                                            '7' => 'ดูแลการเงิน',
                                                        );
                                                        for ($z = 1; $z <= 6; $z++) {

                                                        ?>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <p class="txt__subtitle"> <?php echo $namepermiss[$z]; ?></p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" <?php if ($z == 1) {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?>>
                                                                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                                    </div>

                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="box__content">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard dummy text ever since the 1500s, </p>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="setmember{{$role->role_id}}" role="tabpanel" aria-labelledby="setmember{{$role->role_id}}-tab">

                                                <div class="table-respoonsive tablestyle">
                                                    <table class="table text-center">
                                                        <thead>
                                                            <tr>
                                                                <td scope="col">รหัสสมาชิก</td>
                                                                <td scope="col">ชื่อ - นามสกุล</td>
                                                                <td scope="col">เบอร์ติดต่อ</td>
                                                                <td scope="col">อีเมล</td>
                                                                <td scope="col">สถานะ</td>
                                                                <td scope="col"></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(array_key_exists($role->role_id,$datas))
                                                            @foreach ($datas[$role->role_id] as $user)
                                                            <tr>
                                                                <td>{{$user->id}}</td>
                                                                <td>{{$user->name}}</td>
                                                                <td>{{$user->phone}}</td>
                                                                <td>{{$user->email}}</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch ">
                                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked{{$user->id}}" @if($user->status == '1') checked @endif onclick="changestatus('{{$user->id}}')">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="fa-solid fa-ellipsis"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myModal1" onclick="fnedit('{{$user->id}}')"><i class="fa-solid fa-pencil"></i> แก้ไข</a></li>
                                                                            <li><a class="dropdown-item" href="#" onclick="fneremove('{{$user->id}}')"><i class="fa-solid fa-trash-can"></i> ลบ</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @else
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <div class="box__nouser">
                                                                        <p>ยังไม่มีสมาชิกในบทบาทนี้</p>
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <!--  -->
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal Add -->

<!-- Modal -->
<div class="modal fade default-modal" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">เพิ่มบทบาท</h3>
            </div>
            <div class="modal-body">
                <div class="box__form">
                    <form method="POST" action="{{ route('backend.setting.user.role.add') }}" id="formrole" onsubmit="return addrole();">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="">ชื่อบทบาท <span>*</span></label>
                                    <input type="text" name="rolename" id="rolename" required class="form-control" placeholder="ระบุ" autocomplete="off" >
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn__back" data-bs-dismiss="modal">กลับ</button>
                <button type="submit" class="btn btn__yes"  form="formrole">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="myModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModal1Label">เพิ่ม / แก้ไขสมาชิก</h3>
            </div>
            <div class="modal-body">
                <div class="box__form">
                    <form method="POST" action="{{ route('backend.setting.user.store') }}" id="formusers">
                        @csrf
                        <input type="hidden" id="id" name="id">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">ชื่อ <span>*</span></label>
                                    <input type="text" name="name" id="name" required class="form-control" placeholder="ระบุ">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">หัวข้อ <span>*</span></label>
                                    <input type="text" name="topic" id="topic" required class="form-control" placeholder="ระบุ">
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">อีเมล <span>*</span></label>
                                    <input type="email" name="email" id="email" required class="form-control" placeholder="ระบุ">
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">เบอร์มือถือ <span>*</span></label>
                                    <input type="text" name="phone" id="phone" class="form-control" required placeholder="ระบุ" maxlength="10">
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="ระบุ" aria-describedby="button-addon2" value="" name="role" id="role">
                                    <input type="hidden" value="" name="roleid" id="roleid">

                                    <button class="btn btn__setpermission btn-next" type="button" id="button-addon2"><img src="{{asset('backends/assets/img/setting/icon-role.svg')}}" class="img-fluid" alt=""> เลือกบทบาท</button>
                                </div>
                            </div>



                            <div class="col-xl-6 col-md-6 col-12 form-switch">
                                <label for=""> สถานะ</label>
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox" name="status" role="switch" id="flexSwitchCheckChecked" value="1" checked id="status">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">อนุญาตให้ใช้งาน</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn__back" data-bs-dismiss="modal">กลับ</button>
                <button type="submit" class="btn btn__yes" form="formusers">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="myModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content ">
            <div class="modal-header">
                <h3 class="modal-title" id="myModal2Label">เลือกบทบาท</h3>
            </div>
            <div class="modal-body">
                
                @foreach($roles as $role)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{$role->role_id}}" id="permissionbox{{$role->role_id}}" data-name="{{$role->role_name}}">
                    <label class="form-check-label" for="permissionbox{{$role->role_id}}">{{$role->role_name}}</label>
                </div>
                @endforeach

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn__back btn-prev" data-bs-dismiss="modal">กลับ</button>
                <button type="button" class="btn btn__yes">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!--  -->
@stop

@section('script')
<script>
    [...document.querySelectorAll('[data-bs-toggle="popover"]')]
    .forEach(el => new bootstrap.Popover(el))


    $("div[id^='myModal']").each(function() {

        var currentModal = $(this);

        //click next
        currentModal.find('.btn-next').click(function() {
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show');
        });

        //click prev
        currentModal.find('.btn-prev').click(function() {
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show');
        });
    });
    $("#myModal2 input[type='checkbox']").click(function (param) {
        $("#myModal2 input[type='checkbox']").prop('checked',false);
        $(this).prop('checked',true);
        // $("#role").val($(this).val());
    });
    $("#myModal2 .btn__yes").click(function () {
        var checkeds = $("#myModal2 input[type='checkbox']:checked").val();
        // $(this).prop('checked',true);
        var rolename = $("#permissionbox"+checkeds).data('name');
        $("#role").val(rolename);
        $("#roleid").val(checkeds);

        $("#myModal2").modal('hide');
        $("#myModal1").modal('show');
    });

    function addrole() {
        $.post("{{ route('backend.setting.user.role.add') }}",$("#formrole").serialize(),function (result) {
            var content = '';
            toastralert(result.status,result.msg);
            $.each(result.data, function(key,value){
                content += '<div class="form-check">';
                content += '<input class="form-check-input" type="checkbox" value="'+value.role_name +'" id="permissionbox'+value.role_id +'">';
                content += '<label class="form-check-label" for="permissionbox'+value.role_id +'">'+value.role_name +'</label>';
                content += '</div>'; 
            });
            $("#myModal2 .modal-body").empty().append(content);
        });
        return false;
    }

    function changestatus(id) {
        var checkeds = 0;
        if($("#flexSwitchCheckChecked"+id).is(':checked')){
            checkeds = 1;
        }
        $.get("{{url('backend/settinguser/changestatus')}}",{'id':id,'status':checkeds},function (result) {
            toastralert(result.status,result.msg);
        });
    }

    function fnedit(id) {
        $.get("{{url('backend/settinguser/edit')}}/"+id,function (result) {
            $("#name").val(result.name);
            $("#topic").val('');
            $("#email").val(result.email);
            $("#phone").val(result.phone);
            $("#role").val(result.role_name);
            $("#roleid").val(result.role);
            $("#id").val(result.id);

            $("#permissionbox"+result.role).prop('checked',true);
            
            if($("#flexSwitchCheckChecked").is(":checked")){
                if(result.status == '0'){
                    $("#flexSwitchCheckChecked").click();
                }
            }else{
                if(result.status == '1'){
                    $("#flexSwitchCheckChecked").click();
                }
            }
            $("#formusers").attr('action',"{{ route('backend.setting.user.update') }}")
        })
        .always(function() {
            $("#myModal1").modal('show');
        });
    }
    function fneremove(id) {

    }
    $(".btn__addmember").click(function () {
        // alert();
        $("#formusers").attr('action',"{{ route('backend.setting.user.store') }}");
        $("#name").val('');
        $("#topic").val('');
        $("#email").val('');
        $("#phone").val('');
        $("#role").val('');
        $("#roleid").val('');
        $("#id").val('');
        $("#myModal2 input[type='checkbox']").prop('checked',false);
        if(!$("#flexSwitchCheckChecked").is(":checked")){
            if(result.status == '0'){
                $("#flexSwitchCheckChecked").click();
            }
        }
    });
    function fnaddmember(name) {
        // alert(name);
    }
</script>
@stop