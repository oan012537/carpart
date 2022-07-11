<br>
<div class="icon-rwview-detail">
    <?php 
            for($i=0; $i<$review->review_score; $i++){
    ?>
            <i class="fas fa-star"></i>
    <?php 
            }
    ?>
</div>
<br>
<div class="d-review-text">
    <p> ID ลูกค้า : {{ $review->users_buyer_id }} </p>
    <p> {{ date('d/m/Y H:i',strtotime($review->created_at."+543 years")) }} : ตัวเลือก 1-สภาพ 80% ** คืออะไร ดึงส่วนไหน</p>
    <p> {{ $review->review_detail }} </p>
    <br>
    <img src="assets/img/prodetail/pr1.png" class="img-fluid" alt="shoe image"
        style="width: 10%;">
</div>
<br><br>