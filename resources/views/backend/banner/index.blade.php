@extends('backend.layouts.templates')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="settingbanner">

<div class="content">
    <div class="box__approvel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt__page">ตั้งค่าผู้ผลิต</h2>
                </div>

                <div class="col-12">
                    <div class="box__filter">
                        <form class="form-box-input px-2">
                            <div class="row">
                                <div class="col-3">
                                    <label class="title__txt">ค้นหา</label>
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control" placeholder="ระบุ..." name="search">
                                        <div class="btn-icon-search">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <label class="title__txt">สถานะ</label>
                                    <select class="setting-manufac form-select">
                                        <option>ทั้งหมด</option>
                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <div class="txt__detail_num mt-3 mt-lg-5">
                        <span>17 รายการ</span>
                    </div>
                    <div class="box__table p-4">
                        <div class="col-12">
                            <div class="table-responsive form-box-input">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="col-1">ID</th>
                                            <th class="col-5">ชื่อแบรนด์</th>
                                            <th>วันที่แก้ไขล่าสุด</th>
                                            <th class="col-2">ผู้แก้ไข</th>
                                            <th>สถานะ</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1234</td>
                                            <td>แบรนด์</td>
                                            <td>15/12/2565 18.00</td>
                                            <td>แอดมิน</td>
                                            <td><small class="status-success"><i class="fas fa-check-circle"></i> ใช้งาน</small></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                </div>
                                            </td>
                                            <td><a class="btn btn-table-edit" href=""><i class="fas fa-pencil-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>แบรนด์</td>
                                            <td>15/12/2565 18.00</td>
                                            <td>แอดมิน</td>
                                            <td><small class="status-success"><i class="fas fa-check-circle"></i> ใช้งาน</small></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                </div>
                                            </td>
                                            <td><a class="btn btn-table-edit" href=""><i class="fas fa-pencil-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>แบรนด์</td>
                                            <td>15/12/2565 18.00</td>
                                            <td>แอดมิน</td>
                                            <td><small class="status-success"><i class="fas fa-check-circle"></i> ใช้งาน</small></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                </div>
                                            </td>
                                            <td><a class="btn btn-table-edit" href=""><i class="fas fa-pencil-alt"></i></a></td>
                                        </tr>

                                        <tr>
                                            <td>1234</td>
                                            <td>แบรนด์</td>
                                            <td>15/12/2565 18.00</td>
                                            <td>แอดมิน</td>
                                            <td><small class="status-suspended">ระงับการใช้งาน</small></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                </div>
                                            </td>
                                            <td><a class="btn btn-table-edit" href=""><i class="fas fa-pencil-alt"></i><a></td>
                                        </tr>

                                        <tr>
                                            <td>1234</td>
                                            <td>แบรนด์</td>
                                            <td>15/12/2565 18.00</td>
                                            <td>แอดมิน</td>
                                            <td><small class="status-success"><i class="fas fa-check-circle"></i> ใช้งาน</small></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                </div>
                                            </td>
                                            <td><a class="btn btn-table-edit" href=""><i class="fas fa-pencil-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>แบรนด์</td>
                                            <td>15/12/2565 18.00</td>
                                            <td>แอดมิน</td>
                                            <td><small class="status-success"><i class="fas fa-check-circle"></i> ใช้งาน</small></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                </div>
                                            </td>
                                            <td><a class="btn btn-table-edit" href=""><i class="fas fa-pencil-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>แบรนด์</td>
                                            <td>15/12/2565 18.00</td>
                                            <td>แอดมิน</td>
                                            <td><small class="status-success"><i class="fas fa-check-circle"></i> ใช้งาน</small></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                </div>
                                            </td>
                                            <td><a class="btn btn-table-edit" href=""><i class="fas fa-pencil-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>แบรนด์</td>
                                            <td>15/12/2565 18.00</td>
                                            <td>แอดมิน</td>
                                            <td><small class="status-success"><i class="fas fa-check-circle"></i> ใช้งาน</small></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                </div>
                                            </td>
                                            <td><a class="btn btn-table-edit" href=""><i class="fas fa-pencil-alt"></i></a></td>
                                        </tr>

                                        <tr>
                                            <td>1234</td>
                                            <td>แบรนด์</td>
                                            <td>15/12/2565 18.00</td>
                                            <td>แอดมิน</td>
                                            <td><small class="status-suspended">ระงับการใช้งาน</small></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes">
                                                </div>
                                            </td>
                                            <td><a class="btn btn-table-edit" href=""><i class="fas fa-pencil-alt"></i><a></td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>แบรนด์</td>
                                            <td>15/12/2565 18.00</td>
                                            <td>แอดมิน</td>
                                            <td><small class="status-success"><i class="fas fa-check-circle"></i> ใช้งาน</small></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                </div>
                                            </td>
                                            <td><a class="btn btn-table-edit" href=""><i class="fas fa-pencil-alt"></i></a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="view-all">
                                <div>
                                    <p>แสดงทั้งหมด 20 จาก 214 รายการ</p>
                                </div>
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                                    <li class="page-item">1/11</li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
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