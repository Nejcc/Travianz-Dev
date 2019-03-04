<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCelebrationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('celebration', function(Blueprint $table)
		{
			$table->foreign('village_id', 'FKcelebratio1273')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('celebration', function(Blueprint $table)
		{
			$table->dropForeign('FKcelebratio1273');
		});
	}

}