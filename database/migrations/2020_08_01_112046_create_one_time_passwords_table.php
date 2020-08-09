<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOneTimePasswordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_one_time_passwords', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('otp')->unique();
            $table->boolean('status')->default(false);
            $table->timestamps();
            $table->unsignedBigInteger('auth_mediator_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_one_time_passwords');
    }
}
