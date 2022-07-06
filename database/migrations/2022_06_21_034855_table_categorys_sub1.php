<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCategorysSub1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('sub_categories')) {
            Schema::dropIfExists('sub_categories');
        }
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
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

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
}
