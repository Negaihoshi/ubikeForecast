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
				$time = time() + 10;
				$now = date('Y-m-d H:i:s');
				//delete users table records
				// DB::table('users')->delete();
				DB::table('Ubike')->truncate();
				//insert some dummy records
				DB::table('Ubike')->insert(array(
						array('active'=>'1','remainBikes'=>'10','stationNo'=>'0002','created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time)),
						array('active'=>'1','remainBikes'=>'10','stationNo'=>'0005','created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time)),
						array('active'=>'0','remainBikes'=>'10','stationNo'=>'0006','created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time)),
						array('active'=>'0','remainBikes'=>'10','stationNo'=>'0003','created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time)),
						array('active'=>'1','remainBikes'=>'10','stationNo'=>'0001','created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time)),
						array('active'=>'0','remainBikes'=>'10','stationNo'=>'0008','created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time)),
						array('active'=>'1','remainBikes'=>'10','stationNo'=>'0004','created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time))

					));
			}

}
