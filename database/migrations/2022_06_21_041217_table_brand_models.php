<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBrandModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('brand_model')) {
            Schema::dropIfExists('brand_model');
        }
        Schema::create('brand_model', function (Blueprint $table) {
            $table->increments('model_id');
            $table->integer('model_brandid')->unsigned();
            $table->string('model_code');
            $table->string('model_name_th')->nullable();
            $table->string('model_name_en')->nullable();
            // $table->string('model_year_from');
            // $table->string('model_year_to');
            // $table->string('model_master_data');
            $table->string('created_for',200)->nullable();
            $table->string('updated_for',200)->nullable();
            $table->string('model_active',1)->default('1');

            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();

            $table->foreign('model_brandid')->references('brand_id')->on('brand')->onDelete('cascade');

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
