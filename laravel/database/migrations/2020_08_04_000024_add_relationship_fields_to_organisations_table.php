<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrganisationsTable extends Migration
{
    public function up()
    {
        Schema::table('organisations', function (Blueprint $table) {
            $table->unsignedInteger('iso_alpha_2_id')->nullable();
            $table->foreign('iso_alpha_2_id', 'iso_alpha_2_fk_1898615')->references('id')->on('isoto_countries');
        });
    }
}
