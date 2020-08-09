<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_towns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('town_name');
            $table->boolean('status')->default(true);
            // $table->timestamps();
            $table->unsignedBigInteger('province_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_towns');
    }
}
