<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBrandModels2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('brand_models')) {
            Schema::dropIfExists('brand_models');
        }
        Schema::create('brand_models', function (Blueprint $table) {
            $table->increments('models_id');
            $table->integer('models_brandid')->unsigned();
            $table->integer('models_modelid')->unsigned();
            $table->string('models_code')->nullable();
            $table->string('models_name_th')->nullable();
            $table->string('models_name_en')->nullable();
            $table->string('created_for',200)->nullable();
            $table->string('updated_for',200)->nullable();
            $table->string('models_active',1)->default('1');

            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();

            $table->foreign('models_brandid')->references('brand_id')->on('brand')->onDelete('cascade');
            $table->foreign('models_modelid')->references('model_id')->on('brand_model')->onDelete('cascade');

            
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
