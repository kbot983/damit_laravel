<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsermasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usermaster', function(Blueprint $table)
		{
			$table->integer('sr_no', true);
			$table->string('email', 100);
			$table->string('password', 200);
			$table->string('first_name', 20);
			$table->string('last_name', 20);
			$table->bigInteger('mobile_no');
			$table->bigInteger('zipcode');
			$table->integer('dam_id');
			$table->string('onesignalid', 500);
			$table->string('accessdate', 20);
			$table->string('language', 40);
			$table->bigInteger('emergency');
			$table->bigInteger('emergency2');
			$table->bigInteger('emergency3');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usermaster');
	}

}
