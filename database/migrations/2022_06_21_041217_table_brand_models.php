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
        if (Schema::hasTable('models')) {
            Schema::dropIfExists('models');
        }
        Schema::create('models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id')->unsigned();
            $table->string('code');
            $table->string('name_th')->nullable();
            $table->string('name_en')->nullable();
            $table->string('image')->nullable();
            $table->string('is_active',1)->default('1');
            $table->string('created_by',200)->nullable();
            $table->string('updated_by',200)->nullable();

            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();

            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');

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
