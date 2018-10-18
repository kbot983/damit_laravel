<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegionalOfficerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regional_officer', function(Blueprint $table)
		{
			$table->string('user_id', 20);
			$table->text('password');
			$table->string('first_name', 20);
			$table->string('last_name', 20);
			$table->binary('photo');
			$table->string('state', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('regional_officer');
	}

}
