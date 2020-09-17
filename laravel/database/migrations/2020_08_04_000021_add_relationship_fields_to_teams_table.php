<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTeamsTable extends Migration
{
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->unsignedInteger('organisation_id')->nullable();
            $table->foreign('organisation_id', 'organisation_fk_1927833')->references('id')->on('organisations');
            $table->unsignedInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_1927834')->references('id')->on('isoto_countries');
        });
    }
}
