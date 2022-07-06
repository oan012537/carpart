<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePdpa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('pdpa')) {
            Schema::dropIfExists('pdpa');
        }
        Schema::create('pdpa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',20)->comment('หมายเลขpdpa');
            $table->string('title',120)->comment('หัวข้อ');
            $table->string('typeuser')->comment('ประเภทผู้ใช้งาน');
            $table->string('typemember')->comment('ประเภทสมาชิก');
            $table->date('datestart')->comment('วันที่เผยแพร่');
            $table->string('verions')->comment('เวอร์ชั่น');
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
