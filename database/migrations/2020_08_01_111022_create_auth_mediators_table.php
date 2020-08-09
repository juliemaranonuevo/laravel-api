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
            // $table->string('country_code');
            $table->string('phone_number')->nullable()->unique();
            $table->boolean('status')->default(false);
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
