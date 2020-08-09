<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bld_st_etc')->unique();
            $table->integer('postal_code');
            $table->boolean('status')->default(false);
            $table->timestamps();
            $table->unsignedBigInteger('barangay_id');
            $table->unsignedBigInteger('town_id');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('account_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_addresses');
    }
}
