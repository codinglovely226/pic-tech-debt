<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAgentsTable extends Migration
{
    public function up()
    {
        Schema::table('agents', function (Blueprint $table) {
            $table->unsignedInteger('dataset_id')->nullable();
            $table->foreign('dataset_id', 'dataset_fk_1935007')->references('id')->on('data_sets');
        });
    }
}
