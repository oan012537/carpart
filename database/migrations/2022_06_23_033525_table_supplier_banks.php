<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableSupplierBanks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('supplier_banks')) {
            Schema::dropIfExists('supplier_banks');
        }
        Schema::create('supplier_banks', function (Blueprint $table) {
            $table->increments('banks_id');
            $table->integer('banks_supplierid')->unsigned();
            $table->string('banks_accountnumber',200)->comment('หมายเลขบัญชี');
            $table->string('banks_accountname',200)->comment('ชื่อบัญชี');
            $table->string('banks_name',200)->comment('ธนาคาร');
            $table->string('banks_branch',200)->comment('สาขา');
            $table->string('banks_type',200)->comment('ประเภทบัญชี');
            $table->string('banks_refimage',200)->comment('สำเนาหน้า');
            $table->string('banks_active',200)->comment('1=ตั้งเป็นบัญชีรับเงิน/0=ปิด');
            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();

            $table->foreign('banks_supplierid')->references('id')->on('users_supplier')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
