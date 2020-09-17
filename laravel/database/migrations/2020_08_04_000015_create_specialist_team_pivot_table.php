<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialistTeamPivotTable extends Migration
{
    public function up()
    {
        Schema::create('specialist_team', function (Blueprint $table) {
            $table->unsignedInteger('specialist_id');
            $table->foreign('specialist_id', 'specialist_id_fk_1934996')->references('id')->on('specialists')->onDelete('cascade');
            $table->unsignedInteger('team_id');
            $table->foreign('team_id', 'team_id_fk_1934996')->references('id')->on('teams')->onDelete('cascade');
        });
    }
}
