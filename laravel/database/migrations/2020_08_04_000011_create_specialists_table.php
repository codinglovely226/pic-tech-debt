<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialistsTable extends Migration
{
    public function up()
    {
        Schema::create('specialists', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('user_in_system')->default(0)->nullable();
            $table->string('specialist_name')->nullable();
            $table->string('specialty')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
