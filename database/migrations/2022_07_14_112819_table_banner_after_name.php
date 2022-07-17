<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBannerAfterName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banner', function($table) {
            $table->dropColumn('enddate');
            $table->integer('sort',3)->default(0)->after('is_active');
        });
        Schema::table('banner_image', function($table) {
            $table->dropColumn('is_sort');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner', function($table) {
            $table->integer('sort',3)->default(0)->after('is_active');
        });
    }
}
