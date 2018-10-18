<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOtpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('otp', function(Blueprint $table)
		{
			$table->bigInteger('mobile_no')->primary();
			$table->integer('otp');
			$table->string('time', 30);
			$table->integer('is_expired');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('otp');
	}

}
