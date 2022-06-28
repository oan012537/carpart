@extends('supplier.layouts.template')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="supplier-profile">
<input type="hidden" id="pageName2" name="pageName2" value="profilesetuser">
<div class="content">
    <div class="settinguser">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__title">
                    <h3>จัดการสมาชิก</h3>
                </div>
            </div>

            <div class="col-lg-3">
                @include('supplier.layouts.inc_nav')
            </div>

            <div class="col-lg-9">

                <div class="wrapper__add">
                    {{-- <div class="box__btn">
                        <a href="javascript:void(0)" class="btn btn__add" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-solid fa-circle-plus"></i> เพิ่มบทบาท</a>
                    </div> --}}

                    <div class="box__search">
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="Search for anything .." aria-label="Search for anything .." aria-describedby="button-addon2" id="searchrole" name="searchrole">
                            <button class="btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>



                <div class="box__infoorg">
                    <div class="row">
                        <div class="col-3">

                            <ul class="nav nav-tabs tab-left" id="myTab" role="tablist">
                                @if(!empty($roles))
                                @foreach($roles as $key => $role)
                                <li class="nav-item roles" role="presentation" id="role{{$role->role_id}}">
                                    <button class="nav-link @if($key == 0) active @endif" id="permission{{$role->role_id}}-tab" data-bs-toggle="tab" data-bs-target="#permission{{$role->role_id}}" type="button" role="tab" aria-controls="permission{{$role->role_id}}" aria-selected="true">{{$role->role_name}}</button>
                                </li>
                                @endforeach
                                @else
                                <?php
                                $name = array(
                                    '1' => 'ผู้จัดการ',
                                    '2' => 'ผู้ดูแล',
                                    '3' => 'แอดมิน',
                                    '4' => 'เจ้าหน้าที่ขาย',
                                    '5' => 'เจ้าหน้าที่บัญชี',
                                    '6' => 'CPN Sale',
                                );
                                for ($i = 1; $i <= 6; $i++) {
                                ?>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link <?php if ($i == 1) {
                                                                    echo 'active';
                                                                } ?>" id="permission<?php echo $i; ?>-tab" data-bs-toggle="tab" data-bs-target="#permission<?php echo $i; ?>" type="button" role="tab" aria-controls="permission<?php echo $i; ?>" aria-selected="true"><?php echo $name[$i]; ?></button>
                                    </li>
                                <?php } ?>
                                @endif
                            </ul>



                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="tabright">
                                @foreach($roles as $key => $role)
                                    <div class="tab-pane fade @if($key == 0) show active @endif " id="permission{{$role->role_id}}" role="tabpanel" aria-labelledby="permission{{$role->role_id}}-tab">

                                        <!--  -->
                                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                            <li class="nav-item" role="presentation" onclick="showaddbtn('1','{{$role->role_id}}')">
                                                <button class="nav-link active" id="setpermission{{$role->role_id}}-tab" data-bs-toggle="tab" data-bs-target="#setpermission{{$role->role_id}}" type="button" role="tab" aria-controls="setpermission{{$role->role_id}}" aria-selected="true">ตั้งค่าบทบาท</button>
                                            </li>
                                            <li class="nav-item" role="presentation" onclick="showaddbtn('2','{{$role->role_id}}')">
                                                <button class="nav-link" id="setmember{{$role->role_id}}-tab" data-bs-toggle="tab" data-bs-target="#setmember{{$role->role_id}}" type="button" role="tab" aria-controls="setmember{{$role->role_id}}" aria-selected="false">จัดการสมาชิก ( @if(array_key_exists($role->role_id,$datas)) {{count($datas[$role->role_id])}} @else 0 @endif คน )</button>
                                            </li>
                                            <li id="btnaddmember{{$role->role_id}}" class="btn__addmember" onclick="fnaddmember('{{$role->role_name}}')" role="presentation" style="display: none;">
                                                <button class="nav-link" class="btn btn__addpermission" type="button" data-bs-toggle="modal" data-bs-target="#myModal1"> <img src="{{asset('backends/assets/img/setting/icon-role-active.svg')}}" class="img-fluid" alt=""> เพิ่มสมาชิก</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContentsetting">
                                            <div class="tab-pane fade show active" id="setpermission{{$role->role_id}}" role="tabpanel" aria-labelledby="setpermission{{$role->role_id}}-tab">
                                                <div class="form-group">
                                                    <label for="">ชื่อบทบาท</label>
                                                    <input type=" text" name="namepermission" class="form-control" aria-describedby="button-addon3" value="{{$role->role_name}}">
                                                    <button type="button" id="button-addon3" class="btn btn__popover" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="ลบบทบาทนี้" data-role="{{$role->role_id}}">
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
                                                        for ($z = 1; $z <= 7; $z++) {
                                                            $namefield = 'permission_manage'.$z;
                                                        ?>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <p class="txt__subtitle"> <?php echo $namepermiss[$z]; ?></p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault{{$role->role_id}}{{$z}}" data-status="{{$role->$namefield}}" @if($role->$namefield == '1') checked @endif onclick="changepermission('{{$role->role_id}}','{{$namefield}}','{{$z}}')">
                                                                        <label class="form-check-label" for="flexSwitchCheckDefault{{$role->role_id}}"></label>
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
                                                            <tr id="datausers{{$user->id}}">
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
<div class="modal fade default-modal" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">เพิ่มบทบาท</h3>
            </div>
            <div class="modal-body">
                <div class="box__form">
                    <form method="POST" action="{{route('supplier.profile.setting.role.add')}}" id="formrole" onsubmit="return addrole();">
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
<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="myModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModal1Label">เพิ่ม / แก้ไขสมาชิก</h3>
            </div>
            <div class="modal-body">
                <div class="box__form">
                    <form method="POST" action="{{ route('supplier.profile.setting.user.store') }}" id="formusers" onsubmit="return fncheckcreate();">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="name">ชื่อ <span>*</span></label>
                                    <input type="text" name="name" id="name" required class="form-control" placeholder="ระบุ">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="topic">หัวข้อ <span>*</span></label>
                                    <input type="text" name="topic" id="topic" required class="form-control" placeholder="ระบุ">
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email">อีเมล <span>*</span></label>
                                    <input type="email" name="email" id="email" required class="form-control" placeholder="ระบุ">
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="phone">เบอร์มือถือ <span>*</span></label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="ระบุ" maxlength="10">
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="ระบุ" aria-describedby="button-addon2" value="" name="role" id="role">
                                    <input type="hidden" value="" name="roleid" id="roleid">

                                    <button class="btn btn__setpermission btn-next" type="button" id="button-addon2"><img src="{{asset('assets/img/setting/icon-role.svg')}}" class="img-fluid" alt=""> เลือกบทบาท</button>
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
                <button type="submit" form="formusers" class="btn btn__yes">ยืนยัน</button>
                {{-- <button type="button" class="btn btn__yes" data-bs-toggle="modal" data-bs-target="#modalsuccess">ยืนยัน</button> --}}
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- Modal -->
<div class=" modal fade" id="myModal2" tabindex="-1" aria-labelledby="myModal2Label" aria-hidden="true">
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
                <button type="button" class="btn btn__yes ">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!--  -->

<div class="modal fade" id="modalsuccess" tabindex="-1" aria-labelledby="myModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-body">
                <img src="{{asset('assets/img/login/sf.png')}}" class="img-fluid" alt="" style="margin-left: 4px;">
            </div>
            <div class="modal-footer">
                <div class="tt-text-con">
                    <p>
                        เพิ่มสมาชิกสำเร็จกรุณารอรับ Username
                        ทาง SMS
                    </p>
                </div>
                <div class="but-bb">
                    <button type="button" class="button btn__yes" onclick="sendsmedata();"> ตกลง
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
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
        $.post("{{ route('supplier.profile.setting.role.add') }}",$("#formrole").serialize(),function (result) {
            var content = '';
            toastralert(result.status,result.msg);
            $.each(result.data, function(key,value){
                content += '<div class="form-check">';
                content += '<input class="form-check-input" type="checkbox" value="'+value.role_name +'" id="permissionbox'+value.role_id +'">';
                content += '<label class="form-check-label" for="permissionbox'+value.role_id +'">'+value.role_name +'</label>';
                content += '</div>'; 
            });
            $("#myModal2 .modal-body").empty().append(content);
            window.location.reload();
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
        $.get("{{url('backend/settinguser/destroy')}}",{'id':id},function (result) {
            if(result == 'Y'){
                $("#datausers"+id).remove();
                toastralert('success','ลบข้อมูลเรียบร้อย');
            }else{
                toastralert('error','เกิดข้อผิดพลาด');
            }
        });
    }
    $(".btn__addmember").click(function () {
        // alert();
        $("#formusers").attr('action',"{{ route('supplier.profile.setting.user.store') }}");
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
    function showaddbtn(type,id) {
        if(type == '1'){
            $("#btnaddmember"+id).hide();
        }else{
            $("#btnaddmember"+id).show();
        }
        
    }
    $(".btn__popover").click(function (e) {
        var datarole = $(this).data('role');
        bootbox.confirm({
            message: "ต้องการลบข้อมูลใช่หรือไม่?",
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                toastralert('success','ยังทำไม่เรียบร้อย');
            }
        });
        
    });
    function changepermission(roleid,namefield,rowid) {
        var checkeds = 0;
        if($("#flexSwitchCheckDefault"+roleid+rowid).is(':checked')){
            checkeds = 1;
        }
        $.get("{{route('supplier.profile.setting.user.changepermission')}}",{'roleid':roleid,'namefield':namefield,'status':checkeds},function (result) {
            toastralert(result.status,result.msg);
        });
    }

    function fncheckcreate() {
        $("#modalsuccess").modal('show');
        return false;
    }

    function sendsmedata() {
        $("#formusers").removeAttr('onsubmit').submit();
    }

    $("#searchrole").keyup(function(){
        $.get('{{route("supplier.profile.setting.user.searchrole")}}',{'searchrole':$(this).val()},function(result){
            $(".roles").show();
            $.each(result,function (key,item) {
                $("#role"+item.role_id).hide();
            });
        });
    })
</script>
@stop