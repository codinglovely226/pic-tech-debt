<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSetsTable extends Migration
{
    public function up()
    {
        Schema::create('data_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('source')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
