<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblDashboardItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblDashboardItem', function(Blueprint $table)
		{
			$table->integer('idDashboardItem')->primary();
			$table->integer('id_Site')->index('fk_tblDashboardItem_tblSite1_idx1');
			$table->integer('loc_x')->nullable();
			$table->integer('loc_y')->nullable();
			$table->integer('width')->nullable();
			$table->integer('height')->nullable();
			$table->string('QueryName', 60)->nullable();
			$table->string('Title', 64)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblDashboardItem');
	}

}
