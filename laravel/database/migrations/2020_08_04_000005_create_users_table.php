<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->string('user_loggedin_state')->nullable();
            $table->datetime('user_login_time')->nullable();
            $table->string('user_login_hash')->nullable();
            $table->datetime('user_log_out_time')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('user_job')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
