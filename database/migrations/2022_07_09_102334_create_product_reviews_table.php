<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_buyer_id')->unsigned()->comment('รหัสผู้รีวิว (ผู้ซื้อ)');
            $table->integer('product_id')->unsigned()->index()->comment('รหัสสินค้า');
            $table->text('review_detail')->comment('รายละเอียด');
            $table->integer('review_score')->comment('คะแนนดาว (1-5)');
            $table->integer('is_active')->default(1)->comment('0 = notactive, 1 = active');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_reviews');
    }
}
