<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('train', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('village_id')->default(0)->index('FKtrain631500');
			$table->timestamp('ended_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('train');
	}

}