@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="setting-org">

    <div class="content">

        <div class="box__contentsetting">
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
                                    <a href="{{route('backend.company')}}">
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
                    <div class="box__infoorg">
                        <div class="row">
                            <div class="col-10">
                                <p class="title__box">ข้อมูลบริษัท</p>
                            </div>
                            <div class="col-2">
                                <div class="box__edit">
                                    <a href="{{route('backend.company.edit')}}" class="btn__edit"><i class="fa-solid fa-pencil"></i> แก้ไข</a>

                                </div>
                            </div>
                        </div>

                        <div class="box__info">
                            <?php
                            $heading = array(
                                '1' => 'ชื่อ',
                                '2' => 'อีเมล',
                                '3' => 'โทรศัพท์',
                                '4' => 'ที่อยู่',
                                '5' => 'Facebook Url',
                                '6' => 'LINE Url',
                                '7' => 'คำที่แสดงบนปุ่ม Add freind',
                            );

                            $result = array(
                                '1' => 'CPN',
                                '2' => 'emily@sample.com',
                                '3' => '012345678',
                                '4' => '123 หมู่ 0 ถนน เจริญกรุง ซอย 5  ตำบล ทุ่งสุลา อำเภอ ศรีราชา จังหวัด ชลบุรี 12345',
                                '5' => 'facebook.com/.....',
                                '6' => 'line.me......',
                                '7' => 'เป็นเพื่อนกันเราบน LINE',
                            );
                            ?>
                            <div class="box__itemsinfo">
                                <div class="row">
                                    <div class="col-3">
                                        <p class="title__txt">ชื่อ</p>
                                    </div>
                                    <div class="col-9">
                                        <p class="title__result">{{$company->name}}</p>
                                    </div>

                                    <div class="col-12"><hr></div>
                                </div>
                            </div>


                            <div class="box__itemsinfo">
                                <div class="row">
                                    <div class="col-3">
                                        <p class="title__txt">อีเมล</p>
                                    </div>
                                    <div class="col-9">
                                        <p class="title__result">{{$company->email}}</p>
                                    </div>

                                    <div class="col-12"><hr></div>
                                </div>
                            </div>
                            <div class="box__itemsinfo">
                                <div class="row">
                                    <div class="col-3">
                                        <p class="title__txt">โทรศัพท์</p>
                                    </div>
                                    <div class="col-9">
                                        <p class="title__result">{{$company->tel}}</p>
                                    </div>

                                    <div class="col-12"><hr></div>
                                </div>
                            </div>

                            <div class="box__itemsinfo">
                                <div class="row">
                                    <div class="col-3">
                                        <p class="title__txt">ที่อยู่</p>
                                    </div>
                                    <div class="col-9">
                                        <p class="title__result">{{$company->addressfull}}</p>
                                    </div>

                                    <div class="col-12"><hr></div>
                                </div>
                            </div>

                            <div class="box__itemsinfo">
                                <div class="row">
                                    <div class="col-3">
                                        <p class="title__txt">Facebook Url</p>
                                    </div>
                                    <div class="col-9">
                                        <p class="title__result">{{$company->facebook}}</p>
                                    </div>

                                    <div class="col-12"><hr></div>
                                </div>
                            </div>

                            <div class="box__itemsinfo">
                                <div class="row">
                                    <div class="col-3">
                                        <p class="title__txt">LINE Url</p>
                                    </div>
                                    <div class="col-9">
                                        <p class="title__result">{{$company->line}}</p>
                                    </div>

                                    <div class="col-12"><hr></div>
                                </div>
                            </div>

                            <div class="box__itemsinfo">
                                <div class="row">
                                    <div class="col-3">
                                        <p class="title__txt">คำที่แสดงบนปุ่ม Add freind</p>
                                    </div>
                                    <div class="col-9">
                                        <p class="title__result">{{$company->showtextaddline}}</p>
                                    </div>

                                    {{-- <div class="col-12"><hr></div> --}}
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