<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBannerimageRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if (Schema::hasTable('bannerimages')) {
        //     Schema::dropIfExists('bannerimages');
        // }
        // Schema::create('bannerimages', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('banner_id')->unsigned();
        //     $table->string('type',1)->comment('1=อัพโหลดเอง/2=link');
        //     $table->text('image');
        //     $table->string('is_active',1)->default('1');
        //     $table->string('created_by')->nullable();
        //     $table->string('updated_by')->nullable();
            
        //     $table->timestamp('created_at')->useCurrent();
        //     $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        //     // $table->timestamps();
        //     $table->foreign('banner_id')->references('id')->on('banners')->onDelete('cascade');


        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
