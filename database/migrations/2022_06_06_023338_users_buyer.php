<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersBuyer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users_buyer')) {
            Schema::dropIfExists('users_buyer');
        }
        Schema::create('users_buyer', function (Blueprint $table) {
            $table->id();
            $table->string('type')->comment('บุคคลธรรมดา , นิติบุคคล');
            $table->string('profile_name')->nullable()->comment('ชื่อโปรไฟล์');
            $table->string('first_name')->nullable()->comment('ชื่อ');
            $table->string('last_name')->nullable()->comment('นามสกุล');
            $table->string('company_name')->nullable()->comment('ชื่อนิติบุคคล');
            $table->string('vat_id')->nullable()->comment('เลขประจำตัวผู้เสียภาษี');
            $table->string('phone')->nullable()->comment('เบอร์โทรศัพท์');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users_buyer');
    }
}
