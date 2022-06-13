<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableProvinces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('provinces')) {
            Schema::dropIfExists('provinces');
        }
        Schema::create('provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable();
            $table->string('name_th')->nullable();
            $table->string('name_en')->nullable();
            $table->integer('geography_id')->unsigned()->comment('ภาค');
            $table->timestamps();

            // $table->decimal('refunddata_profix', $precision = 11, $scale = 2);
            $table->foreign('geography_id')->references('id')->on('geographies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
