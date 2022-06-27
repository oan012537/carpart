<div class="box__profilemenu">
    <div class="box__image">
        <div class="avatar-upload">
            <div class="avatar-edit">
                <form action="" method="post" id="form-image">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"><i class="fa-solid fa-pencil"></i> แก้ไข</label>
                </form>
            </div>
            <div class="avatar-preview">
                <img class="profile-user-img img-fluid " id="imagePreview" src="{{asset('assets/img/navbar/logo-whites.svg')}}" alt="User profile picture">
            </div>

        </div>
    </div>

    <div class="box__contentname">
        <h3 class="txt__name">สมมติ แซ่ตัน</h3>
    </div>

    <div class="box__nav">
        <ul>
            <li data-page="profile">
                <a href="{{route('supplier.profile')}}">
                    <div class="icon1"> </div>
                    ข้อมูลผู้ติดต่อ
                </a>
            </li>

            <li data-page="profilestore">
                <a href="{{route('supplier.profile.store')}}">
                    <div class="icon2"></div> ข้อมูลร้านค้า
                </a>
            </li>

            <li data-page="profilebank">
                <a href="{{route('supplier.profile.bank')}}">
                    <div class="icon3"></div> ข้อมูลธนาคาร
                </a>
            </li>

            <li data-page="profilesetuser">
                <a href="{{route('supplier.profile.setting')}}">
                    <div class="icon4"></div> บทบาทและสิทธิ์
                </a>
            </li>

            <li data-page="">
                <a href="{{route('supplier.profile.notification')}}">
                    <div class="icon5"></div> ตั้งค่าแจ้งเตือน
                </a>
            </li>
        </ul>
    </div>
</div>