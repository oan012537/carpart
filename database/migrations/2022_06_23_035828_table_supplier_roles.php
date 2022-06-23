<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableSupplierRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('supplier_role')) {
            Schema::dropIfExists('supplier_role');
        }
        Schema::create('supplier_role', function (Blueprint $table) {
            $table->increments('role_id');
            $table->string('role_name')->unique()->comment('ชื่อ');
            $table->string('created_for',200)->nullable();
            $table->string('updated_for',200)->nullable();
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
        Schema::dropIfExists('supplier_role');
    }
}
