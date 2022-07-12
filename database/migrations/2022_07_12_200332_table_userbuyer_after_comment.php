<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableUserbuyerAfterComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_buyer', function (Blueprint $table) {
            $table->string('code',20)->nullable()->after('id');
            $table->string('is_active',1)->default('1')->after('remember_token')->comment('0=ระงับ/1=ใช้งาน');
            $table->text('comment')->nullable()->after('is_active')->comment('หมายเหตุ');
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
