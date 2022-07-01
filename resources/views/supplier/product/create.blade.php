@extends('supplier.layouts.template')

@section('content')

<input type="hidden" id="pageName" name="pageName" value="setting-product">
<div class="content" id="setting-createproduct">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__titlepage">
                    <h3>{{ trans('file.Add Product')}}</h3>
                </div>
            </div>

            <div class="col-lg-12">
                <p class="txt__title"><i class="fa-solid fa-circle-exclamation"></i> <span class="title__headbox">{{ trans('file.Product Information')}}</span></p>
                <form id="msform">
                    <div class="box__allstep">

                        <div class="box__step">
                            <p class="txt__titlestep">{{ trans('file.Choose Brand')}}</p>
                            <div class="box__stepdetail">
                                <a href="javascript:void(0)" class="btn__label step1 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__brands"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                <a href="javascript:void(0)" class="btn__label step2 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__series"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                <a href="javascript:void(0)" class="btn__label step3 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__subseries"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                <a href="javascript:void(0)" class="btn__label step4 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__years"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span> </a>
                                <a href="javascript:void(0)" class="btn__label step5 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__cat"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span></a>
                                <a href="javascript:void(0)" class="btn__label step6 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__cat"></span> <span class="icon__symbol"><i class="fa-solid fa-chevron-right"></i></span></a>
                                <a href="javascript:void(0)" class="btn__label step7 d-none"><i class="fa-solid fa-xmark"></i> <span class="txt__cat"></span> </a>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ trans('file.Specify') }}" aria-describedby="button-addon2">
                                        <button class="btn btn btn__search" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    @foreach (range('A', 'Z') as $letter)
                                      <a href='javascript:void(0)' class='letter__az'>{{ $letter }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                        <div class="box__contentdetail">
                            {{-- brand --}}
                            <div class="row box__scroll" id="fieldset1">
                                @foreach ($brand_list_data as $brand)
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 next">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="image-option" id="image-options{{ $brand->id }}" value="{{ $brand->id }}">
                                            <label class="form-check-label" for="image-options{{ $brand->id }}">
                                                <img src="{{ asset('brand_logo').'/'. $brand->image }}" class="img-fluid img-circleimg" alt="{{ $brand->name_th }}">
                                                {{ $brand->name_th }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <fieldset attr-id="1">
                                {{-- model   --}}
                                <div class="row box__scroll" id="fieldset2">
                                    @foreach ($category_list_data as $category)
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12 next">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {{ $category->name_th }}
                                                </label>
                                            </div>
                                        </div>    
                                    @endforeach
                                </div>

                                <fieldset attr-id="2">
                                    <div class="row box__scroll" id="fieldset3">
                                        <?php $name = array(
                                            '1' => '2.4 E',
                                            '2' => '2.4 E Plus 4WD',
                                            '3' => '2.4 J',
                                            '4' => '2.4 E 4WD',
                                            '5' => '2.4 Entry',
                                            '6' => '2.4 E',
                                            '7' => '2.4 E Plus 4WD',
                                            '8' => '2.4 J',
                                            '9' => '2.4 E 4WD',
                                            '10' => '2.4 Entry',
                                            '11' => '2.4 E',
                                            '12' => '2.4 E Plus 4WD',
                                            '13' => '2.4 J',
                                            '14' => '2.4 E 4WD',
                                            '15' => '2.4 Entry',
                                            '16' => '2.4 E',
                                            '17' => '2.4 E Plus 4WD',
                                            '18' => '2.4 J',
                                            '19' => '2.4 E 4WD',
                                            '20' => '2.4 Entry',

                                        );
                                        for ($i = 1; $i <= 20; $i++) {
                                        ?>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12 next">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        <?php echo $name[$i]; ?>
                                                    </label>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <!--  -->
                                    <fieldset attr-id="3">
                                        <div class="row box__scroll" id="fieldset4">
                                            <?php $years = array(
                                                '1' => '2022',
                                                '2' => '2022',
                                                '3' => '2022',
                                                '4' => '2022',
                                                '5' => '2022',
                                                '6' => '2022 ',
                                                '7' => '2022',
                                                '8' => '2022',
                                                '9' => '2022',
                                                '10' => '2022',
                                                '11' => '2022 ',
                                                '12' => '2022',
                                                '13' => '2022',
                                                '14' => '2022',
                                                '15' => '2022',
                                            );
                                            for ($i = 1; $i <= 15; $i++) {
                                            ?>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-12 next">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            <?php echo $years[$i]; ?>
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <!--  -->
                                        <fieldset attr-id="4">
                                            <div class="row box__scroll" id="fieldset5">
                                                <?php $content = array(
                                                    '1' => 'ถังน้ำสำรอง',
                                                    '2' => 'ชุดสายไฟ',
                                                    '3' => 'กล่องฟิวส์',
                                                    '4' => 'ถังน้ำมัน',
                                                    '5' => 'ออยล์คูเลอร์',
                                                    '6' => 'ออยล์คูเลอร์ ',
                                                    '7' => 'ถังน้ำสำรอง',
                                                    '8' => 'ชุดสายไฟ',
                                                    '9' => 'กล่องฟิวส์',
                                                    '10' => 'ถังน้ำมัน',
                                                    '11' => 'ถังน้ำสำรอง ',
                                                    '12' => 'ชุดสายไฟ',
                                                    '13' => 'กล่องฟิวส์',
                                                    '14' => 'ถังน้ำมัน',
                                                    '15' => 'ออยล์คูเลอร์',
                                                    '16' => 'ถังน้ำมัน',
                                                    '17' => 'ถังน้ำสำรอง ',
                                                    '18' => 'ชุดสายไฟ',
                                                    '19' => 'กล่องฟิวส์',
                                                    '20' => 'ถังน้ำมัน',
                                                );
                                                for ($i = 1; $i <= 15; $i++) {
                                                ?>
                                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12 next">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                <?php echo $content[$i]; ?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <!--  -->

                                            <fieldset attr-id="5">
                                                <div class="row box__scroll" id="fieldset6">
                                                    <?php $content = array(
                                                        '1' => 'ถังน้ำสำรอง',
                                                        '2' => 'ชุดสายไฟ',
                                                        '3' => 'กล่องฟิวส์',
                                                        '4' => 'ถังน้ำมัน',
                                                        '5' => 'ออยล์คูเลอร์',
                                                        '6' => 'ออยล์คูเลอร์ ',
                                                        '7' => 'ถังน้ำสำรอง',
                                                        '8' => 'ชุดสายไฟ',
                                                        '9' => 'กล่องฟิวส์',
                                                        '10' => 'ถังน้ำมัน',
                                                        '11' => 'ถังน้ำสำรอง ',
                                                        '12' => 'ชุดสายไฟ',
                                                        '13' => 'กล่องฟิวส์',
                                                        '14' => 'ถังน้ำมัน',
                                                        '15' => 'ออยล์คูเลอร์',
                                                        '16' => 'ถังน้ำมัน',
                                                        '17' => 'ถังน้ำสำรอง ',
                                                        '18' => 'ชุดสายไฟ',
                                                        '19' => 'กล่องฟิวส์',
                                                        '20' => 'ถังน้ำมัน',
                                                    );
                                                    for ($i = 1; $i <= 15; $i++) {
                                                    ?>
                                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12 next">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <?php echo $content[$i]; ?>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>

                                                <!--  -->

                                                <fieldset attr-id="6">
                                                    <div class="row box__scroll" id="fieldset7">
                                                        <?php $content = array(
                                                            '1' => 'ถังน้ำสำรอง',
                                                            '2' => 'ชุดสายไฟ',
                                                            '3' => 'กล่องฟิวส์',
                                                            '4' => 'ถังน้ำมัน',
                                                            '5' => 'ออยล์คูเลอร์',
                                                            '6' => 'ออยล์คูเลอร์ ',
                                                            '7' => 'ถังน้ำสำรอง',
                                                            '8' => 'ชุดสายไฟ',
                                                            '9' => 'กล่องฟิวส์',
                                                            '10' => 'ถังน้ำมัน',
                                                            '11' => 'ถังน้ำสำรอง ',
                                                            '12' => 'ชุดสายไฟ',
                                                            '13' => 'กล่องฟิวส์',
                                                            '14' => 'ถังน้ำมัน',
                                                            '15' => 'ออยล์คูเลอร์',
                                                            '16' => 'ถังน้ำมัน',
                                                            '17' => 'ถังน้ำสำรอง ',
                                                            '18' => 'ชุดสายไฟ',
                                                            '19' => 'กล่องฟิวส์',
                                                            '20' => 'ถังน้ำมัน',
                                                        );
                                                        for ($i = 1; $i <= 15; $i++) {
                                                        ?>
                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12 ">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        <?php echo $content[$i]; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>


                                                </fieldset>
                                                <!--  -->
                                            </fieldset>
                                            <!--  -->

                                        </fieldset>
                                        <!--  -->
                                    </fieldset>

                                    <!--  -->
                        </div>
                    </div>
                </form>
                <!--  -->

                <div class="box__condition">
                    <div class="box__title">
                        <p class="txt__title"><i class="fa-solid fa-circle-exclamation"></i> {{ trans('file.Product Quality') }}</p>
                    </div>

                    <div class="box__wrapperbutton">
                        <a href="setting-producttwohand.php" class="btn btn__producttwohand">
                            <img src="{{ asset('assets/img/icon/icon__mdicar.svg') }}" class="img-fluid" alt="second hand">
                            <p>{{ trans('file.Second Hand') }}</p>
                            <span>{{ trans('file.The product has been used') }}</span>
                        </a>

                        <a href="setting-createnewproduct.php" class="btn btn__productnew">
                            <img src="{{ asset('assets/img/icon/icon__new.svg') }}" class="img-fluid" alt="new product">
                            <p>{{ trans('file.New Product') }}</p>
                            <span>{{ trans('file.First-hand products have not been used.') }}</span>
                        </a>
                    </div>
                </div>
                <!--  -->

                <div class="box__btn">
                    <a href="javascript:void(0)" class="btn btn__back">{{ trans('file.Back') }}</a>
                    <a href="javascript:void(0)" class="btn btn__next">{{ trans('file.Next') }}</a>
                </div>

                <!--  -->
            </div>
        </div>

    </div>
</div>

@endsection

@section('script')
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script>
    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;

    $(".next").click(function() {
        alert('xxx');
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        next_fs.show();
        const attr__value = next_fs.attr('attr-id');
            // alert(attr__value);
        if (attr__value == 1) {
            $('.txt__titlestep').addClass('d-none');
            $('.step1').removeClass('d-none');
            $('.txt__brands').html('{{ trans("file.Brand") }}');
            $('.step2').removeClass('d-none');
            $('.txt__series').html('{{ trans("file.Model") }}');
            $('.title__headbox').html('{{ trans("file.Model") }}')
        } else if (attr__value == 2) {
            $('.step3').removeClass('d-none');
            $('.txt__subseries').html('{{ trans("file.Sub Model") }}');
            $('.title__headbox').html('{{ trans("file.Sub Model") }}')
        } else if (attr__value == 3) {
            $('.step4').removeClass('d-none');
            $('.txt__years').html('ปี');
            $('.title__headbox').html('{{ trans("file.Year") }}')
        } else if (attr__value == 4) {
            $('.step5').removeClass('d-none');
            $('.txt__cat').html('{{ trans("file.Category") }}');
            $('.title__headbox').html('{{ trans("file.Category") }}')
        } else if (attr__value == 5) {
            $('.step6').removeClass('d-none');
            $('.txt__cat').html('{{ trans("file.Sub Category") }}');
            $('.title__headbox').html('{{ trans("file.Sub Category") }}')
        } else if (attr__value == 6) {
            $('.step6').removeClass('d-none');
            $('.txt__cat').html('{{ trans("file.Sub Sub Category") }}');
            $('.title__headbox').html('{{ trans("file.Sub Sub Category") }}')
        }

        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        previous_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 0.8 + (1 - now) * 0.2;
                left = ((1 - now) * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function() {
        return false;
    })
</script>
@endsection