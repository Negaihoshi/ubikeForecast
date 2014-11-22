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

		$this->call('UsersTableSeeder');
	}

}


class UsersTableSeeder extends Seeder {

			public function run()
			{
				$now = date('Y-m-d H:i:s');
				//delete users table records
				// DB::table('users')->delete();
				DB::table('users')->truncate();
				//insert some dummy records
				DB::table('users')->insert(array(
						array('name'=>'john','password'=>'test','created_at' => $now,'updated_at' => $now),
						array('name'=>'mark','password'=>'test','created_at' => $now,'updated_at' => $now),
						array('name'=>'marl','password'=>'test','created_at' => $now,'updated_at' => $now),
						array('name'=>'Karl','password'=>'test','created_at' => $now,'updated_at' => $now),
						array('name'=>'mary','password'=>'test','created_at' => $now,'updated_at' => $now),
						array('name'=>'sels','password'=>'test','created_at' => $now,'updated_at' => $now),
						array('name'=>'taylor','password'=>'test','created_at' => $now,'updated_at' => $now)

					));
			}

}
