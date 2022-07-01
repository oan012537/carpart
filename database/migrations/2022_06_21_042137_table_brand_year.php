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
        if (Schema::hasTable('issue_years')) {
            Schema::dropIfExists('issue_years');
        }
        Schema::create('issue_years', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_model_id')->unsigned();
            // $table->integer('year_modelsid')->unsigned();
            $table->string('from_year');
            $table->string('to_year');
            $table->string('master_data')->nullable();
            $table->string('is_active',1)->default('1');
            $table->string('created_by',200)->nullable();
            $table->string('updated_by',200)->nullable();

            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();

            // $table->foreign('year_modelid')->references('model_id')->on('brand_model')->onDelete('cascade');
            $table->foreign('sub_model_id')->references('id')->on('sub_models')->onDelete('cascade');

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
