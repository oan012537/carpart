<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCategorysSub2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('category_subs')) {
            Schema::dropIfExists('category_subs');
        }
        Schema::create('category_subs', function (Blueprint $table) {
            $table->increments('categorysubs_id');
            $table->integer('categorysubs_categoryid')->unsigned();
            $table->integer('categorysubs_subid')->unsigned();
            $table->string('categorysubs_code');
            $table->string('categorysubs_name_th');
            $table->string('categorysubs_name_en');
            $table->string('created_for',200)->nullable();
            $table->string('updated_for',200)->nullable();
            $table->string('categorysubs_active',1)->default('1');

            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();

            $table->foreign('categorysubs_categoryid')->references('category_id')->on('category')->onDelete('cascade');
            $table->foreign('categorysubs_subid')->references('categorysub_id')->on('category_sub')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_subs');
    }
}
