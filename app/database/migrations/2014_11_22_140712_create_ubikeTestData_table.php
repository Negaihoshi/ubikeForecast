<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbikeTestDataTable extends Migration {

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
            $table->increments('Id');

            $table->string('ItemId');

            $table->string('Total_bikes');

            $table->string('Remain_bikes');
            // 時間戳記 created_at & updated_at
            $table->string('updated_at');
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
		Schema::drop('Ubike');
	}

}
