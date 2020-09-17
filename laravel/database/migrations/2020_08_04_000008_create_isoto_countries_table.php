<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsotoCountriesTable extends Migration
{
    public function up()
    {
        Schema::create('isoto_countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_name')->nullable();
            $table->string('iso_alpha_2')->unique();
            $table->integer('iso_un_m_49')->nullable();
            $table->string('iso_alpha_3')->nullable();
            $table->timestamps();
        });
    }
}
