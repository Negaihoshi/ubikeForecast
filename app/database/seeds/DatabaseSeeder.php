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
						array('active'=>'1','remainBikes'=>'10','stationNo'=>'0002','updated_at'=> $now),
						array('active'=>'1','remainBikes'=>'10','stationNo'=>'0005','updated_at'=> $now),
						array('active'=>'0','remainBikes'=>'10','stationNo'=>'0006','updated_at'=> $now),
						array('active'=>'0','remainBikes'=>'10','stationNo'=>'0003','updated_at'=> $now),
						array('active'=>'1','remainBikes'=>'10','stationNo'=>'0001','updated_at'=> $now),
						array('active'=>'0','remainBikes'=>'10','stationNo'=>'0008','updated_at'=> $now),
						array('active'=>'1','remainBikes'=>'10','stationNo'=>'0004','updated_at'=> $now)

					));
			}

}
