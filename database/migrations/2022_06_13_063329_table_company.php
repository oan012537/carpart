<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AtbleCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('company')) {
            Schema::dropIfExists('company');
        }
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->comment('ชื่อ');
            $table->string('email')->nullable()->comment('เมล์');
            $table->string('tel')->nullable()->comment('โทรศัพท์');
            $table->string('addressfull')->nullable()->comment('ที่อยู่เต็ม');
            $table->string('address')->nullable()->comment('ที่อยู่ตามบริษัท');
            $table->string('address_province')->nullable()->comment('จังหวัด');
            $table->string('address_amphure')->nullable()->comment('เขต');
            $table->string('address_district')->nullable()->comment('แขวง');
            $table->string('address_zipcode')->nullable()->comment('รหัสไปรษณีย์');
            $table->string('facebook')->nullable()->comment('facebook url');
            $table->string('line')->nullable()->comment('line url');
            $table->string('showtextaddline')->nullable()->comment('คำที่แสดงบนปุ่มแอดline');
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
        Schema::dropIfExists('company');
    }
}
