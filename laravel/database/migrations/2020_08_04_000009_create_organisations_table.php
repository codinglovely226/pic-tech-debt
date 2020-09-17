<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationsTable extends Migration
{
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organisation_name');
            $table->string('organisation_state')->nullable();
            $table->string('organisation_street')->nullable();
            $table->string('organisation_street_2')->nullable();
            $table->string('organisation_city')->nullable();
            $table->string('organisation_postcode')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
