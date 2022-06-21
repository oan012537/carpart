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
        if (Schema::hasTable('category_sub')) {
            Schema::dropIfExists('category_sub');
        }
        Schema::create('category_sub', function (Blueprint $table) {
            $table->increments('categorysub_id');
            $table->integer('categorysub_categoryid')->unsigned();
            $table->string('categorysub_code');
            $table->string('categorysub_name_th');
            $table->string('categorysub_name_en');
            $table->string('created_for',200)->nullable();
            $table->string('updated_for',200)->nullable();
            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();

            $table->foreign('categorysub_categoryid')->references('category_id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_sub');
    }
}
