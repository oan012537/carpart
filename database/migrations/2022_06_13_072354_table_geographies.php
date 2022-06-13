<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableGeographies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('geographies')) {
            Schema::dropIfExists('geographies');
        }
        Schema::create('geographies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->comment('ชื่อภาค');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geographies');
    }
}
