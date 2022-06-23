<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableSupplierUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users_supplier')) {
            Schema::dropIfExists('users_supplier');
        }
        Schema::create('users_supplier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',100)->comment('บุคคลธรรมดา , นิติบุคคล');
            $table->string('store_name',200)->comment('ชื่อร้าน');
            $table->string('first_name',200)->comment('ชื่อ');
            $table->string('last_name',200)->comment('นามสกุล');
            $table->string('card_id',200)->comment('เลขบัตรประชาชน');
            $table->text('addressfull')->nullable()->comment('ที่อยู่เต็ม');
            $table->text('address')->nullable()->comment('ที่อยู่ (ตามบัตรประชาชน)');
            $table->text('address_province')->nullable()->comment('จังหวัด');
            $table->text('address_amphure')->nullable()->comment('เขต');
            $table->text('address_district')->nullable()->comment('แขวง');
            $table->text('address_zipcode')->nullable()->comment('รหัสไปรษณีย์');
            $table->string('pic_card',200)->nullable()->comment('สำเนาบัตรประชาชน');
            $table->string('pic_regis',200)->nullable()->comment('ทะเบียนบ้าน');
            $table->string('company_name',200)->nullable()->comment('ชื่อบริษัท');
            $table->text('company_email')->nullable();
            $table->string('branch',200)->nullable()->comment('สาขา');
            $table->string('vat_id',20)->nullable()->comment('เลขประจำตัวผู้เสียภาษี');
            $table->string('pic_certificate',200)->nullable()->comment('รูปหนังสือรับรองบริษัท');
            $table->string('pic_vat',200)->nullable()->comment('สำเนาภาษีมูลค่าเพิ่ม');
            $table->string('email')->unique();
            $table->string('phone',20)->nullable()->comment('เบอร์โทรศัพท์');
            $table->text('facebook')->nullable();
            $table->text('googlemap')->nullable();
            $table->text('store_address')->nullable()->comment('ที่อยู่ ');
            $table->text('store_addressidcard')->nullable()->comment('ที่อยู่ร้านค้าตรงตามบัตรประชาชน');
            $table->text('store_addressfull')->nullable()->comment('ที่อยู่เต็มบริษัท');
            $table->text('store_province')->nullable()->comment('จังหวัด');
            $table->text('store_amphure')->nullable()->comment('เขต');
            $table->text('store_district')->nullable()->comment('แขวง');
            $table->text('store_zipcode')->nullable()->comment('รหัสไปรษณีย์');
            $table->string('password');
            $table->char('status',1)->default('2')->comment('สถานะ1=อนุมัต/2=รอ/0ไม่อนุมัติ');
            $table->text('comment')->nullable();
            $table->string('role',10)->nullable();
            $table->string('social_id')->nullable();
            $table->string('social_type')->nullable();
            $table->string('created_for',200)->nullable();
            $table->string('updated_for',200)->nullable();
            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_supplier');
    }
}
