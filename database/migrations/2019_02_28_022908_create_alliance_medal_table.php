<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceMedalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alliance_medal', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('alliance_id');
			$table->boolean('position')->default(0);
			$table->smallInteger('category')->default(0);
			$table->smallInteger('week')->default(0);
			$table->integer('points')->default(0);
			$table->smallInteger('type')->default(0);
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alliance_medal');
	}

}
