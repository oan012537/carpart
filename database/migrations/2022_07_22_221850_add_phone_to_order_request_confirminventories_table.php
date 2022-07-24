<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneToOrderRequestConfirminventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_request_confirminventories', function (Blueprint $table) {
            $table->string('destination_phone')->nullable()->after('destination')->comment('เบอร์โทรติดต่อ');
            $table->string('destination_email')->nullable()->after('destination_phone')->comment('อีเมลติดต่อ');
            $table->string('taxinvoice_company')->nullable()->after('taxid')->comment('ชื่อบริษัท');
            $table->string('taxinvoice_phone')->nullable()->after('taxinvoice_address')->comment('เบอร์โทรติดต่อ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_request_confirminventories', function (Blueprint $table) {
            //
        });
    }
}
