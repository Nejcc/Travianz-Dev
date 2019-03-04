<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFarmListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('farm_list', function(Blueprint $table)
		{
			$table->foreign('owner', 'FKfarm_list245773')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('farm_list', function(Blueprint $table)
		{
			$table->dropForeign('FKfarm_list245773');
		});
	}

}