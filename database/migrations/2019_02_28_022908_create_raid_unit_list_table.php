<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRaidUnitListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('raid_unit_list', function(Blueprint $table)
		{
			$table->integer('raid_id');
			$table->smallInteger('type');
			$table->integer('amount')->default(0);
			$table->primary(['raid_id','type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('raid_unit_list');
	}

}