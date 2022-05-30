@extends('template')

@section('content')
<section id="articles">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__title">
                    <h2 class="title__box">บทความ</h2>
                </div>
            </div>
        </div>



        <div class="box__allarticle">
            <div class="row">
                <?php for ($i = 1; $i <= 9; $i++) { ?>
                    <div class="col-xl-4 col-lg-6 col-6">
                        <a href="articles-content.php">
                            <div class="box__itemsnote">
                                <div class="box__image">
                                    <img src="assets/img/home/img-note.png" class="img-fluid" alt="">
                                </div>

                                <div class="box__content">
                                    <p class="content__title">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry</p>

                                    <div class="group__flex">
                                        <div class="box__time">
                                            <p> <img src="assets/img/icon/icon-timegray.svg" class="img-fluid" alt=""> 11 พ.ค. 2565</p>
                                        </div>

                                        <div class="box__btn">
                                            <p class="btn btn__readmore">อ่านต่อ <i class="fa-solid fa-chevron-right"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>


            <div class="box__paginate">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">

                        <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i> ย้อนกลับ</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">ถัดไป <i class="fa-solid fa-chevron-right"></i> </a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@stop

@section('script')
<script>

</script>
@stop