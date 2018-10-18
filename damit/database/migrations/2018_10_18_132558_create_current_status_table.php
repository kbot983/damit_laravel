<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCurrentStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('current_status', function(Blueprint $table)
		{
			$table->integer('dam_id');
			$table->integer('sr_no', true);
			$table->integer('sent_by');
			$table->float('capacity', 10, 0);
			$table->integer('level');
			$table->string('last_upd', 20);
			$table->text('Month', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('current_status');
	}

}
