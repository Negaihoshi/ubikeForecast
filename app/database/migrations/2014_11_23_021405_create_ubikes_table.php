<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Ubike', function(Blueprint $table)
		{
			// Auto increment
			$table->increments('id');
			$table->boolean('active');
			$table->integer('remainBikes');
			$table->string('stationNo');

			// 時間戳記 created_at & updated_at
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
		//
	}

}
