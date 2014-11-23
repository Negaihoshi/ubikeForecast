<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Station', function(Blueprint $table)
		{

			$table->increments('id');
			$table->boolean('active');
			$table->string('latitude');
			$table->string('longitude');
			$table->string('stationNo');
			$table->string('stationName');
			$table->string('stationArea');
			$table->string('stationLocation');
			$table->integer('totalBikes');
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	}

}
