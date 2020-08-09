<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_barangays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('barangay_name');
            $table->boolean('status')->default(true);
            // $table->timestamps();
            $table->unsignedBigInteger('town_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_barangays');
    }
}
