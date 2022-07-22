<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialLoginFieldToUsersBuyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_buyer', function (Blueprint $table) {
            $table->string('social_facebookid')->nullable()->after('social_type')->comment('Facebook ID ที่ส่งมา');
            $table->string('social_googleid')->nullable()->after('social_facebookid')->comment('Google ID ที่ส่งมา');
            $table->string('social_lineid')->nullable()->after('social_googleid')->comment('Line ID ที่ส่งมา');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_buyer', function (Blueprint $table) {
            // $table->dropColumn('social_id');
            // $table->dropColumn('social_type');
        });
    }
}
