<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dam', function(Blueprint $table)
		{
			$table->integer('sr_no')->primary();
			$table->string('name', 20);
			$table->integer('state_id');
			$table->date('year');
			$table->string('river', 20);
			$table->float('storage_capacity', 10, 0);
			$table->integer('dam_level');
			$table->text('description', 65535);
			$table->integer('river_capacity');
			$table->integer('river_level');
			$table->bigInteger('zip_code');
			$table->string('region', 20);
			$table->string('state_abbr', 500);
			$table->integer('ischeck');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dam');
	}

}
