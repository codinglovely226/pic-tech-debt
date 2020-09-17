<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSetSiteDataSetPivotTable extends Migration
{
    public function up()
    {
        Schema::create('data_set_site_data_set', function (Blueprint $table) {
            $table->unsignedInteger('site_data_set_id');
            $table->foreign('site_data_set_id', 'site_data_set_id_fk_1935009')->references('id')->on('site_data_sets')->onDelete('cascade');
            $table->unsignedInteger('data_set_id');
            $table->foreign('data_set_id', 'data_set_id_fk_1935009')->references('id')->on('data_sets')->onDelete('cascade');
        });
    }
}
