<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('banner')) {
            Schema::dropIfExists('banner');
        }
        Schema::create('banner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('startdate')->comment('วันที่เผยแพร่');
            $table->date('enddate')->comment('วันที่สิ้นสุด');
            // $table->integer('type')->unsigned()->comment('1=อัพโหลดเอง/2=link');
            // $table->text('image')->comment('link');
            // $table->string('is_sort',1)->default('0')->comment('เรียงลำดับ');
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
        Schema::dropIfExists('banner');
    }
}
