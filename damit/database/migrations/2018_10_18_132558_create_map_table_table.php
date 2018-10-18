<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMapTableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('map_table', function(Blueprint $table)
		{
			$table->string('pid', 20);
			$table->bigInteger('lat');
			$table->bigInteger('lon');
			$table->integer('checked');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('map_table');
	}

}
