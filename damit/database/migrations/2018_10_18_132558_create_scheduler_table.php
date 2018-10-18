<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchedulerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scheduler', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('dam_id');
			$table->string('sent_by', 20);
			$table->string('date', 20);
			$table->string('time', 40);
			$table->integer('sr_no');
			$table->string('day', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('scheduler');
	}

}
