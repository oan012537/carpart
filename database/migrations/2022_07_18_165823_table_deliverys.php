<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableDeliverys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('deliverys')) {
            Schema::dropIfExists('deliverys');
        }
        Schema::create('deliverys', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('banner_id')->unsigned();
            $table->string('name')->comment('ชื่อผู้ให้บริการขนส่ง');
            $table->string('image')->nullable()->comment('รูปภาพ');
            $table->string('type')->comment('ประเภทการขนส่ง');
            $table->string('grouptypecpn')->comment('กลุ่มประเภทขนส่งที่จัดโดย CPN');
            $table->string('timeinbkk')->comment('ระยะเวลาการจัดส่งในกทม.');
            $table->string('timeoutbkk')->comment('ระยะเวลาการจัดส่งในตวจ.');
            $table->decimal('weight', $precision = 10, $scale = 2)->default('0')->comment('น้ำหนักสินค้า');
            $table->string('weightunit')->comment('หน่วย');
            $table->decimal('wide', $precision = 10, $scale = 2)->default('0')->comment('กว้าง');
            $table->decimal('long', $precision = 10, $scale = 2)->default('0')->comment('ยาว');
            $table->decimal('high', $precision = 10, $scale = 2)->default('0')->comment('สูง');
            $table->string('unit')->comment('หน่วย');
            $table->string('warranty')->default('0')->comment('การรับประกัน');
            $table->string('trackingnumber')->default('0')->comment('มีเลขแทร็กกิ้ง');
            $table->string('warrantyterms')->nullable()->comment('เงื่อนไขการรับประกัน');
            $table->string('is_active',1)->default('1');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            // $table->timestamps();


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
