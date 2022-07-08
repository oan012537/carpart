@extends('buyer.layouts.template')

@section('content')
<section id="createrequest">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="box__title">
                    <div class="text__title">สร้างใบคำขอหาอะไหล่</div>
                </div>
            </div>
        </div>

        <div class="box__createrequest">
            <form>
                <div class="row">
                    <div class="col-2">
                        <p class="title__txt">รายละเอียด</p>
                    </div>
                    <div class="col-10">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>แบรนด์</label>
                                    <input type="text" class="form-control" name="brand" id="brand" value="{{$brand->name_en}}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>รุ่น</label>
                                    <input type="text" class="form-control" name="model" id="model"  value="{{$model->name_en}}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>รุ่นย่อย</label>
                                    <input type="text" class="form-control" name="submodel" id="submodel" value="{{$submodel->name_en}}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>ปี</label>
                                    <input type="text" class="form-control" name="years" id="years" value="{{$year->from_year}}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>หมวดหมู่</label>
                                    <input type="text" class="form-control" name="category" id="category" value="{{$category->name_en}}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>หมวดหมู่ย่อย 1</label>
                                    <input type="text" class="form-control" name="subcategory" id="subcategory" value="{{$subcategory->name_en}}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>หมวดหมู่ย่อย 2</label>
                                    <input type="text" class="form-control" name="subsubcategory" id="subsubcategory" value="{{$subsubcategory->name_en}}">
                                </div>
                            </div>

                            @php $detail = $subsubcategory->name_en.' , '.$subcategory->name_en.' , '.$category->name_en.' , '.$model->name_en.' , '.$submodel->name_en.' , '.$year->from_year @endphp
                            <div class="col-12">
                                <div class="form-group">
                                    <label>ชื่อสินค้าที่ต้องการ</label>
                                    <input type="text" class="form-control" name="nameproducts" id="nameproducts" value="{{$detail}}">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <hr class="underlinepage">
                    </div>

                    <div class="col-2">
                        <p class="title__txt">รายละเอียดอื่นๆ</p>
                    </div>

                    <div class="col-10">

                        <div class="row">
                            <div class="col-12">
                                <p class="text__col">รูปภาพอะไหล่สินค้า <span>(หากมีตัวอย่างรูปภาพสินค้า)</span></p>
                                <div class="box__groupimage" id="galleryPreview">
                                    <!-- <div class="box__upload ">
                                        <img id="imageShow" src="" class="img-fluid" />
                                        <a href="javascript:void(0)">ลบ <i class="fa-solid fa-trash"></i></a>
                                    </div> -->

                                    <div class="upload-box">
                                        <div class="box__content">
                                            <div class="upload-btn-wrapper">
                                                <button class="btn"> <i class="fa-solid fa-circle-plus"></i></button>
                                                <input type="file" name="spares_image[]" id="spares-image" multiple="" data-show-preview="false" onchange="uploadImagespares()">

                                                <p class="txt__title">แนบรูปภาพ .Jpeg</p>
                                                <p class="txt__sub">สูงสุดไม่เกิน 5 ภาพขนาดไม่เกิน 5 Mb.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>

                            <div class="col-6 box__other">
                                <div class="form-group">
                                    <label>จำนวน</label>
                                    <input type="number" class="form-control" name="valuep" id="valuep" min="1" value="1">
                                </div>
                            </div>
                            <div class="col-6 box__other">
                                <div class="form-group">
                                    <label>หมายเลขประจำรถยนต์ Caution No. (ไม่บังคับ)</label>
                                    <input type="text" class="form-control" name="numbercar" id="numbercar" value="{{$brand->code}}">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="box__groupimage">
                                    <!-- <div class="box__upload ">
                                        <img id="imageShow" src="" class="img-fluid" />
                                        <a href="javascript:void(0)">ลบ <i class="fa-solid fa-trash"></i></a>
                                    </div> -->

                                    <!--  -->
                                    <div class="upload-box">
                                        <div class="box__content">
                                            <div class="upload-btn-wrapper">
                                                <button class="btn"> <i class="fa-solid fa-circle-plus"></i></button>
                                                <input type="file" name="" id="" multiple="" onchange="preview()">

                                                <p class="txt__title">แนบรูปภาพ .Jpeg</p>
                                                <p class="txt__sub">สูงสุดไม่เกิน 5 ภาพขนาดไม่เกิน 5 Mb.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!--  -->
                                </div>

                                <div class="box__select">
                                    <p class="text__col">ต้องการวีดีโอเพิ่มเติมหรือไม่ <span>(กรณีสนใจจริงๆ)</span></p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="novideo" id="novideo">
                                        <label class="form-check-label" for="novideo">
                                            ไม่ต้องการ
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="yesvideo" id="yesvideo">
                                        <label class="form-check-label" for="yesvideo">
                                            ต้องการ
                                        </label>
                                    </div>

                                </div>
                                <div class="box__select">
                                    <p class="text__col">ต้องการใบกำกับภาษีหรือไม่ <span> * (อาจจะมีบางผู้ขายที่ไม่รองรับการออกใบเสร็จ/ใบกำกับภาษี)</span></p>


                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="noslip" id="noslip">
                                        <label class="form-check-label" for="noslip">
                                            ไม่ต้องการ
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="yesslip" id="yesslip">
                                        <label class="form-check-label" for="yesslip">
                                            ต้องการ
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </form>
        </div>

        <div class="box__btn">
            <a  href="#">
            <button class="btn btn__clear">ยกเลิก</button>
            </a>
            <a href="detail-request.php">
            <button class="btn btn__send">ยืนยัน</button>
            </a>
        </div>
    </div>
</section>
@stop

@section('script')
<script>
    var fullUrl = window.location.origin + window.location.pathname;
    console.log(fullUrl);

    const dt = new DataTransfer();

    /*function uploadImagespares(){
        if($("#spares-image")[0].files.length > 5){
            alert('สูงสุดไม่เกิน 5 ภาพขนาดไม่เกิน 5 Mb.');
        }else{
            const target = $('#galleryPreview');
            var total_file = $("#spares-image")[0].files.length;
            target.find('.new-pre').remove();
            for(var i=0;i<total_file;i++){
                target.append('<div class="box__upload" id="block-spares'+i+'">'+
                    '<img id="gallery'+i+'" src="'+URL.createObjectURL(event.target.files[i])+'" class="img-fluid" />'+
                    // '<input type="hidden">'+
                    '<a href="javascript:void(0)" onclick="deleteGallery('+i+')">ลบ <i class="fa-solid fa-trash"></i></a>'+
                    '</div>'
                );
                console.log(event.target.files[i])
            }
        }
        
    }

    function deleteGallery(id){
        $('#block-spares'+id).remove();
        // $('#gallery'+id).remove();
        // $("#spares-image")[id].val(null);
        console.log($("#spares-image").val())
    }*/

    $("#attachment").on('change', function(e){
        for(var i = 0; i < this.files.length; i++){
            let fileBloc = $('<span/>', {class: 'file-block'}),
                fileName = $('<span/>', {class: 'name', text: this.files.item(i).name});
            fileBloc.append('<span class="file-delete"><span>+</span></span>')
                .append(fileName);
            $("#filesList > #files-names").append(fileBloc);
        }
        // Ajout des fichiers dans l'objet DataTransfer
        for (let file of this.files) {
            dt.items.add(file);
        }
        // Mise à jour des fichiers de l'input file après ajout
        this.files = dt.files;

	// EventListener pour le bouton de suppression créé
	$('span.file-delete').click(function(){
		let name = $(this).next('span.name').text();
		// Supprimer l'affichage du nom de fichier
		$(this).parent().remove();
		for(let i = 0; i < dt.items.length; i++){
			// Correspondance du fichier et du nom
			if(name === dt.items[i].getAsFile().name){
				// Suppression du fichier dans l'objet DataTransfer
				dt.items.remove(i);
				continue;
			}
		}
		// Mise à jour des fichiers de l'input file après suppression
		document.getElementById('attachment').files = dt.files;
	});
});


</script>
<script>
    // const image1 = document.getElementById("imageShow1");
    // const image2 = document.getElementById("imageShow2");
    // const image3 = document.getElementById("imageShow3");
    // const image4 = document.getElementById("imageShow4");
    // const image5 = document.getElementById("imageShow5");
    // const image6 = document.getElementById("imageShow6");
    // const image7 = document.getElementById("imageShow7");
    // const image8 = document.getElementById("imageShow8");

    // image1.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    // image2.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    // image3.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    // image4.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    // image5.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    // image6.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    // image7.src = "{{asset('assets/img/createrequest/imagenull.png')}}";
    // image8.src = "{{asset('assets/img/createrequest/imagenull.png')}}";

    /*preview = () => {
        image1.src = URL.createObjectURL(event.target.files[0]);
        image2.src = URL.createObjectURL(event.target.files[1]);
        image3.src = URL.createObjectURL(event.target.files[2]);
        image4.src = URL.createObjectURL(event.target.files[3]);

    }*/
</script>
@stop