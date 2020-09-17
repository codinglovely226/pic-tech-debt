<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agent_reference_name');
            $table->string('agent_reference_url')->nullable();
            $table->string('agent_reference_source')->nullable();
            $table->timestamps();
        });
    }
}
