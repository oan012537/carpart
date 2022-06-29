@extends('buyer.layouts.template')

@section('content')
<link href="{{asset('assets/css/home-request.css')}}" rel="stylesheet">

<section id="sec-home-seach">
    <div class="container">
        <div class="img-img-ban">
            <img src="{{asset('assets/img/home-seach/b1.png')}}" class="img-fluid" alt="shoe image">
            <div class="head-text-ban">
                <p>
                    Banner
                </p>
            </div>
            <div class="detail-text-ban">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s,
                </p>
            </div>
        </div>
    </div>
</section>



<section id="sec-roon-seach">
    <div class="container">
        <div class="box-roon-box">
            <div class="text-h-roon">
                <p>
                    เลือกแบรนด์
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="input-group box__search">
                        <input type="text" class="form-control" aria-describedby="button-addon2">
                        <button class="btn btn__search" type="button" id="button-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="text-tt-roon">
                        <span> A </span>
                        <span> B </span>
                        <span> C </span>
                        <span> D </span>
                        <span> E </span>
                        <span> F </span>
                        <span> G </span>
                        <span> H </span>
                        <span> I </span>
                        <span> J </span>
                        <span> K </span>
                        <span> L </span>
                        <span> M </span>
                        <span> N </span>
                        <span> O </span>
                        <span> P </span>
                        <span> Q </span>
                        <span> R </span>
                        <span> S </span>
                        <span> T </span>
                        <span> U </span>
                        <span> V </span>
                        <span> W </span>
                        <span> X </span>
                        <span> Y </span>
                        <span> Z </span>

                    </div>
                </div>
            </div>

            <br><br>
            <div class="box-scoll-roon">
                @foreach($brands as $key => $brand)
                <div class="row">
                    @foreach($brand as $item)
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-lg-5">
                                <img src="{{asset($item->brand_image)}}" class="img-fluid" alt="shoe image">
                            </div>
                            <div class="col-lg-7">
                                <div class="text-detail-roon">
                                    <p>
                                        {{$item->brand_name_th}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if((count($brands)-1) != $key)
                <br>
                @endif
                
                @endforeach

            </div>
        </div>
    </div>
</section>


<section id="sec-fi-seach">
    <div class="container">
        <div class="head-text-fi-seach">
            <p>
                ผลการค้นหา <span> 6 รายการ </span>
            </p>
        </div>

        <div class="row">
            <div class="col-lg-10">
                <button class="button button3">
                    ยอดนิยม
                </button>
                <button class="button button3">
                    ขายดี
                </button>
                <select class="form-select" aria-label="Default select example">
                    <option selected> เรียงตาม </option>
                    <option value="1"> ... </option>
                </select>
            </div>
            <div class="col-lg-2">
                <div class="pagination">
                    <a href="#" class="active">&laquo;</a>
                    <a href="#">1/11</a>
                    <a href="#" class="active">&raquo;</a>
                </div>
            </div>
        </div>


        <br><br>
        <div class="row">
            <div class="col-lg-3">
                <div class="sidenav">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tt-seach-text">
                                <p> การค้นหา</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tt-seach-text2">
                                <i class="fa fa-close"></i>
                                <p> ล้าง </p>
                            </div>
                        </div>
                    </div>
                    <hr class="new1">
                    <span> Toyota </span>
                    <button class="dropdown-btn">แบรนด์
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <hr class="new1">
                    <span> รุ่น </span>
                    <button class="dropdown-btn"> เลือก
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <hr class="new1">
                    <span> รุ่นย่อย </span>
                    <button class="dropdown-btn"> เลือก
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <hr class="new1">
                    <span> ปีรถ </span>
                    <button class="dropdown-btn"> เบือก
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <hr class="new1">
                    <span> หมวดหมู่สินค้า </span>
                    <button class="dropdown-btn"> เลือก
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <hr class="new1">
                    <span> หมวดหมู่ย่อย 1 </span>
                    <button class="dropdown-btn"> เลือก
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <hr class="new1">
                    <span> หมวดหมู่ย่อย 2 </span>
                    <button class="dropdown-btn"> เลือก
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <hr class="new1">
                    <span> สภาพสินค้า </span>

                    <label class="check"> ใหม่
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="check"> มือสอง
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="check"> แท้
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="check"> OEM
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>

                    <hr class="new1">
                    <span> ช่วงราคา </span>
                    <br><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box-col-b">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="ระบุ">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box-col-b">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="ระบุ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button class="button button2"> ค้นหา
                    </button>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-4">
                        <div class="img-logo-request">
                            <img src="{{asset('assets/img/home-seach/logo-h.png')}}" class="img-fluid" alt="shoe image">
                        </div>
                        <br>
                        <div class="hexd-text-t-seach">
                            <p>
                                ไม่พบผลการค้นหา
                            </p>
                        </div>
                        <div class="detail-text-t-seach">
                            <p>
                                สร้างใบคำขอหาอะไหล่ให้ผู้ขายของเรา
                            </p>
                        </div>
                        <br>
                        <div class="w3-container w3-center">
                            <div class="but-ca">
                                <a href="{{route('buyer.requestspares.add')}}">
                                    <button class="button button2-2"> สร้างใบคำขอ
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"> </div>
                </div>




            </div>
        </div>

        <!--<br>
        <div class="w3-container w3-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination2 justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">&laquo; ก่อนหน้า</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item-2">
                        <a class="page-link" href="#">ถัดไป &raquo;</a>
                    </li>
                </ul>
            </nav>
        </div>-->




    </div>
</section>
@stop

@section('script')
<script>

</script>
<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>



<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>


<!-- JS  modal edit -->
<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>




<!-- <script>
$("div[id^='myModal']").each(function() {

    var currentModal = $(this);

    //click next
    currentModal.find('.btn-next').click(function() {
        currentModal.modal('hide');
        currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal(
            'show');
    });

    //click prev
    currentModal.find('.btn-prev').click(function() {
        currentModal.modal('hide');
        currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal(
            'show');
    });

});
</script>-->



<!-- JS  upload-->
<script src="{{asset('src/main.js')}}"></script>
<script>
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        const dropZoneElement = inputElement.closest(".drop-zone");

        dropZoneElement.addEventListener("click", (e) => {
            inputElement.click();
        });

        inputElement.addEventListener("change", (e) => {
            if (inputElement.files.length) {
                updateThumbnail(dropZoneElement, inputElement.files[0]);
            }
        });

        dropZoneElement.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZoneElement.classList.add("drop-zone--over");
        });

        ["dragleave", "dragend"].forEach((type) => {
            dropZoneElement.addEventListener(type, (e) => {
                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        dropZoneElement.addEventListener("drop", (e) => {
            e.preventDefault();

            if (e.dataTransfer.files.length) {
                inputElement.files = e.dataTransfer.files;
                updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
            }

            dropZoneElement.classList.remove("drop-zone--over");
        });
    });

    /**
     * Updates the thumbnail on a drop zone element.
     *
     * @param {HTMLElement} dropZoneElement
     * @param {File} file
     */
    function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

        // First time - remove the prompt
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
            dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }

        // First time - there is no thumbnail element, so lets create it
        if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("drop-zone__thumb");
            dropZoneElement.appendChild(thumbnailElement);
        }

        thumbnailElement.dataset.label = file.name;

        // Show thumbnail for image files
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = () => {
                thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
            };
        } else {
            thumbnailElement.style.backgroundImage = null;
        }
    }
</script>
@stop