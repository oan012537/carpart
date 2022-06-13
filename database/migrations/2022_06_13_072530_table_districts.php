<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableDistricts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('districts')) {
            Schema::dropIfExists('districts');
        }
        Schema::create('districts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zip_code')->nullable()->comment('รหัสไปรษณีย์');
            $table->string('name_th')->nullable();
            $table->string('name_en')->nullable();
            $table->integer('amphure_id')->unsigned()->comment('เขต/อำเภอ');
            $table->timestamps();

            $table->foreign('amphure_id')->references('id')->on('amphures')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
}
