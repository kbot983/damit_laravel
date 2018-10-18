<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInchargeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incharge', function(Blueprint $table)
		{
			$table->integer('sr_no')->primary();
			$table->integer('dam_id');
			$table->string('name', 20);
			$table->bigInteger('contact');
			$table->text('designation', 65535);
			$table->string('email', 500);
			$table->string('password', 500);
			$table->string('address', 200);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('incharge');
	}

}
