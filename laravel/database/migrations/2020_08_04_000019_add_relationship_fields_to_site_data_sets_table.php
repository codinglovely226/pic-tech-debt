<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSiteDataSetsTable extends Migration
{
    public function up()
    {
        Schema::table('site_data_sets', function (Blueprint $table) {
            $table->unsignedInteger('team_id');
            $table->foreign('team_id', 'team_fk_1935013')->references('id')->on('teams');
        });
    }
}
