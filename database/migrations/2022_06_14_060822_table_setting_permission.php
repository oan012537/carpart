<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableSettingPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users_permission')) {
            Schema::dropIfExists('users_permission');
        }
        Schema::create('users_permission', function (Blueprint $table) {
            $table->increments('permission_id');
            $table->integer('permission_role')->unsigned()->unique()->comment('บทบาท');
            $table->string('permission_manage1',1)->default('0')->comment('จัดการบทบาท');
            $table->string('permission_manage2',1)->default('0')->comment('ดูแลการขาย');
            $table->string('permission_manage3',1)->default('0')->comment('ดูแลการเงิน');
            $table->string('permission_manage4',1)->default('0')->comment('จัดการโปรโมชั่น');
            $table->string('permission_manage5',1)->default('0')->comment('จัดการข้อมูลธนาคาร');
            $table->string('permission_manage6',1)->default('0')->comment('ยังไม่ได้คิด');
            $table->string('permission_manage7',1)->default('0')->comment('ยังไม่ได้คิด');
            $table->timestamps();

            // $table->decimal('refunddata_profix', $precision = 11, $scale = 2);
            $table->foreign('permission_role')->references('role_id')->on('role')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_permission');
    }
}
