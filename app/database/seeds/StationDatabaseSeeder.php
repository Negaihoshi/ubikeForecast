<?php

class StationDatabaseSeeder extends Seeder {
  public function run()
  {
    Eloquent::unguard();

    $this->call('StationTableSeeder');
  }
}

class StationTableSeeder extends Seeder {

       public function run()
       {
         //delete users table records
        $time = time() + 10;
        $now = date('Y-m-d H:i:s');
        DB::table('Station')->delete();
        //insert some dummy records
        DB::table('Station')->insert(array(
             array('active'=>'1','latitude'=>'121.567894444','longitude'=>'25.0408388889', 'stationNo'=>'0002', 'stationName'=>'捷運國父紀念館站', 'stationLocation'=>'復興南路 2 段 235 號', 'totalBikes'=>'38', 'created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time)),
             array('active'=>'1','latitude'=>'121.567824444','longitude'=>'32.0408388889', 'stationNo'=>'0005', 'stationName'=>'中山堂', 'stationLocation'=>'基隆路2段', 'totalBikes'=>'25', 'created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time)),
             array('active'=>'0','latitude'=>'111.567894444','longitude'=>'28.0408388889', 'stationNo'=>'0006', 'stationName'=>'沒梗惹', 'stationLocation'=>'忠孝東路走10遍', 'totalBikes'=>'42', 'created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time)),
             array('active'=>'0','latitude'=>'111.567824444','longitude'=>'27.0408688889', 'stationNo'=>'0003', 'stationName'=>'中正紀念堂', 'stationLocation'=>'南京松江站', 'totalBikes'=>'11', 'created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time)),
             array('active'=>'1','latitude'=>'101.567894444','longitude'=>'29.0508388889', 'stationNo'=>'0001', 'stationName'=>'柯屁白木屋', 'stationLocation'=>'滿城盡帶黃金甲', 'totalBikes'=>'34', 'created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time)),
             array('active'=>'0','latitude'=>'121.567824444','longitude'=>'23.0808388889', 'stationNo'=>'0008', 'stationName'=>'不要讓剩蚊不開心', 'stationLocation'=>'拿破崙拿破輪', 'totalBikes'=>'23', 'created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time)),
             array('active'=>'1','latitude'=>'101.567824444','longitude'=>'21.0108388889', 'stationNo'=>'0004', 'stationName'=>'名字隨便啦', 'stationLocation'=>'今天天氣很好', 'totalBikes'=>'15', 'created_at'=>$now,'updated_at'=>date('Y-m-d H:i:s', $time))
        ));
       }

}
