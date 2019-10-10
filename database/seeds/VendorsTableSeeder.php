<?php

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->delete();
        for ($i = 0; $i <= 12; $i++) {
	        DB::table('vendors')->insert(array(
                'lastname'  => 'Vendeur n°'.rand(0,15),
                'firstname' => 'Firstname'.rand(0,2),
	        	'address'	=> '13 rue du Moogeg'.str_random(10),
	        	'phone'		=> '04'.str_random(10),
	        	'company'	=> rand(0,2),
                'site'      => 1,
	        	'is_active'	=> 1,
                'last_update' => now()
	        ));
    	}
    }
}
