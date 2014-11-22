<?php

class UsersTableSeeder extends Seeder {

       public function run()
       {
         //delete users table records
         DB::table('users')->delete();
         //insert some dummy records
         DB::table('users')->insert(array(
             array('username'=>'john','email'=>'john@clivern.com','biog'=>'PHP Ninga'),
             array('username'=>'mark','email'=>'mark@clivern.com','biog'=>'JS Ninga'),
             array('username'=>'Karl','email'=>'karl@clivern.com','biog'=>'Jquery Ninga'),
             array('username'=>'marl','email'=>'marl@clivern.com','biog'=>'Not Ninga'),
             array('username'=>'mary','email'=>'mary@clivern.com','biog'=>'HTML Ninga'),
             array('username'=>'sels','email'=>'sels@clivern.com','biog'=>'CSS Ninga'),
             array('username'=>'taylor','email'=>'taylor@clivern.com','biog'=>'Laravel Ninga'),

          ));
       }

}
