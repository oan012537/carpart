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
        if (Schema::hasTable('brands')) {
            Schema::dropIfExists('brands');
        }
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('name_th')->unique();
            $table->string('name_en')->unique();
            $table->string('image')->nullable();
            $table->string('is_active',1)->default('1');
            $table->string('created_by',200)->nullable();
            $table->string('updated_by',200)->nullable();
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
