<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDamSubTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dam_sub', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->bigInteger('mobile_no');
			$table->string('state_id', 10);
			$table->integer('dam_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dam_sub');
	}

}
