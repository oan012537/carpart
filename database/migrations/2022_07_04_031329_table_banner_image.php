<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBannerImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('banner_image')) {
            Schema::dropIfExists('banner_image');
        }
        Schema::create('banner_image', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner_id');
            $table->integer('type')->unsigned()->comment('1=อัพโหลดเอง/2=link');
            $table->text('image');
            $table->string('is_sort',1)->default('0')->comment('เรียงลำดับ');
            $table->string('is_active',1)->default('1');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            // $table->timestamps();

            $table->foreign('banner_id')->references('id')->on('banner')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner_image');
    }
}
