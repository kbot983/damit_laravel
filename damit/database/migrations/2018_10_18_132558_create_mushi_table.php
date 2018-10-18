<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMushiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mushi', function(Blueprint $table)
		{
			$table->integer('dam_id');
			$table->string('storage', 11);
			$table->integer('level');
			$table->string('month', 11);
			$table->integer('month_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mushi');
	}

}
