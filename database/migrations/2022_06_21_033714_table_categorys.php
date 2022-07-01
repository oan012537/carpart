<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCategorys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('category')) {
            Schema::dropIfExists('category');
        }
        Schema::create('category', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('category_code')->unique();
            $table->string('category_name_th')->unique();
            $table->string('category_name_en')->unique();
            $table->string('created_for',200)->nullable();
            $table->string('updated_for',200)->nullable();
            $table->string('category_active',1)->default('1');
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
        Schema::dropIfExists('category');
    }
}
