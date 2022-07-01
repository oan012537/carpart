<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBrandYear extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('brand_year')) {
            Schema::dropIfExists('brand_year');
        }
        Schema::create('brand_year', function (Blueprint $table) {
            $table->increments('year_id');
            $table->integer('year_modelsid')->unsigned();
            // $table->integer('year_modelsid')->unsigned();
            $table->string('year_year_from');
            $table->string('year_year_to');
            $table->string('year_master_data');
            $table->string('created_for',200)->nullable();
            $table->string('updated_for',200)->nullable();
            $table->string('year_active',1)->default('1');

            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();

            // $table->foreign('year_modelid')->references('model_id')->on('brand_model')->onDelete('cascade');
            $table->foreign('year_modelsid')->references('models_id')->on('brand_models')->onDelete('cascade');

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
