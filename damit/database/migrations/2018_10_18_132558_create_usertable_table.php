<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsertableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usertable', function(Blueprint $table)
		{
			$table->integer('sr_no');
			$table->integer('uid');
			$table->integer('nos1');
			$table->integer('nos2');
			$table->integer('nos3');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usertable');
	}

}
