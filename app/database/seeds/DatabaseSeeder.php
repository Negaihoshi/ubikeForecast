<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UbikeTableSeeder');
	}

}


class UbikeTableSeeder extends Seeder {

			public function run()
			{
				$now = date('Y-m-d H:i:s');
				//delete users table records
				// DB::table('users')->delete();
				DB::table('Ubike')->truncate();
				//insert some dummy records
				DB::table('Ubike')->insert(array(
						array('ItemId'=>'john', 'Total_bikes'=>'20', 'Remain_bikes' => $now, 'updated_at' => $now),
						array('ItemId'=>'mark', 'Total_bikes'=>'14', 'Remain_bikes' => $now, 'updated_at' => $now),
						array('ItemId'=>'marl', 'Total_bikes'=>'36', 'Remain_bikes' => $now, 'updated_at' => $now),
						array('ItemId'=>'Karl', 'Total_bikes'=>'15', 'Remain_bikes' => $now, 'updated_at' => $now),
						array('ItemId'=>'mary', 'Total_bikes'=>'20', 'Remain_bikes' => $now, 'updated_at' => $now),
						array('ItemId'=>'sels', 'Total_bikes'=>'17', 'Remain_bikes' => $now, 'updated_at' => $now),
						array('ItemId'=>'taylor', 'Total_bikes'=>'22', 'Remain_bikes' => $now, 'updated_at' => $now)

					));
			}

}
