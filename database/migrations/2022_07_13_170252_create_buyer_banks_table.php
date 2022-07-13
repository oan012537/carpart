<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_banks', function (Blueprint $table) {
            $table->id();
            $table->integer('users_buyer_id')->unsigned()->index()->comment('รหัส (ผู้ซื้อ)');
            $table->string('banks_accountnumber', 200)->nullable()->comment('หมายเลขบัญชี');
            $table->string('banks_accountname', 200)->nullable()->comment('ชื่อบัญชี');
            $table->string('banks_name', 200)->nullable()->comment('ธนาคาร');
            $table->string('banks_branch', 255)->nullable()->comment('สาขา');
            $table->string('banks_type', 200)->nullable()->comment('ประเภทบัญชี');
            $table->string('banks_refimage', 200)->nullable()->comment('สำเนาหน้า');
            $table->string('banks_active', 1)->default(0)->comment('1=ตั้งเป็นบัญชีรับเงิน/0=ปิด');
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
        Schema::dropIfExists('buyer_banks');
    }
}
