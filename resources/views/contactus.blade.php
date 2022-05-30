@extends('template')

@section('content')
<section id="contactus">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__title">
                    <h2 class="title__page">ติดต่อเรา</h2>
                </div>
            </div>
        </div>


        <div class="box__image">
            <div class="row">
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <div class="col-lg-4">
                        <img src="assets/img/contactus/image.png" class="img-fluid" alt="">
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="row">
            <div class="col-9">
                <div class="box__map">
                    <img src="assets/img/contactus/image-map.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-3">
                <div class="box__address">
                    <p class="title__box">ที่อยู่ของเรา</p>
                    <p class="text__address">17/4 Village No.5 Bamroongrat Road, Pibulsongkram Sub-district, Muang District, Bangkok, 10400</p>
                </div>

                <div class="box__detailcontact">
                    <p class="title__box">การติดต่อ</p>
                    <div class="box__phone">
                        <div class="border__box"><i class="fa-solid fa-phone"></i></div>
                        <p> <a href="tel:+660123456789">012 345 6789</a> </p>
                    </div>

                    <div class="box__phone">
                        <div class="border__box"><i class="fa-brands fa-facebook"></i></div>
                        <p><a href="javascript:void(0)">Facebook</a></p>
                    </div>

                    <div class="box__phone">
                        <div class="border__box"><i class="fa-brands fa-line"></i></div>
                        <p><a href="javascript:void(0)">@line</a></p>
                    </div>

                    <div class="box__phone">
                        <div class="border__box"> <i class="fa-solid fa-envelope"></i> </div>
                        <p><a href="mailto:sample@gmail.com">sample@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('script')
<script>

</script>
@stop