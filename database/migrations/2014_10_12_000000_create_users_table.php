<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('username')->nullable()->unique();
            $table->string('password');
            // $table->rememberToken();
            $table->timestamp('last_online')->nullable();
            $table->boolean('status')->default(false);
            // $table->integer('role_type');
            $table->timestamps();
            // $table->unsignedBigInteger('role_id');
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
        Schema::dropIfExists('tbl_users');
    }
}
