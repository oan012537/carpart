<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderRequestConfirminventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_request_confirminventories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_buyer_id')->unsigned()->index()->comment('รหัสผู้ซื้อ)');
            $table->integer('supplier_id')->unsigned()->index()->comment('รหัสผู้ขาย');
            $table->integer('product_id')->unsigned()->index()->comment('รหัสสินค้า');
            $table->string('product_name')->nullable();
            $table->decimal('product_price',12,2)->nullable();
            $table->enum('request_vdo', ['yes', 'no'])->default('no')->comment('ต้องการ vdo เพิ่มหรือไม่');
            $table->text('image')->nullable();
            $table->string('vincode')->nullable();
            $table->integer('buyer_profile_id')->nullable()->comment('รหัสที่จัดส่ง buyer');
            $table->text('destination')->nullable()->comment('สถานที่จัดส่ง');
            $table->string('transport_by')->nullable();
            $table->enum('is_tax', ['yes', 'no'])->default('no')->comment('ต้องการ ใบกำกับภาษีหรือไม่');
            $table->integer('buyer_tax_invoice_id')->nullable()->comment('รหัสที่อยู่ใบกำกับภาษี buyer');
            $table->string('taxid')->nullable()->comment('เลขประจำตัวผู้เสียภาษี');
            $table->text('taxinvoice_address')->nullable()->comment('ที่อยู่สำหรับออกใบกำกับภาษี');
            $table->enum('status',['pending','approved','canceled'])->default('pending')->comment('สถานะ (pending, approved, canceled)');
            $table->dateTime('pending_date', $precision = 0)->nullable()->comment('วันที่ขอ');
            $table->dateTime('approved_date', $precision = 0)->nullable()->comment('วันที่อนุมัติ');
            $table->dateTime('canceled_date', $precision = 0)->nullable()->comment('วันที่ยกเลิก');
            $table->string('canceled_by')->nullable()->comment('รหัสผู้ยกเลิก');
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
        Schema::dropIfExists('order_request_confirminventories');
    }
}
