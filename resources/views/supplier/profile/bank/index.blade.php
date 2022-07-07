@extends('supplier.layouts.template')
@section('content')
<input type="hidden" id="pageName" name="pageName" value="supplier-profile">
<input type="hidden" id="pageName2" name="pageName2" value="profilebank">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__titlepage">
                    <h3>ข้อมูลธนาคาร</h3>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12">
                @include('supplier.layouts.inc_nav')
            </div>

            <div class="col-xl-9 col-lg-12">
                <div class="box__profilebank">

                    <div class="box__info">
                        <?php
                        $heading = array(
                            '1' => 'หมายเลขบัญชี',
                            '2' => 'ชื่อบัญชี',
                            '3' => 'ธนาคาร',
                            '4' => 'สาขา',
                            '5' => 'ประเภทบัญชี',
                            '6' => 'สำเนาหน้า Book Bank',

                        );


                        ?>
                        @if(!empty($banks))
                        @foreach($banks as $key => $bank)
                        @php
                        $result = array(
                        '1' => $bank->banks_accountnumber,
                        '2' => $bank->banks_accountname,
                        '3' => $bank->banks_name,
                        '4' => $bank->banks_branch,
                        '5' => $bank->banks_type,
                        '6' => '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset($bank->banks_refimage).'" data-fancybox-group="gallery'.$bank->banks_id.'"> <img src="'.asset('assets/img/icon/icon-pdf.svg').'" class="img-fluid"> </a>',
                        // data-type="pdf"
                        );
                        @endphp
                        @for($i=1;$i<7;$i++) <div class="box__itemsinfo">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 col-12">
                                    <p class="title__txt"><?php echo $heading[$i]; ?></p>

                                </div>
                                <div class="col-xl-9 col-md-6 col-12">
                                    <p class="title__result"><?php echo $result[$i]; ?></p>

                                    @if ($i == 1)
                                    <div class="box__setdefault">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked{{$bank->banks_id}}" @if($bank->banks_active == '1') checked @endif>
                                            <label class="form-check-label" for="flexCheckChecked{{$bank->banks_id}}">
                                                ตั้งเป็นบัญชีรับเงิน
                                            </label>
                                        </div>
                                    </div>
                                    @endif
                                </div>

                            </div>
                    </div>
                    @endfor
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="col-12">
                <a href="{{route('supplier.profile.bank.add')}}" class="btn btn__addbank"> <i class="fa-solid fa-circle-plus"></i> เพิ่มบัญชีธนาคาร</a>
            </div>
        </div>
    </div>
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
    $('.fancybox').fancybox({
        selector: '.imglist a:visible',
        Escape: "close",
        Delete: "close",
        Backspace: "close",
        PageUp: "next",
        PageDown: "prev",
        ArrowUp: "next",
        ArrowDown: "prev",
        ArrowRight: "next",
        ArrowLeft: "prev",
        groupAttr: false,
        Image: {
            zoom: false,
        },
        thumbs: {
            autoStart: false
        }
    });
</script>
@stop
