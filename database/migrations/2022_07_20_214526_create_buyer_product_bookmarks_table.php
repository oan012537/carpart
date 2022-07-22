<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerProductBookmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_product_bookmarks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_buyer_id')->unsigned()->index()->comment('รหัสผู้ซื้อ)');
            $table->integer('product_id')->unsigned()->index()->comment('รหัสสินค้า');
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
        Schema::dropIfExists('buyer_product_bookmarks');
    }
}
