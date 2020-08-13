<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthMediatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_auth_mediators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('username')->nullable()->unique();
            $table->string('phone_number')->nullable()->unique();
            $table->timestamp('last_online')->nullable();
            $table->boolean('is_online')->default(false);
            $table->boolean('otp_status')->default(false);
            $table->boolean('terms_policy')->default(false);
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
        Schema::dropIfExists('tbl_auth_mediators');
    }
}
