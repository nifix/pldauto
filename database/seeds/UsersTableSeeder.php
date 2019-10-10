<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        for ($i = 0; $i <= 15; $i++) {
	        DB::table('users')->insert(array(
                'username'  => 'test'.rand(0,15),
	        	'name'		=> 'Moo'.str_random(10),
	        	'lastname'	=> 'Roger'.str_random(10),
	        	'email'		=> 'moo@test'.str_random(10).'.com',
	        	'password'	=> Hash::make('test'),
	        	'rights'	=> rand(0,2),
	        	'company'	=> rand(0,2)
	        ));
    	}
    }
}
