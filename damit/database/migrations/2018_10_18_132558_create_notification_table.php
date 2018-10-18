<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notification', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('date_time', 20);
			$table->integer('sent_count');
			$table->integer('engage_count');
			$table->string('sent_by', 20);
			$table->integer('dam_id');
			$table->string('month', 50);
			$table->text('msg', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notification');
	}

}
