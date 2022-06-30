<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBrand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('brand')) {
            Schema::dropIfExists('brand');
        }
        Schema::create('brand', function (Blueprint $table) {
            $table->increments('brand_id');
            $table->string('brand_code')->unique();
            $table->string('brand_name_th')->unique();
            $table->string('brand_name_en')->unique();
            $table->string('brand_image');
            $table->string('created_for',200)->nullable();
            $table->string('updated_for',200)->nullable();
            $table->string('brand_active',1)->default('1');
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
        Schema::dropIfExists('brand');
    }
}
